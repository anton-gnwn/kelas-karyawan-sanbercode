@extends('layout.master')

@section('title')
    Halaman Register
@endsection

@section('content')
    <form action="/welcome" method="post">
        @csrf
        <h2>Sign Up Form</h2>
        <label for="first_name">First Name :</label><br>
        <input type="text" id="first_name" name="first_name"><br><br>

        <label for="last_name">Last Name :</label><br>
        <input type="text" id="last_name" name="last_name"><br><br>

        <label for="gender">Gender :</label><br>
        <input type="radio" id="male" name="gender" value="male"><label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female"><label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other"><label for="other">Other</label><br><br>

        <label for="nationality">Nationality :</label><br>
        <select name="nationality" id="nationality">
            <option value="default">Default</option>
            <option value="indonesian">Indonesian</option>
            <option value="english">English</option>
            <option value="other">Other</option>
        </select><br><br>

        <label for="language">Language Spoken :</label><br>
        <input type="checkbox" id="bhs_indo" name="bhs_indo" value="bhs_indo">
        <label for="bhs_indo"> Bahasa Indonesia</label><br>
        <input type="checkbox" id="bhs_inggris" name="bhs_inggris" value="bhs_inggris">
        <label for="bhs_inggris"> English</label><br>
        <input type="checkbox" id="other" name="other" value="other">
        <label for="other"> Other</label><br><br>

        <label for="bio">Bio :</label><br>
        <textarea id="bio" name="bio" rows="4" cols="50"></textarea><br><br>

        <button type="submit">Sign Up</button>
    </form>
@endsection
