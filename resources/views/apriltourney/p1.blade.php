@extends('layouts.app')

@section('title', 'Round Comments')


@section('content')

<div class="container">


    <br>
    <div class="header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Round 1 Prompt</h1>
      <p class="lead">April 18th - April 19th.</p>
    </div>
        </div>
        <div class="row">
            <img class="featurette-image img-fluid mx-auto clickable" src="{{asset("storage/images/round1img.png")}}">
          </div>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">

      <div class="blog-post">
        <hr>
        <h2 class="blog-post-title">Once Upon a Time</h2>
        <strong>Prompt</strong>
        <blockquote>
        <p><em>You are to create a piece of work based around a fairytale. </em> You can read and reference The Brothers Grim and Hans Christian Andersen's fairytales for research and reference.</p>
        <p>For the more attentive anons, you may recognize that this is the theme from the current Artstation Jam event. I felt this would be a good first round theme because it gives everyone a lot of leeway in where they want to take it and it also creates an opportunity for all participants to post their finished work onto the Artstation event as well (Garnering more attention for yourself and your pieces!).</p> 
        <p> Judging will begin over the next week. We have 4 judges on the panel, including myself. Names are withheld this first round so there is no 
bribery, name-calling, or anything like that. Judge identities will be released after we finish grading pieces unless otherwise noted. Mid-nextweek you can expect a Round one breakdown of 
piece rankings and some more stats and graphs to go along with it. </p>
        </blockquote>
        <strong>Resources:</strong>
        <blockquote>
        <a href="https://www.gutenberg.org/files/27200/27200-h/27200-h.htm"> <p><em>Hans Christian Andersen Fairytales(Online Book)</em></p> </a>
        <a href="https://www.gutenberg.org/files/2591/2591-h/2591-h.htm"><p><em>The Brothers Grimm Fairytales(Online Book)</em></p></a>
       </blockquote>

        <hr>
      
      </div><!-- /.blog-post -->


    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">All pieces in a round MUST be turned in during the weekend of the round. Once the date on DAD rolls over to Monday, time is up. Then the grading process will begin and a panel with analyze each artist's piece.</p>
        <br>
        <a href="/prompt/2"><p><em>Round Two Prompt</em> </p></a>
        <a href="/wip"><p><em>Round Three Prompt</em> </p></a>
      </div>

    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

@endsection