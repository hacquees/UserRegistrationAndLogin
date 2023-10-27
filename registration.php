<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <div class="container">
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Fullname" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="repeat_password" placeholder="Repeat Password" required>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Register" name="submit"  >
            </div>


        </form>
    
    </div>
</body> 
</html>