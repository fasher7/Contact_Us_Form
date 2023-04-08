<?php
    include 'connection.php';
    $sql = "SELECT Person_Name, Gamer_ID, Team_Name, Query FROM form";
    $result = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="shortcut icon" href="Icons/dashboard.png" type="image/x-icon">
    <title>Admin Dashboard</title>
</head>

<body>
    <table class="table table-bordered border-danger" style="width: 50%; margin: auto; height:100vh;">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Gamer ID</th>
                <th scope="col">Team Name</th>
                <th scope="col">Query</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<th scope=\"row\">".$row['Person_Name']."</th>";
                    echo "<td>".$row['Gamer_ID']."</td>";
                    echo "<td>".$row['Team_Name']."</td>";
                    echo "<td>".$row['Query']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>

</html>
