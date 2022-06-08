@extends('layout.main')
@section('content')
    <div class="container">
    <h1 class="text-center mb-4">Table Guru</h1>
    <a type="button" href="{{ route('tambahguru') }}" class="btn btn-secondary mb-3">Add</a>
        <table class="table table-dark table-striped rounded">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach($data as $row)
                <tr>
                    <th scope="row">{{$no++}}</th>
                    <td>{{$row->username}}</td>
                    <td>{{$row->password}}</td>
                    <td>{{$row->nama}}</td>
                    <td>{{$row->nik}}</td>
                    <td>{{$row->mapel}}</td>
                    <td>
                        <a href="/delete/{{$row->id}}" class="btn btn-warning">Delete</a>
                        <a href="/editguru/{{$row->id}}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection