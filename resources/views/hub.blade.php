@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container">
    <br>
    <div class="logo-container">
      <img class="img-fluid" src="{{asset("storage/images/hublogo.png")}}">
      <p class="lead">Welcome! The site will be going through a pivot over the next several months. For quick links to recently changed or added stuff, check the cards below.</p>
    </div>

      <div class="py-5">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset("storage/images/tourneycard.png")}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">The April Tier Tourney has concluded. To see all pages on it click to view it below.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="/april/hub"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
       
                    </div>
                    <small class="text-muted">April</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset("storage/images/updatecard.png")}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Track site updates over time by visiting the Github. Currently the plan is to roll out features periodically. Changes to the streaming page, new Topic page are coming soon!</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="https://github.com/shawsey/lavaflakedotcom"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>

                    </div>
                    <small class="text-muted">May</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{asset("storage/images/junecard.png")}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Have an idea for a site feature that can help you and other artists? Reach out to me in the thread or Discord!</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
   
                    </div>
                    <small class="text-muted">June</small>
                  </div>
                </div>
              </div>
            </div>

            </div>
            </div>

        

      

      <!-- /.container -->

@endsection