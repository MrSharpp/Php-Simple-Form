<?php include('registration.php') ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registration Form</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-register.css">

</head>

    <div class="main-content">

        <!-- You only need this form and the form-register.css -->

        <form class="form-register" method="post" action="form-register.php">
        
            

            <div class="form-register-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="name" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="email" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="password1" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Confirm Password</span>
                            <input type="password" name="password2">
                        </label>
                    </div>

                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>
                    <?php include('errors.php') ?>
                    <div class="form-row">
                        <button type="submit" name="regis">Register</button>
                    </div>
                  
                </div>

                <a href="login-form.php" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>

            </div>
            
           
            
        </form>

        

    </div>

</body>

</html>
