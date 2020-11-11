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
				<h5 class="modal-title"><i class="fa fa-plus"></i> Input Chanel</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>					
				</div>
				<!-- body modal -->
				<div class="modal-body"> 
<form class="form-horizontal" action="{{ route('chanel.store') }}" enctype="multipart/form-data" method="POST">
@csrf             	
	<div class="form-group row">
		<label class="col-sm-4 col-form-label">Nama Chanel</label>
			<div class="col-sm-8">
				<input type="text" name='chanel' class="form-control" placeholder="nama chanel">
			</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-4 col-form-label">Link</label>
			<div class="col-sm-8">
				<input type="text" name='link' class="form-control" placeholder="Type Link">
			</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-4 col-form-label">Kategori</label>
			<div class="col-sm-8">
			<select name='kategori' class="form-control select2" style="width: 100%;">
                    <option value='Local' selected="selected">Local</option>
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
			<div class="col-sm-8">
				<input type="file" name='foto' class="form-control">
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
                <h3 class="card-title">Data List Chanel</h3>
				<button type="button" class="float-right btn btn-sm btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus"></i> Tambah Chanel</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Chanel</th>
					<th>Kategori</th>
                    <th>Link</th>
                    <th>Foto</th>                    
					<th>Setting</th>  
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($chanels as $chanel)
        <tr>
		            
            <td>{{ $chanel->id }}</td>
			<td>{{ $chanel->chanel }}</td>
			<td>{{ $chanel->kategori }}</td>
			<td>{{ $chanel->link }}</td>			
			<td><img width="50px" src="foto/{{ $chanel->foto }}"/></td>						
            <td class="text-center">
                <form action="{{ route('chanel.destroy',$chanel->id) }}" method="POST">
 
                    <a class="btn btn-info btn-sm" href="{{ route('chanel.show',$chanel->id) }}"><i class="fa fa-eye"></i></a> 
                    <a class="btn btn-primary btn-sm" href="{{ route('chanel.edit',$chanel->id) }}"><i class="fa fa-edit"></i></a>
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
