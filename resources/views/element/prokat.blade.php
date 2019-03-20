@foreach($prokat as $item)

    {{--@dd($item)--}}
    <div class="row">

        <div class="col-md-3">
            <img src="/storage/{{$item->img}}" alt="{{$item->name}}" class="img-thumbnail">
        </div>
        <div class="col-md-9">
            <h4>{{$item->name}}</h4><br>
            <p> <strong>С оператором: </strong>{{$item->p->priceoperator}}
                @if($item->p->priceoperator != 'Не доступно')
                    руб. <strong>смена 8 часов</strong></p>
                @endif
            <p> <strong>Без оператора: </strong>{{$item->p->pricenooperator}}
                @if($item->p->pricenooperator != 'Не доступно')
                    руб. <strong>сутки</p></strong></p>
            @endif


            <p> {{$item->description}} </p>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    {{--<button type="button" class="btn btn-secondary" onclick="{{route('prokatslug',$item->slug)}}">Подробней</button>--}}
                    <button type="button" class="btn btn-secondary" onclick='location.href="{{route('prokatslug',$item->slug)}}"'>Подробней</button>
                </div>
            </div>
        </div>

    </div>
<hr>




    @endforeach