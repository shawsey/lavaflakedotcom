@extends('layouts.app')

@section('title', 'Round Comments')


@section('content')

<div class="container">


    <br>
    <div class="header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Round 3 Prompt</h1>
      <p class="lead">April 25th - April 26th.</p>
    </div>
        </div>
        <div class="row">
            <img class="featurette-image img-fluid mx-auto clickable" src="{{asset("storage/images/round3img.png")}}">
          </div>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">

      <div class="blog-post">
        <hr>
        <h2 class="blog-post-title">The DAD Zone</h2>
        <strong>Prompt</strong>
        <blockquote>
        <p><em>You've heard its name before, but now you are going to help imagine it.</em> Create a piece based what the DAD Zone would be. A planet? City? Village, maybe.</p>
        <p>Who lives in the DAD Zone? What do they do? What kinds of buildings are in the DAD Zone? Are there unique aspects of the DAD Zone that we should know?</P>
        <p>What are the politics of the DAD Zone, are we admidst a civil war? Are we overthrowing a lemur dictator? Or is the war against bordering crabs raging onward?</p>
        <p>Draw specific objects, places, people, or things that tie into your personal imagination when you hear the words <b> DAD ZONE. </b></p>
        </blockquote>
        <strong>Resources:</strong>
        <blockquote>
        <a href=""> <p><em>Your personal imagination</em></p> </a>
        <a href="https://www.britsuperstore.com/uk/elbow-grease-de-greaser-500ml.html"><p><em>Elbow Grease</em></p></a>
        <a href="https://www.amazon.com/Mind-Enhancing-Supplement-Cognitive-Concentration/dp/B01JIKQDPS"><p><em>Focus</em> </p></a>
        <a href="https://www.canva.com/learn/wp-content/uploads/2019/02/Motivational-poster-9.jpg"><p><em>Determination</em> </p></a>
        <a href="https://youtu.be/KxGRhd_iWuE"><p><em>If in doubt of yourself</em> </p></a>
        </blockquote>

        <hr>
      
      </div><!-- /.blog-post -->


    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">All pieces in a round MUST be turned in during the weekend of the round. Once the date on DAD rolls over to Monday, time is up. Then the grading process will begin and a panel with analyze each artist's piece.</p>
        <br>
        <a href="/prompt/1"><p><em>Round One Prompt</em> </p></a>
        <a href="/prompt/2"><p><em>Round Two Prompt</em> </p></a>
      </div>

    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

@endsection