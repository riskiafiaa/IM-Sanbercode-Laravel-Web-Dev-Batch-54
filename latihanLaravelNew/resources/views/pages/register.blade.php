@extends('layout.master')

@section('title', 'Register')

@section('content')
<h1>Buat Account Baru!</h1>
    
    <form action="/welcome" method="post">
        @csrf
    <h3>Sign Up Form</h3>
    <label>First Name:</label><br>
    <input type="text" name="fname"><br><br>
    <label>Last Name:</label><br>
    <input type="text" name="lname"><br><br>
    <label>Gender:</label><br>
    <input type="radio" name="gender">Male <br>
    <input type="radio" name="gender">Female <br>
    <input type="radio" name="gender">Other <br><br>
    <label>Nationality:</label>
    <select name="nationality">
        <option value="">Indonesian</option>
        <option value="">Australia</option>
        <option value="">Singapore</option>
        <option value="">Malaysia</option>
    </select><br><br>
    <label>Language Spoken:</label><br>
    <input type="checkbox" name="language">Bahasa Indonesia <br>
    <input type="checkbox" name="language">English <br>
    <input type="checkbox" name="language">Other <br><br>
    <label>Bio:</label><br>
    <textarea name="bio" id="" cols="30" rows="10"></textarea><br><br>

    <input type="submit" value="Sign Up" name="submit">
    </form>
@endsection