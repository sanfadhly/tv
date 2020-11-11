@extends('layouts.app')
@section('konten')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data List Chanel</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form class="form-horizontal" action="{{ route('chanel.store') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Admob Enable</label>
                        <div class="col-sm-8">
                            <input type="checkbox" name="admob_enable" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
                        </div>
                </div>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Nama Chanel</label>
                            <div class="col-sm-8">
                                <input type="text" name='chanel' class="form-control" placeholder="nama chanel">
                            </div>
                    </div>
            </form>

          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>@endsection
