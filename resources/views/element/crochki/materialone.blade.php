<nav aria-label="breadcrumb">
    <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemscope itemtype="http://schema.org/Thing"
               itemprop="item" href="{{route('index')}}">
                <span itemprop="name">Главная</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>

        <li class="breadcrumb-item active">
            <a itemscope itemtype="http://schema.org/Thing"
               itemprop="item" href="{{route('material')}}">
                <span itemprop="name">Материалы</span>
            </a>
            <meta itemprop="position" content="2" />
        </li>

        <li class="breadcrumb-item active" aria-current="page">
            <a itemscope itemtype="http://schema.org/Thing"
               itemprop="item" href="{{route('materialslug',$material[0]->slug)}}">
                <span itemprop="name">{{$material[0]->name}}</span>
            </a>
            <meta itemprop="position" content="3" />
        </li>
    </ol>
</nav>