@extends('_layouts.main')
@section('subnav')

    @include('shin::_partials.nav.subnav', [
    'links' => [
        '/about'          => trans('shin::fields.about'),
        '/about/faq'      => trans('shin::fields.faq'),
        '#'  => trans('shin::fields.contact')
     ]
    ])

@endsection

@section('main')


    <form action="https://formspree.io/jon@dbs.org" method="POST" _lpchecked="1" class="row small-center">
        <div class="small-9">
            <label data-i18n="field.name" for="name">{{ trans('shin::fields.name') }}</label>
            <input type="text" name="name" id="name" />
            <label data-i18n="field.email" for="email">{{ trans('shin::fields.email') }}</label>
            <input type="email" name="_replyto" id="email" />
            <label data-i18n="field.body" for="body">{{ trans('shin::fields.message') }}</label>
            <textarea name="body" id="body"></textarea>
            <input type="submit" value="Send">
        </div>
    </form>

@endsection


