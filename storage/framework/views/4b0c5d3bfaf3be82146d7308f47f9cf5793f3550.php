<?php $__env->startSection('title'); ?> Admin - View Shows <?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<style>

    @media(max-width: 1600px){

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

        hr{
            color: white !important;
            margin-top: 0 !important;
            padding: 0 !important;
        }

        td{
            text-align: center;
        }

        #phn_table{
            display: none;
        }

        footer{
            margin-top: 24%;
        }
    }

    @media(max-width: 450px){
        #pc_table{
            display: none;
        }

        #phn_table{
            display: block;
            width: 100%;
        }
    }

</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php if(session('status')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session('status')); ?>

    </div>
    <?php endif; ?>

    <h1>Shows</h1>
    <hr>

    <table class="table table-striped table-hover table-dark" id="pc_table">
        <thead>
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Movie</th>
            <th scope="col">Seats</th>
            <th scope="col">Day</th>
            <th scope="col">Time</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $showlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <tr>
                    <td><?php echo e($show->id); ?></td>
                    <td><?php echo e($show->movie_id); ?></td>
                    <td><?php echo e($show->movie_seats); ?></td>
                    <td><?php echo e($show->show_day); ?></td>
                    <td><?php echo e($show->movie_time); ?></td>
                    <td><a href="/admin/<?php echo e($show->id); ?>/deleteshow"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <table class="table table-striped table-hover table-dark col-sm-12" id="phn_table">
        <thead>
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Movie</th>
            <th scope="col">Seats</th>
            <th scope="col">Day</th>
            <th scope="col">Time</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $showlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $show): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <tr>
                    <td><?php echo e($show->id); ?></td>
                    <td><?php echo e($show->movie_id); ?></td>
                    <td><?php echo e($show->movie_seats); ?></td>
                    <td><?php echo e($show->show_day); ?></td>
                    <td><?php echo e($show->movie_time); ?></td>
                    <td><a href="/admin/<?php echo e($show->id); ?>/deleteshow"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    
    
<?php $__env->stopSection(); ?>

<script>
    setTimeout(function(){
        $('.alert').slideUp(1500);
    }, 2000);
</script>
<?php echo $__env->make('layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Softwares\Xammp\htdocs\Laravel\Cinema-Management-System\resources\views/admin/viewShows.blade.php ENDPATH**/ ?>