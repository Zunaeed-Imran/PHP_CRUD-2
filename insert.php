<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <button class="btn btn-primary my-5">
      <a class="text-light" href="display.php">Add User</a>
    </button>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Address-1</th>
          <th scope="col">Address-2</th>
          <th scope="col">City</th>
          <th scope="col">State</th>
          <th scope="col">Zip code</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "select * from `address`";
        $result = mysqli_query($conn, $sql);

        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $email = $row['email'];
            $address1 = $row['address1'];
            $address2 = $row['address2'];
            $city = $row['city'];
            $state = $row['state'];
            $zip = $row['zip'];

            echo '<tr>
    <th>' . $name . '</th>
    <td>' . $email . '</td>
    <td>' . $address1 . '</td>
    <td>' . $address2 . '</td>
    <td>' . $city . '</td>
    <td>' . $state . '</td>
    <td>' . $zip . '</td>
    <td>
      <button class="btn btn-primary"><a class="text-light" href="update.php? updateid = ' . $name . '">Update</a></button>
      <button class="btn btn-primary"><a class="text-light" href="delete.php? deleteid = ' . $name . '">Update</a></button>

    </td>
   </tr>';
          }
        }
        ?>
      </tbody>
    </table>
  </div>









  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>