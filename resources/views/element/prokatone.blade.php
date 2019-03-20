

<div class="row">
<div class="col-md-3">
    <img src="/storage/{{$onenasos[0]->img}}" alt="{{$onenasos[0]->name}}" class="img-thumbnail">

</div>

<div class="col-md-8">

    <h5> Описание </h5>
    <p>{!! $onenasos[0]->description !!}</p>

    <ul class="list-group list-group-flush">
        <li class="list-group-item">Давление: {{$onenasos[0]->davlenie}} АТМ</li>
        <li class="list-group-item">Вес: {{$onenasos[0]->ves}} кг</li>
        <li class="list-group-item">Габариты: {{$onenasos[0]->gabarity}}</li>
        {{--<li class="list-group-item">Porta ac consectetur ac</li>--}}
        {{--<li class="list-group-item">Vestibulum at eros</li>--}}
    </ul>


</div>

</div>