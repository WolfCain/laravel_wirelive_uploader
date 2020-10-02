 <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('View')); ?>			
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">				
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('view-component', ['picture' => $picture])->html();
} elseif ($_instance->childHasBeenRendered('uLP9udi')) {
    $componentId = $_instance->getRenderedChildComponentId('uLP9udi');
    $componentTag = $_instance->getRenderedChildComponentTagName('uLP9udi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('uLP9udi');
} else {
    $response = \Livewire\Livewire::mount('view-component', ['picture' => $picture]);
    $html = $response->html();
    $_instance->logRenderedChild('uLP9udi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>				
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 
<?php /**PATH D:\xampp\htdocs\topvalue\resources\views/view/dashboard.blade.php ENDPATH**/ ?>