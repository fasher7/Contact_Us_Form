<?php
    if (isSet($_POST['submit']))
    {
        include 'connection.php';
        $name = $_POST['name'];
        $gamerID = $_POST['gamerID'];
        $email = $_POST['email'];
        $rank = $_POST['rank'];
        $position = $_POST['position'];
        $teamName = $_POST['teamName'];
        $query = $_POST['query'];

        $sql = "INSERT INTO form(`Person_Name`, `Gamer_ID`, `Email`, `Rank`, `Position`, `Team_Name`, `Query`) VALUES ('$name', '$gamerID ', '$email', '$rank', '$position', '$teamName', '$query' )";

        mysqli_query($con, $sql);
        $con->close();
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
    <link rel="shortcut icon" href="Icons/form.png" type="image/x-icon">
    <title>Dota 2 tournament form</title>
</head>

<body>
    <nav class="navbar bg-dark" data-bs-theme="dark"">
    <div class=" container-fluid">
        <a class="navbar-brand" href="#"><i>Welcome to</i> Defence Of The Ancient 2</a>
        <span class="navbar-text">
            <button type="submit" class="btn btn-outline-light"><a href="login.php" target="_blank" style="text-decoration: none;">Login</a></button>
        </span>
        </div>
        </div>
    </nav>

    <div class="formContainer">
        <form method="post">
            <div class="mt-3 mb-2">
                <label for="name" class="form-label">
                    <h5>Name</h5>
                </label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-2">
                <label for="gameID" class="form-label">
                    <h5>Gamer ID</h5>
                </label>
                <input type="text" class="form-control" id="gamerID" name="gamerID" required>
            </div>
            <div class="mb-2">
                <label for="email" class="form-label">
                    <h5>Email</h5>
                </label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-2">
                <label for="rank" class="form-label">
                    <h5>Rank</h5>
                </label>
                <input type="text" class="form-control" id="rank" name="rank" required>
            </div>
            <div class="mb-2">
                <label for="position" class="form-label">
                    <h5>Positon</h5>
                </label>
                <input type="text" class="form-control" id="position" name="position">
            </div>
            <div class="mb-2">
                <label for="teamName" class="form-label">
                    <h5>Team Name</h5>
                </label>
                <input type="text" class="form-control" id="teamName" name="teamName" required>
            </div>
            <div class="mb-3">
                <label for="query" class="form-label">
                    <h5>Query</h5>
                </label>
                <textarea class="form-control" id="query" name="query" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>