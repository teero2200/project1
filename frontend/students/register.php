<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>สมัครนักศึกษา</title>
</head>

<body>
    <div class="container p-5">
        <h3 class="text-center">ลงทะเบียน</h3>
        <form  action="../backend/save_register.php"  method="post"  class="p-3">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">รหัสนักศึกษา</label>
                <input type="text" class="form-control" name="ST_ID" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ชื่อ-สกุล</label>
                <input type="text" class="form-control" name="ST_NAME" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="ST_EMAIL" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="password" class="form-control" name="ST_PASSWORD">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Confirm_Password</label>
                <input type="password" class="form-control" name="ST_ConPASSWORD">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">ยืนยัน</button>
            </div>
        </form>
    </div>
</body>

</html>