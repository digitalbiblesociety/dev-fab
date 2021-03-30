@extends('_layouts.main')

@section('subheader')
    <style>
        thead tr th:nth-child(-n + 3),
        tr td:nth-child(-n + 3) {
            display: none;
        }

    </style>
@endsection

@section('main')

    @include('shin::countries.index')

@endsection

@section('subfooter')
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{ mix('js/dataTables.js') }}"></script>
@endsection
