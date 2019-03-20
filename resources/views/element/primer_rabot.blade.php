
@foreach($work as $item)

        {{--<div class="card mb-6" style="max-width: 940px;">--}}
            {{--<div class="row no-gutters">--}}
                {{--<div class="col-md-4">--}}
                    {{--<img src="/storage/{{$item->img}}" class="card-img" alt="...">--}}
                {{--</div>--}}
                {{--<div class="col-md-8">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5 class="card-title">{{$item->name}}</h5>--}}
                        {{--<p class="card-text">{!! $item->smalldesc !!}</p>--}}
                        {{--<p class="card-text"><small class="text-muted">{{$item->workdate}}</small></p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<button type="button" class="btn btn-secondary" onclick='location.href="{{route('myworksslug',$item->slug)}}"'>Подробней</button>--}}

            {{--</div>--}}

        {{--</div>--}}


        <div class="row">

            <div class="col-md-3">
                <img src="/storage/{{$item->img}}" alt="{{$item->name}}" class="img-thumbnail">
            </div>
            <div class="col-md-9">
                <h4>{{$item->name}}</h4><br>

                <p> {!! $item->smalldesc !!} </p>
                <div class="row">
                    <div class="col-md-9"></div>
                    <div class="col-md-3">
                        {{--<button type="button" class="btn btn-secondary" onclick="{{route('prokatslug',$item->slug)}}">Подробней</button>--}}
                        <button type="button" class="btn btn-secondary" onclick='location.href="{{route('myworksslug',$item->slug)}}"'>Подробней</button>
                    </div>
                </div>
            </div>

        </div>
        <hr>



@endforeach

<div>{{$work->links()}}</div>