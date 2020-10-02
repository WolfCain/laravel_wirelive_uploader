<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Catalog;
use App\Models\Picture;
use Auth;

class CatalogViewComponent extends Component
{
	public $catalog, $name, $picture_id, $type, $mime, $catalog_id;
	public $order = [];
	public $picture = [];
	public $updateMode = false;
	protected $listeners = ['orderUpdate' => 'render'];
		
	public function mount($id)
	{
		$this->catalog_id = $id;
		$this->catalog = Catalog::with('picture')->where('id', $id)->first();		
		$this->type = Picture::groupBy('mime')->select('mime')->get();	
		$this->mime = "image/all";
	} 
	
    public function render()
    {			
		$this->type = Picture::groupBy('mime')->select('mime')->get();
		
		
        return view('livewire.catalog-view-component')
					->layout('layouts.catalog');
    }
	
	public function resetInput() 
	{
		$this->name = '';
	}
	
	public function changeName() {
		
		$this->validate([ 'name' => 'required' ]);
		
		$this->updateMode = true;
		if ($this->name) {
			$catalog = $this->catalog;
			$catalog->update(['name' => $this->name]);
			$this->resetInput();
		}
		$this->updateMode = false;		
	}
		
	public function updatedMime() {
		
		if ($this->mime === "image/all") {
			
		 return redirect('catalog/view/'. $this->catalog_id);
		}
		else {
		$this->catalog = Catalog::with(['picture' => function($query) { 
										$query->where('mime', $this->mime);
										}])
										->where('id', $this->catalog_id)										
										->first();
		}		
		
	}
}	
