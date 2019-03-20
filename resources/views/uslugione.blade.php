@extends('layouts.site')

@section('content')
    <div class="container">

{{--<br>--}}
        @include('element.crochki.uslugione')
        {{--@include('element.arendatopone')--}}
        @include('element.uslugione')
        {{--{{dd($oneuslug)}}--}}

        @include('element.footer')
    </div>



@endsection