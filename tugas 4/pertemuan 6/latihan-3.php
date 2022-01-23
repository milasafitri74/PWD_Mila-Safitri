<?php
$conn = mysqli_connect("localhost","root",""); // Koneksi
$db = mysqli_select_db($conn, "lat_dbase"); // Mengaktifkan database
// Membuat tabel
$sql = "CREATE TABLE tbl_mhs(
mhsID int NOT NULL AUTO_INCREMENT,
PRIMARY KEY(mhsID),
FirstName varchar(15),
LastName varchar(15),
Age int
)";
$haha = mysqli_query($conn, $sql);
// input data
$input = mysqli_query($conn, "insert into tbl_mhs(FirstName,LastName,Age) values('Anjar','Prabowo',25)");
?>