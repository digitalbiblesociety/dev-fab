@extends('_layouts.main')

@section('main')

    @include('shin::languages.index')

@endsection

@section('footer')
    @parent
    <script src="{{ asset('js/dataTables.js') }}"></script>
@endsection
