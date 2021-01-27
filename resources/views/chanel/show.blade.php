@extends('layouts.app')
@section('konten')

<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit List Chanel</h3>				
              </div>
              <!-- /.card-header -->
              <div class="card-body">	
<form class="form-horizontal" action="{{ route('chanel.update', $chanel->id) }}" enctype="multipart/form-data" method="POST">
@csrf             	
@method('GET')
	<div class="form-group row">
		<label class="col-sm-4 col-form-label">Nama Chanel</label>
			<div class="col-sm-8">			
				<input type="text" name='chanel' class="form-control" value="{{ $chanel->chanel }}">				
			</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-4 col-form-label">Link</label>
			<div class="col-sm-8">
				<input type="text" name='link' class="form-control" value="{{ $chanel->link }}">
			</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-4 col-form-label">Kategori</label>
			<div class="col-sm-8">
			<select name='kategori' class="form-control select2" style="width: 100%;">
					<option value='{{ $chanel->kategori }}' selected="selected">{{ $chanel->kategori }}</option>
					<option value='Local'>Local</option>
                    <option value='Sports'>Sports</option>
                    <option value='Lifestyle'>Lifestyle</option>
                    <option value='Music'>Music</option>
                    <option value='Movie'>Movie</option>
                    <option value='Kids'>Kids</option>
                    <option value='Entertainment'>Entertainment</option>
					<option value='knowledge'>knowledge</option>
					<option value='Religi'>Religi</option>
                  </select>
			</div>
	</div>  
	<div class="form-group row">
		<label class="col-sm-4 col-form-label">Foto</label>
			<div class="col-sm-4">
				<img width="50%" src="../../foto/{{ $chanel->foto }}">
			</div>
			<div class="col-sm-4">
				<input type="file" name='foto' class="form-control">
			</div>
	</div>
	
		<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>		
	</form>					
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
         
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
@endsection