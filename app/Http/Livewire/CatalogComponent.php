<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Catalog;
use Auth;

class CatalogComponent extends Component
{
	
	public $catalog, $name;
	public $updateMode = false;
	
	public $listeners = ['catalogAdded' => 'render'];
	
    public function render()
    {
		$this->catalog = Catalog::where('user_id', Auth::user()->id)->get();		
        return view('livewire.catalog-component');
    }
	
	public function store() 
	{
		$this->validate(['name' => 'required|string' ]);
		
		$name = $this->name;
		$user_id = Auth::user()->id;
		
		Catalog::create([ 
			'name' => $name,			
			'user_id' => $user_id
		]);
		
		$this->emit('catalogAdded');
	}
}
