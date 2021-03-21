@extends('layout.template')

@section('title','Create Bugs')

@section('content')
<a href="/createbug/add" class="btn btn-primary btn-lg">add</a>
<br>
<br>

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
                        <a href="/createbug/detail/{{$data->id}}" class="btn btn-success btn-sm">Detail</a>
                        <a href="/createbug/edit/{{$data->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete{{$data->id}}">
                            Delete
                        </button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @foreach($view as $data)
    <div class="modal fade" id="delete{{$data->id}}">
        <div class="modal-dialog modal-md">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">{{$data->judul}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are You sure want to delete?&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
              <a href="/createbug/delete/{{$data->id}}" class="btn btn-outline-light">Delete</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      @endforeach

@endsection