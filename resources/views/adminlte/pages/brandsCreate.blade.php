 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

</div>

  <!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Управление брендами</h3>
    </div>

<a href="./brands">Список брендов Вернуться</a>
<div class="box-body">
              
<div class="col-md-6">
               <form role="form">
              <div class="box-body">
                 
                @foreach($brands as $brand)
               
                  @endforeach
                
<div class="form-group">

                  <label >Name Brand</label>
                  <select class="form-control" id="brand" placeholder="" >
                     @foreach($brands as $brand)
                    <option value="{{$brand->name}}">{{$brand->name}}</option>
                    @endforeach
                  </select>

                </div>
<div class="form-group">
                  <label for="exampleInputEmail1">city id</label>
                  <select type="text" class="form-control" id="exampleInputcityid1" placeholder=""
                  value="{{$brand->id}}"></select>
                </div>
<div class="form-group">
                <label for="exampleInputEmail1">address</label>
                  <input type="text" class="form-control" id="exampleInputcityid1" placeholder=""
                  value="{{$brand->address}}">
                </div>
              
<div class="form-group">
                <label for="exampleInputEmail1">phone</label>
                  <input type="text" class="form-control" id="exampleInputcityid1" placeholder=""
                  value="{{$brand->phone}}">
                </div>


<div class="form-group">
                <label for="exampleInputEmail1">upload_id</label>
                  <input type="text" class="form-control" id="exampleInputcityid1" placeholder=""
                  value="{{$brand->upload_id}}">
                </div>


<div class="form-group">
                <label for="exampleInputEmail1">links</label>
                  <input type="text" class="form-control" id="exampleInputcityid1" placeholder=""
                  value="{{$brand->links}}">
                </div>





                 <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

           






                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
             
              </div>
                  
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
            </div>











      
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>
<!-- /.content -->
 
