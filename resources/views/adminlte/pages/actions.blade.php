 <section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">

        <div class="box-header">
          <a href="{{ route('admin.actions.create') }}"><button type="button" class="btn btn-primary"><i class="fa fa-plus"></i> &nbsp; Добавить акцию</button></a>
        </div>
       
        <div class="box-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>ID</th>
              <th>Название</th>
              <th>Бренд</th>
              <th>Город</th>
              <th>Начало</th>
              <th>Окончание</th>
              <th>Текст</th>
              <th>Приложение</th>
              <th>Статус</th>
              <th>Сайт</th>
              <th>Тип</th>
              <th><i class="fa fa-pencil"></i></th>
              <th><i class="fa fa-close"></i></th>
            </tr>
            </thead>
            <tbody>

              @forelse($actions as $action)
                <tr>
                  <td>{{ $action->id ?? '' }}</td>
                  <td>{{ $action->name ?? '' }}</td>
                  <td>{{ $action->brand->name ?? '' }}</td>
                  <td>{{ $action->city->name ?? '' }}</td>
                  <td>{{ \Carbon\Carbon::parse($action->active_from)->format('d.m.Y') ?? '' }}</td>
                  <td>{{ \Carbon\Carbon::parse($action->active_to)->format('d.m.Y H:i') ?? '' }}</td>
                  <td>{{ $action->text ?? '' }}</td>
                  <td><div class="img-wrapper-min"><img src="{{ asset('/storage/' . $action->upload->path) }}" alt="image"></div></td>
                  <td>{{ $action->status ?? '' }}</td>
                  <td>{{ $action->links ?? '' }}</td>
                  <td>{{ $action->type ?? '' }}</td>
                  <td><a href="actions/edit/{{$action->id}}"><i class="fa fa-pencil"></i></a></td>
                  <td><a href="actions/delete/{{$action->id}}" onclick="return confirm('Удалить запись?');"><i class="fa fa-close"></i></a></td>
                </tr>
              @empty

                Нет акций

              @endforelse
              
            </tbody>
          </table>
        </div>
      </div>
    </div> 
  </div>
</section> 

@section('extra-js')
  @parent
  <!-- DataTables -->
  <script src="{{ asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <!-- SlimScroll -->
  <script src="{{ asset('adminlte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('adminlte/bower_components/fastclick/lib/fastclick.js') }}"></script>
  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>
@endsection
  