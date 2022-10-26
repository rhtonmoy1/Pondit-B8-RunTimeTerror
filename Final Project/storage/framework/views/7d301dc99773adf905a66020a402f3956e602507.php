
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="<?php echo e(asset('ui/frontend/images/fevicon.png')); ?>" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>RUN TIME TERROR</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('ui/frontend/css/bootstrap.css')); ?>" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="<?php echo e(asset('ui/frontend/css/font-awesome.min.css')); ?>" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('ui/frontend/css/style.css')); ?>" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php echo e(asset('ui/frontend/css/responsive.css')); ?>" rel="stylesheet" />

</head>

<body>

<!-- Header Start-->

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.partials.header','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.partials.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<!-- Header Endd -->




  <!-- Content Start-->

  <?php echo e($slot); ?>


  <!-- Content End -->




<!-- Footer Start-->

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.partials.footer','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.partials.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<!-- Footer End-->

  <!-- jQery -->
  <script src="<?php echo e(asset('ui/frontend/js/jquery-3.4.1.min.js')); ?>"></script>
  <!-- bootstrap js -->
  <script src="<?php echo e(asset('ui/frontend/js/bootstrap.js')); ?>"></script>
  <!-- custom js -->
  <script src="<?php echo e(asset('ui/frontend/js/custom.js')); ?>"></script>
  <?php echo $__env->yieldPushContent('script'); ?>

</body>

</html>
<?php /**PATH C:\Software\wamp64\www\seip-laravel-b8-main\resources\views/components/frontend/master.blade.php ENDPATH**/ ?>