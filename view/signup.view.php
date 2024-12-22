<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title?></title>
    <link rel="stylesheet" href="../assets/css/signup.css">
</head>
<body>

    <section class="Sign-up">
        <h1>Sign Up</h1>
        <p>Please enter your information below inorder to login to your account.</p>
        <form action="/signup" method="post">
            <input type="text" placeholder="Full Name" required name="Fname" id="Fname">  
            <input type="email" placeholder="Email" required name="email" id="email">  
            <input type="password" placeholder="Password" required minlength="6"
            aria-describedby="password-help" name="password" id="password">
            <input type="password" placeholder="Confirm Password" required  pattern="^.{6,}$"
            oninput="this.pattern = this.form.password.value" name="ConfirmPassword" id="ConfirmPassword">
            <button type="submit">Sign Up</button>              

        </form>
        
        <div class="signIn">
        <p>Already have an account?</p>
        <a href="">Sign In</a>
        </div>
    </section>
    
</body>
</html>