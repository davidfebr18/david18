@extends('layouts.main')
@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="text-center">Edit Destinasi</h3>
            </div>
            <form class="form-horizontal" action="{{route('destinasi.update', $destinasi->id)}}" method="POST">
            	@csrf

              {{ method_field('PUT') }}
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="nama" id="nama" value="{{$destinasi->nama}}">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$destinasi->nama}}" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="slug" id="slug" value="{{$destinasi->slug}}">
                        <label for="slug" class="col-sm-2 control-label">slug</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="slug" name="slug" value="{{$destinasi->slug}}" placeholder="slug" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar" class="col-sm-2 control-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="gambar" name="gambar" value="{{$destinasi->gambar}}" placeholder="gambar" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi" class="col-sm-2 control-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$destinasi->deskripsi}}" placeholder="deskripsi" required>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection