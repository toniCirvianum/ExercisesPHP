<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap framework links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>User List</title>
</head>

<body style="margin:15px;">
    <?php include('navbar.php'); ?>

    <form action="edituser_model.php" class="w-50 mx-auto" method="GET">
        <legend>Edit user</legend>

        <div class="mb-3">
            <label for="username" class="form-label ">Choose a user to edit:</label>
            <select name="username" id="user" class="form-select">
            <!-- I get username from userlist_model.php-->
                <?php
                include('userlist_model.php');
                foreach ($myUserList as $user => $userParams) {
                    $userToShow = $userParams['username'];
                    echo "<option value='$userToShow' >$userToShow</option>";
                }
                ?>
            </select>


        </div>


        <button type="submit" class="btn btn-primary">Edit</button>



    </form>

</body>

</html>