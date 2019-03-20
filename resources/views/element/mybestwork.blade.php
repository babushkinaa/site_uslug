
<p class="font-weight-bold">
<h5> <strong>Пример работы компании {{setting('site.title')}}
                <a class="indexvse" href="{{route('myworks')}}"> все работы</a>

        </strong></h5>
</p>


{{--<div class="container">--}}
{{--<div class="row">--}}
        {{--<div class="card mb-3" style="max-width: 940px;">--}}
                {{--<div class="row no-gutters">--}}
                        {{--<div class="col-md-4">--}}
                                {{--<img src="/storage/{{$mywork['img']}}" class="card-img" alt="...">--}}
                        {{--</div>--}}
                        {{--<div class="col-md-8">--}}
                                {{--<div class="card-body">--}}
                                        {{--<h5 class="card-title">{{$mywork['name']}}</h5>--}}
                                        {{--<p class="card-text">{!! $mywork['smalldesc'] !!}</p>--}}
                                        {{--<p class="card-text"><small class="text-muted">{{$mywork['workdate']}}</small></p>--}}
                                {{--</div>--}}
                                {{--<button type="button" class="btn btn-secondary" onclick='location.href="{{route('myworksslug',$mywork['slug'])}}"'>Подробней</button>--}}

                        {{--</div>--}}
                {{--</div>--}}

        {{--</div>--}}
{{--</div>--}}
{{--</div>--}}

<div class="container">
        <div class="row">
                <div class="col-md-3">
                        <a href="{{route('myworksslug',$mywork['slug'])}}">
                                <img src="/storage/{{$mywork['img']}}" class="rounded float-left indeximg" alt="{{$mywork['name']}}">
                        </a>
                </div>
                <div class="col-md-9">
                        <a href="{{route('myworksslug',$mywork['slug'])}}" class="hrefindex">

                        {{--<div class="row">--}}
                                {{$mywork['name']}}
                                {!! $mywork['smalldesc'] !!}
                        {{--</div>--}}
                        </a>
                </div>

        </div>
</div>



