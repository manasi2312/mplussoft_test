<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Index</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    .content{
        max-width: 500px;
        margin: auto;
    }

    .container{
        margin-top: 50px;
    }

    h1{
        text-align: center;
        font-family: emoji;
    }

    .btn{
        font-size: larger;
    }

    .text-left{
        padding: 15px 40px 15px 40px;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    h4{
        float: right;
        margin: 40px 0px;
    }
</style>
<body>
    <div class="container">
        <div class="content">
            <div class="row" style="border: 1px solid gray;">
                <h1>Login Form</h1>
                    <form action="<?php echo e(route('login')); ?>" id="form" method="post">
                            <div class="text-left">
                                <label class="text-muted"><?php echo e(__('E-Mail Address')); ?></label>
                                <input id="signupInputEmail1" name="email" type="email" placeholder="Email ID" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" value="<?php echo e(old('email')); ?>" required="">
                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>

                            <div class="text-left">
                                <label for="signupInputPassword" class="text-muted"><?php echo e(__('Password')); ?></label>
                                <input id="signupInputPassword" name="password" type="password" placeholder="Password" class="form-control lock-input <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" required="">
                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>

                            <!--     <div class="pull-left pad-btm">
                                    <label class="form-checkbox form-icon form-text">
                                    <input type="checkbox" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
                                    </label>
                                </div> -->
                                <div class="text-left">
                                    <button type="submit" class="btn btn-block btn-primary">
                                         <?php echo e(__('Login')); ?>

                                   <!--  Sign In -->
                                    </button>
                                </div>
                                <!--  <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('Forgot Your Password?')); ?>

                                    </a>
                                <?php endif; ?> -->

                        
                        
                    </form>    
                    <p style="text-align: center;">
                        Don't have an account? <span style="color:#337ab7;"><a href="<?php echo e(config('app.baseURL')); ?>/register">Register here</span></a>
                    </p>                     
            </div>  
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\machine-test\resources\views/auth/login.blade.php ENDPATH**/ ?>