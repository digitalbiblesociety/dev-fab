@extends('_layouts.main')

@section('subheader')
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


    <div class="row orgs">

    </div>

@endsection
