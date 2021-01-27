@extends('layouts.app')
@section('konten')
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data List Chanel</h3>
				<a type="button" class="float-right btn btn-sm btn-info" href="{{ route('chanel.create') }}"> <i class="fa fa-plus"></i> Add Chanel</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th></th>
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
		            
            <td>{{ $chanel->id_chanel }}</td>
			<td>{{ $chanel->chanel }}</td>
			<td>{{ $chanel->id_category }}</td>
			<td>{{ $chanel->description}}</td>			
			<td><img width="50px" src="foto/{{ $chanel->image }}"/></td>						
            <td class="text-center">
                <form action="{{ route('chanel.destroy',$chanel->id) }}" method="POST">                     
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
