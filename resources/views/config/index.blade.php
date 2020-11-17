@extends('layouts.app')
@section('konten')
    <div class="row">
        <div class="col-12">
          <!-- Custom Tabs -->
          <div class="card">
            <div class="card-header d-flex p-0">
              <h3 class="card-title p-3">Setting</h3>
              <ul class="nav nav-pills ml-auto p-2">
                <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Setting Admob</a></li>
                <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Setting FAN(facebook)</a></li>
                <li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Tab 3</a></li>
              </ul>
            </div><!-- /.card-header -->
            <form method="POST" action="{{ route('config.store') }}" enctype="multipart/form-data" >
                @csrf
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
{{-- ADMOB --------------------------------------------------------------------------------------------}}
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Admob Enable</label>
                    <div class="col-sm-8" style="margin-left:-35px">
                        <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                            <input type="checkbox" {{ $admobenable == "1" ? "checked" : ""   }} name="admobenable" data-bootstrap-switch data-off-color="danger" data-on-color="success">
                          </div>
                    </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode App-ID</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="admobappid" value="{{ $admobappid }}">
                    </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Banner</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="exampleInputEmail1"  name="admobbanner" value="{{ $admobbanner }}">
                    </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kode Intersial</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="exampleInputEmail1" name="admobinter"  value="{{ $admobinter }}">
{{-- END ADMOB --------------------------------------------------------------------------------------}}
                    </div>
            </div>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    {{-- FAN --------------------------------------------------------------------------------------------}}
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">FAN Enable</label>
                            <div class="col-sm-8" style="margin-left:-35px">
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                    <input type="checkbox" {{ $fanenable == "1" ? "checked" : ""   }} name="fanenable" data-bootstrap-switch data-off-color="danger" data-on-color="success">
                                  </div>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kode App-ID</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="fanappid" value="{{ $fanappid }}">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kode Banner</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="fanbanner" value="{{ $fanbanner }}">
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kode Intersial</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="faninter"  value="{{ $faninter }}">
							</div>
					</div>
{{-- END FAN --------------------------------------------------------------------------------------}}
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="tab_3">
                  ******************************************tab 3
                </div>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="float-right btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
      </div>
    </form>
          </div>
          <!-- ./card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->

  @endsection
