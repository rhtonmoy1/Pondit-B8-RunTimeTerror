
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['carousels'=>[],]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['carousels'=>[],]); ?>
<?php foreach (array_filter((['carousels'=>[],]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        <?php for($i = 0; $i < count($carousels); $i++): ?>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo e($i); ?>" 
            <?php if($i == 0): ?>class="active" aria-current="true" <?php endif; ?> aria-label="Slide <?php echo e($i+1); ?>"></button>
        <?php endfor; ?>

    </div>
    <div class="carousel-inner">
        <?php $__empty_1 = true; $__currentLoopData = $carousels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carousel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div
                class="carousel-item 
                <?php if($loop->first): ?> active <?php endif; ?>
                
                ">
                <img src="<?php echo e(asset('storage/carousels/' . $carousel->image)); ?>" class="d-block w-100" alt="...">
                <div class="container">
                    <div class="carousel-caption">
                        <h1><?php echo e($carousel->name); ?></h1>
                        <p><?php echo e($loop->iteration); ?></p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <h1>No Caousel Found</h1>
        <?php endif; ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php /**PATH C:\Software\wamp64\www\seip-laravel-b8-main\resources\views/components/frontend/partials/carousel.blade.php ENDPATH**/ ?>