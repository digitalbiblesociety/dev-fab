@extends('_layouts.main')

@section('header')
    @parent
    <style>
        .orgs a {
            height: 140px;
            background: #f8f8f8;
            border: thin solid #ccc;
        }

        .orgs svg {
            width: 1em;
            height: 1em;
            vertical-align: -.15em;
            fill: currentColor;
            overflow: hidden;
            margin: 0 auto;
            display: block;
            font-size: 9rem;
        }

    </style>
@endsection

@section('main')

    @include('shin::_partials.banner', [
        'title'           => trans('app.organizations.fobai.title'),
        'subtitle'        => '',
        'backgroundImage' => 'https://images.bible.cloud/fab/banners/agencies.jpg',
        'icon'            => '',
        'tabs'           => [
            route('organizations.fobai')  => trans('app.organizations.fobai.title'),
            route('organizations.index')  => trans('app.organizations.title')
        ]
    ])

    <div class="row orgs">

        @foreach($organizations as $org)
            @foreach($org->relationships as $relationship)
                @if($relationship->organization_parent_id == 452)
                    <a class="small-6 medium-4" href="/organizations/{{ $org->slug }}">{!! $org->logo !!}</a>
                @endif
            @endforeach
        @endforeach

    </div>

@endsection
