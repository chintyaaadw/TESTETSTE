<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Form</title>
</head>
<body style="background-color: pink;">
    <div class="" style="margin-top: 195px;" >
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 mx-auto">
                    <div class="card" style="border-radius: 50px; width: 400px;">
                        <div class="card-header">
                            <h3 class="text-center">Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="proses_login.php" method="post">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary" style="background-color: #20c997; color: white;" >Login</button>
                                </div>
                            </form>
                            <div class="login_link" style="text-align: center; margin-top: 10px; margin-bottom: 10px;">Not a member? <a href="register.php">Sign Up</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>







































<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href=	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
</head>
<body  id="color">
    <div class = "center" >
    <h1>Halaman Login</h1>
    <form action="proses_login.php" method="post">
        <table style="width: 80%;">
            <tr class="txt_field">
                <td>Username</td>
                <td><input type="text" name="username" style=" width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box;"></td>
            </tr>
            <tr class="txt_field">
               <td>Password</td>
                <td><input type="password" name="password" style=" width: 20px; border-radius: 10px; padding: 8px; box-sizing: border-box;"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" value="Login" style="margin-top: 30px; background-color: #20c997; color: white; padding: 10px 20px; border: 1px solid #4CAF50; border-radius: 5px; cursor: pointer"></td>
            </td>
            </tr>
            
     </table>
     <div class="signup_link" style="margin-top: 10px; margin-bottom: 10px;">Not a member? <a href="register.php">signup</a></div>
    
    </form>
    </div>
</body>
</html> -->