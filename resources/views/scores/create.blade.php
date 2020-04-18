@extends('layouts.app')

@section('title', 'Admin')

@section('content')
<div class="container">
    <h1>Add New Round Score</h1>
    <hr>
    <form action="/scores" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="description">Artist Name</label>
            <select class="form-control" name="Artist">
                <option>greencat</option>
                <option>echo</option>
                <option>lamprey</option>
                <option>Genzai</option>
                <option>awetos</option>
                <option>the1banana</option>
                <option>Nirest</option>
                <option>Derp</option>
                <option>maze</option>
                <option>SugarBeetle</option>
                <option>dezukaful</option>
                <option>yyyhaw</option>
                <option>Crud</option>
                <option>nicnac</option>
                <option>EngeeEml</option>
                <option>Jet</option>
                <option>ducker</option>
                <option>furart</option>
                <option>hoppy</option>
                <option>KazooKD</option>
                <option>Cath</option>
                <option>lonku</option>
                <option>toxicgad</option>
                <option>AutoReiv</option>
                <option>Lafayette_Tiki</option>
                <option>bezdomny</option>
                <option>guespiere</option>
                <option>Zeke</option>
                <option>Notosh</option>
                <option>j</option>
                <option>Jason</option>
                <option>Apricot</option>
                <option>Nessie</option>
                <option>jozu</option>
                <option>tmart11</option>
                <option>kringlefkr</option>
                <option>Peltingfury</option>
                <option>meru</option>
                <option>Axalalal</option>
                <option>pink</option>
                <option>Choob</option>
                <option>silvemis</option>
                <option>Shameboxx</option>
                <option>vani</option>
                <option>Defunct</option>
                <option>VuSta</option>
                <option>Rakimora</option>
                <option>Goblin</option>
                <option>Panzer</option>
                <option>zamish</option>
                <option>Sticky</option>
                <option>beepbird</option>
                <option>onsin</option>
                <option>Maw</option>
                <option>rhomphy</option>
                <option>mrpurin</option>
                <option>tabascoshrimp</option>
                <option>MysticLog</option>
                <option>BeretB</option>
                <option>Clover</option>
                <option>konsui</option>
            </select>
        </div>

        <div class="form-group">
            <label for="title">Piece Name</label>
            <input type="text" class="form-control" id="pieceName"  name="Name">
        </div>
        <div class="form-group">
            <label for="description">Piece Description</label>
            <textarea type="text" class="form-control" id="productDescription" name="Description"></textarea>
        </div>
        
        <div class="form-group">
            <label for="description">Round</label><br/>
            <label class="radio-inline"><input type="radio" name="Round" value="1"> 1</label>
            <label class="radio-inline"><input type="radio" name="Round" value="2"> 2</label>
            <label class="radio-inline"><input type="radio" name="Round" value="3"> 3</label>
        </div>

        <div class="form-group">
            <label for="description">COMPOSITION AND DESIGN Score</label></br>
            <label class="radio-inline"><input type="radio" name="CompositionDesign" value="1"> 0</label>
            <label class="radio-inline"><input type="radio" name="CompositionDesign" value="1"> 1</label>
            <label class="radio-inline"><input type="radio" name="CompositionDesign" value="2"> 2</label>
            <label class="radio-inline"><input type="radio" name="CompositionDesign" value="3"> 3</label>
            <label class="radio-inline"><input type="radio" name="CompositionDesign" value="4"> 4</label>
            <label class="radio-inline"><input type="radio" name="CompositionDesign" value="5"> 5</label>
        </div>

        <div class="form-group">
            <label for="description">APPLICATION OF OTHER ARTISTIC FUNDAMENTALS Score</label></br>
            <label class="radio-inline"><input type="radio" name="Fundamentals" value="1"> 0</label>
            <label class="radio-inline"><input type="radio" name="Fundamentals" value="1"> 1</label>
            <label class="radio-inline"><input type="radio" name="Fundamentals" value="2"> 2</label>
            <label class="radio-inline"><input type="radio" name="Fundamentals" value="3"> 3</label>
            <label class="radio-inline"><input type="radio" name="Fundamentals" value="4"> 4</label>
            <label class="radio-inline"><input type="radio" name="Fundamentals" value="5"> 5</label>
        </div>

        <div class="form-group">
            <label for="description">CREATIVITY & ORIGINALITY Score</label></br>
            <label class="radio-inline"><input type="radio" name="CreativityOriginality" value="1"> 0</label>
            <label class="radio-inline"><input type="radio" name="CreativityOriginality" value="1"> 1</label>
            <label class="radio-inline"><input type="radio" name="CreativityOriginality" value="2"> 2</label>
            <label class="radio-inline"><input type="radio" name="CreativityOriginality" value="3"> 3</label>
            <label class="radio-inline"><input type="radio" name="CreativityOriginality" value="4"> 4</label>
            <label class="radio-inline"><input type="radio" name="CreativityOriginality" value="5"> 5</label>
        </div>

        <div class="form-group">
            <label for="description"> MATERIALS AND MEDIA Score</label></br>
            <label class="radio-inline"><input type="radio" name="MaterialsMedia" value="1"> 0</label>
            <label class="radio-inline"><input type="radio" name="MaterialsMedia" value="1"> 1</label>
            <label class="radio-inline"><input type="radio" name="MaterialsMedia" value="2"> 2</label>
        </div>

        <div class="form-group">
            <label for="description">Combined Average Score</label>
            <input type="text" class="form-control" id="pieceAverage" name="CombinedAverageScore"/>
        </div>



        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary" >Submit</button>
    </form>
</div>
@endsection