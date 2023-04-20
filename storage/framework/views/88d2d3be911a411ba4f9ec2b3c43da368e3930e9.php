<?php $__env->startSection('title'); ?> Cineplex - Contact Us <?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<style>
    @media(max-width: 1600px){
        h1{
            margin-top: 2% !important;
            /* border-bottom: 1px solid black; */
            font-weight: bold !important;
        }

        hr{
            /* color: white !important; */
            margin-top: 0 !important;
            padding: 0 !important;
        }

        form{
            border: 5px double red;
            background-color: rgb(218, 218, 218);
            color: black;
            margin-left: auto;
            margin-right: auto;
            margin-top: 2%;
            width: 40%;
            padding: 2%;
        }
    }

    @media(max-width: 1079px){

        form{
            margin-top: 5%;
            width: 100%;
        }

    }
</style>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

    <h1><?php echo e($user->id); ?></h1>
    <form enctype="multipart/form-data" action="<?php echo e(url("/$user->id/contactUs")); ?>" method="POST">
        <?php echo csrf_field(); ?>

    <!-- ----------------------------------- ADD MOVIE FORM ----------------------------------- -->
        <div class="row form-group">
            <div class="col-xl-12">
                <h1><i class="fas fa-comments"></i> Feedback</h1>
            <hr>
            </div>
        </div>


        <div class="row form-group">
            <label class="col-xl-2 col-4 col-form-label">Name:</label>
            <div class="col-xl-10 col-8">
                <input type="text" id="name" class="form-control" name="user_name" placeholder="Faiq Shahzad" required><br>
            </div>
        </div>

        <div class="row form-group">
            <label class="col-xl-2 col-4 col-form-label">Email:</label>
            <div class="col-xl-10 col-8">
                <input type="email" id="name" class="form-control" name="user_email" placeholder="faiq@gmail.com" required><br>
            </div>
        </div>

        <div class="row form-group">
            <label class="col-xl-2 col-12 col-form-label">Feedback:</label>
            <div class="col-xl-10 col-12">
                <textarea name="user_feedback" id="" cols="30" rows="7" id="description" class="form-control"
                placeholder="..."></textarea><br>
                
            </div>
        </div>

        <hr>

        <div class="row form-group">
        </div>

        <button type="submit" class="btn btn-primary col-xl-4 offset-xl-4 col-12">Submit</button>


    </form>
    <br>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Softwares\Xammp\htdocs\Laravel\Cinema-Management-System\resources\views//contactUs.blade.php ENDPATH**/ ?>