@extends('_layouts.main')

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.introduction') !!}
        {!!  trans('shin::fab.help.mission') !!}
        {!!  trans('shin::fab.help.more') !!}
    </div>
@endsection

@section('main')

    <h4>404</h4>
    <p>Page not found</p>

@endsection
