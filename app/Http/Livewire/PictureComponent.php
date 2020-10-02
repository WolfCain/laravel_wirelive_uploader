<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Picture;
use App\Models\Catalog;
use Livewire\WithFileUploads;
use Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Mail;
use App\Mail\uploadSpace;

class PictureComponent extends Component
{
	use WithFileUploads;
	
	public $picture, $name, $photo, $mime, $size, $user_id, $incurment, $type, $selected, $catalog, $totalSize;
	public $updateMode = false;
	public $listeners = ['pictureAdded' => 'render'];
	
    public function render()
    {		
		$this->picture = Picture::where('user_id', Auth::user()->id)->orderBy('created_at','DESC')->get();	
		$this->catalog = Catalog::where('user_id', Auth::user()->id)->get();
		$this->type = Picture::groupBy('mime')->where('user_id', Auth::user()->id)->selectRaw('sum(size) as sumSize, mime')->get();
		$this->totalSize = number_format((Picture::where('user_id', Auth::user()->id)->sum('size') / 1048576), 2, '.', '' );
		
        return view('livewire.picture-component');
    }
		
	
	public function checkSize() {
		
		if ($this->totalSize >= 90) {
			Mail::to(Auth::user())->send(new uploadSpace());
		}		
	}
	
	public function resetInput() {
		
		$this->photo = null;
		$this->size = null;
		$this->mime = null;
		$this->user_id = null;
		$this->emit('pictureAdded');
		$this->incurment++;			
	}
	
	public function store() {
		
		$this->validate([ 'photo' => 'image' ]);
		
		$name = $this->photo->store('public/photos');	
		$name = substr($name, 14);
		$photo = $this->photo;		
		$size = $photo->getSize();
		$mime = $this->photo->getMimeType();
		$user_id = Auth::user()->id;
		
		Picture::create([ 
			'size' => $size,
			'name' => $name,
			'mime' => $mime,
			'user_id' => $user_id
		]);
		
		$this->resetInput();
		$this->checkSize();
		
		return redirect()->to('/picture');
	}
	
	public function addCatalog($picture_id, $catalog_id) 
	{
		$picture = Picture::find($picture_id);
		$catalog = Catalog::find($catalog_id);
		$catalog->picture()->create($picture);
		$this->resetInput();
		$this->emit('pictureAdded');
	}
	
	public function delete($id) {
		
		if ($id) {
			
			$selected = Picture::where('id', $id)->where('user_id', Auth::user()->id)->first();			
			
			Storage::delete('/public/photos/'. $selected->name);
			$selected->delete();
			session()->flash('message', 'Picture Deleted Successfully.');
		}
	}
	
	public function showPicture($pID) {
		
		$picture = Picture::where('id', $pID)->where('user_id', Auth::user()->id)->get();
		$this->picture = $picture;
		$this->emit('pictureView', $picture->id);
	}
	
}
