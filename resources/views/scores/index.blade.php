@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif


    <div class="container">
    <br>
    <div class="header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Tier Tourney Scoring</h1>
      <p class="lead">All scores shown are an average between the four judges on the Panel. For Individual comment's from Panel judges, click the button below.</p>
    </div>
        </div>
    
      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <p><a class="btn btn-secondary" href="/round/1" role="button">Round 1 Comments &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
              <p><a class="btn btn-secondary" href="/wip" role="button">Round 2 Comments &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <p><a class="btn btn-secondary" href="/wip" role="button">Round 3 Comments &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Artist</th>
            <th scope="col">Piece Name</th>
            <th scope="col">Round #</th>
            <th scope="col">Composition/Design Score</th>
            <th scope="col">Other Fundamentals Score</th>
            <th scope="col">Creativity/Originality Score</th>
            <th scope="col">Materials/Media Score</th>
            <th scope="col">Combined Round Score</th>
        </tr>
        </thead>
        <tbody>
        @foreach($scores as $score)
            <tr>
                <th scope="row">{{$score->id}}</th>
                <td>{{$score->Artist}}</td>
                <td>{{$score->Name}}</td>
                <td>{{$score->Round}}</td>
                <td>{{$score->CompositionDesign}}</td>
                <td>{{$score->Fundamentals}}</td>
                <td>{{$score->CreativityOriginality}}</td>
                <td>{{$score->MaterialsMedia}}</td>
                <td>{{$score->CombinedAverageScore}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection