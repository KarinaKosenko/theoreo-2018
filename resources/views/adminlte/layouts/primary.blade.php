@extends('adminlte.layouts.base')

@section('header')
    @include('adminlte.parts.header')
@endsection
  

@section('main-sidebar')
    @include('adminlte.parts.main-sidebar')
@endsection


@section('content')

  <div class="content-wrapper">
    
    <section class="content-header">
      <h1>{{ $h1 ?? 'Панель управления' }} </h1>
      @include('adminlte.widgets.breadcrumb')
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

     	 @include($page)

    </section>
 </div>

@endsection


@section('footer')
	@include('adminlte.parts.footer')
@endsection


@section('control-sidebar')
   @include('adminlte.parts.control-sidebar')
@endsection
