<?php
// include database connection file
include "koneksi.php";
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $tgl=$_POST['tgl'];
    $order_number=$_POST['order_number'];
    $item_no=$_POST['item_no'];
    $qty=$_POST['qty'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE tb_record_packing SET tgl='$tgl',order_number='$order_number',item_no='$item_no',qty='$qty' WHERE id=$id");
    $result = mysqli_query($koneksi, "UPDATE tb_record_packing_to_ritase SET tgl='$tgl',order_number='$order_number',item_no='$item_no',qty='$qty' WHERE id=$id");
    
    
    // Redirect to homepage to display updated user in list
    header("Location: siap_ritase.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM tb_record_packing WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    
    $tgl=$user_data['tgl'];
    $order_number=$user_data['order_number'];
    $item_no=$user_data['item_no'];
    $qty=$user_data['qty'];
    
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    
    <form name="" method="post" action="edit_record_packing.php">
        <table border="0">
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tgl" value="<?= $tgl;?>"></td>
            </tr>
            <tr> 
                <td>Order Number</td>
                <td><input type="text" name="order_number" value="<?= $order_number;?>"></td>
            </tr>
            <tr> 
                <td>Item No</td>
                <td><input type="text" name="item_no" value="<?= $item_no;?>"></td>
            </tr>
            <tr> 
                <td>Qty</td>
                <td><input type="text" name="qty" value="<?= $qty;?>"></td>
            </tr>
           
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>