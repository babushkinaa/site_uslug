<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">
    <img src="/storage/{{ setting('site.logo') }}" width="30" height="30" class="d-inline-block align-top" alt="">
    {{setting('site.title')}}  
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
  </div>
  
  <div class="phone">
      {{ setting('site.phone') }}
  </div>


  <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
    {!! menu('header','menu.headermenu') !!}
  </div>
  
</nav>

</div>


     