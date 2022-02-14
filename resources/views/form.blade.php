@extends('layout')
@section('content')
<form action="/formSubmit" method='post'>
    @csrf
    <label for="champ1">Champ 1</label>
    <input type="text" placeholder="champ 1" name="champ1"  id="champ1"><br><br>
    <label for="champ2">Champ 2</label>
    <input type="text"  placeholder="champ 2" name="champ2" id="champ2"><br><br>
    <input type="submit" value="Submit">
</form>
@endsection

@section('footer')
@endsection
