<?php  
session_start();
if (!isset($_SESSION['username']))
header("location: pod_login.php")

?>

<?php
// include database connection file
include "koneksi.php";
$id = $_GET['id'];
// $item_no = $_GET['item_no'];
// $order_number = $_GET['order_number'];
// $pengguna = $_GET['pengguna'];
// $grup = $_GET['grup'];
// $month = $_GET['month'];
// $year = $_GET['year'];
// $palet_no = $_GET['palet_no'];

$getusername = $_SESSION['username'];


$dataactproses = mysqli_query($koneksi,"SELECT * FROM tb_record_packing_to_ritase where id = '$id' ");
                    while ($dataact = mysqli_fetch_array($dataactproses)){
                        $tgl = $dataact['tgl']; 
                        $order_number = $dataact['order_number'];
                        $item_no = $dataact['item_no'];
                        $qty = $dataact['qty'];
                        $pengguna = $dataact['pengguna'];
                        $grup = $dataact['grup'];
                        $month = $dataact['month'];
                        $year = $dataact['year'];
                        $palet_no = $dataact['palet_no'];  
                        $indikator = $dataact['indikator'];  
                    }
$result = mysqli_query($koneksi, "INSERT INTO tb_ritase_packing(tgl,order_number,item_no,qty,pengguna,grup,month,year,palet_no,indikator) VALUES ('$tgl','$order_number','$item_no','$qty','$pengguna','$grup','$month','$year','$palet_no','$indikator')");
$result1 = mysqli_query($koneksi, "DELETE FROM tb_record_packing_to_ritase WHERE id=$id");
// Get id from URL to delete that user
// $id = $_GET['id'];
 
// Delete user row from table based on given id
// $result = mysqli_query($koneksi, "DELETE FROM tb_record_packing WHERE id=$id");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:siap_ritase.php");
?>


