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
                
                @include('adminlte.forms.action-edit')

              </div>

              <div role="tabpanel" class="tab-pane fade" id="image">
                <h4>Настройки изображения</h4><hr>
                <p>Выберите источник изображения, определите область обрезания и нажмите "Применить" для добавления изображения к акции.</p>
                
                @include('adminlte.forms.image-upload')                
               
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

@section('extra-js')
  @parent
  <script>
    $(document).ready(function() {
      $('#brands').select2();
      $('#categories').select2({
        placeholder: "Выберите категории"
      });
      $('#tags').select2({
        placeholder: "Выберите тэги",
      //  tags: true,
      });
      $('#cities').select2();
    });
  </script>
  
  <script>
    $(document).ready(function(){
      $('.image-tab').click(function(){
          $('.nav-pills a[href="#image"]').tab('show');
      });
    });
  </script>
@endsection

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