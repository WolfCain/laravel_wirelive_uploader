<div>
	<div class="bg-gray-50">
	  <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
			<h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
			  Picture List
			  <br>
			  <span class="text-indigo-600"><?php echo e(Auth::user()->name); ?></span>					  
			  <br>					 
			</h2>					
			<div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
			<?php if($updateMode): ?>
				<?php echo $__env->make('livewire.picture-update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php else: ?>
				<?php echo $__env->make('livewire.picture-create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php endif; ?>					
			</div>
		</div>				
		<div>
			<?php echo $__env->make('livewire.picture-status', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>	
		</div>			
	</div>
<div class="flex flex-col"> 	
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead>
            <tr>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Pic
              </th>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Name
              </th>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Size
              </th>
              <th class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                Created At
              </th>
              <th class="px-6 py-3 bg-gray-50"></th>
			  <th class="px-6 py-3 bg-gray-50"></th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">			
            <!-- More rows... -->
			<?php $__currentLoopData = $picture; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $picture): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td class="px-6 py-4 whitespace-no-wrap">
				<div class="flex items-center">
                  <div class="flex-shrink-0 h-10 w-10">
					<img class="h-10 w-10 rounded-full" src="<?php echo e(url('storage/photos/'.$picture->name )); ?>" />
				 </div>                  
                </div>				
				</td>				
				<td class="px-6 py-4 whitespace-no-wrap">
					<div class="text-sm leading-5 text-gray-900"><?php echo e($picture->name); ?></div>
					<div class="text-sm leading-5 text-gray-500"><?php echo e($picture->mime); ?></div>
				</td>
				<td class="px-6 py-4 whitespace-no-wrap">
					<span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
					<?php echo e(number_format(($picture->size / 1024), 2, '.', '')); ?> kb
					</span>
				</td>
				<td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500">
				<?php echo e($picture->created_at->format('jS F Y h:i:s A')); ?>

				</td>
				<td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">	
					<a href="<?php echo e(url('picture/view/'.$picture->id)); ?>" class="flex-shrink-0 bg-indigo-500 hover:bg-indigo-700 border-indigo-500 hover:border-indigo-700 text-sm border-4 text-white py-1 px-2 rounded">View</a>
				</td>
				<td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium">					
					<button wire:click="delete(<?php echo e($picture->id); ?>)" class="flex-shrink-0 bg-indigo-500 hover:bg-indigo-700 border-indigo-500 hover:border-indigo-700 text-sm border-4 text-white py-1 px-2 rounded" >
						Delete
					</button>	
				</td>
				</tr>
			</tr>			
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						  
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div><?php /**PATH D:\xampp\htdocs\topvalue\resources\views/livewire/picture-component.blade.php ENDPATH**/ ?>