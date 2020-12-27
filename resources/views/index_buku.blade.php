@extends('layout.master')
@section('title', 'Buku')
@section('content')
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <title>Perpustakaan</title>
    </head>
    <body>
        <div class="container mx-auto">
        <h1 class="text-5x1 font-bold center">Buku</h1>
        <a href="{{route('buku_create')}}">Input buku</a> 
        <table class="table-auto border-2">
        <thead>
            <tr class="border-4">
            <th class="border-2">No</th>
            <th class="border-2">Nama</th>
            <th class="border-2">Judul</th>
            <th class="border-2">Pengarang</th>
            <th class="border-2">Penerbit</th>
            <th class="border-2">Tahun</th>
            <th class="border-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <tr class="border-2">
            @foreach ($bukus as $buku)
            <tr class="border-2">
                <td class="border-2">{{$buku->id}}</td>
                <td class="border-2">{{$buku->nama}}</td>
                <td class="border-2">{{$buku->judul}}</td>
                <td class="border-2">{{$buku->pengarang}}</td>
                <td class="border-2">{{$buku->penerbit}}</td>
                <td class="border-2">{{$buku->tahun}}</td>
                <td class="border-2"><a href="{{route('buku_edit', $buku->id)}}">Edit <class="border-2"><a href="{{route('buku_delete', $buku->id)}}">Delete</td>
            </tr>
            @endforeach
            </tr>
        </tbody>
        </table>
        <span>{{ $bukus->links() }}</span>
        
        </div>
    </body>
</html>
@endsection