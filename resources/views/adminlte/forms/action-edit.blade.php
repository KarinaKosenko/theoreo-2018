<form action="" role="form"  method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
      
  <div class="box-body">
    <div class="form-group">
      <label>Бренд *</label>
      <select class="form-control" id="brands" name="brand">
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
        <div class="img-wrapper">

          @isset($image)
            <img src="{{ asset('storage/'.$image->path) }}" alt="image">
          @endisset
          @empty($image)
              @isset($action->upload->path)
                <img src="{{ asset('storage/'.$action->upload->path) }}" alt="image">
              @endisset
          @endempty
          
        </div>
      <input type="hidden" name="image_id" value="{{ $image->id ?? $action->upload->id }}">

       <a href="#" class="image-tab"><button type="button" class="btn btn-default">Редактировать</button></a>
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
      <input type="date" id="" name="active_from" class="form-control" value="{{ dateFormat($action->active_from) ?? '' }}">
    </div>
    <div class="form-group">
      <label>Дата окончания акции</label>
      <input type="date" id="" name="active_to" class="form-control" value="{{ dateFormat($action->active_to) ?? '' }}">
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
      <select class="form-control" id="categories" name="categories[]" multiple="multiple">
        @foreach ($categories as $category)
          <option name="categories[]" value="{{ $category->id }}" {{ in_array($category->id, $actionCategoryArray) ? 'selected' : '' }} >{{ $category->name ?? '' }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Тэги *</label>
      <select multiple class="form-control" id="tags" name="tags[]" multiple="multiple">
        @foreach ($tags as $tag)
          <option name="tags[]" value="{{ $tag->id }}" {{ in_array($tag->id, $actionTagArray) ? 'selected' : ''}} >{{ $tag->name ?? '' }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Город проведения</label>
      <select class="form-control" id="cities" name="city">
        @foreach ($cities as $city)
          <option name="city" value="{{ $city->id }}" {{ $action->city_id == $city->id ? 'selected' : '' }} >{{ $city->name ?? '' }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label>Статус акции</label>
      <select class="form-control" name="status">
        <option name="status" value="new" {{ $action->status == "new" ? 'selected' : '' }} >Новая</option>
        <option name="status" value="rejected" {{ $action->status == "rejected" ? 'selected' : '' }} >Отменена</option>
        <option name="status" value="approved" {{ $action->status == "approved" ? 'selected' : '' }} >Одобрена</option>
        <option name="status" value="paid" {{ $action->status == "paid" ? 'selected' : '' }} >Оплачена</option>
      </select>
    </div>
  </div>
  <div class="box-footer">
    <input class = "btn btn-primary btn-success" type="submit" value="Сохранить">
    <input class = "btn btn-default" type="reset" value="Отменить">
  </div>
</form>
