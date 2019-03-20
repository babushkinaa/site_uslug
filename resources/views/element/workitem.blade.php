<p class="font-weight-bold">
<h5> <strong>Компания {{setting('site.title')}} выполняет:

        <a class="indexvse" href="{{route('uslugi')}}"> все услуги</a>

    </strong></h5>
</p>


<div class="card-deck">

    @foreach ($works as $work)
          <div class="card">
            <img class="card-img-top" src="/storage/{{$work->img}}" alt="{{$work->name}}">
            <div class="card-body">
              <a href="{{route('uslugislug',$work->slug)}}">
              <h5 class="card-title">{{$work->name}}</h5>
              </a>
              <p class="card-text">
                  {!! $work->sdescription !!}
              </p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Стоимость работ от:  {{$work->price}} руб.</small>

            </div>
          </div>
    @endforeach


          </div>