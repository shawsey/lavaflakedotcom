@extends('layouts.app')

@section('title', 'Round Comments')


@section('content')

<div class="container">


    <br>
    <div class="header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Round 2 Prompt</h1>
      <p class="lead">April 25th - April 26th.</p>
    </div>
        </div>
        <div class="row">
            <img class="featurette-image img-fluid mx-auto clickable" src="{{asset("storage/images/round2img.png")}}">
          </div>
<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">

      <div class="blog-post">
        <hr>
        <h2 class="blog-post-title">Sculpture: Become Human</h2>
        <strong>Prompt</strong>
        <blockquote>
        <p><em>All sculptures in the world have come alive and now walk the same streets as us!</em> Create a piece that shows a modern situation that these newly animated sculptures may find themselves in.</p>
        <p>Maybe a marble cupid is nocking arrow aimed towards a couple sipping Coffee in a Starbucks. Or The Thinker decided to relocate to a beach along the Pacific to contemplate things there instead. </P>
        <p>Play into the mythology or story of the sculpture that you choose, and don't forget to have fun!</p>
        <p>Tip: Pick a sculpture that you like or see any of the resources below for images and descriptions! </p>
        </blockquote>
        <strong>Resources:</strong>
        <blockquote>
        <a href="https://books.google.com/books?id=lCjdH3iQ01wC&printsec=frontcover#v=onepage&q&f=false"> <p><em>American Sculpture - The Metropolitan Museum of Art(Online Book)</em></p> </a>
        <a href="https://books.google.com/books?id=GHw1AgAAQBAJ&printsec=frontcover&hl=en#v=onepage&q&f=false"><p><em>Italian and Spanish Sculpture: Catalogue of the J. Paul Getty Museum Collection(Online Book)</em></p></a>
        <a href="http://www.frilligallery.com/catalogue/index.php"><p><em>Frilli Gallery Catalogue(Site)</em> </p></a>
        <a href="https://www.louvre.fr/en/departments/sculptures-en/highlights"><p><em>Louvre Sculpture Catalogue(Site)</em> </p></a>
        <a href="https://www.nga.gov/collection-search-result.html?classification=sculpture"><p><em>National Gallery of Art Sculpture Catalogue(Site)</em> </p></a>
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
        <a href="https://youtu.be/dQw4w9WgXcQ"><p><em>Round Three Prompt.devlink</em> </p></a>
      </div>

    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

@endsection