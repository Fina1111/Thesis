<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD sample</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
      <h2>List of Clients</h2>
      <a class="btn btn-primary" href="create.php" role="button">New Client</a>
      <br>
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Gender</th>
            <th>Number</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Action</th>
          </tr>
        <thead>
        <tbody>
          <?php
          //connection to datbase
          include('config.php');
          
          //read all row from data value
          $sql = "SELECT * FROM user_db";
          $result = $conn->query($sql);

          if (!$result) {
            die('Invalid query: '.$conn->error); 
          }
          while ($row = $result->fetch_assoc()) {
            echo "        
          <tr>
            <td>$row[id]</td>
            <td>$row[firstname] $row[lastname]</td>
            <td>$row[birthday]</td>
            <td>$row[gender]</td>
            <td>$row[number]</td>
            <td>$row[email]</td>
            <td>$row[created_at]</td>

          </tr>
            ";
          }
          
          ?>
        <td> 
            <a class="btn btn-primary btn-sm" href="edit.php" id="$row[id]"
            >Edit</a>
            <a class="btn btn-danger btn-sm" href="delete.php" id="$row[id]">Delete</a>
        </td>

        <tbody>
  </div>
</body>
</html>