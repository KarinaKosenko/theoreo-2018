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
          <input type="file" name="image" id="upload">
        </div>
        <div class="form-group">
          <button class="btn btn-success upload-result" type="submit">Применить</button>
        </div>
      </div>
      <div class="col-md-4" style="">
        <div id="upload-demo-i"></div>
      </div>
    </div>
  </div>
</form>