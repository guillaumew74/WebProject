<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use App\Repositories\UserRepository;

use Illuminate\Http\Request;

//controller de la gestion et création des utilisateur
class UserController extends Controller
{

    protected $userRepository;

    //nombre de user par page
    protected $nbrPerPage = 5;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * affichage des ressources user
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
        $links = $users->render();

        return view('user.index', compact('users', 'links'));
    }

    /**
     * Create a new user
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Enregistrement du new utilisateur
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        $user = $this->userRepository->store($request->all());

        return redirect('user')->withOk("L'utilisateur " . $user->name . " a été créé.");
    }
    /**
     * Show l'user
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->userRepository->getById($id);

        return view('user.show',  compact('user'));
    }

    /**
     * Fonction d'édition d'utilisateur
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->getById($id);

        return view('user.edit',  compact('user'));
    }

    /**
     * Mise a jour en fonction de request et ID
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $this->userRepository->update($id, $request->all());

        return redirect('user')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
    }

    /**
     * function de supression par ID
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userRepository->destroy($id);

        return back();
    }

}
