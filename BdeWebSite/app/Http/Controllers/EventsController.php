<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\Comments;
use App\Suscribe;
use App\User;
use App\Photo;
use App\Http\Requests\formRequests;
use App\Http\Requests\addComments;
use App\Http\Requests\sortBy;
use App\Http\Requests\addPicture;
use Illuminate\Support\Facades\Auth;//permet de gérer le user connecter
use Illuminate\Support\Facades\DB;//permet de gérer la DB en globla et de faire des jointures entre les tables
use Illuminate\Support\Facades\Response;
use DateTime; //permet d'utiliser la function time

class EventsController extends Controller
{

  public function getForm()
  {

   return view("Form/Form");
 }

  public function postForm(formRequests $request) //Traitement du formulaire
  {

   $image = $request->file('image');//on récupere le fichier envoyer avec file()

        if ($image->isValid())//utilisation de la methode isValid qui vérifie la validité de l'image
        {
            $chemin = config('image.path');//fais référence au file config/image.php ou on définit le path des image récuperer

            $extension = $image->getClientOriginalExtension();//methode qui recupère l'extension originelle

            do {
              $nom = str_random(10) . '.' . $extension;
            } while(file_exists($chemin . '/' . $nom));//on génére un nom alétoire et on vérifie qu'il n'existe pas déjà
            $cheminPhoto = $chemin . '/' . $nom;
               //if(Auth::check()) permet de vérifier si il le user est authentifier


            if($image->move($chemin, $nom)){ //Si l'image à bien été déplacer
            $events = new Events();
            $inputs = $request->input(); //On enregistre les données du formulaire dans inputs
            $inputs['imageLink'] = $cheminPhoto;
            $inputs['owner'] = $inputs['email'];

            if(! isset($inputs['isRecurent'])){ //si la checkbox isRecurent n'est pas coché alors on set recurent a 0
            $inputs['recurent'] = 0;
          }

             $events = Events::create($inputs); //On enregistre les données du formuliare dans la db
             $events->save();

             return redirect()->action('EventsController@showIdeaNoP');
           }

         }

         return redirect('/form')
         ->with('error','Désolé mais votre image ne peut pas être envoyée !');

       }


  public function showEvent($j) //affichage de la page des événements
  {
    $now = new DateTime();
    $standardDate = $now->format( 'Y-m-d');
    $choice = 'R';

      $allEvents = Events::where('validated', '=', '1')->whereDate('date', '>=', $standardDate)->count(); //compte le nombre d'event validé


      if ($allEvents >= 5) {

        $first = Events::where('validated', '=', '1')->whereDate('date', '>=', $standardDate)->first();
        $idFirst = $first->idEvents;

        $postShow = Events::whereDate('date', '>=', $standardDate)->where('validated', '=', '1')->latest()->first();// On récupere l'article qui vient d'etre posté

            for($i = 1; $i <= 4; $i++) { //On vient charger les 4 derniers articles

             $lastid = $postShow->idEvents + 1;
             $lastid = $lastid - $j;

             do{
              $j++;
              $lastid = $lastid - 1;
             } while (Events::where('idEvents', $lastid)->where('validated', '=', '1')->whereDate('date', '>=', $standardDate)->first() == null ); // on récupère l'id d'avant en vérifiant qu'il n'a pas été supprimé

             $arrayShow[$i] = Events::where('idEvents', $lastid)->where('validated', '=', '1')->whereDate('date', '>=', $standardDate)->first();

             if($arrayShow[$i]->idEvents == $idFirst)
             {
              return view('errors.errorNoMoreShow');
            }

          }
        $j--; //j a été incrémenté une fois de trop dans le do while

        return view('blog.show', compact('arrayShow', 'j', 'choice'));
      }
      else
      {
        return view('errors.errorNotEnough');
      }

    }
    public function showEventNoP() {
      $now = new DateTime();
      $standardDate = $now->format( 'Y-m-d');
      $choice = 'R';


      $j = 0;

            $postShow = Events::whereDate('date', '>=', $standardDate)->where('validated', '=', '1')->latest()->first();// On récupere l'article qui vient d'etre posté

            $allEvents = Events::where('validated', '=', '1')->whereDate('date', '>=', $standardDate)->count(); //compte le nombre d'event validé

            if ($allEvents >= 4) {

             for($i = 1; $i <= 4; $i++) { //On vient charger les 5 derniers articles (le 5 est utilisé pour le bouton showMore)
                //WARNING Si on ne possède pas 5 articles dans la db on rentre dans une boucle infini
             $lastid = $postShow->idEvents + 1; //l'id du dernier event
             $lastid = $lastid - $j;


             do{
              $j++;
              $lastid = $lastid - 1;
              } while (Events::where('idEvents', $lastid)->where('validated', '=', '1')->whereDate('date', '>=', $standardDate)->first() == null); // on récupère l'id d'avant en vérifiant qu'il n'a pas été supprimé

              $arrayShow[$i] = Events::where('idEvents', $lastid)->whereDate('date', '>=', $standardDate)->first();

            }


             $j--; //j a été incrémenté une fois de trop dans le do while

             return view('blog.show', compact('arrayShow', 'j', 'choice'));
           }
           else
           {
            return view('errors.errorNotEnough');
          }
        }

        public function showEventPast($j) {

          $now = new DateTime();
          $standardDate = $now->format( 'Y-m-d');
          $choice = 'P';

    $allPastEvents = Events::whereDate('date', '<', $standardDate)->where('validated', '=', '1')->count(); //On obtient tout les events avant la date d'aujourd'hui
    $lastEvent = Events::latest()->whereDate('date', '<', $standardDate)->where('validated', '=', '1')->first();


    $first = Events::where('validated', '=', '1')->whereDate('date', '<', $standardDate)->first();
    $idFirst = $first->idEvents;

    if($allPastEvents >= 4) {

             for($i = 1; $i <= 4; $i++) { //On vient charger les 5 derniers articles (le 5 est utilisé pour le bouton showMore)
                //WARNING Si on ne possède pas 5 articles dans la db on rentre dans une boucle infini
             $lastid = $lastEvent->idEvents + 1; //l'id du dernier event

             $lastid = $lastid - $j;
             do{
              $j++;
              $lastid = $lastid - 1;
              } while (Events::where('idEvents', $lastid)->where('validated', '=', '1')->whereDate('date', '<', $standardDate)->first() == null); // on récupère l'id d'avant en vérifiant qu'il n'a pas été supprimé

              $arrayShow[$i] = Events::where('idEvents', $lastid)->first();

              if($arrayShow[$i]->idEvents == $idFirst)
              {

                return view('errors.errorNoMoreShow');
              }

            }

             $j--; //j a été incrémenté une fois de trop dans le do while

             return view('blog.showPastEvent', compact('arrayShow', 'j', 'choice'));

           }
           else {
            return view('errors.errorNotEnough');
          }

        }


        public function showIdeaNoP() {
          $user = Auth::user();
          if ($user){
            $choice = 'R'; //On utilise cette méthode quand on a choisi de trié pas popularité
            $allEvents = Events::where('validated', '=', '0')->count(); //compte le nombre d'event validé
            if ($allEvents >= 4) {

              $j = 0;

            $postShow = Events::where('validated', '=', '0')->latest()->first();// On récupere l'article qui vient d'etre posté


             for($i = 1; $i <= 4; $i++) { //On vient charger les 5 derniers articles (le 5 est utilisé pour le bouton showMore)
                //WARNING Si on ne possède pas 5 articles dans la db on rentre dans une boucle infini


               $lastid = $postShow->idEvents + 1;

               $lastid = $lastid - $j;


               do{
                $j++;
                $lastid = $lastid - 1;
              } while (Events::where('idEvents', $lastid)->where('validated', '=', '0')->first() == null); // on récupère l'id d'avant en vérifiant qu'il n'a pas été supprimé

              $arrayShow[$i] = Events::where('idEvents', $lastid)->first();

            }

             $j--; //j a été incrémenté une fois de trop dans le do while

             return view('blog.show', compact('arrayShow', 'j', 'choice'));
           }
           else
           {
            return view('errors.errorNotEnough');
          }
        }else {
          return view('errors.errorNoUserLog');
        }
        }

        public function showIdea($j) {

            $allEvents = Events::where('validated', '=', '0')->count(); //compte le nombre d'event validé
            if ($allEvents >= 5) {


              $first = Events::where('validated', '=', '0')->first();
              $idFirst = $first->idEvents;

            $postShow = Events::latest()->first();// On récupere l'article qui vient d'etre posté

             for($i = 1; $i <= 5; $i++) { //On vient charger les 5 derniers articles (le 5 est utilisé pour le bouton showMore)
                //WARNING Si on ne possède pas 5 articles dans la db on rentre dans une boucle infini


               $lastid = $postShow->idEvents + 1;
               $lastid = $lastid - $j;


               do{
                $j++;
                $lastid = $lastid - 1;
              } while (Events::where('idEvents', $lastid)->where('validated', '=', '0')->first() == null); // on récupère l'id d'avant en vérifiant qu'il n'a pas été supprimé

              $arrayShow[$i] = Events::where('idEvents', $lastid)->first();

              if($arrayShow[$i]->idEvents == $idFirst)
              {
                return view('errors.errorNoMoreShow');
              }

            }

             $j--; //j a été incrémenté une fois de trop dans le do while

             return view('blog.show', compact('arrayShow', 'j'));
           }
           else
           {
            return view('errors.errorNotEnough');
          }
        }



  public function showOne($id)//affiche un event en particulier
  {
    $eventShow = Events::where('idEvents', $id)->first();
    if($eventShow->validated == 1) {
      return redirect()->action('EventsController@showOneEvent', $id);
    }
    else{
      return redirect()->action('EventsController@showOneIdea', $id);
    }

  }

  public function postSort(sortBy $request, $id) {

    $event = Events::where('idEvents', $id)->first();
    if($event->validated == 0) {
      $sortBy = $request->input();
      $choice = $sortBy['sortBySS'];


      if ($choice == 'P') {
        $v = 0;
        return redirect()->action('EventsController@showIdeaSort', $v );
      }
      else {
        return redirect()->action('EventsController@showIdeaNoP', $choice);
      }
    }

    else {
      $pastEvent = $request->input();
      $choice = $pastEvent['pastEvent'];

      if ($choice == 'P') {
        $id = 0;
        return redirect()->action('EventsController@showEventPast', $id);
      }
      else {
        return redirect()->action('EventsController@showEventNoP');
      }
    }

  }

  public function showIdeaSort($v) {

  $choice = 'P'; //On utilise cette méthode quand on a choisi de trié par popularité
  $first = Events::where('validated', '0')->orderBy('vote', 'ASC')->first(); //On vien chercher l'id de l'event le moins voté
  $idFirst = $first->idEvents;
  $nbrFirst = Events::where('vote', $first->vote)->count(); //nbr d'event qui ont le moins de vote


  $eventMoreValidated = Events::where('validated', '0')->orderBy('vote', 'DSC')->first();

    for($i = 1; $i <= 4; $i++) { //On vient charger les 5 derniers articles (le 5 est utilisé pour le bouton showMore)
                //WARNING Si on ne possède pas 5 articles dans la db on rentre dans une boucle infini

      $moreVote = $eventMoreValidated->vote;

      $moreVote = $moreVote + 1;
      $moreVote = $moreVote - $v;
      do{
        $v++;
        $moreVote = $moreVote - 1;
          } while (Events::where('vote', $moreVote)->where('validated', '=', '0')->first() == null); // on récupère l'id d'avant en vérifiant qu'il n'a pas été supprimé

          $arrayShow[$i] = Events::where('vote', $moreVote)->first();



          if($arrayShow[$i]->idEvents == $idFirst)
          {
            return view('errors.errorNoMoreShow');
          }

        }

      $v--; //j a été incrémenté une fois de trop dans le do while

      return view('blog.show', compact('arrayShow', 'v', 'choice'));
    }



    public function showOneEventPost(Request $request, $id){
      $events = new Events();
        $inputs = $request->input(); //On enregistre les données du formulaire dans inputs
        $inputs['idEvents'] = $id; //On renseigne l'id de l'evenement dans lequel on souhaite rajouter un commentaire
        $user = Auth::user();
    $userId = $user->id; // récupère l'id de la session en cour (unique)
    $inputs['idUsers'] = $userId;
    $addRow = Comments::create($inputs);

    $eventShow = Events::where('idEvents', $id)->first();

    $listComments = Comments::where('idEvents', $id )->pluck('idComments');

    $c = 1;
    foreach ($listComments as $idComment ) {
      $comments[$c] = Comments::where('idComments', $idComment)->first();
      $c++;
    }

    $nbrComment  = Comments::where('idEvents', $id )->get()->count() ;
    $listUser = Comments::where('idEvents', $id )->pluck('idUsers');
    $listUserPic = Photo::where('idEvents', $id )->pluck('idUsers');
    $pictures = Photo::where('idEvents', $id)->get();
    $nbrPics = Photo::where('idEvents', $id)->count();

    $past = null;
    $i = 1;
    foreach ($listUser as $user) {
      $userNameComment[$i] = User::where('id', $user)->first();
      $i++;
    }
  if ($nbrPics != 0){
   $p= 1;
    foreach ($pictures as $pic) {
      $pics[$p] = $pic;
      $p++;
    }
    $d = 1;
    foreach ($listUserPic as $user) {
        $userNamePic[$d] = User::where('id', $user)->first();
        $d++;
      }}
    else {
      $pics = null;

    }


    return view("blog.showOneEvent", compact('eventShow', 'comments', 'userNameComment', 'nbrComment', 'pics', 'past', 'nbrPics', 'userNamePic'));
  }

  public function like($id){
    $conc = 'like' . $id;
    $value = session([$conc => true]);

    $eventShow = Events::where('idEvents', $id)->first();
    $nbLikes = $eventShow->like + 1;
        $update = Events::where('idEvents', $id)->update(['like' => $nbLikes]);//On update le nombre de like

        return redirect()->action('EventsController@showOneEvent', $id);
      }

      public function vote($id){
        $conc = 'vote' . $id;
        $value = session([$conc => true]);

        $eventShow = Events::where('idEvents', $id)->first();
        $nbVotes = $eventShow->vote + 1;
        $update = Events::where('idEvents', $id)->update(['vote' => $nbVotes]);//On update le nombre de like
        $eventShow = Events::where('idEvents', $id)->first();//On vien chargé l'event avec le nouveau nombre de like

        return view("blog.showOneIdea", compact('eventShow'));
      }

      public function showOneEvent($id) {

        $idParse = $id;
        $eventShow = Events::where('idEvents', $id)->first();

      $comments = Comments::where('idEvents', $idParse)->get(); //recupère tout les com d'un event
      $nbrComment = Comments::where('idEvents', $idParse)->count();
       $nbrPics = Photo::where('idEvents', $id)->count();


      $listUser = Comments::where('idEvents', $id )->pluck('idUsers');
      $listUserPic = Photo::where('idEvents', $id )->pluck('idUsers');
      $pictures = Photo::where('idEvents', $id)->get();
      $nbrPics = Photo::where('idEvents', $id)->count();


      $now = new DateTime();
      $standardDate = $now->format( 'Y-m-d');
      if($eventShow->date < $standardDate){
        $past = true;
      } else {
        $past = false;
      }

      $c=1;
      foreach ($listUser as $user) {
        $userNameComment[$c] = User::where('id', $user)->first();
        $c++;
      }
      $i = 1;
     foreach ($comments as $comment ) { //création d'un tableau qui contient chaque com
     $comments[$i] = $comment;
     $i++;
   }
  if ($nbrPics != 0){
   $p= 1;
    foreach ($pictures as $pic) {
      $pics[$p] = $pic;
      $p++;
    }
      $d = 1;
    foreach ($listUserPic as $user) {
        $userNamePic[$d] = User::where('id', $user)->first();
        $d++;
      }}
    else {
      $pics = null;
      $userNamePic = null;

    }


   return view("blog.showOneEvent", compact('eventShow', 'comments', 'nbrComment', 'userNameComment', 'past', 'pics', 'userNamePic', 'nbrPics'));
 }

 public function showOneIdea($id) {

  $eventShow = Events::where('idEvents', $id)->first();

  return view("blog.showOneIdea", compact('eventShow'));
}

public function postPicture(addPicture $request, $id) {


       $picture['1'] = $request->file('picture1');//on récupere le fichier envoyer avec file()
       $picture['2'] = $request->file('picture2');
       $picture['3'] = $request->file('picture3');

       $eventShow = Events::where('idEvents', $id)->first();
    $user = Auth::user();
    $userId = $user->id; // récupère l'id de la session en cour (unique)



  for($i=1; $i<=3; $i++){

    if ($picture[$i]) {

       if ($picture[$i]->isValid())//utilisation de la methode isValid qui vérifie la validité de l'image
       {
            $chemin = config('image.path');//fais référence au file config/image.php ou on définit le path des image récuperer

            $extension = $picture[$i]->getClientOriginalExtension();//methode qui recupère l'extension originelle

            do {
              $nom = str_random(10) . '.' . $extension;
            } while(file_exists($chemin . '/' . $nom));//on génére un nom alétoire et on vérifie qu'il n'existe pas déjà
            $cheminPhoto = $chemin . '/' . $nom;
               //if(Auth::check()) permet de vérifier si il le user est authentifier


            if($picture[$i]->move($chemin, $nom)){
              $inputs['ImageLink'] = $cheminPhoto;
              $inputs['nbrLike'] = 0;
              $inputs['idEvents'] = $id;
              $inputs['idUsers'] = $userId;

              $create = Photo::create($inputs);
              $create->save();
            }

          }

        }
      }
      $past = true;

      $comments = Comments::where('idEvents', $id)->get(); //recupère tout les com d'un event
      $nbrComment = Comments::where('idEvents', $id)->count();
      $pictures = Photo::where('idEvents', $id)->get();
      $nbrPics = Photo::where('idEvents', $id)->count();

      $listUser = Comments::where('idEvents', $id )->pluck('idUsers');
      $listUserPic = Photo::where('idEvents', $id )->pluck('idUsers');

      $c=1;
      foreach ($listUser as $user) {
        $userNameComment[$c] = User::where('id', $user)->first();
        $c++;
      }

    $i = 1;
     foreach ($comments as $comment ) { //création d'un tableau qui contient chaque com
     $comments[$i] = $comment;
     $i++;
    }
    $p= 1;
    foreach ($pictures as $pic) {
      $pics[$p] = $pic;
      $p++;
    }
    $d = 1;
    foreach ($listUserPic as $user) {
        $userNamePic[$d] = User::where('id', $user)->first();
        $d++;
      }

      return view('blog.showOneEvent', compact('eventShow','comments', 'nbrComment', 'userNameComment', 'past', 'pics', 'userNamePic', 'nbrPics'));
    }

    public function suscribe($id) {

  $conc = 'suscribe' . $id;
  $value = session([$conc => true ]);


  $user = Auth::user();
  $userId = $user->id; // récupère l'id de la session en cour (unique)
  $inputs['idEvents'] = $id;
  $inputs['idUsers'] = $userId;
  $suscribe = new Suscribe();
  $suscribe = Suscribe::create($inputs);
  return  redirect()->action('EventsController@showOne', $id);
}

public function getSuscribers($id) {

  $suscribers = DB::table('suscribes')->where('idEvents', $id)->join('users', 'suscribes.idUsers', '=', 'users.id')->select('users.name', 'users.lastName', 'users.email')->get();

  $suscribers = json_decode($suscribers, true);
  $filename = "suscribers.csv";
  $handle = fopen($filename, 'w+');
  fputcsv($handle, array('name', 'lastName', 'email'), $delimiter = ";");

  foreach($suscribers as $row) {
    fputcsv($handle, array($row['name'], $row['lastName'], $row['email']), $delimiter = ";");
  }

  fclose($handle);

  $headers = array(
    'Content-Type' => 'text/csv',
    'Content-Disposition' => 'attachment; filename=members.csv'
  );

  return Response::download($filename, 'suscribers.csv', $headers);
}


  public function getValidEvent($id) {

    DB::table('events')->where('idEvents', $id)->update(array('validated' => '1'));
    return view('admin.admin');
  }
  public function getPicture($id){
    return view('form.pictureForm', compact('id'));
  }

  public function noUserLog() {
    return view('errors.errorNoUserLog');
  }
}



