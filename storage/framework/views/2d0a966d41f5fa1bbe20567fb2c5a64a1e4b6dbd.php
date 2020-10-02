<div>
    	
		<img class=" object-center" src="<?php echo e(url('storage/photos/'.$picture->name )); ?>" />
		<form>
			<input wire:model="order" class="shadow appearance-none border rounded py-2 px-3 text-grey-darker padding" type="number" min="1" max="<?php echo e($max); ?>"  />
		</form>
</div>
<?php /**PATH D:\xampp\htdocs\topvalue\resources\views/livewire/catalog-picture-order.blade.php ENDPATH**/ ?>