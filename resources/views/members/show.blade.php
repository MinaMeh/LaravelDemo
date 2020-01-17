@extends('layouts.master')
@section('content')
<h1> Liste des Membres</h1>
<a class="btn btn-success mb-3" href="/addMember"> Ajouter</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center font-weight-bold"> Nom</th>
            <th class="text-center font-weight-bold"> Prénom</th>
            <th class="text-center font-weight-bold"> E-Mail</th>
            <th class="text-center font-weight-bold"> Département</th>
            <th class="text-center font-weight-bold "> Action</th>
          </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
        <tr>
            <td class="text-center">{{$member->family_name}}</a></td>
            <td class="text-center">{{$member->first_name}}</a></td>
            <td class="text-center">{{$member->email}}</a></td>
            <td class="text-center">{{$member->department->designation}}</a></td>
            <td class="text-center">
                <a class="btn btn-primary" href="/editMember/{{$member->id}}"> Modifier</a>
            <a class="btn btn-danger" href="/member/delete/{{$member->id}}"> Supprimer</a></td>
         </tr>
        @endforeach
    </tbody>

</table>

@endsection
