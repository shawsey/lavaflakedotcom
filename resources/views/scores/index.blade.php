@extends('layouts.app')

@section('content')
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
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