@extends('layouts.app')

@section('title', 'Streaming')


@section('content')
    <!-- Add a placeholder for the Twitch embed -->
    
    <div class="jumbotron jumbotron-fluid bg-primary text-white">
        <div class="container">
          <h1 class="display-3">Catch a stream!</h1>
          <p>Grab your popcorn, crack open a drink, and relax while watching other Daddo's draw! On this page you will be able to find all DAD artists who are streaming their work.</p>

        </div>
      </div>


    <div class="row justify-content-center">
        <div class="container">
        <div class="bg-light ">
            <div id="twitch-embed-1"></div>
        </div>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row justify-content-center">
        <div class="container">
        <div class="bg-light ">
            <div id="twitch-embed-2"></div>
        </div>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row justify-content-center">
        <div class="container">
        <div class="bg-light ">
            <div id="twitch-embed-3"></div>
        </div>
        </div>
    </div>

    
    <hr class="featurette-divider">


    <div class="container">
        <div class="row justify-content-center">
        <div class="col d-flex justify-content-center">
        <img class="img-fluid mx-auto" src="{{asset("storage/images/twitch_iconography.png")}}" alt="Generic placeholder image"> 
        </div>

        
        
        <div class="col d-flex justify-content-center">
            <div class="my-3 py-3">
             <h2 class="display-5">Are you a DAD streamer?</h2>
                <p class="lead">Reach out to me on discord or in the Thread and I'll add you to here!</p>
             </div>
        </div>

    </div>
    <div>

    <!--  Twitch embed scripts -->
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

    <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
    <script type="text/javascript">
      new Twitch.Embed("twitch-embed-1", {
        width: 854,
        height: 480,
        channel: "kazookd",
      });

      new Twitch.Embed("twitch-embed-2", {
        width: 854,
        height: 480,
        channel: "nicnacpattywhack",
      });

      new Twitch.Embed("twitch-embed-3", {
        width: 854,
        height: 480,
        channel: "motharts",
      });

    </script>
     <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
    
@endsection