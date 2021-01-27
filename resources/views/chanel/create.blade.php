@extends('layouts.app')
@section('konten')

<div class="container-fluid">
<form class="form-horizontal" action="{{route('chanel.store')}}" enctype="multipart/form-data" method="POST">
@csrf   
        <div class="row">
          <div class="col-6">
            <div class="card">              
              <div class="card-header">
                <h3 class="card-title">Add List Chanel</h3>				
              </div>
                        	
              <!-- /.card-header -->
              <div class="card-body">	
			
                <div class="modal-body"> 
                    
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Tv Chanel name</label>
                                <div class="col-sm-12">
                                    <input type="text" name='chanel' class="form-control" placeholder="chanel name">
                                </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Description</label>
                              <div class="col-sm-12">
                                  <textarea rows="5" type="text" name='description' class="form-control"></textarea>
                              </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Category</label>
                              <div class="col-sm-8">
                                <select name='id_category' class="form-control select2" style="width: 100%;">
                                  <option selected="selected">category</option>
                                    @foreach ($categories as $chanel)
                                  <option name="id_category" value='{{ $chanel->id }}'> {{ $chanel->name_category }}</option>
                                    @endforeach
                                </select>
                              </div>
                        </div>                                                 
                  </div> 		
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->         
          </div>
          <!-- /.col -->
          <div class="col-6">
            <div class="card">              
              <div class="card-header">
                <h3 class="card-title">Url Stream & Thumbnail</h3>				
              </div>
              <!-- /.card-header -->
              <div class="card-body">	
			
                  <div class="modal-body">
                    <div class="form-group row">                            
                      <div class="col-sm-5">
                        <select name='source1' class="form-control select2" style="width: 100%;">
                          <option selected="selected">Stream From</option>                              
                          <option value="mu38">MU38</option>                              
                          <option value="web">WEB</option>
                          <option value="rmtp">RMTP</option>                              
                          <option value="youtube">Youtube</option>                              
                          <option value="embed">Embed</option>                              
                        </select>
                      </div>      
                      <div class="col-sm-7">
                        <input type="text" name='url1' class="form-control" placeholder="Type URL">
                      </div>                                  
                    </div>  
                    <div class="form-group row">                            
                      <div class="col-sm-5">
                        <select name='source2' class="form-control select2" style="width: 100%;">
                          <option selected="selected">Stream From</option>                              
                          <option value="mu38">MU38</option>                              
                          <option value="web">WEB</option>
                          <option value="rmtp">RMTP</option>                              
                          <option value="youtube">Youtube</option>                              
                          <option value="embed">Embed</option>                              
                        </select>
                      </div>      
                      <div class="col-sm-7">
                        <input type="text" name='url2' class="form-control" placeholder="Type URL">
                      </div>                                  
                    </div>  
                    <div class="form-group row">                            
                      <div class="col-sm-5">
                        <select name='source3' class="form-control select2" style="width: 100%;">
                          <option selected="selected">Stream From</option>                              
                          <option value="mu38">MU38</option>                              
                          <option value="web">WEB</option>
                          <option value="rmtp">RMTP</option>                              
                          <option value="youtube">Youtube</option>                              
                          <option value="embed">Embed</option>                              
                        </select>
                      </div>      
                      <div class="col-sm-7">
                        <input type="text" name='url3' class="form-control" placeholder="Type URL">
                      </div>                                  
                    </div>   
                    <script>
                      function fileValidation(){
                        var fileInput = document.getElementById('file');
                        var filePath = fileInput.value;
                        var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
                        if(!allowedExtensions.exec(filePath)){
                            alert('Please uploads file having extensions .jpeg/.jpg/.png/.gif only.');
                            fileInput.value = '';
                            return false;
                        }else{
                            //Image preview
                            if (fileInput.files && fileInput.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    document.getElementById('imagePreview').innerHTML = '<img src="'+e.target.result+'"/>';
                                };
                                reader.readAsDataURL(fileInput.files[0]);
                            }
                        }
                    }
                    </script>
                        <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Thumbnail</label>
                                <div class="col-sm-7">
                                    <input type="file" id="file" onchange="return fileValidation()" name='img' class="form-control">
                                </div>
                                {{--  Image preview  --}}                                
                                <div style="height:250px" id="imagePreview"></div>
                        </div>
                  </div>                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <button type="submit" class="btn btn-primary float-right"><i class="fa fa-save"></i> Save</button>		
          </form>	
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
@endsection