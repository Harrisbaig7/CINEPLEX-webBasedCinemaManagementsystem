<?php $__env->startSection('title'); ?> All Movie <?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<style>
    h1{
        color: white;
        border-bottom: 4px solid red;
        font-weight: bold !important;
        text-align: center;
        width: 30%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 2% !important;
    }

    .card:hover{
        transition: transform .4s;
        transform: scale(1.1);
    }

    .user_movies{
        width: 90%;
    }

    .card a{
        text-decoration: none;
        color: white;
    }

    .card a:hover{
        color: white;
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>All Movies</h1>

    <div class="user_movies container">
        <div class="row">

            <?php ($movies = []); ?>

            <?php $__currentLoopData = $movielist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="card col-xl-3 mx-3 my-3 bg-dark text-white" style="width: 18rem;">
                    <a href="viewMovies/<?php echo e($item->id); ?>">
                        <img src="<?php echo e(asset('covers/'.$item->movie_cover)); ?>" class="card-img-top" alt="..." height="150-px">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($item->movie_name); ?></h5>
                            <p class="card-text">Year: <?php echo e($item->year); ?></p>
                            <p class="card-text">Ratings: <?php echo e($item->ratings); ?></p>
                        </div>
                    </a>
                </div>
                <?php (array_push($movies, $item)); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Softwares\Xammp\htdocs\Laravel\Cinema-Management-System\resources\views/viewMovie.blade.php ENDPATH**/ ?>