<div class="row">
    <div class="col-md-3">
        <img src="/storage/{{$oneuslug[0]->img}}" alt="{{$oneuslug[0]->name}}" class="img-thumbnail">
        <br><br>
        <span class="btn btn-sm btn-outline-secondary">
            <strong>
        От: {{$oneuslug[0]->price}} руб.
                </strong>
        </span>

    </div>

    <div class="col-md-8">

        <h5> {{$oneuslug[0]->name}} </h5>
        <p>{!! $oneuslug[0]->description !!}</p>

        <ul class="list-group list-group-flush">
            {{--<li class="list-group-item">Давление: {{$onenasos[0]->davlenie}} АТМ</li>--}}
            {{--<li class="list-group-item">Вес: {{$onenasos[0]->ves}} кг</li>--}}
            {{--<li class="list-group-item">Габариты: {{$onenasos[0]->gabarity}}</li>--}}
            {{--<li class="list-group-item">Porta ac consectetur ac</li>--}}
            {{--<li class="list-group-item">Vestibulum at eros</li>--}}
        </ul>


    </div>

</div>