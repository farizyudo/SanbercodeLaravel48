@extends('layouts.master')

@section('judul')
Tambah Data Pemain
@endsection

@section('content')

<form method="POST" action="/cast">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Nama Pemain :</label>
      <input type="text" name="nama" class="form-control" @error('nama') is-invalid @enderror placeholder="Enter Pemain">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label for="umur">Umur Pemain:</label>
        <input type="number" name="umur" class="form-control" @error('umur') is-invalid @enderror placeholder="Masukkan umur">
    </div>
    @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label for="exampleFormControlTextarea1">biodata Pemain :</label>
      <textarea class="form-control" name="bio" id="exampleFormControlTextarea1" rows="5" @error('bio') is-invalid @enderror placeholder="Masukkan Biodata"></textarea>
    </div>
    @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection