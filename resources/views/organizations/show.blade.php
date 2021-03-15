@extends('_layouts.main')

@section('subheader')
    <style>
        #banner {
            margin-bottom: 3rem;
            text-align: center;
            background: linear-gradient(to right, {{ $organization->primary_color ?? '#222' }}, {{ $organization->secondary_color ?? '#f1f1f1' }});
        }

        #banner h1 {
            padding: 3rem 0;
        }

        .logo {
            margin: 0 auto;
            max-width: 200px;
            width: 100%;
        }

        .social-links {
            text-align: center;
        }

        .social-links a {
            font-size:1rem;
        }

        address {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        address b {
            margin-top: 1rem;
        }
    </style>
@endsection


@section('main')

    @include('_partials.banner', [
        'title'           => $organization->slug,
        'subtitle'        => ''
    ])

    <div class="row">
        <aside class="medium-12 large-4 small-hide">
            <div class="row">
            <div class="large-12 small-4">
                <div class="logo">{!! $organization->logo !!}</div>
            </div>
            @if($organization->abbreviation)
                <small>{{ $organization->abbreviation }}</small>
            @endif

            <address class="large-12 small-8">
                <b>Address: </b>{{ $organization->address }}<br>
                <b>Phone: </b>{{ $organization->phone }}<br>
                <b>Email: </b>{{ $organization->email }}<br>
            </address>
            <nav class="social-links">
            <a href="{{ $organization->url_facebook }}">
                <svg class="icon">
                    <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#social_facebook"></use>
                </svg>
            </a>
            <a href="{{ $organization->url_twitter }}">
                <svg class="icon">
                    <use xmlns:xlink="https://www.w3.org/1999/xlink" xlink:href="/img/icons.svg#social_twitter"></use>
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

        <div class="large-8">
            <table id="bibles" class="table responsive" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Title Vernacular</th>
                        <th>Language</th>
                        <th>iso</th>
                        <th>date</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($organization->bibles as $bible)
                    <tr>
                        <td><a href="/bibles/{{ $bible->id }}">{{ $bible->title }}</a></td>
                        <td><a href="/bibles/{{ $bible->id }}">{{ $bible->title_vernacular }}</a></td>
                        <td><a href="/languages/{{ $bible->iso }}">{{ $bible->language->name }}</a></td>
                        <td data-hidden>{{ $bible->iso }}</td>
                        <td>{{ $bible->date }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

@section('footer')
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
    <script src="{{ mix('js/dataTables.js') }}"></script>
@endsection

