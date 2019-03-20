

<div class="container">

    @foreach ($material as $work)

    {{--<a href="{{route('uslugislug',$work->slug)}}" class="uslugi" >--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-2">--}}
                    {{--<img class="img-thumbnail" src="/storage/{{$work->img}}" alt="{{$work->name}}">--}}
                {{--</div>--}}

                {{--<div class="col-md-10">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-md-5">--}}
                            {{--<span class="gslug">{{$work->name}}</span>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-5">--}}
                            {{--{{$work->sdescription}}--}}
                        {{--</div>--}}
                        {{--<div class="col-md-2">--}}
                            {{--<span class="price">{{$work->price}} руб</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--<br>--}}
    {{--</a>--}}
<div class="row">
        <div class="col-md-3">
            <a href="{{route('materialslug',$work->slug)}}">
                <img src="/storage/{{$work->foto}}" alt="{{$work->name}}" class="img-thumbnail">
            </a>
        </div>
        <div class="col-md-9">
            <a href="{{route('materialslug',$work->slug)}}" class="hrefindex" alt="{{$work->name}}">

            <h4>{{$work->name}}</h4><br>

            <p> {!! $work->description !!} </p>
            </a>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    {{--<button type="button" class="btn btn-secondary" onclick="{{route('prokatslug',$item->slug)}}">Подробней</button>--}}
                    {{--<button type="button" class="btn btn-secondary" onclick='location.href="{{route('materialslug',$work->slug)}}"'>от {{$work->price}} руб.</button>--}}
                </div>
            </div>
        </div>

</div>
        <hr>
    @endforeach


</div>

<div class="">{{$material->links()}}</div>