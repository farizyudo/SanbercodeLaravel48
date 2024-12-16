@extends('layouts.master')

@section('')
Sign Up
@endsection('')

@section('content')
    <!-- Tipe Input -->
    <form action="home" method="post">
        @csrf
        <!-- Nama -->
        <label for="firstName">First Name :</label><br>
        <input type="text" id="firstName" name="fname"><br><br>

        <label for="lastName">Last Name :</label><br>
        <input type="text" id="lastName" name="lname"><br><br>

        <!-- Gender -->

        <label for="gender">Gender :</label><br><br>
        <input type="radio" name="male" id="gender" value="male">Laki-laki<br>
        <input type="radio" name="female" id="gender" value="female">Perempuan<br>
        <input type="radio" name="other" id="gender" value="female">Other<br><br>

        <!-- Input Kebangsaan -->
        <select id="nationality" name="nationality">
            <option value="">--Pilih Negara--</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapura">Singapura</option>
            <option value="bruneiDarussalam">Brunei Darussalam</option>
            <option value="Filipina">Filipina</option>
            <option value="timorLeste">Timor Leste</option>
        </select> <br><br>

        <!-- Bahasa -->
        <label for="bahasa">Language Spoke:</label> <br><br>
        <input type="checkbox" id="bahasaIndonesia" name="bahasa">Bahasa Indonesia<br>
        <input type="checkbox" id="English" name="bahasa">English<br>
        <input type="checkbox" id="bahasaLainya" name="bahasa">Other<br><br>

        <label>Bio :</label><br><br>
        <textarea id="Bio" name="Bio"></textarea>
        <br><br>

        <!-- Submit & Reset -->
        <input type="submit" value="kirim">
        <input type="reset" value="reset">

        <!-- <button type="submit">Submit</a></button>
        <button type="reset">Reset</button> -->
    </form>
@endsection