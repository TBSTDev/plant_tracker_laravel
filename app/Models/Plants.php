<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plants extends Model
{
    use HasFactory;
	use SoftDeletes;
	
	protected $table = 'plants';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'species', 'watering_instructions', 'photo'
    ];
	
}
