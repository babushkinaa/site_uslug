<br>
<h5><strong>Материалы используемые в работе <a class="indexvse" href="{{route('material')}}"> все материалы</a>
    </strong></h5>
<div class="container">
    <div class="row">

        @foreach($materials as $material)
            @if($material->show_index == 1)
                <div class="col-md-3">
                    <a class="hrefindex" href="{{route('materialslug',['slug' => $material->slug])}}">
                    <img class="rounded float-left imgindex" src="/storage/{{$material->foto}}" width="150px" height="150px" >
                    <br>
                     {{$material->name}}
                    </a>
                </div>

            @endif

        @endforeach


    </div>
    <br>
</div>

{{--@foreach($materials as $material)--}}
{{--@if($material->show_index == 1)--}}
    {{--{{$material->name}}--}}
    {{--{{$material->show_index}}--}}
    {{--{{$material->foto}}--}}
    {{--@endif--}}

    {{--@endforeach--}}

{{--@dump($materials)--}}