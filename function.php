<?php
class dbcon
{
    public function __construct()
    {
        $this->dbcon = mysqli_connect("localhost", "root", "", "saraban");
        return  $this->dbcon;
    }

    public function insert($img, $fname, $lname, $status)
    {
        $qury = mysqli_query($this->dbcon, "INSERT INTO user(img,fname,lname,status) VALUES ('$img','$fname',' $lname',' $status');");
        return $qury;
    }
    public function view()
    {
        $qury = mysqli_query($this->dbcon, "SELECT * FROM user;");
        return $qury;
    }
    public function viewedit($id)
    {
        $qury = mysqli_query($this->dbcon, "SELECT * FROM user WHERE iduser=$id;");
        return $qury;
    }
    public function update($id, $img, $fname, $lname, $status)
    {
        $qury = mysqli_query($this->dbcon, "UPDATE user SET img='$img', fname ='$fname',lname = '$lname', status = '$status'  WHERE iduser='$id';");
        return $qury;
    }
    public function del($del)
    {
        $qury = mysqli_query($this->dbcon, "DELETE FROM user WHERE iduser=$del;");
        return $qury;
    }
    public function search($search)
    {
        $qury = mysqli_query($this->dbcon, "SELECT * FROM user WHERE fname LIKE '%$search%' OR lname LIKE '%$search%' ;");
        return $qury;
    }
    public function numrow()
    {
        $qury = mysqli_query($this->dbcon, "SELECT * FROM user;");
        return $qury;
    }

    // อันนี้ไว้เทส
    public function numrowse($se)
    {
        $qury = mysqli_query($this->dbcon, "SELECT * FROM user WHERE fname LIKE '%$se%' OR lname LIKE '%$se%' ;");
        return $qury;
    }
}