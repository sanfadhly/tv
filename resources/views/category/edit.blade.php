@extends('layouts.app')
@section('konten')

<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit name_category</h3>				
              </div>
              <!-- /.card-header -->
              <div class="card-body">	
				  
<form class="form-horizontal" action="{{ route('category.update', $category->id) }}" method="POST">
@csrf             	
@method('PUT')
	<div class="form-group row">
		<label class="col-sm-4 col-form-label">name_category</label>
			<div class="col-sm-8">			
				<input type="text" name='name_category' class="form-control" value="{{ $category->name_category }}">				
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