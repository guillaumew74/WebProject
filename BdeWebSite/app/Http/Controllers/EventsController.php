<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\Comments;
use App\Http\Requests\formRequests;
use App\Http\Requests\addComments;
use App\Http\Requests\sortBy;

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

            //return $inputs;



             $events = Events::create($inputs); //On enregistre les données du formuliare dans la db
             $events->save();

             return redirect()->action('EventsController@showPostNoP');
           }

         }

         return redirect('/form')
         ->with('error','Désolé mais votre image ne peut pas être envoyée !');

       }


  public function showEvent($j) //affichage de la page des événements
  {
           // $j = 0;
            $allEvents = Events::where('validated', '=', '1')->count(); //compte le nombre d'event validé
            if ($allEvents >= 5) {

              $first = Events::where('validated', '=', '1')->first();
              $idFirst = $first->idEvents;

            $postShow = Events::latest()->first();// On récupere l'article qui vient d'etre posté


            for($i = 1; $i <= 5; $i++) { //On vient charger les 5 derniers articles (le 5eme est utilisé pour le bouton showMore)


             $lastid = $postShow->idEvents + 1;
             $lastid = $lastid - $j;
             do{
              $j++;
              $lastid = $lastid - 1;
             } while (Events::where('idEvents', $lastid)->first() == null ); // on récupère l'id d'avant en vérifiant qu'il n'a pas été supprimé



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
      public function showEventNoP() {

       $j = 0;

            $postShow = Events::latest()->first();// On récupere l'article qui vient d'etre posté

            $allEvents = Events::where('validated', '=', '1')->count(); //compte le nombre d'event validé
            if ($allEvents >= 5) {

             for($i = 1; $i <= 5; $i++) { //On vient charger les 5 derniers articles (le 5 est utilisé pour le bouton showMore)
                //WARNING Si on ne possède pas 5 articles dans la db on rentre dans une boucle infini


             $lastid = $postShow->idEvents + 1; //l'id du dernier event
             $lastid = $lastid - $j;


             do{
              $j++;
              $lastid = $lastid - 1;
              } while (Events::where('idEvents', $lastid)->where('validated', '=', '1')->first() == null); // on récupère l'id d'avant en vérifiant qu'il n'a pas été supprimé



              $arrayShow[$i] = Events::where('idEvents', $lastid)->first();

            }


             $j--; //j a été incrémenté une fois de trop dans le do while

             return view('blog.show', compact('arrayShow', 'j'));
           }
           else
           {
            return view('errors.errorNotEnough');
          }
        }


        public function showIdeaNoP() {

            $allEvents = Events::where('validated', '=', '0')->count(); //compte le nombre d'event validé
            if ($allEvents >= 5) {
              $j = 0;

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
            }

             $j--; //j a été incrémenté une fois de trop dans le do while

             return view('blog.show', compact('arrayShow', 'j'));
           }
           else
           {
            return view('errors.errorNotEnough');
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


  public function showSort(sortBy $request, $id) {
    $event = Events::where('idEvents', $id)->first();
    $sortBy = $request->input();
    return $sortBy;
    // if($event->validated == 0){

    // }
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



  public function showOneEventPost(Request $request, $id){
    $events = new Events();
        $inputs = $request->input(); //On enregistre les données du formulaire dans inputs
        $inputs['idEvents'] = $id; //On renseigne l'id de l'evenement dans lequel on souhaite rajouter un commentaire
        $addRow = Comments::create($inputs);

        $eventShow = Events::where('idEvents', $id)->first();
        $comments = Comments::where('idEvents', $id )->get();

        return view("blog.showOne", compact('eventShow', 'comments'));
      }

      public function like($id){

        $eventShow = Events::where('idEvents', $id)->first();
        $nbLikes = $eventShow->like + 1;
        $update = Events::where('idEvents', $id)->update(['like' => $nbLikes]);//On update le nombre de like
        $eventShow = Events::where('idEvents', $id)->first();//On vien chargé l'event avec le nouveau nombre de like
        $comments = Comments::where('idEvents', $id )->get();


        return view("blog.showOne", compact('eventShow', 'comments'));
      }

      public function vote($id){

        $eventShow = Events::where('idEvents', $id)->first();
        $nbVotes = $eventShow->vote + 1;
        $update = Events::where('idEvents', $id)->update(['vote' => $nbVotes]);//On update le nombre de like
        $eventShow = Events::where('idEvents', $id)->first();//On vien chargé l'event avec le nouveau nombre de like

        return view("blog.showOneIdea", compact('eventShow'));
      }

      public function showOneEvent($id) {
        $i = 0;
        $idParse = $id;
        $eventShow = Events::where('idEvents', $id)->first();

      $comments = Comments::where('idEvents', $idParse)->get(); //recupère tout les com d'un event
     foreach ($comments as $comment ) { //création d'un tableau qui contient chaque com
     $comments[$i] = $comment;
     $i++;
   }

   return view("blog.showOne", compact('eventShow', 'comments'));
 }
 public function showOneIdea($id) {
  $i = 0;
  $idParse = $id;
  $eventShow = Events::where('idEvents', $id)->first();

  return view("blog.showOneIdea", compact('eventShow'));
}
}



