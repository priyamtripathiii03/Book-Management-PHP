<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All Books Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <?php

    session_start();
    include("config.php");
    $c1 = new Config();
    $data = $c1->fetch();

    if(isset($_REQUEST['delete'])) {
        echo "button pressed !";
        $id = $_REQUEST['deleteId'];
        $c1->delete($id);
        $data=$c1->fetch();
    }

    if(isset($_REQUEST['edit'])) {
        $_SESSION['id']= $_REQUEST['id'];
        $_SESSION['title']= $_REQUEST['title'];
        $_SESSION['name']= $_REQUEST['name'];
        $_SESSION['price']= $_REQUEST['price'];
        $_SESSION['description']= $_REQUEST['description'];
        header("location: update.php");
    }

   
    ?>

    <div class="container mt-5">
      <h2 class="text-center mb-4">All Books Data</h2>
      <div class="col-12">
        <table class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Book Name</th>
              <th scope="col">Writer Name</th>
              <th scope="col">Price</th>
              <th scope="col">Description</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while($student = mysqli_fetch_assoc($data)) { ?>
              <tr>
                <th scope="row"><?php echo $student['id']; ?>  <input type="hidden" value="<?php echo $student['id']; ?>" name = "id"></th>
                <td><?php echo $student['title']; ?></td>
                <input type="hidden" value="<?php echo $student['title']; ?>" name = "title">
                <td><?php echo $student['name']; ?>  <input type="hidden" value="<?php echo $student['name']; ?>" name = "name"></td>
                <td><?php echo $student['price']; ?>/-   <input type="hidden" value="<?php echo $student['price']; ?>" name = "price"></td>
                <td><?php echo $student['description']; ?></td>
                <td>
                <form method="post">
                <button type="submit" class="btn btn-success" name = "edit">Edit</button>
                <input type="hidden" value="<?php echo $student['id']; ?>" name = "deleteId">
                <button type="submit" class="btn btn-danger" name = "delete">Delete</button>
                </form>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
