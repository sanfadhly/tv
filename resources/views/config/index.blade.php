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
				<h5 class="modal-title"><i class="fa fa-plus"></i> Input Config</h5>
					<button type="button" class="close" data-dismiss="modal">&times;</button>					
				</div>
				<!-- body modal -->
				<div class="modal-body"> 
<form class="form-horizontal" action="{{ route('config.store') }}" enctype="multipart/form-data" method="POST">
@csrf             	
	<div class="form-group row">
		<label class="col-sm-4 col-form-label">Nama Config</label>
			<div class="col-sm-8">
				<input type="text" name='title' class="form-control" placeholder="nama">
			</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-4 col-form-label">Link</label>
			<div class="col-sm-8">
				<input type="text" name='value' class="form-control" placeholder="Type Link">
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
                <h3 class="card-title">Data List Config</h3>
				<button type="button" class="float-right btn btn-sm btn-info" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus"></i> Tambah Config</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form class="form-horizontal" action="{{ route('config.store') }}" enctype="multipart/form-data" method="POST">
@csrf             	

    <div class="card-body">       
       <input type="checkbox" name="my-checkbox" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
    </div>
  
  <div class="form-group row">
		<label class="col-sm-4 col-form-label">{{ $configs->title->admob_enable }}</label>
    
			<div class="col-sm-8">
				<input type="text" name='title' class="form-control" value="{{ $configs->value }}">

			</div>
	</div>		
			
<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>		        
</form>	
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
