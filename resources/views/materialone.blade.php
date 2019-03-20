@extends('layouts.site')

@section('content')
    <div class="container">

{{--<br>--}}
        @include('element.crochki.materialone')
        {{--@include('element.arendatopone')--}}
{{--        @include('element.uslugione')--}}
        @include('element.materialone')
        {{--{{dd($material)}}--}}

        @include('element.footer')
    </div>



@endsection