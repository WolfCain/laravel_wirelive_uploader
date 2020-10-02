<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
	
	protected $fillable = [
        'name', 'user_id'
    ];
	
	public function picture() {
		
		return $this->belongsToMany('App\Models\picture', 'catalog_picture', 'catalog_id', 'picture_id')->withPivot('order')->orderBy('order', 'asc');
	}
	
	public function groupMime() {
		
		return $this->belongsToMany('App\Models\picture', 'catalog_picture', 'catalog_id', 'picture_id')->select('picture.mime as Mime')->groupBy('picture.mime');
	}
}
