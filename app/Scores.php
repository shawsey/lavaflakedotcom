<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Scores extends Model
{
    protected $guarded = [];

    use Sortable;

	public $sortable = ['id', 'Artist', 'Name', 'Round', 'CompositionDesign', 'Fundamentals', 'CreativityOriginality', 'MaterialsMedia', 'CombinedAverageScore' ];
}
