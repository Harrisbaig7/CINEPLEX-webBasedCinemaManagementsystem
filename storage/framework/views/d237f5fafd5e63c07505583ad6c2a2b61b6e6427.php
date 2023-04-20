<?php $__env->startSection('title'); ?> Movie - Details <?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<style>

    @media(max-width: 1600px){

        h1{
            font-weight: bold !important;
            width: 50%;
            margin-top: 2% !important;
            text-decoration: underline red;
        }

        h4{
            font-weight: bold !important;
        }

        h5{
            font-weight: bold !important;
        }

        .details{
            color: white;
            padding: 2%;
            text-align: justify;
            font-size: 18px;
        }

        img{
            width: 100%;
            height: 70%;
            object-fit: cover;
            object-position: top;
            /* box-shadow: inset 0px 0px 20px 10px rgba(0, 0, 0, 0.6); */
        }

        .review{
            margin-left: auto !important;
            margin-right: auto !important;
            width: 50%;
        }

        button{
            margin-top: 2% !important;
            width: 30% !important;
            margin-left: auto !important;
            margin-right: auto !important;
        }
    }

    @media(max-width: 767px){
        img{
            height: 30%;
        }
    }


</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="details">
        <img src="<?php echo e(asset('covers/'.$movie->movie_cover)); ?>" alt="">
        <h1><?php echo e($movie->movie_name); ?></h1>
        <ul>
            <li>Ratings: <?php echo e($movie->ratings); ?></li>
            <li>Year: <?php echo e($movie->year); ?></li>
        </ul>
        <h4>Synopsis:</h4>
        <p><?php echo e($movie->movie_description); ?></p>

        <h5>Write a Review (Optional): </h5>

        <form class="review" action="<?php echo e(url("/viewMovies/$movie->id/$user->id")); ?>" method='POST'>
            <?php echo csrf_field(); ?>

            <div class="row">
                <textarea name="movie_review" id="" cols="89" rows="5" placeholder="Review...."></textarea><br>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Softwares\Xammp\htdocs\Laravel\Cinema-Management-System\resources\views//detailsMovie.blade.php ENDPATH**/ ?>