@extends('layouts.master')

@section('judul')
Tampil Data Pemain
@endsection

@section('content')

<a href="/cast/create" class="btn btn-primary btn-sm my-3">Tambah Data Pemain</a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        {{-- <th scope="col">Biodata</th> --}}
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key => $item )
        <tr>
            <th scope="row">{{$key + 1}}</th>
            <td>{{$item->nama}}</td>
            <td>{{$item->umur}}</td>
            {{-- <td>{{$item->bio}}</td> --}}
            <td>
                <form action="/cast/{{$item->id}}" method="POST">
                    @csrf
                    @method('Delete')
                    <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/cast/{{$item->id}}/edit" class="btn btn-success btn-sm">Update</a>
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                </form>
            </td>
          </tr>
        @empty
            <tr>
                <td>Tidak ada data</td>
            </tr>
        @endforelse

    </tbody>
  </table>

@endsection