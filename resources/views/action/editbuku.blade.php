<html>
<head>
    <title>Input Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
<!-- component -->
<form method="POST" action="{{route('buku_update',$edbuk->id)}}">
  @csrf
  <div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">

    <div class="text-3xl mb-6 text-center ">
      Input data buku perpustakaan
    </div>
    <div class="grid grid-cols-2 gap-4 max-w-xl m-auto">
      <div class="col-span-2">
        <input type="text" name="nama" value="{{$edbuk->nama}}" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Nama"/>
      </div>

      <div class="col-span-2">
        <input type="text" name="judul" value="{{$edbuk->judul}}" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Judul"/>
      </div>

      <div class="col-span-2">
        <input type="text" name="pengarang" value="{{$edbuk->pengarang}}" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Pengarang"/>
      </div>

      <div class="col-span-2">
        <input type="text" name="penerbit" value="{{$edbuk->penerbit}}" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Penerbit"/>
      </div>

      <div class="col-span-2">
        <input type="text" name="tahun" value="{{$edbuk->tahun}}" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Tahun"/>
      </div>

      <div class="col-span-2">
        <input type="text" name="jumlah" value="{{$edbuk->jumlah}}" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Jumlah"/>
      </div>

      <div class="col-span-2 text-right">
        <button type="reset" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
          Reset
        </button>
        <button type="submit" class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
          Submit
        </button>
      </div>
    </div>
  </div>
</form>
</body>
</html>