@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- START THE FEATURETTES -->


<div class="row featurette fadein no-gutters">
  <div class="col order-md-2 bg-dark d-flex align-items-center justify-content-center text-white">
    <h2 class="featurette-heading text-center"> Round One from April 18th to 19th. <span class="text-muted">Click the Image for details</span></h2>
  </div>
  <div class="col-xl order-md-1">
    <a href="/prompt/1"><img class="featurette-image img-fluid mx-auto" src="{{asset("storage/images/round1img.png")}}"></a>
  </div>
</div>

<div class="row featurette fadein no-gutters">

  <div class="col order-md-1 bg-dark d-flex align-items-center justify-content-center text-white">
    <h2 class="featurette-heading text-center">Round Two from April 25th to 26th. <span class="text-muted">Click the Image for details</span></h2>
    </div>
  <div class="col-xl order-md-2">
    <a href="/prompt/2"><img class="featurette-image img-fluid mx-auto clickable" src="{{asset("storage/images/round2img.png")}}"></a>
  </div>
</div>


<div class="row featurette fadein no-gutters">
  <div class="col order-md-2  bg-dark d-flex align-items-center justify-content-center text-white" >
    <h2 class="featurette-heading text-center">Round Three from May 2nd - 3rd. <span class="text-muted">Click the Image for details</span></h2>
  </div>
  <div class="col-xl order-md-1">
    <a href="/prompt/3"><img class="featurette-image img-fluid mx-auto" src="{{asset("storage/images/round3img.png")}}"></a>
  </div>
</div>


<!-- /END THE FEATURETTES -->

</div><!-- /.container -->

@endsection
