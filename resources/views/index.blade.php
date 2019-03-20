@extends('layouts.site')

@section('content')
    @include('element.slider')
    <div class="container">
            @include('element.needgidro')
            @include('element.mywork')
            @include('element.workitem')
            @include('element.ocompany')
            @include('element.mybestwork')
            @include('element.indexMaterial')



    </div>
    @include('element.footer')


@endsection