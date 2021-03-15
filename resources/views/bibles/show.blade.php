@extends('_layouts.main')

@section('subheader')
    @include('_partials.header.ogp.bible', ['bible' => $bible])
    <style>

        #bible aside dl {
            display: flex;
            justify-content: space-between;
            background: #ccc;
            flex-direction: column;
            text-align: center;
            margin: 1rem;
            border: thin solid gray;
            border-radius: 10px;
        }

        #bible aside dl dt {
            background-color: #f0f0f0;
            color: #222;
            padding: .5rem;
            font-weight: bold;
            text-align: left;
            text-transform: uppercase;
            font-size: .75rem;
        }

        .panel {
            display: flex;
            align-items: stretch;
            justify-content: center;
            margin: 8px 0 10px;
            border-radius: 9px;
            border: thin solid #eee;
        }

        .shadow {
            box-shadow: 0 1px 3px rgba(0,0,0,.12), 0 1px 2px rgba(0,0,0,.24);
        }

        .type {
            background-color: #f0f0f0;
            margin: 1rem;
            border: thin solid #ccc;
            padding: 8px;
            border-radius: 6px;
            color: #222;
            background-repeat: no-repeat;
        }

        .link-type-title {
            font-size: 1.3rem;
            font-weight: 400;
            margin: 0 0 0 30px;
            text-transform: uppercase;
        }

        .organization-section {
            background-color: #fff;
            text-align: center;
            font-size: smaller;
            padding: 12px 6px 6px;
            align-items: center;
            color: #222;
        }

        .link {
            height: 30px;
            display: block;
            background-color: #999;
            line-height: 30px;
            color: #fff;
            margin: 9px 0;
            font-size: .88rem;
            width: 100%;
            font-weight: 300;
            background-image: url(https://images.bible.cloud/fab/icons/fab-icon-link1.svg);
            background-repeat: no-repeat;
            background-position: 0;
            background-size: 30px 30px;
            border-radius: 4px;
            padding-left: 42px;
            overflow: hidden;
            text-overflow: ellipsis;
        }

    </style>
@endsection

@section('main')

    @include('_partials.banner', [
        'title'     => $bible->title,
        'subtitle'  => $bible->title_vernacular,
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/language/'.substr($bible->id,0,3).'.jpg'
    ])

<article id="bible" class="columns">
    <div class="row">
        <aside class="medium-3">
            @include('_partials.bible.aside', ['bible' => $bible])
        </aside>
        <div class="medium-9">
            @include('_partials.bible.links', ['bible' => $bible])
        </div>
    </div>
</article>
@endsection

