@extends('templateuser')

@section('contenu')
    <br>
  <div class="col-sm-offset-1 col-sm-10">
<div style="width:100%"  class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Validation d'évenements</h3>
      </div>
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Image</th>
            <th>Id</th>
            <th>Titre</th>
            <th>Owner</th>
            <th>Date</th>
            <th>Déscription</th>
            <th>Vote</th>
            <th>Valide</th>
            <th>Recurence</th>
            <th>Payant</th>
          </tr>
        </thead>

        @foreach($events as $event)
        <tbody>
            <tr>
              <td></td>
              <td><img class="img-thumbnail" style="width:60%"src="{{$event->imageLink}}"></td>
              <td><p>{{$event->idEvents}}</p></td>
              <td><p>{{$event->title}}</p></td>
              <td><p>{{$event->owner}}</p></td>
              <td><p>{{$event->date}}</p></td>
              <td><p>{{$event->description}}</p></td>
              <td><p>{{$event->vote}}</p></td>
              <td><p>{{$event->validated}}</p></td>
              <td><p>{{$event->recurent}}</p></td>
              <td><p>{{$event->payable}}</p></td>
              <td><a href="/validevent/{{$event->idEvents}}" class="btn btn-success btn-sm" class="btnedit">Valider</a></td>
            </tr>
        @endforeach

          </tbody>
      </table>
    </div>
    <button type="button" class="btn btn-primary"><a style="color: white;" href="/administration">Retour Administration</a></button>
</div>

@endsection
