@extends('_layouts.main')

@section('main')

    @include('shin::_partials.banner', [
        'title'     => trans('shin::fields.contact'),
        'subtitle'  => '',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/agencies.jpg',
        'tabs' => [
            i18n_link('/about')         => trans('shin::fields.about'),
            i18n_link('/about/faq')     => trans('shin::fields.faq'),
            i18n_link('/about/contact') => trans('shin::fields.contact'),
        ]
    ])

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


