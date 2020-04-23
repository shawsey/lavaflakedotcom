@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <link href="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>

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
            <th scope="col">@sortablelink('id', '#')</th>
            <th scope="col">@sortablelink('Artist', 'Artist')</th>
            <th scope="col">@sortablelink('Name', 'Piece Name')</th>
            <th scope="col">@sortablelink('Round', 'Round')</th>
            <th scope="col">@sortablelink('CompositionDesign', 'Composition/Design Score')</th>
            <th scope="col">@sortablelink('Fundamentals', 'Other Fundamentals Score')</th>
            <th scope="col">@sortablelink('CreativityOriginality', 'Creativity/Originality Score')</th>
            <th scope="col">@sortablelink('MaterialsMedia', 'Materials/Media Score')</th>
            <th scope="col">@sortablelink('CombinedAverageScore', 'Combined Round Score')</th>
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


    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>

@endsection