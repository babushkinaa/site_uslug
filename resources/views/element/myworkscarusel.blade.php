

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        @for ($i = 0; $i < $fotocount; $i++)
            @if ($i==0)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="active"></li>
            @else
                <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
            @endif
        @endfor
    </ol>


    <div class="carousel-inner">
        @php $temp_foto = true; @endphp

        @foreach($fotos as $foto)

            @if($temp_foto == true)

                <div class="carousel-item active">
                    <img class="d-block w-100" src="/storage/{{$foto}}" alt="First slide">
                </div>
                    @php $temp_foto = false; @endphp
              @else

                <div class="carousel-item">
                    <img class="d-block w-100" src="/storage/{{$foto}}" alt="Third slide">
                </div>

            @endif

        @endforeach
    </div>


    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

{{--@dump($fotocount)--}}
{{--@dump($works)--}}
{{--@dump($works[0]->material)--}}
{{--@dump($works[0]->uslugi)--}}
<div class="row">
    <div class="col-md12">
        <br>
        {!! $works[0]->description !!}

    </div>

</div>




{{--@if($works[0]->foto != null)--}}
    {{--@php--}}
        {{--$fotos = (json_decode(($works[0]->foto),true));--}}
        {{--$countarr = count($fotos);--}}
    {{--@endphp--}}

    {{--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">--}}
        {{--<div class="carousel-inner">--}}

                {{--@foreach($fotos as $foto)--}}
                    {{--@dd($foto,$countarr,key($fotos))--}}
                {{--@php--}}
                {{--$arrkey = 0;--}}
                {{--@endphp--}}

                {{--@if($arrkey == 0)--}}

                        {{--<div class="carousel-item active">--}}
                            {{--<img class="d-block w-100" src="/storage/{{$foto}}" alt="{{1}}">--}}
                        {{--</div>--}}
                    {{--@php--}}
                        {{--$arrkey++;--}}
                    {{--@endphp--}}
                {{--@else--}}

                        {{--<div class="carousel-item">--}}
                            {{--<img class="d-block w-100" src="/storage/{{$foto}}" alt="{{2}}">--}}
                        {{--</div>--}}

                {{--@endif--}}


                {{--@endforeach--}}
        {{--</div>--}}

{{--@endif--}}



