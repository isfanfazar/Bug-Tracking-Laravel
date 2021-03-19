@extends('layout.template')

@section('title','add bug')

@section('content')
    
   <form action="/createbug/insert" method="POST" enctype="multipart/form-data">
    @csrf

        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Judul</label>
                        <input name="judul" class="form-control  @error('judul') is-invalid @enderror" value="{{old('judul')}}">
                        <div class="invalid-feedback">
                            @error('judul')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                        <div class="invalid-feedback">
                            @error('foto')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Detail</label>
                        <input name="detail" class="form-control @error('detail') is-invalid @enderror" value="{{old('detail')}}">
                        <div class="invalid-feedback">
                            @error('detail')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Versi</label>
                        <input name="versi" class="form-control @error('versi') is-invalid @enderror" value="{{old('versi')}}">
                        <div class="invalid-feedback">
                            @error('versi')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                    <label for="validationDefault04" class="form-label">Status</label>
                        <!-- <input name="status" class="form-control @error('status') is-invalid @enderror" value="{{old('status')}}"> -->
                        <select class="form-control  @error('status') is-invalid @enderror" name="status" value="{{old('status')}}">
                            <option selected disabled value="">Choose...</option>
                            <option>High</option>
                            <option>Medium</option>
                            <option>Low</option>
                        </select>
                        <div class="invalid-feedback">
                            @error('status')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">ADD</button>
                    </div>
                </div>
            </div>
        </div>
   </form>
@endsection