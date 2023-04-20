<?php $__env->startSection('title'); ?> Admin - Add Movies <?php $__env->stopSection(); ?>

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
    
	<form enctype="multipart/form-data" action="<?php echo e(url('/admin/addMovies')); ?>" method="POST">
        <?php echo csrf_field(); ?>

    <!-- ----------------------------------- ADD MOVIE FORM ----------------------------------- -->
		<div class="row form-group">
            <div class="col-xl-12">
                <h1><i class="fas fa-film"></i> Add New Movies</h1>
            <hr>
            </div>
		</div>


		<div class="row form-group">
			<label class="col-xl-2 col-4 col-form-label">Movie Name:</label>
			<div class="col-xl-10 col-8">
				<input type="text" id="name" class="form-control" name="movie_name" placeholder="Spiderman: Homecoming"><br>
			</div>
		</div>


		<div class="row form-group">
            <label class="col-xl-2 col-2 col-form-label">Ratings:</label>
			<div class="col-xl-2 col-2">
				<input type="number" id="ratings" class="form-control" name="ratings" placeholder="9"><br>
			</div>


			<label class="col-xl-2 offset-xl-4 col-4 offset-1 col-form-label">Year of Release:</label>
			<div class="col-xl-2 col-3">
				<input type="number" id="year" class="form-control" name="year" placeholder="2021"><br>
			</div>
		</div>


		<div class="row form-group">
            <label class="col-xl-2 col-4 col-form-label" for="img">Cover Picture:</label>
			<div class="col-xl-4 col-3">
				<input type="file" id="img" class="form-control" name="movie_cover"><br>
			</div>
		</div>
        

        <div class="row form-group">
			<label class="col-xl-2 col-12 col-form-label">Movie Description:</label>				
			<div class="col-xl-10 col-12">
                <textarea name="movie_description" id="" cols="30" rows="7" id="description" class="form-control" 
                placeholder="A young Peter Parker/Spider-Man begins to navigate his newfound identity as the web-slinging super hero Spider-Man. Thrilled by his experience with the Avengers, Peter returns home, where he lives with his Aunt May, under the watchful eye of his new mentor Tony Stark. Peter tries to fall back into his normal daily routine - distracted by thoughts of proving himself to be more than just your friendly neighborhood Spider-Man - but when the Vulture emerges as a new villain, everything that Peter holds most important will be threatened.
                "></textarea><br>
				
			</div>
		</div>

		<hr>

		<div class="row form-group">
		</div>

		<button type="submit" class="btn btn-primary col-xl-4 offset-xl-4 col-12">Submit</button>


	</form>

	<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adminlayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Softwares\Xammp\htdocs\Laravel\Cinema-Management-System\resources\views/admin/addMovies.blade.php ENDPATH**/ ?>