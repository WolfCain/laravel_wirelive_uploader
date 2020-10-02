<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Picture;
use App\Models\Catalog;
use Auth;
use DB;
use Request;

class ViewComponent extends Component
{		
	public $picture, $catalog, $picCatList, $catId, $picId, $incurment;
	
	protected $listeners = ['catalogAdd' => 'render'];
	
	public function mount($picture) 
	{
		$this->picId = $picture->id;
		$this->picture = $picture;
	}
	
    public function render()
    {	
		$this->incurment++;
		$this->catalog = Catalog::where('user_id', Auth::user()->id)->get();
		
        return view('livewire.view-component');
    }	
	
	public function addCatalog(Request $request) {
			
		$this->validate([ 'catId' => 'required' ]);
			
		$catId = $this->catId;
		$picId = $this->picId;
		$cat = Catalog::find($catId);
		$picture = Picture::find($picId);
		$catHasPic = $cat->picture->contains($picture->id);
		if (!($catHasPic)) {
			$totalPic = $cat->picture->count() + 1;
			$cat->picture()->attach($picture, ['order' => $totalPic]);
		}
				
		$this->emit('catalogAdd');
	}
	
}
