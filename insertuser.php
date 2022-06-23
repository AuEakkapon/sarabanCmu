<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <title>insertuser</title>
</head>

<body>
    <div class="container">
        <a href="test.php" class="btn btn-info mt-3 mb-3">กลับหน้าแรก</a>
        <form method="post" enctype="multipart/form-data" action="">
            <?php
            include('function.php');
            $insertuser = new dbcon();
            if (isset($_POST['submit'])) {
                $img = $_FILES['img']['name'];
                $tempnameimg = $_FILES['img']['tmp_name'];
                $folder = "pic/" . $img;
                move_uploaded_file($tempnameimg, $folder);

                $fname = $_POST['fname'];
                $lastname = $_POST['lname'];
                $status = $_POST['status'];

                $sql = $insertuser->insert($img, $fname, $lastname, $status);
                header("location: test.php");
            }

            ?>

            <div class="mb-3">
                <label for="fname" class="form-label">name</label>
                <input type="text" class="form-control" name="fname" required>
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">lastname</label>
                <input type="text" class="form-control" name="lname" required>
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">status</label>
                <input type="text" class="form-control" name="status" required>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">img</label>
                <input type="file" class="form-control" name="img" required>
            </div>
            <button type="submit" class="btn btn-success" name="submit"
                onclick="return confirm('ต้องการเพิ่มข้อมูลหรือไม่')">Submit</button>
        </form>
    </div>
</body>

</html>