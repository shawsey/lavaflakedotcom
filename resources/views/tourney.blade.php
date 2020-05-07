@extends('layouts.app')

@section('title', 'Tourney')

@section('content')
<div class="container">
    <br>
    <div class="header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">DAD Tourney Challenges.</h1>
      <p class="lead"> You can find all the past or current prompts, scores, and information for the DAD Tourney Challenges here.</p>
    </div>

     <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      

        <!-- Three columns of text below the carousel -->
    
        <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset("storage/images/tourneycard.png")}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/april/hub"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
       
                    </div>
                    <small class="text-muted">April</small>
                  </div>
                </div>
              </div>
            </div>

        <!-- START THE FEATURETTES -->

        
     

        <!-- /END THE FEATURETTES -->

      <!-- /.container -->

@endsection