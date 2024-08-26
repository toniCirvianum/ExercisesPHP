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

    <form action="adduser_view.php" class="w-50 mx-auto" method="GET">
        <legend>Add user</legend>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="enter username in lowercase">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" name="password" class="form-control" placeholder="must have lower, upper and numbers">
        </div>
        <div class="mb-3">
            <label for="rol" class="form-label ">Rol user</label>
            <select name="rol" id="rol" class="form-select">
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Add</button>

        <div class="mb-3" stytle="display:none;">
            <!-- The model is included in the view-->
            <?php include('adduser_model.php'); ?>
        </div>

    </form>

</body>

</html>