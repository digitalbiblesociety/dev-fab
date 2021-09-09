@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ trans('shin::fields.contact') }} | {{ trans('app.title') }}</title>
    <style>
        a.nav-about     {color: var(--primary-color)!important}
        .fab-form        {margin: 2em auto; max-width:600px;}
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

@section('page_info')
    <div class="modal-info">
        {!!  trans('shin::fab.help.introduction') !!}
        {!!  trans('shin::fab.help.mission') !!}
        {!!  trans('shin::fab.help.about') !!}
        {!!  trans('shin::fab.help.more', ['url' => i18n_link('/about/help')]) !!}
    </div>
@endsection

@section('main')

    @include('shin::_partials.banner', [
    'title'           => trans('shin::fab.about.contact.title'),
    'subtitle'        => trans('shin::fab.about.contact.subtitle'),
    'icon'            => 'people_agencies',
    'iconClass'       => 'banner-icon',
    'iconType'        => 'icons',
    'backgroundImage' => 'https://images.bible.cloud/fab/banners/contributors.jpg',
    'tabs' => [
        i18n_link('/about')     => trans('shin::fields.about'),
        i18n_link('/about/faq') => trans('shin::fields.faq'),
        i18n_link('/about/help')    => trans('shin::fab.fields.help'),
        i18n_link('/about/add') => trans('shin::fab.bibles.suggest_bibles'),
        '#'                     => trans('shin::fields.contact')
    ],
    'breadcrumbs' => [
            i18n_link('/')  => trans('shin::fields.home'),
            i18n_link('/about')   => trans('shin::fields.about'),
            '#'                         => trans('shin::fields.contact'),
    ]
])


    <form id="contact-form" action="https://formspree.io/f/xgerrbpe" method="POST">
        <div class="fab-form">
            <div class="form-head row">
                <img class="form-icon" src="/img/fab_color_language.svg" alt="Contact Us" />
                <h4 id="contact-form-status">{{ trans('app.index.answer_contact') }}</h4>
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

@section('footer')
    <script>
        var form = document.getElementById("contact-form");

        async function handleSubmit(event) {
            event.preventDefault();
            var status = document.getElementById("contact-form-status");
            var data = new FormData(event.target);
            fetch(event.target.action, {
                method: form.method,
                body: data,
                headers: {
                    'Accept': 'application/json'
                }
            }).then(response => {
                status.innerHTML = "Thanks for your submission!";
                form.reset()
            }).catch(error => {
                status.innerHTML = "Oops! There was a problem submitting your form"
            });
        }
        form.addEventListener("submit", handleSubmit)
    </script>
@endsection


