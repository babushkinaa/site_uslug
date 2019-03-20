@extends('layouts.site')

@section('content')
    <div class="container">

{{--        {{dd($material)}}--}}

        @include('element.crochki.material')
        {{--@include('element.uslugitop')--}}

        {{--@include('element.uslugi')--}}
        @include('element.material')



        @include('element.footer')

    </div>



@endsection