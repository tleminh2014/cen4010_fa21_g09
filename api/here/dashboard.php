<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("header.php");
include("vars.php");
// require('db.php');
$getAllUsers = "SELECT * FROM users WHERE id != '$id' AND (genres = '$genres' OR games = '$games')";
// $result = $connection->query($getAllUsers);
$result = mysqli_query($con, $getAllUsers);

?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="card mb-4 shadow-sm profile-bg">
                <div class="card-body">
                    <h1 class="display-4">Hey <?php echo $_SESSION['username']; ?>, Check out your suggested matches!</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="d-flex justify-content-around">
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {  ?>
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <img class="rounded" src="images/<?php echo $row["user_image"]; ?>" style="width: 300px;">
                                <h4 class="display-4" style="font-size: 36px;"><?php echo $row["name"]; ?></h4>
                                <h6><?php echo $row["pronouns"]; ?></h6>
                                <h6><?php echo $row["dob"]; ?></h6>
                                <a class="btn btn-success" href="view_user.php?id=<?php echo $row["id"]; ?>">View Profile</a>
                            </div>
                        </div>
            <?php
                }
            } else {
                echo "No results";
            }
            ?>
        </div>
    </div>
</body>

</html>