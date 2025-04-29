<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
  <body>

<?php

session_start();
include("config.php");
$cl = new Config();

$id = $_SESSION['id'] ?? '';
$title = $_SESSION['title'] ?? '';
$name = $_SESSION['name'] ?? '';
$price = $_SESSION['price'] ?? '';
$description = $_SESSION['description'] ?? '';


if(isset($_REQUEST['button'])) {
  $title = $_POST['title'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $description = $_POST['description'];
  $cl->edit($id, $title, $name, $price, $description);
  header("Location: show_data.php");
  exit;
}

?>

<center>
<h1>Update Book Data</h1>
<div class="col-4 p-5">
  <form method="post">
    <div class="mb-3">
      <label for="title" class="form-label">Enter Book Name</label>
      <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Enter Writer Name</label>
      <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Enter Price</label>
      <input type="number" class="form-control" id="price" name="price" value="<?php echo $price; ?>">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Enter Description</label>
      <input type="text" class="form-control" id="description" name="description" value="<?php echo $description; ?>">
    </div>
    
    <button type="submit" class="btn btn-primary" name="button">Update</button>
    <button type="submit" class="btn btn-warning" name="seeBooks">See Books</button>
  </form>
</center>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
