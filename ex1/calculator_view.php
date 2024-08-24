<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
  <!-- Bootstrap framework links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Calculator</title>
</head>

<body style="margin:20px;">

  <h1 class="text-center">My calculator</h1>
  
  <!-- The form action is the same page in order to show the result itself -->
  <form class="col-4 mx-auto border p-2" action="calculator_view.php" method="GET">
    <div class="mb-3">
      <label for="number1" class="form-label">Number 1:</label>
      <input type="text" class="form-control" name="number1" value="">
    </div>
    <div class="mb-3">
      <label for="number2" class="form-label">Number 2:</label>
      <input type="text" class="form-control" name="number2" value="">
    </div>

    <div class="mb-3">
      <button type="submit" class="btn btn-primary" name="operation" value="+"> + </button>
      <button type="submit" class="btn btn-primary" name="operation" value="-"> - </button>
      <button type="submit" class="btn btn-primary" name="operation" value="*"> * </button>
      <button type="submit" class="btn btn-primary" name="operation" value="/"> / </button>
      <button type="submit" class="btn btn-primary" name="operation" value="%"> % </button>
    </div>
    <div class="mb-3" stytle="display:none;">
      <!-- The model is included in the view-->
      <?php include('calculator_model.php'); ?>
    </div>


  </form>

</body>

</html>