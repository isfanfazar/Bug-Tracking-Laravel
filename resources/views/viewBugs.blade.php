@extends('layout.template')

@section('title','View Bugs')


@section('content')
<a href="/viewbugs/add" class="btn btn-primary btn-sm">add</a>

@if (session('message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4><i class="icon fa-check"></i>Success!!</h4>
            {{ (session('message')) }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Foto</th>
                <th>Detail</th>
                <th>Versi</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach($view as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->judul }}</td>
                    <td><img src="{{ url('foto/'.$data->foto) }}" width="100px"></td>
                    <td>{{ $data->detail }}</td>
                    <td>{{ $data->versi }}</td>
                    <td>{{ $data->status }}</td>
                    <td>
                        <a href="/viewbugs/detail/{{$data->id}}" class="btn btn-success">Detail</a>
                        <a href="" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
