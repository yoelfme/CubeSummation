@extends('base.layout')

@section('content')
    <div class="row">
        @include('partials.commands')
        @include('partials.results')
    </div>
@endsection

@section('scripts')
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
@endsection
