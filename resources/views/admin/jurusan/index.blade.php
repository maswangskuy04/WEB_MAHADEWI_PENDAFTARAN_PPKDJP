@extends('layouts.app')

@section('title', 'Jurusan Page')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="" class="btn btn-outline-secondary btn-sm float-end">Tambah Jurusan</a>
            <div class="card-title mx-0">Table Jurusan</div>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Level</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
