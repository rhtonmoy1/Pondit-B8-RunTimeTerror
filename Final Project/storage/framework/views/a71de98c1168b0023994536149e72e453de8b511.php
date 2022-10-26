 <!-- header section strats -->
 <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +880 01785020839
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : runtimeterror@gmail.com
                </span>
              </a>
            </div>



            <from class="search_form" action="<?php echo e(url('/')); ?>">
              <input name="keyword" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from>
            <div class="user_option_box">
              <a href="" class="account-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  My Account
                </span>
              </a>
              <a href="" class="cart-link">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span>
                  Cart
                </span>
              </a>
            </div>
          </div>

        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
              <span>
                RUN TIME TERROR
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('index')); ?>">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('about')); ?>"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('product')); ?>">Products</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('why')); ?>">Why Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('testimonial')); ?>">Testimonial</a>
                  </li>
                  <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><a class="dropdown-item" href="<?php echo e(route('frontend.products.index', $category->id)); ?>"><?php echo e($category->name); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </li>
                    <li class="nav-item d-flex">
                        <?php if(auth()->guard()->guest()): ?>
                        <a class="nav-link" href="<?php echo e(url('/login')); ?>">
                            Login
                        </a>
                        <a class="nav-link" href="<?php echo e(url('/register')); ?>">
                            Register
                        </a>
                        <?php else: ?>
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">
                            Dashboard
                        </a>
                        <?php endif; ?>
                    </li>
                </ul>

            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
<?php /**PATH C:\Software\wamp64\www\seip-laravel-b8-main\resources\views/components/frontend/partials/header.blade.php ENDPATH**/ ?>