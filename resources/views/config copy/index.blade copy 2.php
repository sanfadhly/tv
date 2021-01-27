@extends('layouts.app')
@section('konten')
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
                <input type="checkbox" {{ $admobenable == "1" ? "checked" : ""   }} name="admobenable" data-bootstrap-switch data-off-color="danger" data-on-color="success">
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
