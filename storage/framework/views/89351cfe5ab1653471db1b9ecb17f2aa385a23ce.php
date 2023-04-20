<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Cineplex - Registration</title>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/23c9455052.js" crossorigin="anonymous"></script>

    <style>

        @media(max-width: 1600px){
            body{
                /* background-color: rgb(44, 31, 31); */
                /* background-image: url('https://wallpaperbat.com/img/9406-download-film-production-wallpaper-gallery-movie-film-cinema.png'); */
                background: url('https://static.vecteezy.com/system/resources/previews/003/500/390/non_2x/woman-is-holding-clapperboard-or-movie-slate-in-studio-shooting-it-is-use-in-video-production-and-cinema-industry-on-black-background-free-photo.jpg') no-repeat fixed center;
                background-size: cover;
            }

            input{
                margin-top: 3%; 
            }

            .main_register{
                margin-top: 3%; 
                border: 5px wheat groove;
                padding: 2%;
            }

            h1{
                color: white;
                text-align: center;
            }

            label{
                color: white;
            }

            hr{
                color: white;
            }
        }

        @media(max-width: 767px){
            body{
                background: url('https://drive.google.com/uc?export=view&id=1JETSUP9SI8T9MoQ1oo5YhOWtSoooBORZ') no-repeat fixed center;
                background-size: cover;
            }

            .main_register{
                margin-top: 3%; 
                border: none;
                padding: 3%;
            }
        }

        
        
    </style>

</head>
<body>


<!-- ----------------------------------- REGISTRATION FORM ----------------------------------- -->

	<form method="POST" action="<?php echo e(route('register')); ?>">

        <?php echo csrf_field(); ?>

        <div class="main_register col-lg-4 offset-lg-7">

            <div class="row form-group">

                <h1 class="col-lg-12"><i class="fas fa-user-plus"></i> Registration Form</h1>
                <hr>
    
            </div>
    
            <div class="row form-group">
    
                <label class="col-lg-2 col-form-label">Name</label>
                <div class="col-lg-10">
                    <input type="text" id="name" class="form-control" name="name" placeholder="Faiq Shahzad"><br>
                </div>
    
            </div>
    
            
    
            <div class="row form-group">
    
                <label class="col-lg-2 col-form-label">Email Address</label>
                <div class="col-lg-10">
                    <input type="email" id="mail" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" placeholder="faiq@something.com"><br>
                </div>

            </div>

            <div class="row form-group">
                
                <label class="col-lg-2 col-3 col-form-label">Password</label>
                <div class="col-lg-10 col-9">
                    <input type="password" id="password" class="form-control" name="password" placeholder="**********" required autocomplete="new-password"><br>
                </div>
    
            </div>

            <div class="row form-group">
                
                <label class="col-lg-2 col-3 col-form-label">Confirm Password</label>
                <div class="col-lg-10 col-9">
                    <input type="password" id="cnfrm_password" class="form-control" name="password_confirmation" placeholder="**********" required autocomplete="new-password"><br>
                </div>
    
            </div>
    
            

            <br>
    
            <button type="submit" class="btn btn-primary col-lg-4 offset-lg-4 col-12">Register</button>
            
            <hr class="col-lg-10 offset-lg-1">

            <a class="col-lg-4 offset-lg-3 col-10 offset-2" href="<?php echo e(route('login')); ?>"">Already Have an Account? <strong> LOGIN</strong></a>

            



        </div>

		

	</form>

	<br>
<?php /**PATH C:\Softwares\Xammp\htdocs\Laravel\Cinema-Management-System\resources\views/auth/register.blade.php ENDPATH**/ ?>