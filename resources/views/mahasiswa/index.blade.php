@extends('layout/template')

@section('title','Mahasiswa/Index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NRP</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $mhs)
                    <tr>

                        <td>{{$loop->iteration}}</td>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->nrp}}</td>
                        <td>{{$mhs->email}}</td>
                        <td>{{$mhs->jurusan}}</td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection