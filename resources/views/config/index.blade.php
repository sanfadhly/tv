@extends('layouts.app')
@section('konten')
<<<<<<< HEAD
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
=======
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{ route('config.store') }}" enctype="multipart/form-data" >
        @csrf
        <div class="card-body">
        <div class="form-group">
            <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                <input type="checkbox" {{ $admobenable == "1" ? "checked" : ""   }} name="admobenable" class="custom-control-input" id="customSwitch3">
                <label class="custom-control-label" for="customSwitch3">Admob </label>
              </div>
          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="admob appid" name="admobappid" value="{{ $admobappid }}">
        </div>
        <div class="form-group">
           <input type="text" class="form-control" id="exampleInputEmail1" placeholder="admob " name="admobbanner" value="{{ $admobbanner }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="admob " name="admobinter"  value="{{ $admobinter }}">
         </div>

      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
@endsection
>>>>>>> eb28668b76f20baab7db3f3a1919c7b05d543601
