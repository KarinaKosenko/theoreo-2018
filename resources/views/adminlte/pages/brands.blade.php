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
 

<div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>name</th>
                  <th>city</th>
                  <th>address</th>
                  <th>phone</th>
                  <th>upload_id</th>
                  <th>links</th>
                  <th>created_at</th>
                  <th>updated_at</th>
                  <th>редактировать</th>
                </tr>
                </thead>
                <tbody>
                 @foreach ($brands as $brand)
                <tr>
                  
                  <td>{{$brand->id}}</td>
                  <td>{{$brand->name}}</td>
                  <td>{{$brand->cities()->first()->name}}</td>
                  <td>{{$brand->address}}</td>
                  <td>{{$brand->phone}}</td>
                  <td>{{$brand->upload_id}}</td>
                  <td>{{$brand->links}}</td>
                  <td>{{$brand->created_at}}</td>
                  <td>{{$brand->updated_at}}</td>
                  <td><a href="./brandsEdit/{{$brand->id}}">РЕД</a></td>
                
                
                </tr>
                @endforeach
                </tbody>
                <tfoot>
              
                </tfoot>
              </table>
            </div>











      
    
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</section>
<!-- /.content -->
 
