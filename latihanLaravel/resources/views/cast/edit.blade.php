@extends('layouts.master')

@section('judul')
Edit Data Pemain
@endsection

@section('content')

<form method="POST" action="/cast/{{$castData->id}}">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="exampleFormControlInput1">Nama Pemain :</label>
      <input type="text" name="nama" class="form-control" value="{{$castData->nama}}" @error('nama') is-invalid @enderror placeholder="Enter Pemain">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label for="umur">Umur Pemain:</label>
        <input type="number" name="umur" class="form-control" value="{{$castData->umur}}" @error('umur') is-invalid @enderror placeholder="Masukkan umur">
    </div>
    @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
      <label for="exampleFormControlTextarea1">biodata Pemain :</label>
      <textarea class="form-control" name="bio" id="exampleFormControlTextarea1" rows="5" @error('bio') is-invalid @enderror placeholder="Masukkan Biodata">{{$castData->bio}}</textarea>
    </div>
    @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection