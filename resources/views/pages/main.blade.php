@extends('layouts.master')

@section('content')    
      <section class="back1">
        <div class="container">
        <div class="row">
            <div class="col l12 s12 m12 center">
            <p class="p1">АГЕНТСТВО СТРАТЕГИЧЕСКИХ <br> ИННОВАЦИЙ</p>
            <p class="p2">Развитие инфраструктуры инновационной сферы</p>
            </div>
            <div class="col l12 s12 m12 center">
            <a href="/#back222" class="waves-effect waves-light btn btn1">ПОДРОБНЕЕ</a>
            </div>
        </div>
        </div>
      </section>
      
      <section class="back2" id="back222">
            <div class="container">
            <div class="row">
            <div class="col l6 m6 s6">
            </div> 
            <div class="col l6 m6 s6 right">
            <div class="border1">
            <p class="p5">НАШИ ЦЕЛИ</p>
            </div>
            </div>
            </div>
            </div>
      </section>
      
      <section class="sec_ris">
        <div class="container">
        <div class="row">
            <div class="col l4 m6 s12 center ser">
            <img src="assets/img/i1.png" class="img5">
            <p class="p8">Развитие инфраструктуры инновационной сферы</p>
            </div>
            <div class="col l4 m6 s12 center ser">
            <img src="assets/img/i2.png" class="img5">
            <p class="p8">Разработка и внедрение научных и инновационных программ и проектов</p>
            </div>
            <div class="col l4 m6 s12 center ser">
            <img src="assets/img/i3.png" class="img5">
            <p class="p8">Популяризация научно-технического творчества молодежи</p>
            </div>
            <div class="col l4 m6 s12 center ser">
            <img src="assets/img/i4.png" class="img5">
            <p class="p8">Содействие развитию молодежного предпринимательства</p>
            </div>
            <div class="col l4 m6 s12 center ser">
            <img src="assets/img/i5.png" class="img5">
            <p class="p8">Поддержка талантливой молодежи</p>
            </div>
            <div class="col l4 m6 s12 center ser">
            <img src="assets/img/i6.png" class="img5">
            <p class="p8">Содействие развитию гражданских инициатив</p>
            </div>
        </div>
        </div>
      </section>
      
      <section>
        <div class="container">
        <div class="row">
        <div class="col l12 m12 s12">
        <p class="p9">ПОСЛЕДНИЕ НОВОСТИ</p>
        </div>
        @foreach ($news as $new)
        <div class="col l4 m12 s12">
        <div class="card card1">
            <div class="card-image">
                <div class="data1">
                <p class="p12">{{ $new->data }}</p>
                </div>
              @if( $new->img  === null)
              <img src="storage/{{ $new->img }}" class="carg">
            @else
            <img src="assets/img/img5.png" class="carg">
            @endif
            </div>
            <div class="card-content card-content1">
            <div class="i1">
            <p class="p10 ha1">{{ $new->titl }}</p>
            </div>
              <div class="ha2">
                  <p class="p11">{!! $new->body !!}</p>
              </div>
            </div>
            <div class="card-action act1">
              <a class="a2" href="/new{{ $new->id }}">ПОДРОБНЕЕ</a>
            </div>
          </div>
        </div>
        @endforeach
        </div>
        </div>
      </section>
      
      <section>
      <div class="container">
        <div class="row">
        <div class="col l12 m12 s12">
        <p class="p9">НАШИ ПАТНЕРЫ</p>
        </div>
        <div class="carousel">
          <a class="carousel-item" href="#one!"><img src="assets/img/11.png"></a>
          <a class="carousel-item" href="#two!"><img src="assets/img/111.png"></a>
          <a class="carousel-item" href="#three!"><img src="assets/img/1111.png"></a>
          <a class="carousel-item" href="#four!"><img src="assets/img/11111.png"></a>
          <a class="carousel-item" href="#five!"><img src="assets/img/1111111.png"></a>
        </div>
        </div>
      </div>
      </section>
      
      @endsection