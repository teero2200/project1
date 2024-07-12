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
    <form action="insert.php" method="POST">
        <h2>Fill Data</h2>
        <p class="hint-text">Fill below form.</p>
        <div class="form-group">

            <div class="row">
                <div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name" required="true"></div>
                <div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="true"></div>
            </div>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="contactno" placeholder="Enter your Mobile Number" required="true" maxlength="10" pattern="[0-9]+">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Enter your Email id" required="true">

        </div>

        <div class="form-group">
            <textarea class="form-control" name="address" placeholder="Enter Your Address" required="true"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>
</body>

</html>