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
    <title>edituser</title>
</head>

<body>
    <div class="container">
        <a href="test.php" class="btn btn-info mt-3 mb-3">กลับหน้าแรก</a>
        <form method="post" action="" enctype="multipart/form-data">
            <?php
            include('function.php');
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $edit = new dbcon();
                $qredit = $edit->viewedit($id);
                while ($row = mysqli_fetch_assoc($qredit)) { ?>
            <div class="mb-3">
                <label for="fname" class="form-label">name</label>
                <input type="text" class="form-control" name="fname" aria-describedby="emailHelp"
                    value="<?php echo $row['fname']; ?>">
            </div>
            <div class="mb-3">
                <label for="lname" class="form-label">lastname</label>
                <input type="text" class="form-control" name="lname" aria-describedby="emailHelp"
                    value="<?php echo $row['lname']; ?>">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">status</label>
                <input type="text" class="form-control" name="status" aria-describedby="emailHelp"
                    value="<?php echo $row['status']; ?>">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">img</label>
                <input type="file" class="form-control" name="img" aria-describedby="emailHelp">
                <img src="pic/<?php echo $row['img']; ?>" style="width: 150px;">
            </div>
            <?php
                }
            } ?>
            <button type="submit" class="btn btn-success" name="editform">Submit</button>

            <?php
            if (isset($_POST['editform'])) {
                $id = $_GET['id'];

                $img = $_FILES['img']['name'];
                $tempnameimg = $_FILES['img']['tmp_name'];
                $folder = "pic/" . $img;
                move_uploaded_file($tempnameimg, $folder);

                $fname = $_POST['fname'];
                $lastname = $_POST['lname'];
                $status = $_POST['status'];
                $update = new dbcon();
                $data = $update->update($id, $img, $fname, $lastname, $status);
                header("location: test.php");
            }
            ?>
        </form>
    </div>
</body>

</html>