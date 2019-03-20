@extends('layouts.site')

@section('content')
    <div class="container">
        @include('element.crochki.contact')


        <h1>Компания {{setting('site.title')}}</h1>
        <address>
        <p> <h5>Город: {{setting('contact.city')}}</h5></p>
        <p> <H5>Адрес: {{setting('contact.addres')}}</H5></p>
        </address>
        {!! setting('contact.tel') !!}

        <div class="row">
            @include('element.yandex_map')
        </div>
        <br>
        @include('element.forms.request')

        @include('element.footer')
    </div>



@endsection