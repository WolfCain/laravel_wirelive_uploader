<div>
    
	<div class="bg-gray-50" >
		<div class="flex flex-row mb-4 p-8">
		  <div class="w-3/4">
		  <img class="" src="<?php echo e(url('storage/photos/'.$picture->name )); ?>" />	
		  <ul>
			  <li>Name : <span class="text-xl text-indigo-600"><b><?php echo e($picture->name); ?></b></span></li>
			  <li>Type : <span class="text-lg text-gray-500"><b><?php echo e($picture->mime); ?></b></span></li>
			  <li>Size : <span class="text-lg text-indigo-600"><b><?php echo e(number_format(($picture->size / 1024), 2, '.', '')); ?> kb</b></span></li>			  
		  </ul>
		  </div>
		  <div class="w-1/4">
		  <div class="inline-flex rounded-md shadow">
			<form wire:submit.prevent="addCatalog">			
				<select wire:model="catId" id="<?php echo e($incurment); ?>">
				<option>Catalog Select</option>
				<?php $__currentLoopData = $catalog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catalog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($catalog->id); ?>"><?php echo e($catalog->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
				<button class="flex-shrink-0 bg-indigo-500 hover:bg-indigo-700 border-indigo-500 hover:border-indigo-700 text-sm border-4 text-white py-1 px-2 rounded">Add</button>
			</form>
		  </div>
		  <div class="ml-3 inline-flex rounded-md shadow">
			<a href="<?php echo e(url('/picture')); ?>" class="flex-shrink-0 bg-indigo-500 hover:bg-indigo-700 border-indigo-500 hover:border-indigo-700 text-sm border-4 text-white py-1 px-2 rounded">
			  Back
			</a>
		  </div>			
		  <div class="mt-5">
			<?php $__currentLoopData = $picture->Catalog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 			
				<a href="<?php echo e(url('catalog/view/' .$cat->id)); ?>" class="flex-shrink-0 bg-indigo-500 hover:bg-indigo-700 border-indigo-500 hover:border-indigo-700 text-sm border-4 text-white py-1 px-2 rounded"><?php echo e($cat->name); ?></a> 
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	 
			</div>
		  </div>
		</div>					
	</div>
</div>
<?php /**PATH D:\xampp\htdocs\topvalue\resources\views/livewire/view-component.blade.php ENDPATH**/ ?>