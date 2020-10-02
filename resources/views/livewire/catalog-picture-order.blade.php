<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}	
		<img class=" object-center" src="{{ url('storage/photos/'.$picture->name ) }}" />
		<form>
			<input wire:model="order" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker padding" type="number" min="1" max="{{ $max }}"  />
		</form>
</div>
