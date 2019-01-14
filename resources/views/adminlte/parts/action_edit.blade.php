 <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">
         
            <!-- Nav tabs -->
            <ul id="myTabs" class="nav nav-pills" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Основное</a></li>
              <li role="presentation"><a href="#image" aria-controls="image" role="tab" data-toggle="tab">Изображение</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="home">
                <form action="" role="form"  method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      
                  <div class="box-body">
                    <div class="form-group">
                      <label>Бренд *</label>
                      <select class="form-control" name="brand">
                        @foreach ($brands as $brand)
                          <option name="brand" value="{{ $brand->id }}" {{ $action->brand_id == $brand->id ? 'selected' : '' }}> {{ $brand->name ?? '' }} </option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Название акции *</label>
                      <input type="text" class="form-control" name="name" placeholder="" value="{{ $action->name ?? '' }}">
                    </div>
                    <div class="form-group">
                      <label>Основное изображение</label><br>
                      @switch($image_src)
                        @case('this_img')
                          <img src="{{ asset('storage/'.$action->upload->path) }}" alt="image" style="width:300px; height:auto;">
                          @break
                        @case('brand_img')
                          <img src="{{ asset('storage/'.$image_path) }}" alt="image" style="width:300px; height:auto;">
                          @break
                        @case('upload_img')
                          <img src="{{ asset('storage/'.$image_path) }}" alt="image" style="width:300px; height:auto;">
                          @break
                        @case('internet_img')
                          <img src="{{ asset('storage/'.$image_path) }}" alt="image" style="width:300px; height:auto;">
                          @break
                        @default
                          <img src="{{ asset('storage/uploads/no_image.png') }}" alt="image">
                      @endswitch

                      <input type="hidden" name="image_id" value="{{ $image_id }}">

                      <a href="#image"><button type="button" class="btn btn-default">Редактировать</button></a>
                    </div>
                    <div class="form-group">
                      <label>Описание акции *</label>
                      <textarea class="form-control" name="text" rows="3">{{ $action->text ?? '' }}</textarea>
                    </div>
                    <div class="form-group">
                      <label>Ссылка на сайт</label>
                      <input type="text" class="form-control" name="links" placeholder="" value="{{ $action->links ?? '' }}">
                    </div>
                    <div class="form-group">
                      <label>Дата начала акции</label> 
                      <input type="date" id="" name="active_from" class="form-control" value="{{ \Carbon\Carbon::parse($action->active_from)->format('Y-m-d') ?? '' }}">
                    </div>
                    <div class="form-group">
                      <label>Дата окончания акции</label>
                      <input type="date" id="" name="active_to" class="form-control" value="{{ \Carbon\Carbon::parse($action->active_to)->format('Y-m-d') ?? '' }}">
                    </div>
                    <div class="form-group">
                      <label>Вид акции *</label>
                      <select class="form-control" name="type">
                        <option value="stock" name="type" {{$action->type == "stock" ? 'selected' : '' }}>Stock</option>
                        <option value="discount" name="type" {{ $action->type == "discount" ? 'selected' : '' }} >Discount</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Категория *</label>
                      <select multiple class="form-control" name="categories[]">
                        @foreach ($categories as $category)
                          <option name="categories[]" value="{{ $category->id }}" {{ in_array($category->id, $actionCategoryArray) ? 'selected' : '' }} >{{ $category->name ?? '' }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Тэги *</label>
                      <select multiple class="form-control" name="tags[]">
                        @foreach ($tags as $tag)
                          <option name="tags[]" value="{{ $tag->id }}" {{ in_array($tag->id, $actionTagArray) ? 'selected' : ''}} >{{ $tag->name ?? '' }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Город проведения</label>
                      <select class="form-control" name="city">
                        @foreach ($cities as $city)
                          <option name="city" value="{{ $city->id }}" {{ $action->city_id == $city->id ? 'selected' : '' }} >{{ $city->name ?? '' }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="box-footer">
                    <input class = "btn btn-primary btn-success" type="submit" value="Сохранить">
                    <input class = "btn btn-default" type="reset" value="Отменить">
                  </div>
                </form>
              </div>

              <div role="tabpanel" class="tab-pane fade" id="image">
                <h4>Настройки изображения</h4><hr>
                <p>Выберите источник изображения, определите область обрезания и нажмите "Применить" для добавления изображения к акции.</p>

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
                        <div id="upload-demo" style="width:350px"></div>
                      </div>

                      <div class="col-md-4" style="padding-top:30px;">
                        <div class="form-group">
                          <label>Выберите изображение:</label>
                          <input type="file" name="image" id="upload">
                        </div>
                              
                        <div class="form-group">
                          <button class="btn btn-success upload-result" type="submit" style="float: right; margin-top: 205px;">Применить</button>
                        </div>
                      </div>

                      <div class="col-md-4" style="">
                        <div id="upload-demo-i" style="background:#e1e1e1;width:300px;padding:30px;height:300px;margin-top:30px"></div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
      </div>
     </div>
    </div>
  </div>
</section>

<!-- Скрипт для cropper  -->

<!-- @section('bottom_scripts')

<script type="text/javascript">


$.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});


$uploadCrop = $('#upload-demo').croppie({
    enableExif: true,
    viewport: {
        width: 200,
        height: 200,
        type: 'square'
    },
    boundary: {
        width: 300,
        height: 300
    }
});


$('#upload').on('change', function () { 
  var reader = new FileReader();
    reader.onload = function (e) {
      $uploadCrop.croppie('bind', {
        url: e.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
});


$('.upload-result').on('click', function (ev) {
  $uploadCrop.croppie('result', {
    type: 'canvas',
    size: 'viewport'
  }).then(function (resp) {
    $.ajax({
      url: "/admin/actions/create/image-crop",
      type: "POST",
      data: {"image":resp},
      success: function (data) {
        html = '<img src="' + resp + '" />';
        $("#upload-demo-i").html(html);
      }
    });
  });
});


</script>

@parent
  
@endsection
 -->