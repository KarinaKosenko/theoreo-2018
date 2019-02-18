<form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
  {{ csrf_field() }}
  <div class="form-group">
    <div class="radio">
      <label>
        <input type="radio" name="image_src" id="this_img" value="this_img" checked>
        Использовать текущее изображение
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="image_src" id="brand_img" value="brand_img">
        Использовать изображение бренда
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="image_src" id="upload_img" value="upload_img">
       Загрузить изображение с локального компьютера
      </label>
    </div>
    <div class="radio">
      <label>
        <input type="radio" name="image_src" id="internet_img" value="internet_img">
       Загрузить изображение из интернета
      </label>
      <input type="text" name="image_internet_link" size="100" placeholder=" Вставьте ссылку на изображение">
    </div>
  </div>
                
  <div class="panel-body">
    <div class="row">
      <div class="col-md-4 text-center">
        <div id="upload-demo"></div>
      </div>
      <div class="col-md-4 upload-input">
        <div class="form-group">
          <label>Выберите изображение:</label>
          <input id="sortpicture" type="file" name="image">
        </div>
        <div class="form-group">
          <button id="upload" class="btn btn-success upload-result" type="button">Применить</button>
        </div>
      </div>
      <div class="col-md-4" style="">
        <div id="upload-demo-i"></div>
      </div>
    </div>
  </div>
</form>

@section('extra-js')
  @parent
  
  <script>
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    
    $('#upload').on('click', function() {

      var file_data = $('#sortpicture').prop('files')[0];
      var form_data = new FormData();
      form_data.append('image', file_data);
      form_data.append('image_src', $('input[name=image_src]:checked').val());
      form_data.append('link', $('input[name=image_internet_link]').val());
      alert(form_data);
      console.log(file_data);
      $.ajax({
          url: '{{ route('image.upload') }}',
          dataType: 'text',
          cache: false,
          contentType: false,
          processData: false,
          data: form_data,
          type: 'post',
         
          success: function(data){
           
            var data_obj = JSON.parse(data);
          
            var path = data_obj.data.image.path;

            var src = "asset('storage/"+path+"')";

            console.log(src);     

            $('.nav-pills a[href="#home"]').tab('show');
            $('.action-img').attr("src", ""{{"+ src + "}}"");

          }
      });
    });
    
  </script>
@endsection

