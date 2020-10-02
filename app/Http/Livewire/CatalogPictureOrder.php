<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Picture;
use App\Models\Catalog;

class CatalogPictureOrder extends Component
{
	public $picture, $max, $order, $catalog_id;
	
    public function render()
    {
        return view('livewire.catalog-picture-order');
    }
	
	public function mount(Picture $picture, $catalog_id)
	{
		$this->picture = $picture;
		$this->order = $picture->pivot->order;
		$this->catalog_id = $catalog_id;
	}
	
	public function updatedOrder() {
		
		$this->validate(['order' => 'required|numeric']);
		
		$catalog = Catalog::find($this->catalog_id);
		$catalog->picture()->updateExistingPivot($this->picture, array('order' => $this->order), false);
		
		$this->emit('orderUpdate');
	}
}
