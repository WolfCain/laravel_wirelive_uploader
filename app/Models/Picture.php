<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'name', 'size', 'mime', 'user_id'
    ];
	
	public function Catalog() {
		
		return $this->belongsToMany('App\Models\Catalog', 'catalog_picture')->withPivot('order');
	}
	
}
