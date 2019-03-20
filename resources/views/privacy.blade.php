@extends('layouts.site')

@section('content')
    <div class="container">

       {!! setting('policy.policy') !!}

        @include('element.footer')
    </div>



@endsection


