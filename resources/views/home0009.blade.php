<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">guru</a>
        <a class="nav-link" href="#">kelas</a>
        <a class="nav-link" href="#">siswa</a>
        <a class="nav-link" href="#">user</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </div>
    </div>
  </div>
</nav>
<a href="{{url('tambah')}}"class="btn btn-primary">Tambahkan</a>
<table class="table table-striped">
<thead >
        <tr>
            <td>No</td>
            <td>Nama Siswa</td>
            <td>Alamat</td>
            <td>aksi</td>
        </tr>
    </thead>
    <tbody>
        @foreach($siswas as $siswa)
        <tr>
        <td>{{ $loop->iteration}}</td>
            <td>{{$siswa->nama}}</td>
            <td>{{$siswa->alamat}}</td>
            <td><a href="{{url('edit',$siswa->id)}}"class="btn btn-warning">Edit</a>
            <a href="{{url('delete',$siswa->id)}}"class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>