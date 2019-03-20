@extends('layouts.site')

@section('content')
    <div class="container">

        @include('element.crochki.myworkone')

<br>
        <div class="container">
            <div class="row">
                <h4>{{$works[0]->name}}</h4>
            </div>
            <br>

            <div class="row">

                <div class="col-md-3">
                    <p><strong>Описание</strong></p>
                    <p>
                        <em>{!! $works[0]->smalldesc !!}</em>
                    </p>
                    <p>
                        Дата завершения: {{$works[0]->workdate}}
                    </p>
                    <p>
                        <strong>Используемые материалы:</strong>
                    </p>
                    <ul>
                    @foreach($works[0]->material as $item)
                        <li>
                            <a href="{{route('materialslug',$item->slug)}}" >
                                {!! $item->name !!}<br>
{{--                                <img src="/storage/{{$item->foto}}" height="45px" width="45px">--}}


                            </a>
                        </li>
                        @endforeach
                    </ul>

                    <p>
                        <strong>Выполненные работы:</strong>
                    </p>
                    <ul>
                        @foreach($works[0]->uslugi as $item)
                            <li>
                                <a href="{{route('uslugislug',$item->slug)}}" >
                                    {!! $item->name !!}<br>
{{--                                    <img src="/storage/{{$item->img}}" height="45px" width="45px">--}}


                                </a>
                            </li>
                        @endforeach
                    </ul>

                </div>

                <div class="col-md-9">
                    @include('element.myworkscarusel')
                </div>


            </div>
        </div>



        @include('element.footer')
    </div>



@endsection