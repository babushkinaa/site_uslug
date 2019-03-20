{{--<br>--}}
<div class="card p-3">
    <blockquote class="blockquote mb-0 card-body">
        <p>Вы можете взять в аренду: {{$onenasos[0]->name}}</p>
        <footer class="blockquote-footer">
            <p> <strong>Аренда с оператором: </strong>{{$onenasos[0]->p->priceoperator}}
                @if($onenasos[0]->p->priceoperator != 'Не доступно')
                    руб. <strong>смена 8 часов</strong></p>
            @endif
            <p> <strong>Аренда без оператора: </strong>{{$onenasos[0]->p->pricenooperator}}
                @if($onenasos[0]->p->pricenooperator != 'Не доступно')
                    руб. <strong>сутки</p></strong></p>
            @endif
            <small class="text-muted">

                <p><a href="{{route('contact')}}">Остались вопросы свяжитесь с нами</a></p>

            </small>
        </footer>
    </blockquote>
</div>
<br>
{{--<br>--}}