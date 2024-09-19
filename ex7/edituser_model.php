<?php
include('userlist_model.php');

if (isset($_GET['username'])) {
    $username = $_GET['username'];


    foreach ($myUserList as $key => $user) {
        if ($user['username'] === $username) {
            $selectedUser = $user;
            $userKey = $key;
            break; // We exit the loop once we find and delete the user
        }
    }
}
?>

<!-- We generate a view to edit selecteUser -->

<?php
//If user to edit is found we show the form to edit
if (isset($selectedUser)) {
?>

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
            <legend>Edit user: <?php echo $selectedUser['username']; ?></legend>
            <input type="hidden" name="userKey" value="<?php echo $userKey; ?>">

            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $selectedUser['username']; ?>" reqired>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" value="<?php echo $selectedUser['password']; ?>" reqired>
            </div>
            <div class="mb-3">
                <label for="rol" class="form-label ">Rol user</label>
                <select name="rol" name="rol" class="form-select">
                    <option value="admin" <?php echo $selectedUser['rol'] === 'admin' ? 'selected' : ''; ?>>Admin</option>
                    <option value="admin" <?php echo $selectedUser['rol'] === 'user' ? 'selected' : ''; ?>>User</option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary">Save Changes</button>

            <div class="mb-3" stytle="display:none;">


            </div>

        </form>

        <div class="mb-3" stytle="display:none;">
            <!-- Proces updating-->
            
            <?php include('edituser_update.php');?>
            
        </div>

    </body>

    </html>

    <?php } ?>


 


