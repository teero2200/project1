<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body>
  <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">

    <tbody>
      <?php
      include('connect/connect.php');
      $vid = $_GET['viewid'];
      $ret = mysqli_query($objCon, "select * from tblusers where ID =$vid");
      $cnt = 1;
      while ($row = mysqli_fetch_array($ret)) {

      ?>
        <tr>
          <th>First Name</th>
          <td><?php echo $row['FirstName']; ?></td>
          <th>Last Name</th>
          <td><?php echo $row['LastName']; ?></td>
        </tr>
        <tr>
          <th>Email</th>
          <td><?php echo $row['Email']; ?></td>
          <th>Mobile Number</th>
          <td><?php echo $row['MobileNumber']; ?></td>
        </tr>
        <tr>
          <th>Address</th>
          <td><?php echo $row['Address']; ?></td>
          <th>Creation Date</th>
          <td><?php echo $row['CreationDate']; ?></td>
        </tr>
      <?php
        $cnt = $cnt + 1;
      } ?>

    </tbody>
  </table>
</body>

</html>