@extends ('layout.main')
@section('title', 'editguru')
@section ('content')
    <div class="container">
        <h1 class="text-center mb-4">EDIT DATA GURU</h1>
        <form action="/updatedata/{{$data->id}}" method="POST" >
            @csrf 
            <div class="mb-3 row">
              <div class="mb-3 col-6">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" value="{{$data->username}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3 col-6">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" value="{{$data->password}}" class="form-control" id="exampleInputPassword1">
              </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input type="text" name="nama" value="{{$data->nama}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">NIK</label>
              <input type="text" name="nik" value="{{$data->nik}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Mata Pelajaran</label>
              <input type="text" name="mapel" value="{{$data->mapel}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-secondary">Save</button>
        </form>
    </div>
@endsection