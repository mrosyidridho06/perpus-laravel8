<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

        <title>Perpustakaan</title>
    </head>
    <body>
        <h1 class="text-5x1 font-bold">Buku</h1>
        <a href="{{route('buku_inputperpus')}}">Input buku</a> 
        <table class="table-auto border-2">
        <thead>
            <tr class="border-4">
            <th class="border-2">No</th>
            <th class="border-2">Nama</th>
            <th class="border-2">Judul</th>
            <th class="border-2">Pengarang</th>
            <th class="border-2">Penerbit</th>
            <th class="border-2">Tahun</th>
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
            </tr>
            @endforeach
            </tr>
        </tbody>
        </table>
    </body>
</html>