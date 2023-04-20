<?php $__env->startSection('title'); ?> Admin - Users <?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>

<style>

    @media(max-width: 1600px){
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

        footer{
            margin-top: 20%;
        }
    }

    @media(max-width: 767px){
        table{
            font-size: 14px;
        }
    }

</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Users</h1>
    <hr>
    <br>

    <table class="table table-striped table-hover table-dark" id="pc_table">
        <thead>
        <tr class="text-center">
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $userlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->email); ?></td>

                    <?php if($user->user_role == 1): ?>
                        <td>Admin</td>
                    <?php else: ?>
                        <td>User</td>
                    <?php endif; ?>
                    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Softwares\Xammp\htdocs\Laravel\Cinema-Management-System\resources\views/admin/viewUsers.blade.php ENDPATH**/ ?>