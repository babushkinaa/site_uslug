<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @for ($i = 0; $i < $slidercount; $i++)
                @if ($i==0)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="active"></li>
                @else
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
                @endif
            @endfor
        </ol>
    <div class="carousel-inner">
        @foreach ($sliders as $slider)
            @if ($slider->id == 1)
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/storage/{{$slider->url}}" alt="{{$slider->title}}">
                        <div class="carousel-caption d-none d-md-block">
                        <a href="/{{$slider->href}}">
                                <h3>{{$slider->title}}</h3>
                                <p>{{$slider->description}}</p>
                            </a>
                        </div>
                </div>
                
            @else
                
                <div class="carousel-item">
                        <img class="d-block w-100" src="/storage/{{$slider->url}}" alt="{{$slider->title}}">
                        <div class="carousel-caption d-none d-md-block">
                                <a href="/{{$slider->href}}">
                                        <h3>{{$slider->title}}</h3>
                                        <p>{{$slider->description}}</p>
                                </a>
                        </div>
                </div>
            @endif

        @endforeach

    </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
</div>
    