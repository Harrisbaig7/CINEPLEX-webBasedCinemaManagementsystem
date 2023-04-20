<?php $__env->startSection('title'); ?> Admin - Feedbacks <?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<style>

    .alert{
        width: 25%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 2%;
        text-align: center;
        border: 2px solid green !important;
    }


    td a{
        color: white;
    }

    td a:hover{
        color: red;
    }

    th{
        background-color: rgb(219, 25, 51) !important;
    }

    img{
        max-width: 100px;
        max-height: 100px;
    }

    h1{
        margin-top: 2% !important;
        color: white;
        border-bottom: 1px solid white;
        font-weight: bold !important;
    }

    h2{
        margin-top: 2% !important;
        color: white;
        text-align: center;
        font-weight: bold !important;
    }

    hr{
        color: white !important;
        margin-top: 0 !important;
        padding: 0 !important;
    }

    td{
        text-align: center;
    }

    footer{
        margin-top: 24%;
    }

</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Feedbacks</h1>
    <hr>
    <br>

    <table class="table table-striped table-hover table-dark" id="pc_table">
        <thead>
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Feedback</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $feedbacks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($items->user_id); ?></td>
                    <td><?php echo e($items->user_name); ?></td>
                    <td><?php echo e($items->user_feedback); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Softwares\Xammp\htdocs\Laravel\Cinema-Management-System\resources\views//admin/feedback.blade.php ENDPATH**/ ?>