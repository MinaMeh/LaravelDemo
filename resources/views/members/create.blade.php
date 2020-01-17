@extends('layouts.master')
@section("content")
<h2> Ajouter un membre</h2>
<form action="/addMember" method="POST">
    {{csrf_field()}}
    <div class="form-group">
        <label for="family_name" class="font-weight-bold"> Nom</label>
        <input type="text" class="form-control" name="family_name" >
    </div>
    <div class="form-group">
        <label for="first_name" class="font-weight-bold"> Prénom</label>
        <input type="text" class="form-control" name="first_name" >
    </div>
    <div class="form-group">
        <label for="Email" class="font-weight-bold"> Email</label>
        <input type="email" class="form-control" name="email" >
    </div>
    <div class="form-group">
        <label for="department" class="font-weight-bold"> Département </label>
        <select name="departement" class="form-control" id="departement">
            @foreach ($departments as $department)
             <option value="{{$department->id}}">{{$department->designation}}</option>
            @endforeach
        </select>
        </div>
        <button  value=" Ajouter" class="btn btn-success" type="submit" id="submit">Ajouter</button>

</form>
@endsection
