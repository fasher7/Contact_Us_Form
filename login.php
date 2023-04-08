<?php
    $error = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        include 'connection.php';
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM login WHERE Username = '$username' AND Password = '$password'";
        $result = mysqli_query($con, $sql);
        
        if (mysqli_num_rows($result) == 1)
        {
            header("Location: dashboard.php");
        }
        else
        {
            $error = "Username or Password Invalid";
        }
        mysqli_close($con);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Icons/login.png" type="image/x-icon">
    <title>Dota 2 Login Page</title>
</head>

<body>
    
    <div class="formContainer">
        <form method="post">
            <div>
                <?php
                    if ($error != "")
                    {
                        echo "<span style=\"color: red;\">$error</span>";
                    }
                ?>
            </div>
            <div class="mt-3 mb-2">
                <label for="username" class="form-label"><h5>Username</h5></label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"><h5>Password</h5></label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            </div>
            <button type="submit" class="btn btn-dark">Log In</button>
            <a href="index.php" class="btn btn-dark" style="text-decoration:none">Back</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>