<div>
<div class="flex px-8">
<ul>
<?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
	<li>
	 <?php echo e(substr($type->mime, 6)); ?> - <?php echo e(number_format(($type->sumSize / 1024), 2, '.', '')); ?> kb
	</li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<li>
	Storage Size : <?php echo e($totalSize); ?> / 100 mb
	</li>
</ul>
</div>
</div><?php /**PATH D:\xampp\htdocs\topvalue\resources\views/livewire/picture-status.blade.php ENDPATH**/ ?>