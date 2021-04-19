@extends('_layouts.main')

@section('header')
    @parent
    <title>{{ $organization->name }} | {{ trans('app.title') }}</title>
    <style>
        #banner         {margin-bottom: 3rem; text-align: center;background: linear-gradient(to right, {{ $organization->primary_color ?? '#222' }}, {{ $organization->secondary_color ?? '#f1f1f1' }});}
        #banner h1      {padding: 3rem 0;}
        .org-name       {font-size:1.8em; color: var(--primary-color); text-transform: uppercase; margin: 1.3em 0 .25em;}
        .org-info       {padding: 0 1.5em;}
        .logo           {margin: 0 auto;max-width: 200px;width: 100%;}
        .social-links   {text-align: center;}
        .social-links a {font-size: 1.5em; padding:0 .25em;}
        address         {font-size: .8em; display: inline-flex;align-items: center;justify-content: center;flex-direction: column; font-style:normal;
                        margin-bottom:2em;}
        address b       {margin-top: 1rem;}
        #subheader nav[role=tablist] a[aria-selected=true] {border-radius: 10px 10px 0 0; color: #000;}

    </style>
@endsection

@section('subnav')
    <nav role="tablist">
        <a id="view_bibles" href="#bibles">{{ trans('shin::fields.bibles') }}</a>
        <a id="view_resources" href="#resources">{{ trans('shin::fields.resources') }}</a>
    </nav>
@endsection

@section('main')

    <div class="row">
        <aside class="medium-3 small-hide org-info">
            <div>
                <div class="logo">{!! $organization->logo !!}</div>

            @if($organization->abbreviation)
                <small>{{ $organization->abbreviation }}</small>
            @endif
            <address>
                <b>Address: </b>{{ $organization->address }}
                <b>Country: </b>{{ $organization->country }}
                <b>Phone: </b>{{ $organization->phone }}<br>
                <b>Email: </b>{{ $organization->email }}<br>
            </address>
            <nav class="social-links">
            <a href="{{ $organization->url_facebook }}" target="_blank">
                <svg class="icon">
                    <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#social_facebook"></use>
                </svg>
            </a>
            <a href="{{ $organization->url_twitter }}" target="_blank">
                <svg class="icon">
                    <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#social_twitter"></use>
                </svg>
            </a>
            <a href="{{ $organization->url_website }}" target="_blank">
                <svg class="icon">
                    <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#type_external"></use>
                </svg>
            </a>
            </nav>
            {{-- <a href="{{ $organization->url_website }}">website
            <svg class="icon">
                <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#url_website"></use>
            </svg>
            </a>
            <a href="{{ $organization->url_donate }}">donate
                <svg class="icon">
                    <use xmlns:xlink="https://www.w3.org/1999/xlink"
                         xlink:href="/img/icons.svg#menu_donate"></use>
                </svg>
            </a> --}}

            {{--
                {{ $organization->address }}
                {{ $organization->address2 }}
                {{ $organization->city }}
                {{ $organization->state }}
                {{ $organization->country }}
                {{ $organization->zip }}
            --}}
            </div>
        </aside>

        <div class="medium-9">
            <div class="row org-name">{{ $organization->name }}</div>
            <section role="tabpanel" id="bibles" aria-hidden="{{ $bibles->count() == 0 ? 'true' : 'false' }}">
            <table id="bibles_table" class="table responsive" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th data-sort-default="asc">{{ trans('shin::fields.languages') }}</th>
                        <th>{{ trans('shin::fields.country') }}</th>
                        <th>{{ trans('shin::fields.date') }}</th>
                        <th>{{ trans('shin::fields.title') }}</th>
                        <th>{{ trans('shin::fields.title_vernacular') }}</th>
                        <th>ISO</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($bibles as $bible)
                    <tr>
                        <td><a href="{{ i18n_link("/languages/$bible->iso") }}">{{ $bible->language->name ?? $bible->iso }}</a></td>
                        <td><svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/img/flags.svg#{{ $bible->country_id }}"></use></svg> {{ optional($bible->country)->name ?? '' }}</td>
                        <td>{{ $bible->date }}</td>
                        <td><a href="{{ i18n_link("/bibles/$bible->id") }}">{{ $bible->title }}</a></td>
                        <td><a href="{{ i18n_link("/bibles/$bible->id") }}">{{ $bible->title_vernacular }}</a></td>
                        <td data-hidden>{{ $bible->iso }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </section>
            <section id="resources" role="tabpanel" id="resources" aria-hidden="{{ $bibles->count() == 0 ? 'false' : 'true' }}">
                <table id="resources_table" class="table responsive" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>{{ trans('shin::fields.title') }}</th>
                        <th>{{ trans('shin::fields.title_vernacular') }}</th>
                        <th>{{ trans('shin::fields.languages') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($resources as $resource)
                        <tr>
                            <td><a href="{{ $resource['link'] }}">{{ $resource['title'] }}</a></td>
                            <td><a href="{{ $resource['link'] }}">{{ $resource['title_vernacular'] }}</a></td>
                            <td><a href="{{ i18n_link("/languages/".$resource['iso']) }}">{{ $resource['language'] ? $resource['language']['name'] : $resource['iso'] }}</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </div>

    </div>
@endsection
