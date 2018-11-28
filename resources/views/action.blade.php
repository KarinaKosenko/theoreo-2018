@extends ('layouts.base')

@section ('header')
    @include ('parts.header')
@endsection

@section ('content')
    @include ('parts.action_page')
@endsection

@section ('footer')
    @include ('parts.footer')
@endsection

@section ('modal')
    @include ('widgets.modal')
@endsection

@section ('bottom_scripts')
    @include ('parts.bottom_scripts')
@endsection
