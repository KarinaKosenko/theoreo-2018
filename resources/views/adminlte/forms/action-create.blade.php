<form action="{{ route('admin.actions.store')}}" role="form"  method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
      
  <div class="box-body">
    <div class="form-group">
      <label>Бренд *</label>
      <select class="form-control" id="brands" name="brand"> 
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
        <div class="img-wrapper">
          @isset($image)
            <img class="action-img" src="{{ asset('storage/'.$image->path) }}" alt="image">
          @endisset
          @empty($image)
            <img class="action-img" src="{{ asset('storage/uploads/no_image.png') }}" alt="image">
          @endempty
        </div>
      <input type="hidden" name="image_id" value="{{ $image->id ?? '1' }}">

       <a href="#" class="image-tab"><button type="button" class="btn btn-default">Редактировать</button></a>
    </div>
    <div class="form-group">
      <label>Описание акции *</label>
      <textarea class="form-control" name="text" rows="3">{{ old('text', '') }}</textarea>
    </div>
    <div class="form-group">
      <label>Ссылка на сайт</label>
      <input type="text" class="form-control" name="links" placeholder="" value="{{ old('links', '') }}">
    </div>
    <div class="form-group">
      <label>Дата начала акции</label>
      <input type="date" id="" name="active_from" class="form-control" value="{{ old('active_from', '') }}">
    </div>
    <div class="form-group">
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
      <select class="form-control" id="categories" name="categories[]" multiple="multiple">
        @foreach ($categories as $category)
          <option name="categories[]" value="{{ $category->id }}">{{ $category->name ?? '' }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Тэги *</label>
      <select class="form-control" id="tags" name="tags[]" multiple="multiple">
        @foreach ($tags as $tag)
          <option name="tags[]" value="{{ $tag->id }}">{{ $tag->name ?? '' }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Город проведения</label>
      <select class="form-control" id="cities" name="city">
        @foreach ($cities as $city)
          <option name="city" value="{{ $city->id }}">{{ $city->name ?? '' }}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="box-footer">
    <input class = "btn btn-primary btn-success" type="submit" value="Сохранить">
    <input class = "btn btn-default" type="reset" value="Отменить">
  </div>
</form>