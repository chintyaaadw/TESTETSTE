<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Register Form</title>
</head>
<body id="color">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5 mx-auto">
                <div class="card" style="border-radius: 50px; width: 400px;">
                    <div class="card-header">
                        <h3 class="text-center">Register</h3>
                    </div>


                    <div class="card-body">
                        <form action="proses_register.php" method="post">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="fullname" class="form-label">Nama Lengkap</label>
                                <input  type="text" name="namalengkap" class="form-control" id="fullname" name="fullname" required>
                            </div>
                            <div class="mb-3">
                                 <label for="address" class="form-label">Alamat</label>
                                 <textarea name="alamat" class="form-control" id="address" name="address" rows="3" required></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" style="background-color: #20c997; color: white;">Register</button>
                            </div>
                        </form>
                        <div class="login_link" style="text-align: center; margin-top: 10px; margin-bottom: 10px;">Already a member? <a href="login.php">Login</a></div>
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
    <title>Halaman Registrasi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href=	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css>
</head>
<body  id="color">
    <div class="center">
    <h1>Halaman Registrasi</h1>
    <form action="proses_register.php" method="post">
        <table style="width: 100%;">
            <tr  class="txt_field">
                <td>Username</td>
                <td><input type="text" name="username" style=" width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box;"></td>
            </tr>
            <tr  class="txt_field">
                <td>Password</td>
                <td><input type="password" name="password" style=" width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box;"></td>
            </tr>
            <tr  class="txt_field">
                <td>Email</td>
                <td><input type="email" name="email" style=" width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box;"></td>
            </tr>
            <tr class="txt_field">
                <td>Nama Lengkap</td>
                <td><input type="text" name="namalengkap" style=" width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box;"></td>
            </tr>
            <tr  class="txt_field"> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" style=" width: 250px; border-radius: 10px; padding: 8px; box-sizing: border-box;"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Register"  style="margin-top: 30px; background-color: #20c997; color: white; padding: 10px 20px; border: 1px solid #4CAF50; border-radius: 5px; cursor: pointer;"></td>
            </tr>
            <!-- <tr>

                <td class="back-link"> already have an account? <a href="login.php">Back</a></td>
            </tr> -->
        <!-- </table>
        <div class="signup_link" style="margin-top: 10px; margin-bottom: 10px;">already have an account?  <a href="login.php">Back</a></div>
    </form>
    </div>
</body>
</html> --> -->