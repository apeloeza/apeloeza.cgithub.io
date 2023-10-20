<?php
//include our connection
include 'dbconfig.php';
//get the row of selected id
$sql = "SELECT rowid, * FROM members WHERE rowid = '".$_GET['id']."'";
$query = $db->query($sql);
$row = $query->fetchArray();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD Operation on SQLite3 Database using PHP</title>
</head>
<body>
    <a href="index.php">kembali</a>
    <p>
        <label for="fName">Nama Depan:</label>
        <input type="text" id="fname" name="fname" value="<?php echo $row['fname']; ?>">
    </p>
    <p>
        <label for="lname">Lastname:</label>
        <input type="text" id="lname" name="lname" value="<?php echo $row['lname']; ?>">
    </p>
    <p>
        <label for="keterangan">keterangan:</label>
        <input type="text" id="keterangan" name="keterangan" value="<?php echo $row['keterangan']; ?>">
    </p>
    <input type="submit" name="save" value="Save">
</form>
<?php
if(isset($_POST['save'])){
    $namaDepan = $_POST['fname'];
    $namaBelakang = $_POST['lname'];
    $keterangan = $_POST['keterangan'];
    //update our table
    $sql = "UPDATE members SET fname = '$namaDepan', lname = '$namaBelakang', keterangan = '$keterangan' WHERE rowid = '".$_GET['id']."'";
    $db->exec($sql);
    header('location: index.php');
}
?>
</body>
</html>
                