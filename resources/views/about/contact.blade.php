@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fields.contact') }} | {{ trans('app.title') }}</title>
    <style>
        .fab-form        {margin: 2em auto; max-width:500px;}
        .fab-form h4     {padding:0 2em; text-align: left;}
        .fbox            {max-width: 480px; margin:0 auto 1em auto;}
        .fbox input, .fbox textarea
                         {width:100%; border:4px #f2f2f2 groove; border-radius:9px; padding:12px; font-size:1em;}
        .form-head       {justify-content: center;align-items: center;margin-bottom:1em;}
        .form-icon       {margin-right:1em;}
        .form-name       {}
        .form-email      {}
        .form-message    {}
        .form-submit     {float:right}
        .form-submit input    {line-height: 1em; font-size: 1em; padding: .5em .8em;color: var(--primary-color);
        }
        #body            {height:160px}
    </style>

@endsection

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


    <form action="https://formspree.io/jon@dbs.org" method="POST" _lpchecked="1" >
        <div class="fab-form">
            <div class="form-head row">
                <img class="form-icon" src="/img/fab_color_language.svg" alt="Contact Us" />
                <h4>{{ trans('app.index.answer_contact') }}</h4>
            </div>

            <div class="form-name fbox">
                <label data-i18n="field.name" for="name">{{ trans('shin::fields.name') }}:</label>
                <input type="text" name="name" id="name" />
            </div>

            <div class="form-email fbox">
                <label data-i18n="field.email" for="email">{{ trans('shin::fields.email') }}:</label>
                <input type="email" name="_replyto" id="email" />
            </div>

            <div class="form-message fbox">
                <label data-i18n="field.body" for="body">{{ trans('shin::fields.message') }}:</label>
                <textarea name="body" id="body"></textarea>
            </div>

            <div class="form-submit">
                <input type="submit" value="Send">
            </div>

        </div>
    </form>

@endsection


