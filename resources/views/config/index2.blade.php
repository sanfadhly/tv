@extends('layouts.app')
@section('konten')
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data List</h3>				
              </div>
              <!-- /.card-header -->
              <div class="card-body">                
                  @foreach ($configs as $config)        		                        			
                  {{ $config->value }}
                  @endforeach
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
