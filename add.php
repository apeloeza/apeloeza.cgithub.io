<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD Operation on SQLite3 Database using PHP</title>
</head>
<body>
<form method="POST">
    <a href="index.php">Back</a>
    <p>
        <label for="fname">Nama Depan:</label>
        <input type="text" id="fname" name="fname">
    </p>
    <p>
        <label for="lname">Nama Belakang:</label>
        <input type="text" id="lname" name="lname">
    </p>
        <label for="keterangan">keterangan:</label>
        <input type="text" id="keterangan" name="keterangan">

    <input type="submit" name="save" value="Save">
</form>
<?php                      
//button save
if(isset($_POST['save'])){
    //include our connection
    include 'dbconfig.php';
    //insert query
    $sql = "INSERT INTO members (fname, lname, keterangan) VALUES ('".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['keterangan']."')";
    $db->exec($sql);
    header('location: index.php');     
}
?>
</body>
</html>
