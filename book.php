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
    <link rel="stylesheet" href="style.css">
    <title>หน้าทำหนังสือราชการ</title>
</head>

<body>
    <div class="container">
        <form action="insertdatabook.php" method="post">
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label">ชื่อหน่วยงาน</label>
                <input type="text" class="form-control" placeholder="" name="Segment">
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label">เลขที่หนังสือ</label>
                <input type="text" class="form-control" placeholder="" name="number">
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label">วันที่</label>
                <input type="text" class="form-control" placeholder="" name="date">
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label">เรื่อง</label>
                <input type="text" class="form-control" placeholder="" name="story">
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label">เรียน</label>
                <input type="text" class="form-control" placeholder="" name="who">
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label">ย่อหน้าแรก</label>
                <input type="text" class="form-control" placeholder="" name="subject">
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label">ย่อหน้าเนื้อความ</label>
                <input type="text" class="form-control" placeholder="" name="wish">
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label">ย่อหน้าสรุป</label>
                <input type="text" class="form-control" placeholder="" name="summarize">
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label">ชื่อผู้เซ็น</label>
                <input type="text" class="form-control" placeholder="" name="name">
            </div>
            <div class="mb-3 mt-4">
                <label for="exampleFormControlInput1" class="form-label">ตำแหน่ง</label>
                <input type="text" class="form-control" placeholder="" name="rank">
            </div>
            <input type="submit" value="submit" name="submit" class="btn btn-success">
        </form>
    </div>

</body>

</html>