{{--'nasos' => $this->nasos->showAll(),--}}
{{--'uslugi' => $this->works->showAll(),--}}
{{--'myworks' => $this->myworks->showAll(),--}}
{{--'prokat' => $this->prokat->showAll(),--}}
{{--'index' => $this->works->showsitemap()--}}

{{--{{dd($nasos,$uslugi,$myworks,$prokat)}}--}}

@extends('layouts.site')

@section('content')
    <div class="container">
        @include('element.crochki.sitemap')

        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">

                <div class="row">
                    <strong>
                        <a href="{{url('/')}}">Главная</a>
                    </strong>
                </div>
                <div class="row">
                    <strong>
                        <a href="{{url('uslugi')}}">Услуги</a>
                    </strong>
                </div>
                    @foreach ($uslugi as $post)
                      <div class="">  <a href="{{ url('uslugi/'.$post->slug) }}">{{$post->name}}</a></div>
                    @endforeach
                <div class="row">
                    <strong>
                       <a href="{{url('prokat')}}">Аренда оборудования</a>
                    </strong>
                </div>
                    @foreach ($nasos as $post)
                        <div class="">  <a href="{{ url('prokat/'.$post->slug) }}">{{$post->name}}</a></div>
                    @endforeach
                <div class="row">
                    <strong>
                        <a href="{{url('works')}}">Наши объекты</a>
                    </strong>
                </div>
                    @foreach ($myworks as $post)
                        <div class="">  <a href="{{ url('works/'.$post->slug) }}">{{$post->name}}</a></div>
                    @endforeach
                <div class="row">
                    <strong>
                        <a href="{{url('material')}}">Материалы</a>
                    </strong>
                </div>
                @foreach ($material as $post)
                    <div class="">  <a href="{{ url('material/'.$post->slug) }}">{{$post->name}}</a></div>
                @endforeach
                <div class="row">
                    <strong>
                        <a href="{{url('info')}}">Полезная информация</a>
                    </strong>
                </div>
                @foreach ($posts as $post)
                    <div class="">  <a href="{{ url('post/'.$post->slug) }}">{{$post->name}}</a></div>
                @endforeach

                <div class="row">
                    <strong>
                        <a href="{{url('contact')}}">Контакты</a>
                    </strong>
                </div>

                <div class="row">
                    <strong>
                        <a href="{{url('privacy-policy')}}">Политика конфеденциальности</a>
                    </strong>
                </div>

                <div class="row">
                    <a href="{{url('sitemapweb')}}">Карта сайта</a>
                </div>

            </div>
        </div>

        @include('element.footer')
    </div>



@endsection