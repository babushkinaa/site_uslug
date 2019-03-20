@extends('layouts.site')

@section('content')
    <div class="container">

{{--<br>--}}
        {{--@include('element.crochki.uslugione')--}}
        {{--@include('element.arendatopone')--}}
{{--        @include('element.postone')--}}
        {{--@dump($posts)--}}
        {{--{{dump($posts)}}--}}
        <h1>{!! $posts[0]->name !!}</h1> {!! $posts[0]->created_at !!}
        <hr>
            {!! $posts[0]->content !!}
        @include('element.footer')
    </div>



@endsection