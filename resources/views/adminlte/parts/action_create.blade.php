 <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header with-border">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Основное</a></li>
              <li role="presentation"><a href="#image" aria-controls="image" role="tab" data-toggle="tab">Изображение</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
                <form role="form"  method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                  
                <div class="box-body">
                  <div class="form-group">
                    <label>Бренд *</label>
                    <select class="form-control" name="brand">
                      @foreach ($brands as $brand)
                        <option name="brand" value="{{ $brand->id }}"> {{ $brand->name ?? '' }} </option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Название акции *</label>
                    <input type="text" class="form-control" name="name" placeholder="" value="{{ old('name', '') }}">
                  </div>
                  <div class="form-group">
                    <label>Основное изображение</label><br>
                    <img src="#" alt="image">
                    <a href="#image"><button type="button" class="btn btn-default">Редактировать</button></a>
                  </div>
                  <div class="form-group">
                    <label>Описание акции *</label>
                    <textarea class="form-control" name="text" rows="3" placeholder="" value="{{ old('text', '') }}"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Ссылка на сайт</label>
                    <input type="text" class="form-control" name="links" placeholder="" value="{{ old('links', '') }}">
                  </div>
                  <div class="form-group width50">
                    <label>Дата начала акции</label>
                    <input type="date" id="" name="active_from" class="form-control" value="{{ old('active_from', '') }}">
                  </div>
                  <div class="form-group width50">
                    <label>Дата окончания акции</label>
                    <input type="date" id="" name="active_to" class="form-control" value="{{ old('active_to', '') }}">
                  </div>
                  <div class="form-group">
                    <label>Вид акции *</label>
                    <select class="form-control" name="type">
                      <option value="stock" name="type">Stock</option>
                      <option value="discount" name="type">Discount</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Категория *</label>
                    <select multiple class="form-control" name="categories[]">
                      @foreach ($categories as $category)
                        <option name="categories[]" value="{{ $category->id }}">{{ $category->name ?? '' }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Тэги *</label>
                    <select multiple class="form-control" name="tags[]">
                      @foreach ($tags as $tag)
                        <option name="tags[]" value="{{ $tag->id }}">{{ $tag->name ?? '' }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Город проведения</label>
                    <select class="form-control" name="city">
                      @foreach ($cities as $city)
                        <option name="city" value="{{ $city->id }}">{{ $city->name ?? '' }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="box-footer">
                  <input class = "btn btn-primary btn-submit" type="submit" value="Сохранить">
                  <input class = "btn btn-default" type="reset" value="Отменить">
                </div>
              </form>
            </div>


          <div role="tabpanel" class="tab-pane" id="image">
            <h4>Настройки изображения</h4><hr>
            <p>Выберите источник изображения, определите область обрезания и нажмите "Применить" для добавления изображения к акции.</p>

            <form action="" method="" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      Использовать текущее изображение
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      Использовать изображение бренда
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                     Загрузить изображение с локального компьютера
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
                     Загрузить изображение из интернета
                    </label>
                  </div>
                </div>
               </form>
             
               <div class="panel-body">
                <div class="row">
                  <div class="col-md-4 text-center">
                    <div id="upload-demo" style="width:350px"></div>
                  </div>

                  <div class="col-md-4" style="padding-top:30px;">
                    <form action="{{ route('image.crop')}}" enctype="multipart/form-data" method="POST">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label>Выберите изображение:</label>
                        <input type="file" name="image" id="upload">
                      </div>
                            
                      <div class="form-group">
                        <button class="btn btn-success upload-result" type="submit">Обрезать и загрузить</button>
                      </div>
                    </form>
                  </div>

                  <div class="col-md-4" style="">
                    <div id="upload-demo-i" style="background:#e1e1e1;width:300px;padding:30px;height:300px;margin-top:30px"></div>
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
  </div>
</section>

@section('bottom_scripts')

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
