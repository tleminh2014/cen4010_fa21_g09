<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
include("header.php");
include("vars.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>User profile - Client area</title>
</head>

<body>
    <?php
    // require('db.php');
    $nameErr = $dobErr = $preferenceErr = $pronounsErr = "";

    if (isset($_POST['edit'])) {
        $username = htmlentities($_SESSION['username']);
        $name = htmlentities($_POST['name']);
        $dob = htmlentities($_POST['dob']);
        $pronouns = htmlentities($_POST['pronouns']);
        $preference = htmlentities($_POST['preference']);
        $genres = htmlentities($_POST['genres']);
        $games = htmlentities($_POST['games']);


        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["dob"])) {
            $dobErr = "Date of birth is required";
        }

        if (empty($_POST["pronouns"])) {
            $pronounsErr = "Pronouns are required";
        }

        if (empty($_POST["preference"])) {
            $preferenceErr = "Preference is required";
        }

        if (empty($_POST["genres"])) {
            $genresErr = "Genres is required";
        }

        if (empty($_POST["games"])) {
            $gameErr = "Game is required";
        }


        // $select = "SELECT * FROM users WHERE username = '$username'";
        // $sql = mysqli_query($con, $select);
        // $row = mysqli_fetch_array($sql);
        $res = $row['username'];
        if ($res === $username && !$nameErr && !$dobErr && !$pronounsErr && !$preferenceErr && !$genreErr && !$gameErr ){

            $update = "UPDATE users SET name ='$name', dob ='$dob', pronouns ='$pronouns', 
            preference ='$preference', genres ='$genres', games ='$games' WHERE username ='$username'";
            // $update = "UPDATE users SET name ='$name', dob ='$dob' WHERE username ='$username'";
            $sql2 = mysqli_query($con, $update);
            if ($sql2) {
                /*Successful*/
                header('location:dashboard.php');
            } else {
                /*sorry your profile is not update*/
                echo "<div class='form'>
            <h3>Profile could not be updated.</h3><br/>
            </div>";
                // header('location: profile.php');
            }
        } else {
            /*required fields are missing*/
            echo "<div class='form'>
            <h3>Required fields are missing.</h3><br/>
            </div>";
            // header('location: profile.php');
        }
    }
    ?>
    <div class="container">
        <form class="form" action="" method="post">
            <h1 class="display-4">Edit your profile</h1>
            <div class="text-center">
                <img class="rounded" src="images/<?php echo $row["user_image"]; ?>" style="height: 200px;">
            </div>
            <label for="name" class="control-label">Name</label>
            <input class="form-control" type="text" name="name" placeholder="<?php echo $name ?>">
            <div class="form-group">
                <!-- Date input -->
                <label class="control-label" for="dob">Date of birth</label>
                <input class="form-control" name="dob" placeholder="<?php echo $dob ?>" type="date" />
            </div>

            <label for="pronouns" class="control-label">Pronouns:</label>
            <select class="form-control" id="pronouns" name="pronouns">
                <option><?php echo $pronouns ?></option>
                <option >She/Her</option>
                <option>He/Him</option>
                <option>They/Their</option>
            </select>

            <label for="preference" class="control-label">Preference:</label>
            <select class="form-control" id="preference" name="preference">
                <option><?php echo $preference ?></option>
                <option>Women</option>
                <option>Men</option>
                <option>Both</option>
            </select>

            <label for="genres" class="control-label">Favorite genre:</label>
            <select class="form-control" id="genres" name="genres">
                <option><?php echo $genres ?></option>
                <option>Tower Defense</option>
                <option>MOBA</option>
            </select>

            <label for="games" class="control-label">Favorite game:</label>
            <select class="form-control" id="games" name="games">
                <option><?php echo $games ?></option>
                <option>League of Legends</option>
                <option>Starcraft</option>
            </select> <br>
            <div class="text-center">
                <input class="btn btn-primary btn-md" type="submit" name="edit">
            </div>

        </form>
    </div>
</body>

</html>