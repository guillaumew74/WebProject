@extends('templateuser')

@section('contenu')
    <br>
    <div class="col-sm-offset-4 col-sm-5">
      @if(session()->has('ok'))
      <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
    @endif
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Liste des utilisateurs <i class="fas fa-users"></i></h3>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Nom</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr>
              <td>{!! $user->id !!}</td>
              <td class="text-primary"><strong>{!! $user->name !!}</strong></td>
              <td>{!! link_to_route('user.show', 'Voir', [$user->id], ['class' => 'btn btn-success btn-block']) !!}</td>
              <td>{!! link_to_route('user.edit', 'Modifier', [$user->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
              <td>
                {!! Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) !!}
                  {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                {!! Form::close() !!}
              </td>
            </tr>
          @endforeach
          </tbody>
      </table>

    </div>

    {!! link_to_route('user.create', 'Ajouter un utilisateur', [], ['class' => 'btn btn-info pull-right']) !!}
    {!! $links !!}<br>
    <button type="button" class="btn btn-primary pull-right"><a style="color: white;" href="/administration">Retour Administration</a></button>
  </div>
@endsection
