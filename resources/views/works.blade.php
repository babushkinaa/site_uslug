@extends('layouts.site')

@section('content')

    <div class="container">
        @include('element.crochki.mywork')


@include('element.primery_rabot_top')

        <div class="row">

            <div class="col-md-1">

            </div>

            <div class="col-md-10">

                @include('element.primer_rabot')

            </div>
        </div>

        @include('element.footer')

    </div>



@endsection