<?php

namespace App\Http\Controllers;
use App\Scores;

use Illuminate\Http\Request;

class ScoresController extends Controller
{

    public function index()
    {
        $scores = Scores::all();
        $scores = Scores::sortable()->paginate(50);
        return view('scores.index',compact('scores',$scores));
    }

    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'index',
        ]]);
    }
    
    public function create()
    {
        return view('scores.create');
    }

   /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'Artist' => 'required',
            'Name' => 'required',
            'Description' => 'required',
            'Round' => 'required|numeric',
            'CompositionDesign' => 'required|numeric',
            'Fundamentals' => 'required|numeric',
            'CreativityOriginality' => 'required|numeric',
            'MaterialsMedia' => 'required|numeric',
            'CombinedAverageScore' => 'required|numeric',

            
        ]);

        Scores::create($request->all());

        return redirect('/scores');

        }
    
}
