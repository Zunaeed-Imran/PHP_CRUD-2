<?php
include 'connect.php';

$id = $_GET['updateid'];


$sql = "select * from `address2` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$address1 = $row['address1'];
$address2 = $row['address2'];
$city = $row['city'];
$state = $row['state'];
$zip = $row['zip'];

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];

  $sql = "update `address2` set id = '$id', name = '$name', email = '$email', address1 = '$address1', address2 = '$address2', city = '$city', state = '$state', zip = '$zip' where is = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header('location:display.php');
  } else {
    die(mysqli_error($conn));
  }
}

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



  <div class="container my-5">
    <form method="post" class="row g-3">

      <div class="col-md-6">
        <label class="form-label">Name</label>
        <input type="text" value="<?php echo $name; ?>" class="form-control" name="name">
      </div>

      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" value="<?php echo $email; ?>" class="form-control" name="email">
      </div>

      <div class="col-12">
        <label for="inputAddress" class="form-label">Address 1</label>
        <input type="text" name="address1" value="<?php echo $address1; ?>" class="form-control" placeholder="1234 Main St">
      </div>
      <div class="col-12">
        <label for="inputAddress2" class="form-label">Address 2</label>
        <input type="text" value="<?php echo $address2; ?>" name="address2" class="form-control" placeholder="Apartment, studio, or floor">
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" value="<?php echo $city; ?>" name="city" class="form-control">
      </div>
      <div class="col-md-4">
        <label for="inputState" class="form-label">State</label>
        <select name="state" value="<?php echo $state; ?>" class="form-select">
          <option selected>Choose...</option>
          <option>BD</option>
          <option>UK</option>
          <option>UN</option>
        </select>

      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" value="<?php echo $zip; ?>" name="zip" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
  </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
