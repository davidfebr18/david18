@extends('layouts.main')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Data Jabatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{route('destinasi.store')}}" method="POST">
            	{{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
                  </div>
                </div>
                <div class="form-group">
                  <label for="slug" class="col-sm-2 control-label">slug </label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="slug" name="slug" placeholder="slug">
                  </div>
                </div>
                <div class="form-group">
                  <label for="gambar" class="col-sm-2 control-label">Gambar</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="gambar" name="gambar" placeholder="gambar">
                  </div> 
                </div>
                <div class="form-group">
                  <label for="deskripsi" class="col-sm-2 control-label">deskripsi</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="deskripsi">
                  </div> 
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Kirim</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
	</div>
	
</section>
@endsection