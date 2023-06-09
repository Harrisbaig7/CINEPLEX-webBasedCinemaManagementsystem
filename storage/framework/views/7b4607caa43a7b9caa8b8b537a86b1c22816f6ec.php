<?php $__env->startSection('title'); ?> Admin - Edit Movies <?php $__env->stopSection(); ?>

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
            width: 60%;
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
    

    
	<form enctype="multipart/form-data" action="<?php echo e(url("/admin/$movie->id/update")); ?>" method='POST'>
        <?php echo csrf_field(); ?>

        <?php echo method_field('PUT'); ?>

    <!-- ----------------------------------- EDIT MOVIE FORM ----------------------------------- -->
		<div class="row form-group">
            <div class="col-xl-12">
                <h1><i class="fas fa-film"></i> Edit Movies</h1>
            <hr>
            </div>
		</div>


		<div class="row form-group">
			<label class="col-xl-2 col-4 col-form-label">Movie Name:</label>
			<div class="col-xl-10 col-8">
                
				<input type="text" id="name" class="form-control" name="movie_name" value= '<?php echo e($movie->movie_name); ?>'><br>
			</div>
		</div>


		<div class="row form-group">
            <label class="col-xl-2 col-2 col-form-label">Ratings:</label>
			<div class="col-xl-2 col-2">
				<input type="number" id="ratings" class="form-control" name="ratings" placeholder="9" value='<?php echo e($movie->ratings); ?>'><br>
			</div>


			<label class="col-xl-2 offset-xl-4 col-4 offset-1 col-form-label">Year of Release:</label>
			<div class="col-xl-2 col-3">
				<input type="number" id="year" class="form-control" name="year" placeholder="2021" value='<?php echo e($movie->year); ?>'><br>
			</div>
		</div>


		<div class="row form-group">
			<label class="col-xl-2 col-6 col-form-label" for="img">New Cover Picture: (Optional)</label>
			<div class="col-xl-4 col-3">
				<input type="file" id="img" class="form-control" name="movie_cover"><br>
			</div>
            <label class="col-xl-2 offset-xl-2 col-6 col-form-label" for="img">Current Cover Picture:</label>
            <div class="col-xl-2 col-3">
                <img src="<?php echo e(asset('covers/'.$movie->movie_cover)); ?>" alt="" width="100" height="100">
			</div>
		</div>

        <br>

        <div class="row form-group">
			<label class="col-xl-2 col-12 col-form-label">Movie Description:</label>				
			<div class="col-xl-10 col-12">
                <textarea name="movie_description" id="" cols="30" rows="7" id="description" class="form-control" placeholder="Movie Description"><?php echo e($movie->movie_description); ?></textarea><br>
			</div>
		</div>

		<hr>

		<div class="row form-group">
		</div>

		<button type="submit" class="btn btn-primary col-xl-4 offset-xl-4 col-12">Submit</button>


	</form>

	<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Softwares\Xammp\htdocs\Laravel\Cinema-Management-System\resources\views/admin/editMovies.blade.php ENDPATH**/ ?>