 <?php
    include('function.php');
    $se = $_POST['search'];
    $search = new dbcon();
    $countnum = $search->numrowse($se);
    $count = mysqli_num_rows($countnum)
    ?>
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
     <title>test</title>
 </head>

 <body>
     <?php if ($count > 0) { ?>
     <div class="container">
         <h1 class="text-center p-5">ระบบเพิ่มสมาชิก และทำหนังสือราชการ</h1>
         <form action="search.php" method="post">
             <div class="row">
                 <div class="col-11">
                     <input type="text" name="search" aria-describedby="search" class="form-control">
                 </div>
                 <div class="col-1"><button type="submit" class="btn btn-success" name="btnsearch">ค้นหา</button></div>
             </div>
         </form>
         <a href="insertuser.php" class="btn btn-primary mt-3">เพิ่มข้อมูล</a>

         <table class="table mt-3">
             <thead>
                 <tr>
                     <th scope="col">#</th>
                     <th scope="col">img</th>
                     <th scope="col">fname</th>
                     <th scope="col">lname</th>
                     <th scope="col">status</th>
                     <th scope="col">edit</th>
                     <th scope="col">delete</th>
                 </tr>
             </thead>
             <tbody>
                 <?php
                        if (isset($_POST['btnsearch'])) {
                            $search = $_POST['search'];
                            $searchdata = new dbcon();
                            $qr = $searchdata->search($search);
                            while ($row = mysqli_fetch_assoc($qr)) { ?>
                 <tr>
                     <td><?php echo $row['iduser']; ?></td>
                     <td><img src="pic/<?php echo $row['img']; ?>" style="width: 150px;"></td>
                     <td><?php echo $row['fname']; ?></td>
                     <td><?php echo $row['lname']; ?></td>
                     <td><?php echo $row['status']; ?></td>
                     <td><a href="edituser.php?id=<?php echo $row['iduser']; ?>" class="btn btn-warning">edit</a></td>
                     <td><a href="deluser.php?del=<?php echo $row['iduser']; ?>" class="btn btn-danger"
                             onclick="return confirm('ต้องการลบหรือไม่')">delete</a></td>
                     <td><a href="book.php" class="btn btn-info">ทำหนังสือ</a></td>
                 </tr>
                 <?php
                            }
                        }
                        ?>
             </tbody>
         </table>
     </div>
     <?php } else if ($count <= 0) { ?>
     <div class="container">
         <h1 class="text-center p-5">ระบบเพิ่มสมาชิก และทำหนังสือราชการ</h1>
         <form action="search.php" method="post">
             <div class="row">
                 <div class="col-11">
                     <input type="text" name="search" aria-describedby="search" class="form-control">
                 </div>
                 <div class="col-1"><button type="submit" class="btn btn-success" name="btnsearch">ค้นหา</button></div>
             </div>
         </form>
         <a href="insertuser.php" class="btn btn-primary mt-3">เพิ่มข้อมูล</a>
         <a href="index.php" class="btn btn-success mt-3">กลับหน้าแรก</a>
         <h1 class="text-center">ไม่พบข้อมูล</h1>

         <?php }
        if (empty($_POST['search'])) {
            header("location: index.php");
        } ?>
     </div>
 </body>

 </html>