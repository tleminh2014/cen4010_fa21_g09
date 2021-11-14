<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("header.php");
include("vars.php");

$getSingleUser = "SELECT * FROM users WHERE id = '" . $_GET['id'] . "'";
// $result = $connection->query($getAllUsers);
$result = mysqli_query($con, $getSingleUser);

while ($row = $result->fetch_assoc()) {
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $row["name"]; ?>'s Profile</title>
</head>
<body>
    <div class="container-fluid">
            <div class="d-flex justify-content-center">
                <div class="card mb-8 shadow-sm">
                    <div class="card-body">
                        <img class="rounded" src="images/<?php echo $row["user_image"]; ?>" style="width: 300px;">
                        <h2 class="display-4"><?php echo $row["name"]; ?></h4>
                        <h6><?php echo $row["pronouns"]; ?></h6>
                        <h6><?php echo $row["dob"]; ?></h6>
                        <!-- <a class="btn btn-primary" href="chatroom.php?id=<?php echo $row["id"]; ?>">Message <?php echo $row["name"]; ?></a> -->
                        <a class="btn btn-primary" href="like.php?id=<?php echo $row["id"]; ?>">Like <?php echo $row["name"] ?></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
    </div>

</body>




<?php
}
?>