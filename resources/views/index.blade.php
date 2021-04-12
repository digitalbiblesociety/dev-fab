@extends('_layouts.main')

@section('header')
@parent
    <style>
    .tagline {margin: 2rem 0;font-size: 1.4rem;line-height: 1.5;}
    .jvectormap-marker {display: none;}
    div.questions  {margin:2.5em 5%;}  @media (max-width:46em){div.questions {display:none;}}
    .questions img  {margin-bottom: .8em;}
    div.answers    {margin: 2em auto; width: 60%; display:flex;} @media (max-width:46em){div.answers {width:80%;}}
    .answers-image {margin-right:2em;}
    .answers-svg   {width:12em;}

</style>
    <title>World Map | Find a Bible</title>
@endsection

@section('subnav')
    <nav role="tablist">
        <a id="view_persecution">{{ trans('shin::fields.world_watch_list') }}</a>
        <a id="view_christians">{{ trans('shin::fields.christians') }}</a>
        <a id="view_organizations">{{ trans('shin::fields.organizations') }}</a>
    </nav>
@endsection

@section('main')

    <div id="map1">
        <div class="continent-nav row">
            <a class="small-2 africa" title="{{trans('app.index.africa')}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><path fill="#fff" d="M403.5 277.8c74.6-55.6 69.2-89.8 69.2-89.8.5-7.3-22.8 1.5-22.8 1.5-10.7 2.3-23-4.6-23-4.6l-22.7-28.2-16.7-26.6S385.3 96 370 86c-15-10-19-14.4-6.7-25 12.2-10.7 0-12.3 0-12.3s-25 .8-46.3-6.8c-21.3-7.7-39.5-16-41-6.2-1.5 10-13.7 12.2-13.7 12.2l-22-11.4s-32.7-2.3-25.8-9c6.8-7 0-27.5 0-27.5-13.7 1-67 11.5-67 11.5L113 16C78.8 27.2 85.6 54 75 60.7s-52.4 45.7-47.2 57c5.3 11.5 5.3 38.8 3.8 47.3s1.5 9.2 29.6 46.6c28 37.2 75.3 6.8 102 8.4 26.5 1.5 48 18.2 41 34.2-7 16 0 22 0 22 41 36.6 20.4 67 16.6 78.4-3.8 11.4-3.8 19-3.8 19l13 32 7.5 27.3s19 41 19 44.7c0 3.8 0 21.3 6 22 6.2.8 35.8-3.8 35.8-3.8 49.5-13 61-66.3 61-66.3 6 0 19-6.8 14.3-18.2-4.6-11.4.8-30.4 10.6-32.7 10-2.3 32.7-17.5 19-47.2-13.4-29.5.3-53.8.3-53.8zM456.2 348.4c0 5.3-20 19-20 19-13.2 6.4-9.2 10-9.2 10 5.3 4.5 10-5.4 2.3 14.3-7.6 19.8-11.4 36.6 6.8 38s15.3-16.7 26-47.2c10.5-30.4 0-42 0-42-1.4 0-5.8 2.6-5.8 8z"/></svg>
            </a>
            <a class="small-2 australia" title="{{trans('app.index.australia')}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 952.4 952.4"><path fill="#fff" d="M35 509.4C63.3 565.8 89.6 627 80.2 687c-.8 5.2 3.3 10 8.7 10h39c2.7 0 5.3-1.3 7-3.5 47.2-64 111.2-84 111.2-84 57.8-17.4 120-32.8 160-32.8 74.7 0 92.5 61.2 96.5 84.6 1 5.2 5.4 9 10.7 9 4.8 0 9.4-2 12.6-5.6l34.7-38.4c3.5-3.8 9.8-2 10.6 3 10.7 67.2 63.5 136.4 73.5 141.8 1 .6 2 .8 3 .8h155c3.2 0 5.8-2.4 6-5.5 5.6-58.8 95.8-143.7 130.3-174.3 8.6-7.5 13.4-18.2 13.4-29.5v-74c0-1-.2-2-.6-3l-88-176c-.6-1.2-1.7-2.2-3-2.8-72-33-68.2-115-66.8-130 0-1.4-.3-3-1.2-4.2L771.6 145c-2-2.7-5.8-3.3-8.5-1.3l-9.6 7c0-42.6-17.7-79-27.6-96.3-2.6-4.5-9.2-4-11 .8l-20.3 52.2c-.3.7-.4 1.5-.4 2.2 0 43.3-7.2 72.4-15 91-6.8 17-27.3 23-42.5 13.2l-95-62c-3-2-3.7-6.2-1.4-9L587 86c3.3-4 .4-10-4.8-10H436.6c-1.6 0-3 .5-4.2 1.6l-47.7 45c-2.5 2.4-2.6 6.4 0 8.8L397 144c-40.6 13.6-68-13.8-77.7-26-2.3-3-6.5-3.2-9-.7L206 217.8c-.8 1-1.5 2-1.7 3.3C193.3 284.7 71 328 32.7 340c-7 2.2-12.5 8-14.2 15.2l-18 74.6c-1 4.7-.5 9.6 1.5 14 9.8 20.8 21.5 43 33 65.8z"/></svg>
            </a>
            <a class="small-2 northamerica" title="{{trans('app.index.northAmerica')}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 612"><path fill="#fff" fill-rule="evenodd" d="M467 440.4c-8.2-44.4-38.6-23-60.4-23.2-14.4-.2-14.7 14.7-17.3 24.7-2.8 10.6 2.2 20.8 11.4 26 9 5.3 17.8 2.8 23.2-7.8 2.2-4.6 11.8-4.5 11.6-4.2-14 24.7 33 29.7 16 55.4-18.5-17.2-40.6-27.2-66.2-31.8-14.7-2.6-29.4-8.8-35-28-5.2-17-26.5-20.8-38.4-34.6-25.4-29.5-52-54.7-45.6-99.8 2.7-19.7-18-35.8-28-53.6-13.5-24.8-33-44.2-63.8-50.2-19.6-3.8-34.8-4.7-42.8 17.2-3 8-11.2 5.4-15.2 3.7-12.4-5.4-26-10.7-35.4-20-11.2-11-7.4-23.4 8-29.4 5.4-2.2 9-3.7 7.7-10.3-1-5-3.6-4.2-7.2-3-10.6 3.2-21.8-.5-21-10.8.8-11.4 14-7.8 24.5-6-4-12-15.6-12.4-19.3-18.7 35.8-37 76.8-14 116-9.7 12.3 1.3 23.8 4.3 36.4.8 29.6-8.3 59-4.6 85.7 9.4 16.6 8.7 30.8-6.2 46 0 21 8.5 28.6-7 36.5-21 6.2-11.4 12.7-11.2 17.8-.2 4.2 9 13.2 12 18.6 18 7.5 8.5 9.2 9.4 13.3-.7 2.4-6 4.7-11.4 12.8-7.3 8 4 8.5 15.4 5.7 16.8-25 13-5.6 23.6 4 36.2-22 2.6-45-9.7-58.3 17.4-9 18.6-5.3 34 8.6 41.2 21.7 11 45.2 17.5 52.6 46.2 7-23.6 15.8-44.8 10.5-69-1.3-6.3-8.5-19 5.3-21.3 14.3-2.4 26 4.4 30 19 2 6.8 2 14 10.2 15.3 8.2 1.3 8-8.7 14.5-13.5 16.8 34 40.6 62.7 51.4 98.2-15.8-1-15.7-1-21.7-17.4-2-5.2-7-3.2-10.6-3.5-8.3-.6-22.3 4.7-21 7.7 13.4 30.7-19.2 34.7-29.8 49.6-19.8 27.6-47.8 49.8-41 92z" clip-rule="evenodd"/></svg>
            </a>
            <a class="small-2 southamerica" title="{{trans('app.index.southAmerica')}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 612 612"><path fill="#fff" d="M219.3 551.3c-3.4-4-7.2-7.8-10-12-1-1.6 0-4.6.3-7.4h6.6v-6.5l-12 10 1-21.4-4.7 6c-.4 0-.8 0-1.2-.2l3.8-9.3-7.5-6.6c3-9.8 6-20.4 9.4-32l-12 1c2.3-3.6 4-7.2 6.7-10 .6-.7 4.2 1.4 8.2 2.8l8.2-44.6c-1.2-.4-2.5-.8-3.7-1l-6 18.2c-.8 0-1.5-.2-2.3-.4.3-4 0-8 .8-12 1.5-8.6 3.4-17 5.2-25.4 0-.3.2-.6 0-.8-6.2-18 7.6-31.5 10.2-47.5 1.2-7.2 1.3-14.5 1.8-21.8.6-8 .7-15.8 1.7-23.6 1.7-13.7 4-27.3 6-41 1-7 1.6-14.3 2-21.5.6-16.2-6-25.5-21-31.5-5-2-10-4.8-14.6-7.8-5.7-3.6-7-9.8-9.7-15.7-6.7-15.2-15.8-29.4-24-44-.2-.4-.4-1-.8-1.2-6.7-2.6-8-9.3-11.5-14.4v-5l14-11-11.4-1.6c2.7-8 3.8-15.7 7.6-22 3.5-5.8 9.7-10.2 15-15 3.3-3 5.2-6 4.3-11-1.4-7-1.4-14.5-3.3-21.5l3.8-9.8 2.7 4.8c4-7.3 6.5-14 10.8-19 2.3-3 7.4-3.4 11.2-5l11.4-4.8 7.2-2.7-3 7.6c4.6 3 9.4.7 11-6.8 16.5 15 35.3 17 53.4 10.2 1.7 3 2.2 5.2 3.6 6.4 8.8 7.3 20 10.8 27.3 20.8 3.3 4.4 10.2 9.8 19.2 8.4 16-2.4 30.3 7.6 35.5 22.5 0 .3 0 .5.3.8 1.8 3.5 5.3 7.3 4.8 10.4-.6 3.6-4.7 6.7-7.2 10L370 99c3-1.6 6-3 9.4-5l7.8 3.5-1.8 7c4.6-9 11-5 17-2.3 5.6 2.5 10.8 5.7 15.4 9.6 4.5 1 9 2 13.4 2.6 4.2.6 8.5 0 12.5 1.2 5.2 1.4 10.5 3.3 15 6.2 6.2 4.2 11.2 10.5 20 10 1.4 0 3.7 2.8 4.5 4.7 5.2 13.8 1.4 23.7-9 34.4-9.8 9.8-20 19.6-18.4 36.7 1.4 13.7-4.2 27-11.5 39-2 3.2-3.7 6.5-5.6 9.7-4.2 7.2-12.3 3.4-17.8 6-11.2 5.7-22 12-32.2 19-2 1.6-.8 7.6-1.6 11.5-1 5.3-2 10.8-4.2 15.8-1.8 4.3-5 8-7.8 11.8-3 4-6.5 8-9.7 12-3.3 4-6.5 8.2-9.7 12.4-11.8 15.7-21 17.5-38 7.5l-1 2c8 3.4 7.4 12.3 12 17.8 2.6 3-3.8 16-9.7 18-9 3-18.7 4.7-28.7 7-.2 3.5.4 9.4-1.4 14.3-1 2.2-6.4 3.6-10 3.8-2.8.2-5.8-2-11.2-3.8 2 6 3 10.3 4.7 14.2.3.7 3.5 0 6.8 0 0 1.5-.3 3.6-.5 5.6L273 430l-7.3 22.7c-.2.7-1.5 1.3-2.4 1.4-6.7 1.2-11.7 5.8-10.5 11.6 1 4.5 7 8 11.5 11.2 1.7 5.4-.3 9.8-5.7 13.7-3.4 2.5-5 7.5-7.4 11.3-1.2 2-2 4.2-3.6 5.6-7.5 6.4-8.6 11-4.4 20l3 5.3H239c6.5 8 12.4 15.8 19 23 2.8 3 7 4.7 12.6 8.3h-28l8 8.7-13.3-2c-1.7-1.2 1-8.6-6.4-6.7-.7.2-2.8-5.3-4.3-8.2.2 0 .4.4.7.4h.6l2.4-7.6 3.5 9 3.3-.7c-7.7-5.6-.6-8 2-12h-9l6-9.2c-10.8-.3-6.3 9.5-9.3 14.3-2.5.6-5 1-7.7 1.3z"/></svg>
            </a>
            <a class="small-2 asia" title="{{trans('app.index.asia')}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500"><path fill="#fff" d="M491.4 148.4c-6.7-.8-5.4-2.8-5.4-2.8l-15-12.4-8-6.4s-14-3-15-3h-6.7l-.5 5.7-2 .5c-1.2.3-4.2-1.6-5-2-.8-.6-3.8-1.7-3.8-1.7h-10.5s.3-.3-1.8 0-6 .3-6 .3l-3.2-2.6 2-3.8v-3.6h-1l-8.4-1.8h-16l-4-3.6s-1-.5-2-1.8-3-5-3-5l-2-1.7h-4s0 2.6-3 1.6-6-4.3-6-4.3l-2-1.3h-6l-2 3.8-1 3-1 3.6-6 3h-4l-10-2h-2l-5 4-3-1s-1-4-1-5v-8c0-1 2-3 0-4l-7-6s0-1-2-1h-7l-2 2-1 3v3s-3 1-4 0c-2 0-5-2-5-2l-3-2s0-3-2-2-4 0-4 0h-3c-1 0-4 1-5 0 0-1-2-2-2-2h-8l-1 2-5 1-2 2h-2l2-4 2-2 2-2 4-4 3-3 3-2 2-1s9-10-4-17-9-4-9-4l-9-1v-4l-3-4s-1 1-2 0-4 0-5 0h-2s-1 1-2 4-2 3-3 5 1 1-2 3l-5 3-4 1s-4 0-6 1l-6 2-4 3.7s-3 2-4 3v1l-6 3.5-9.2 6v1l1.5 3 2 2 .7 2.6-4-.3-4-1h-3l-5 5-5 5-2 3-6 6-4 1h-6l-3-7-2-3-1.3-2h-3l-2 2.6-3 4-3.3 6-1 3-1 3v11l.5 2 2 4.8 2 11-9-8-6-6-11-3h-4l5.2 6 1 3.3s-2 5-3 5l-2.4-.5h-3s-.6 1-2.7 1H88l-4 2-4.7 2-5 2s0 1-1.4 2c-1 1-1 0-3 2l-2 2-1 1h-2l-5-1-2 1.5-4 1-3 4-4 4-2 3-1 3-7 4h-4s-2-2-2-4c0-1-1-4-1-4v-2l-1-5.6-2-2 9 4h4l6-1 3-2.4v-8l-5-5-4-4-5-3.6H20l-1-2-1.4-1s-3.7-6-5.4-4c0 0-8.7 7-3.3 22s4 31 3 37-16 32-5 36 9 13 9 18c0 4 22 16 22 19 0 2-2 11-6 16s12 13 12 13 2 11-15 6-38 2-27 14c0 0 5 5 19 3.3s5 9 2 17c-4 9 2 15 7 21s8 19 13 23c4 4 6 18 5 21 0 2.7 32-5.3 45-22.3s9-11-4-15-12 0-16 1c-3 1-11-11-11-15s-4-13 21 4c0 0 7 6 18 6s18 1 18 1l9 6.4s0 10 8 7v3l4 12.5s5 26 13 24l4-4 2 10s5 4 5-3c-1-7-6-7-5-14 1-6.8-3-7 9-16.8 11-10 24-22 27-11.5 3 10 11 15 11 15l6 1 2 7s1 21 4 24c3 2 3 9 3 9l-6-2-10-7s-7-16-7-22-11 21 22 49.2c0 0 24 16 31 16s20 2 20 2l13 4 12-2 13-5 6-2.6-31 1-26.7-3-20-7-4-5h6l-11-16-10-17s-3-14 1-14 12 9 12 9l2 4s18 0 13-19l-8-9-2-4s2-7 10-8l1 6s1.6 4 7 0l2-5 4.5-4 8-2 11-8 5-14v-12s-6-9-3-12 9-3 .6-6h-1c-10-3-4-2-4-2v-5l9-4 8.3 1 3 4.7-1 4 5 3s2 9.6 0 10.4c-2 1 9 2 11-8l-2-3-2-4-2-3.8 1-3 4-2.7 4-6.4 8.3-2s20-16.7 23-42v-7l-6-5.3-5-5v-4l2-5 14-13.6 11.5-1h13l8 1.6 4.3-1 3-9s11-11 15-2c0 0 1 3 5 0l5-3v5l-5.6 4-7.6 9-9 9-3 6 1 19-5 16 15-20 9-10 1.6-6s2-6 2-7l-.5-6 4-7 7-5 7-.6 5 1 10-8 8-5.4 6-1 3-4-3-8 3-7h3l4-3s5 0 6 1 1 1.7 2 3l6 4 3.6 1v-5l3-2 4-2c0-1-2-11-8-12z"/><path fill="#fff" d="M82 116.3h5.4l5.7-1.8-4-5.7 2-10.3 2-6.7 5-7.5c1-.8 5-10.8 5-10.8l8-7 6-3.3 11-6c9-9.6-2-9.6-2-9.6l-6 6-4 2-8 1.6-7 5-7 6.4-2 9.2-4 9-5 12v7.6l2 6 3 4zM346.4 300c-.8 1.5-2.6 3.2-2.6 3.2l-4.3 1.8-6.4 5.7-4 1.8-7 2.8-5 4-1 4.2v1l6 8.5 2-5 2-3.5s1-2.6 4-3.6l6-3s0-2 7-4l8-3 4-3 4-6v-4c1-3 2-5 2-5v-9l10-7c1-1 9-8 10-8l1-1s-15 2-15 3-2 0-2-1v-12l-1-16v3l-1 11s1 2 0 4c-1 1 1 2 0 4s1 3 0 4-1 2-2 4l-2 3v2s-1 1-1 4v8c-1 0-1 1-2 3zM275 410.3c-.7 1.2-3.2 2.4-3.2 2.4s-9 7.8-10.5 8.5L257 423l-1.6 5.5v5.5l2.6 4.2 6.7.8h6.6s1.2-.7 2.4-2.2c1.2-1.6.8-1.6 1.2-2.8 0-1.2 1-2.2 2-3.2s1-4.6 1-4.6l3-14V409l-3-1h-1c0 .2-3 1-4 2.3zm16.7-38.7h-3.3l-2.2 1.2v8.2l1.2 7.5 1.6 3.2 4 7 .7 4.7 1 4.7 8.3 2s1 0 2.6-3 0-4 0-4v-8l-4-5h-1l-4.7-4s-3-1-4-2 0-1 0-1l-1-2v-6h-1zm86 74.8l4-.7 3.4-2.8 2-1-3-8-2 1-6 2-6 3-3 1s-2-2-4-3l-3-2-9-4-2-1h-9l-10-2-9-1h-2l-4 2s-4 3-2 6c0 0 5 0 7-1 3-2 6-3 6-3s3-2 6 0c3 1 7 3 8 3l5 3 10 9 5 4h5l4-4s3 1 4 2 5 5 6 5c1 1 5 1 5 1h6l6-1-7-3c-3-1-5-2-6-3l-1-4s-1-2 0-2 5-1 5-1z"/></svg>
            </a>
            <a class="small-2 europe" title="{{trans('app.index.europe')}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" fill="#fff"><path d="M496 359.3c-1-3.6 0-6.2 0-6.2l-16-3s-8-4-12.5-9c-4.5-4-11.5-12-11.5-12l-7-4-17.6-10-7-9v-27L412 269s-16.7-7-13-19.6c3.6-12.2-6-27.2-6-27.2h-21.4l-9.4 6.2 8.5 5.2 6.7 4.5v14c-35-16-27.4 13-27.4 13l2 23-23-3-17 8-14 3-10-7-1.3-9-5.3-4-9.3-2v-7l-4-13-10 9c-2 1.7-4 7-4 7v4.4l2 10 5.6 14h-13l-12 1-6 5.4-4 13-2 8-8 5.4-8 7-19 11.6s8 19.3-16.5 15c-25-4.6-26.7 8-19.6 9 7.4.6 25 12 27 27 1.7 15 4.3 34.7-11.7 23-16-11.5-42-2-46 1-5 2.8-1 6.3-5 38s35 28 35 28h8l10-1 7-6s5.4-5.2 11-10c5-4.2 0-2.4 0-2.4l.7-3s-1.8-13.6 0-16c2-3 7-5.6 7-5.6l3.7-1.7 9-4.4 3-2 4-4.3 1.4-8s-2.3-5 0-5h5.7s0 12.5 16 3 20.3 1 20.3 1l-10 9.2v27c0 6 4 5 4 5l6.4 1 .6-3c0-3 5-5.6 5-5.6s-1-5-4-8c-3-2.6 0-8 0-8v-6l4-5.4 4.5 1 12 2 5.3 5.8 9 5.5c4.4 2.4 13 14 13 14l-2.5 9-6 6-10 4.3 4.2 4 3 12.4 8-4.6 3.5-7 3.5-5.2 4.5-5.4 13-20.2-9-9.7-18.4-8s-7-1-14-19.7 9-16 9-16l6 7 11 10.6 5.2 4 10 3 5 4.2v14l4 9v9l4.7 7v5h12l6-6s2.8-10.4.5-16c-2.6-5 5.5-3 5.5-3h9.6l15-4 9-8s-6-17.3 6-21c12.8-3.4 12-8.5 12-8.5 2-26.5 20.5-24 18.7-12.6-2 11 4 10 4 10 16.7 7 14-8 14-8l5.7-10 8-5s8 1 11.8 0c3.8-1 6.4-4 15-9 8.7-4 .7-8-.2-11z"/><path d="M128.6 324c20-4 10.4-12.7 10.4-12.7l.5-10.4 1-9 10.8-1s13 5 6 11c-7.3 6-8.3 13-8.3 13s-1 25 15.6 20H184v-4l9.7-7v-16s-6.2-7-8-13c-1.8-6-6.7-16-6.7-16l-14.7-19v-25l-2-5 4.4-9 4-12s-1.7-6-15.7 13.3-22.2 15.4-25 19.5c-2.6 4-3.5 14.5 3.7 18.6 7.2 4 4 15-5.7 16.5s-20.2 18-19 26c1.5 8-.3 24 19.6 20zm104.8-86.6h18c0-8.6 11-18 11-18l6-4.6L275 226l7.3 3.7L285 247v17s0 7.3 6.3 8.6c6.3 1.3 29.4-22.5 29.4-22.5l-4.5-6s-1-12 6.6-17c7.5-5 5.7-17 5.3-19 0-2-8-10-8-14s4-24 4-24 10-12 16-14c7-2 9-8 9-8s2-21 13-27.2c12-7 19 4 19 4l-2 9-8 11s-10 4.7-16 22-.4 37-.4 37 2.5 4.6 3 7.4c.4 2 3 1 6.6 0s12 0 12 0h9c2 0 6-8 6-8l11.4-1c11.6-1 5.2-1 7-3 1-2 1-6 1-6l1-6 9.5-6.8v-32l-1.6-1.6-3-5.4V122l-2.5-10-2.7-7-1-12.4V83c6-12.3-4.5-19-4.5-19 3.7-16.4 8-37.8 8-37.8-9-46-74.6 3-74.6 3l-39 40-6 35-16 27-43 40-5.4 8-5 18 3 34 6 8zm-195-130c-5.4 2-8.5 5.7-8.5 5.7s-8 2-8-3-6-7-6-7l-10 1-7 11 4 8 9 4 3 12s-2 4 10 15c12 11.5 51-19 51-19 6-42-33-27.2-39-25.3z"/></svg>
            </a>
        </div>

    </div>

    <div class="christian-percent-key row">
        <div class="small-1">0%</div>
        <div class="small-10 info-gradient"></div>
        <div class="small-1">100%</div>
    </div>

    <div class="world-watch-list-key row">
        <div class="small-3 extreme">{{ trans('app.index.extremePersecution') }}</div>
        <div class="small-3 severe">{{ trans('app.index.severePersecution') }}</div>
    </div>

    <div class="tagline text-center">
        <h4> {!! trans('app.index.stat_line', [
                'numBibles'        => "<a href='".route('bibles.index')."'>".\DigitalBibleSociety\Shin\Shin::i18n_numeral(\DigitalBibleSociety\Shin\Models\Bible\Bible::count())."</a>",
                'numOrganizations' => "<a href='".route('organizations.index')."'>".\DigitalBibleSociety\Shin\Shin::i18n_numeral(\DigitalBibleSociety\Shin\Models\Organization\Organization::count())."</a>",
                'numLangs'         => "<a href='".route('languages.index')."'>".\DigitalBibleSociety\Shin\Shin::i18n_numeral(\DigitalBibleSociety\Shin\Models\Language\Language::count())."</a>",
                'numResources'     => "<a href='".route('languages.index')."'>".\DigitalBibleSociety\Shin\Shin::i18n_numeral(\DigitalBibleSociety\Shin\Models\Resource\Resource::count())."</a>"
            ])  !!}.</h4>
    </div>

    <div class="row text-center questions">
        <div class="medium-3">
            <img src="/img/fab_color_language.svg" /><br>
            {{ trans('app.index.question_looking_for_bible') }}
        </div>
        <div class="medium-3">
            <img src="/img/fab_color_traveler.svg" /><br>
            {{ trans('app.index.question_traveling') }}
        </div>
        <div class="medium-3">
            <img src="/img/fab_color_group.svg" /><br>
            {{ trans('app.index.question_missionary') }}
        </div>
        <div class="medium-3">
            <img src="/img/fab_color_present.svg" /><br>
            {{ trans('app.index.question_outreach') }}
        </div>
    </div>

    <div class="answers">
        <div class="answers-image">
            <img class="answers-svg" src="https://images.bible.cloud/fab_color_globe.svg"/>
        </div>
         <div class="answers-text">
                {{ trans('app.index.answer_provide') }} Find-A-Bible seeks to provide comprehensive data on existing Bible resources in the 6000+ language of the world.<br>
                {{ trans('app.index.answer_help') }} Would you help us ensure that Bible resources can be discovered, secured, and shared? If you know of Bible resources not found in this directory, let us know!<br>
                <a></a> {{ trans('app.index.answer_contact') }} Contact Us for more information!</a><br>
         </div>
    </div>

@endsection

@section('footer')
    @parent
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="{{ mix('js/map.js') }}"></script>
    <script>
        jQuery(function(){
            let $ = jQuery;
            let unset = {"BD":"#f0f0f0","BE":"#f0f0f0","BF":"#f0f0f0","BG":"#f0f0f0","BA":"#f0f0f0","BN":"#f0f0f0","BO":"#f0f0f0","JP":"#f0f0f0","BI":"#f0f0f0","BJ":"#f0f0f0","BT":"#f0f0f0","JM":"#f0f0f0","BW":"#f0f0f0","BR":"#f0f0f0","BS":"#f0f0f0","BY":"#f0f0f0","BZ":"#f0f0f0","RU":"#f0f0f0","RW":"#f0f0f0","RS":"#f0f0f0","LT":"#f0f0f0","LU":"#f0f0f0","LR":"#f0f0f0","RO":"#f0f0f0","GW":"#f0f0f0","GT":"#f0f0f0","GR":"#f0f0f0","GQ":"#f0f0f0","GY":"#f0f0f0","GE":"#f0f0f0","GB":"#f0f0f0","GA":"#f0f0f0","GN":"#f0f0f0","GM":"#f0f0f0","GL":"#f0f0f0","KW":"#f0f0f0","GH":"#f0f0f0","OM":"#f0f0f0","_2":"#f0f0f0","_1":"#f0f0f0","_0":"#f0f0f0","JO":"#f0f0f0","HR":"#f0f0f0","HT":"#f0f0f0","HU":"#f0f0f0","HN":"#f0f0f0","PR":"#f0f0f0","PS":"#f0f0f0","PT":"#f0f0f0","PY":"#f0f0f0","PA":"#f0f0f0","PG":"#f0f0f0","PE":"#f0f0f0","PK":"#f0f0f0","PH":"#f0f0f0","PL":"#f0f0f0","ZM":"#f0f0f0","EH":"#f0f0f0","EE":"#f0f0f0","EG":"#f0f0f0","ZA":"#f0f0f0","EC":"#f0f0f0","AL":"#f0f0f0","AO":"#f0f0f0","KZ":"#f0f0f0","ET":"#f0f0f0","ZW":"#f0f0f0","ES":"#f0f0f0","ER":"#f0f0f0","ME":"#f0f0f0","MD":"#f0f0f0","MG":"#f0f0f0","MA":"#f0f0f0","UZ":"#f0f0f0","MM":"#f0f0f0","ML":"#f0f0f0","MN":"#f0f0f0","MK":"#f0f0f0","MW":"#f0f0f0","MR":"#f0f0f0","UG":"#f0f0f0","MY":"#f0f0f0","MX":"#f0f0f0","VU":"#f0f0f0","FR":"#f0f0f0","FI":"#f0f0f0","FJ":"#f0f0f0","FK":"#f0f0f0","NI":"#f0f0f0","NL":"#f0f0f0","NO":"#f0f0f0","NA":"#f0f0f0","NC":"#f0f0f0","NE":"#f0f0f0","NG":"#f0f0f0","NZ":"#f0f0f0","NP":"#f0f0f0","CI":"#f0f0f0","CH":"#f0f0f0","CO":"#f0f0f0","CN":"#f0f0f0","CM":"#f0f0f0","CL":"#f0f0f0","CA":"#f0f0f0","CG":"#f0f0f0","CF":"#f0f0f0","CD":"#f0f0f0","CZ":"#f0f0f0","CY":"#f0f0f0","CR":"#f0f0f0","CU":"#f0f0f0","SZ":"#f0f0f0","SY":"#f0f0f0","KG":"#f0f0f0","KE":"#f0f0f0","SS":"#f0f0f0","SR":"#f0f0f0","KH":"#f0f0f0","SV":"#f0f0f0","SK":"#f0f0f0","KR":"#f0f0f0","SI":"#f0f0f0","KP":"#f0f0f0","SO":"#f0f0f0","SN":"#f0f0f0","SL":"#f0f0f0","SB":"#f0f0f0","SA":"#f0f0f0","SE":"#f0f0f0","SD":"#f0f0f0","DO":"#f0f0f0","DJ":"#f0f0f0","DK":"#f0f0f0","DE":"#f0f0f0","YE":"#f0f0f0","AT":"#f0f0f0","DZ":"#f0f0f0","US":"#f0f0f0","LV":"#f0f0f0","UY":"#f0f0f0","LB":"#f0f0f0","LA":"#f0f0f0","TW":"#f0f0f0","TT":"#f0f0f0","TR":"#f0f0f0","LK":"#f0f0f0","TN":"#f0f0f0","TL":"#f0f0f0","TM":"#f0f0f0","TJ":"#f0f0f0","LS":"#f0f0f0","TH":"#f0f0f0","TF":"#f0f0f0","TG":"#f0f0f0","TD":"#f0f0f0","LY":"#f0f0f0","AE":"#f0f0f0","VE":"#f0f0f0","AF":"#f0f0f0","IQ":"#f0f0f0","IS":"#f0f0f0","IR":"#f0f0f0","AM":"#f0f0f0","IT":"#f0f0f0","VN":"#f0f0f0","AR":"#f0f0f0","AU":"#f0f0f0","IL":"#f0f0f0","IN":"#f0f0f0","TZ":"#f0f0f0","AZ":"#f0f0f0","IE":"#f0f0f0","ID":"#f0f0f0","UA":"#f0f0f0","QA":"#f0f0f0","MZ":"#f0f0f0"};
            let christianpct = {"BD":"#e3ece3","BE":"#75a375","BF":"#94b894","BG":"#6c9d6c","BA":"#7ca87c","BN":"#a7c4a7","BO":"#679a67","JP":"#c9dbc9","BI":"#70a070","BJ":"#82ac82","BT":"#d3e2d3","JM":"#75a375","BW":"#72a172","BR":"#6a9b6a","BS":"#679a67","BY":"#7aa77a","BZ":"#6f9f6f","RU":"#80aa80","RW":"#689b68","RS":"#689b68","LT":"#6c9d6c","LU":"#72a172","LR":"#6c9d6c","RO":"#669966","GW":"#a9c6a9","GT":"#679a67","GR":"#679a67","GQ":"#679967","GY":"#79a679","GE":"#6a9c6a","GB":"#78a578","GA":"#72a172","GN":"#a9c6a9","GM":"#abc7ab","GL":"#679a67","KW":"#9fbf9f","GH":"#73a273","OM":"#c5d8c5","_2":"white","_1":"white","_0":"white","JO":"#b4cdb4","HR":"#699b69","HT":"#6c9d6c","HU":"#6d9e6d","HN":"#6b9c6b","PR":"#679a67","PS":"white","PT":"#689a68","PY":"#679a67","PA":"#699b69","PG":"#669966","PE":"#689b68","PK":"#ccddcc","PH":"#699b69","PL":"#689a68","ZM":"#679a67","EH":"#f6f9f6","EE":"#93b793","EG":"#9bbc9b","ZA":"#6d9e6d","EC":"#669966","AL":"#9bbc9b","AO":"#6a9c6a","KZ":"#7da87d","ET":"#76a476","ZW":"#6c9d6c","ES":"#6f9f6f","ER":"#76a476","ME":"#6e9f6e","MD":"#679a67","MG":"#84ad84","MA":"#c8dac8","UZ":"#c4d8c4","MM":"#aec9ae","ML":"#b8d0b8","MN":"#c8dac8","MK":"#75a375","MW":"#6e9e6e","MR":"#ebf2eb","UG":"#6a9c6a","MY":"#a5c3a5","MX":"#699b69","VU":"white","FR":"#75a375","FI":"#6d9e6d","FJ":"#75a375","FK":"#689a68","NI":"#6a9c6a","NL":"#82ab82","NO":"#6b9d6b","NA":"#6a9c6a","NC":"white","NE":"#b8d0b8","NG":"#7da87d","NZ":"#7aa67a","NP":"#d5e3d5","CI":"#8ab18a","CH":"#6d9d6d","CO":"#abc7ab","CN":"#b8d0b8","CM":"#73a273","CL":"#6b9c6b","CA":"#74a274","CG":"#689a68","CF":"#aec9ae","CD":"#6a9b6a","CZ":"#a6c4a6","CY":"#6e9e6e","CR":"#6c9d6c","CU":"#6c9d6c","SZ":"#6d9e6d","SY":"#a9c6a9","KG":"#9cbd9c","KE":"#6c9d6c","SS":"#77a577","SR":"#7da97d","KH":"#d3e2d3","SV":"#6d9e6d","SK":"#6b9c6b","KR":"#8eb38e","SI":"#6e9f6e","KP":"#bcd3bc","SO":"#ffffff","SN":"#b1cbb1","SL":"#8db38d","SB":"white","SA":"#b6ceb6","SE":"#74a274","SD":"#c9dbc9","DO":"#689a68","DJ":"#b4cdb4","DK":"#6d9d6d","DE":"#77a477","YE":"#ffffff","AT":"#73a273","DZ":"#c9dbc9","US":"#71a071","LV":"#7aa67a","UY":"#79a579","LB":"#84ad84","LA":"#c7dac7","TW":"white","TT":"#79a679","TR":"#e7efe7","LK":"#b0cab0","TN":"#e7efe7","TL":"white","TM":"#abc7ab","TJ":"#cedfce","LS":"#6a9c6a","TH":"#d8e5d8","TF":"white","TG":"#8eb48e","TD":"#89b189","LY":"#c9dbc9","AE":"#abc7ab","VE":"#679967","AF":"#fbfcfb","IQ":"#c2d6c2","IS":"#689a68","IR":"#e0eae0","AM":"#669966","IT":"#6c9d6c","VN":"#aec9ae","AR":"#abc7ab","AU":"#77a477","IL":"#bfd4bf","IN":"#c4d8c4","TZ":"#77a477","AZ":"#b9d0b9","IE":"#689a68","ID":"#d3e2d3","UA":"#6c9d6c","QA":"#a1c1a1","MZ":"#7aa67a"};
            let opendoors = {
                @foreach($countries as $country)
                    @if($country->persecution)
                        "{{ $country->id }}": "{{ ($country->persecution->rank < 13) ? '#ac152b' : '#FF7A0D' }}"@if(!$loop->last),@endif
                    @else
                        "{{ $country->id }}": "#f0f0f0"@if(!$loop->last),@endif
                    @endif
                @endforeach
            };

            let organizations = [
                @foreach($organizations as $organization)
                    {latLng: [{{ $organization->latitude }}, {{$organization->longitude}}], name: "{{ $organization->slug }}"},
                @endforeach
            ];

            function focusRegion(r,s,lt,lg) {
                $('.' + r).click(function(){
                    $('#map1').vectorMap('set', 'focus', {scale:s, lat:lt, lng:lg, animate:true});
                });
            }

            focusRegion("australia", 3, -22, 150);
            focusRegion("africa", 3, -2, 30);
            focusRegion("southamerica", 4, -15, -65);
            focusRegion("northamerica", 4, 39, -95);
            focusRegion("asia", 4, 36, 105);
            focusRegion("europe", 4, 54, 6);

            $('#map1').vectorMap({
                map:'world_mill_en',
                zoomOnScroll: false,
                panOnDrag:true,
                focusOn:{
                    x:0.5,
                    y:0.5,
                    scale:1,
                    animate:true
                },
                series:{
                    regions:[{
                        attribute:'fill'
                    }]
                },
                markers: organizations,
                markerStyle: {
                    initial: {
                        fill: '#F8E23B',
                        stroke: '#383f47',

                    }
                },
                onRegionClick:function(event, code) {
                    $(location).attr("href", "{{URL::to('/')}}/countries/"+ code);
                },
                onMarkerClick: function (event, index) {
                    $(location).attr("href", "{{URL::to('/')}}/organizations/" + organizations[index].slug);
                }
            });

            let map = $('#map1').vectorMap('get', 'mapObject');
            map.series.regions[0].setValues(christianpct);

            $('#view_persecution').click(function(e) {
                let map = $('#map1').vectorMap('get', 'mapObject');
                $(".world-watch-list-key").slideDown("slow");
                $(".christian-percent-key").slideUp("slow");
                $('.jvectormap-marker').hide();

                map.series.regions[0].setValues(unset);
                map.series.regions[0].setValues(opendoors);
            });

            $('#view_christians').click(function(e) {
                let map = $('#map1').vectorMap('get', 'mapObject');
                $(".world-watch-list-key").slideUp("slow");
                $(".christian-percent-key").slideUp("slow");
                $('.jvectormap-marker').hide();

                map.series.regions[0].setValues(unset);
                map.series.regions[0].setValues(christianpct);

            });

            $('#view_organizations').click(function(e) {
                let map = $('#map1').vectorMap('get', 'mapObject');
                $('.jvectormap-marker').toggle();
            });
        })

    </script>
@endsection
