@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <br>
    <div class="header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">The Tier Tourney Hub.</h1>
      <p class="lead">Keep up to date with the craziness of the April Tier Tourney. Find Scores reports, discover streams, and read up on round prompts here.</p>
      <p><a class="btn btn-secondary" href="/scores" role="button">View Scores &raquo;</a></p>
    </div>
        </div>

     <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      

        <!-- Three columns of text below the carousel -->
        <div class="row no-gutters">
          <div class="col-xl-4">
          <a href="/prompt/1"><img class="featurette-image img-fluid mx-auto" src="{{asset("storage/images/round1img.png")}}"></a>
            <h2>Once Upon a Time</h2>
            <p>You are to create a piece of work based around a fairytale.</p>
            <p><a class="btn btn-secondary" href="/prompt/1" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-xl-4">
          <a href="/prompt/2"><img class="featurette-image img-fluid mx-auto clickable" src="{{asset("storage/images/round2img.png")}}"></a>
            <h2>Sculpture: Become Human</h2>
            <p>All sculptures in the world have come alive and now walk the same streets as us!</p>
            <p><a class="btn btn-secondary" href="/prompt/2" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-xl-4">
            <a href="/prompt/3"><img class="featurette-image img-fluid mx-auto" src="{{asset("storage/images/round3img.png")}}"></a><h2>The DAD Zone</h2>
            <p>You've heard its name before, but now you are going to help imagine it.</p>
            <p><a class="btn btn-secondary" href="/prompt/3" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette fadein">
          <div class="col-md-7">
            <h2 class="featurette-heading">Feeling the hype? <span class="text-muted">Share that excitement with fellow artists</span></h2>
            <p class="lead">Some of the participants of the Tier Tourney may be streaming themselves making their pieces. Join in the spirit of the Tourney and come watch! A portion of this Hub will be for you to keep tabs on all the Daddos who are streaming art.</p>
          </div>
          <div class="col-md-5">
            <a href="/stream"><img class="featurette-image img-fluid mx-auto clickable" src="{{asset("storage/images/stream.jpg")}}"></a>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette fadein">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">The devil is in the details. <span class="text-muted">Take a look at the prompts and plan your piece</span></h2>
            <p class="lead">It is important to make sure you know what you are doing at all times, and so I'll be creating a page to keep track of the full prompts, as well as the scoring scheme. </p>
          </div>
          <div class="col-md-5 order-md-1">
            <a href="/wip"><img class="featurette-image img-fluid mx-auto" src="{{asset("storage/images/prompts.jpg")}}"></a>
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette fadein">
          <div class="col-md-7">
            <h2 class="featurette-heading"> Work hard through the weekend. <span class="text-muted">Get your scores during the week</span></h2>
            <p class="lead">After each round the Panel of four panelists will be grading pieces. Expect to be able to see your scores up later during the week. I'll be working on a page for this as well, fingers crossed.</p>
          </div>
          <div class="col-md-5">
            <a href="/wip"><img class="featurette-image img-fluid mx-auto" src="{{asset("storage/images/scores.jpg")}}"></a>
          </div>
        </div>

     

        <!-- /END THE FEATURETTES -->

      <!-- /.container -->

@endsection