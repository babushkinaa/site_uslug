

<div class="container">

    @foreach ($posts as $work)


<div class="row">

        <div class="col-md-9">
            <a href="{{route('postslug',$work->slug)}}" class="hrefindex" alt="{{$work->name}}">

            <h4>{{$work->name}}</h4><br>

            <p> {!! $work->description !!} </p>
            </a>

        </div>

</div>
        <hr>
    @endforeach


</div>