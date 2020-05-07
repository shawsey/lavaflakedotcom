@extends('layouts.app')

@section('title', 'Round Comments')


@section('content')

<div class="container">


    <br>
    <div class="header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Round Three Comments</h1>
        </div>
        </div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">

      <div class="blog-post">
        <h2 class="blog-post-title">Judge Scores and Comments</h2>
        <strong>Panelist: Choob </strong>
        <blockquote>
        <p><em>WIP</em></p>
        </blockquote>

        <hr>
        <strong>Panelist: AutoReiv </strong>
        <blockquote>
        <a href="https://docs.google.com/spreadsheets/d/1ZqRsNnLKx4eTKzM02z2_822YMISlyUyZ1oSwQHfZprI/edit?usp=sharing"><p><em>Google Spreadsheet Link</em> </p></a>
        </blockquote>
        <hr>
        <strong>Panelist: Nic </strong>
        <blockquote>
        <p><em>WIP</em></p>
        </blockquote>
        <hr>
      </div><!-- /.blog-post -->

      


    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Comments, while critical at times, are our breakdowns of the different aspects of each piece. Keep in mind any comments are meant to help you, do your best to apply them where you can! (Especially in the coming rounds.) </p>
      </div>

    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

@endsection