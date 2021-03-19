@extends('_layouts.main')

@section('subheader')
    <style>
        label {
            display: block;
            margin-left: 0;
            padding-top: 20px;
            width: 100%;
            text-align: left;
        }

        input, select, textarea {
            padding: 9px;
            border: 1px solid #c9c9c9;
            outline: 0;
            width: 100%;
            background: #fff;
            box-sizing: border-box;
        }
    </style>
@endsection

@section('main')

    @include('_partials.banner', [
        'title'     => 'Contact',
        'subtitle'  => '',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/agencies.jpg',
        'tabs' => [
            '/about' => 'about',
            '/about/faq' => 'faq',
            '/about/contact' => 'contact',
        ]
    ])

    <form action="https://formspree.io/jon@dbs.org" method="POST" _lpchecked="1" class="row small-center">
        <div class="small-9">
            <label data-i18n="field.name" for="name">Name</label>
            <input type="text" name="name" id="name" />
            <label data-i18n="field.email" for="email">Email</label>
            <input type="email" name="_replyto" id="email" />
            <label data-i18n="field.body" for="body">Body</label>
            <textarea name="body" id="body"></textarea>
            <input type="submit" value="Send">
        </div>
    </form>

@endsection


