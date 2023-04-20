<?php $__env->startSection('title'); ?> Profile <?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<style>

    @media(max-width: 1600px){

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

        .profile{
            margin-left: auto !important;
            margin-right: auto !important;
            width: 80%;
            color: white;
            padding: 2%;
            text-align: justify;
            font-size: 18px;
            width: 100%;
        }

        .profile input{
            color: white;
            font-weight: bold;
        }

        form .row{
            margin-top: 3% !important;
        }

        td{
            text-align: center;
        }

        td a:hover{
            color: red;
        }

        th{
            background-color: rgb(219, 25, 51) !important;
        }

    }

    @media(max-width: 767px){
        .profile{
            width: 100%;
        }
    }


</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Profile</h1>

    <form class="profile">
        <?php echo csrf_field(); ?>

        <div class="row">
            <label class="offset-xl-3 col-xl-2 offset-2 col-3">User ID:</label>
            <input type="text" class="col-xl-3 offset-1 col-4" value= '<?php echo e($user->id); ?>' disabled>
        </div>
        <div class="row">
            <label class="offset-xl-3 col-xl-2 col-2">Name:</label>
            <input type="text" class="col-xl-3 offset-1 col-9" value='<?php echo e($user->name); ?>' disabled>
        </div>
        <div class="row">
            <label class="offset-xl-3 col-xl-2 col-2">Email:</label>
            <input type="text" class="col-xl-3 offset-1 col-9" value='<?php echo e($user->email); ?>' disabled>
        </div>
    </form>

    <h1>Ticket History</h1>
    <hr>

    <table class="table table-striped table-hover table-dark" id="pc_table">
        <thead>
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Show ID</th>
            <th scope="col">Booked Seats</th>
            <th scope="col">Amount</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tickets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->show_id); ?></td>
                    <td><?php echo e($item->no_of_seats); ?></td>
                    <td><?php echo e($item->total_bill); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Softwares\Xammp\htdocs\Laravel\Cinema-Management-System\resources\views//profile.blade.php ENDPATH**/ ?>