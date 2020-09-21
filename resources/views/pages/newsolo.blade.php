<!-- ################################################################################################ -->
@extends('layouts.master')

@section('content')
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<section>
<div class="proj_solo_img">
@if( $solo->img  === null)
              <img src="storage/{{ $solo->img }}" class="img6">
            @else
            <img src="assets/img/img5.png" class="img6">
            @endif
</div>
  <div class="farton">
    <p class="p25">{{ $solo->titl }}</p>
  </div>
</section>

<section>
  <div class="container">
    <div class="row">
      <div class="col l8 m12 s12">
        <div class="cht">
          <p class="p26">{{ $solo->zag }}</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container">
    <div class="row">
      <div class="col l8 s12 s12">
        <p class="p27">{!! $solo->body !!}</p>
      </div>
      @if(!is_null($solo->prik))
      <div class="col l4 m12 s12">
        <div class="cht1">
          <img src="assets/img/i9.png" class="img7">
          <p class="p28">{{ $solo->prik }}</p>
        </div>
      </div>
      @endif
    </div>
  </div>
</section>
@endsection