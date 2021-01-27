@extends('layouts.app')
@section('konten')

<!-- Modal ----------------------------------------------------------------------------------------------------------->
<!--start -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-lg modal-dialog">
			<!-- konten modal-->
			<div class="modal-content">
				<!-- heading modal -->
				<div class="modal-header">
				<h5 class="modal-title"><i class="fa fa-plus"></i> Input category</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>					
				</div>
				<!-- body modal -->
				<div class="modal-body"> 
<form class="form-horizontal" action="{{ route('category.store') }}" method="POST">
@csrf             	
	<div class="form-group row">
		<label class="col-sm-4 col-form-label">Nama category</label>
			<div class="col-sm-8">
				<input type="text" name='name_category' class="form-control" placeholder="nama category">
			</div>
	</div>	
	
				</div>
				<!-- footer modal -->
				<div class="modal-footer">				
		<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>		
	</form>	
				</div>
			</div>
		</div>
	</div>
<!-- END Modal ------------------------------------------------------------------------------------------------------>	
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data List category</h3>
				<button type="button" class="float-right btn btn-sm btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus"></i> Tambah category</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>                    
					<th>Kategori</th>                                  
					<th>Setting</th>  
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($categorys as $category)
        <tr>
		            
            <td>{{ $category->id }}</td>
			<td>{{ $category->name_category }}</td>								
            <td class="text-center">
                <form action="{{ route('category.destroy',$category->id) }}" method="POST">    
                    <a class="btn btn-primary btn-sm" href="{{ route('category.edit',$category->id) }}"><i class="fa fa-edit"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
        @endforeach
                  </tfoot>
                </table>
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
