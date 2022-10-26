<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['name', 'type' => 'text',  'label' => '', 'value' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name', 'type' => 'text',  'label' => '', 'value' => null]); ?>
<?php foreach (array_filter((['name', 'type' => 'text',  'label' => '', 'value' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="mb-3">
    <?php if($label): ?>
        <label for="<?php echo e($name); ?>Input" class="form-label"><?php echo e($label); ?></label>
    <?php endif; ?>

    <input 
        name="<?php echo e($name); ?>" 
        type="<?php echo e($type); ?>" 
        id="<?php echo e($name); ?>Input" 
        value="<?php echo e($value); ?>" 
        <?php echo e($attributes->merge(['class' => 'form-control'])); ?>

    >

    <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="form-text text-danger"><?php echo e($message); ?></div>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

</div><?php /**PATH C:\Software\wamp64\www\seip-laravel-b8-main\resources\views/components/forms/input.blade.php ENDPATH**/ ?>