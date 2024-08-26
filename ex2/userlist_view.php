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
    <?php include('navbar.php');?>

    <table class="table table-striped table-sm w-50 mx-auto" style="margin-top:25px;">
  <thead>
    <tr>
      <th scope="col">User</th>
      <th scope="col">Password</th>
      <th scope="col">Rol</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php 
        include('userlist_model.php');
        foreach ($myUserList as $user => $user_params) {
            echo "<tr>";
            echo "<td> {$user_params['username']} </td>";
            echo "<td> {$user_params['password']} </td>";
            echo "<td> {$user_params['rol']} </td>";
            echo "</tr>";
        }
    ?>

  </tbody>
</table>



</body>

</html>