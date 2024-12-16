@extends('layouts.master')

@section('judul')
    Detail Pemeran
@endsection


@section('content')

    <h1 class="text-primary">Nama : {{$castData->nama}}</h1>
    <h1>Umur : {{$castData->umur}}</h1>
    <p>{{$castData->bio}}</p>
@endsection