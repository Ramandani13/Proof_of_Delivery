<?php  
session_start();
if (!isset($_SESSION['username']))
header("location: pod_login.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="gambar/icon.png" />

	<title>FAS</title>

	<link href="css/app.css" rel="stylesheet">
</head>
<?php  
  
// $url = $_SERVER['REQUEST_URI'];  
//   $dani= "-----loadkaprofile.php";
header("Refresh: 30;");  
  
?> 
<body>



		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg" style="padding:10px;">
         
				<a class="sidebar-toggle d-flex">
          <i class=" align-self-center" ></i>
          <span class="align-middle" style="position:relative;top:-10px;right:10px;"><img src="gambar/200.gif"  width="130" height="45"></span>
          <span class="align-middle" style="position:relative;top:-6px;right:134px;"><img src="gambar/gil.jpg"  width="119" height="38"></span>
          <span class="align-middle" style="position:relative;top:17px;right:242px;"><img src="gambar/fas-logo.png" style="border-radius:5px;" width="100" height="8"></span>
          <!-- <span class="align-middle"><img src="gambar/icon.png"  width="30" height="30"></span>
          <h1 style="font-family: sans-serif;color:white;position:relative;top:0px;right:-5px;font-size:24px;"><b> PACKING</b></h1> -->
          <h1 style="font-family: inherit;color:white;position:relative;top:4px;right:190px;font-size:19px;"><b> PROOF</b></h1>
          <h1 style="font-family: inherit;color:white;position:relative;top:4px;right:185px;font-size:19px;"><b> OF</b></h1>
          <h1 style="font-family: inherit;color:white;position:relative;top:4px;right:180px;font-size:19px;"><b> DELIVERY</b></h1>
          
		  <h1 style="font-family: inherit;color:white;position:relative;top:4px;right:-1060px;font-size:19px;" id="jam"><b></b></h1>         
        </a>
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">		
				</div>              
			</nav>	
			<main class="content">				
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3"></div>
							<div class="">
                            <div class="row">						                                                                							
<!-- /////////////////////// -->
<style type="text/css">
	#gradient3 {
	  background-image: linear-gradient(to bottom right, #483D8B, #000000);
	}
.scroll1{
    display:block;
    border: 1px solid white;
    padding:10px;
    margin-top:-270px;
    margin-left:200px;
    
    width:500px;
    height:170px;
    overflow:auto;
    /* background-color:red; */
}
.scroll2{
    display:block;
    border: 1px solid white;
    padding:10px;
    margin-top:-60px;
    
    width:100%;
    height:650px;
    overflow:auto;
}


</style>

<form action="#" method="POST" name="form1">
        <table border="0"  ><br>
                <tr > 
                        <td><b>ORDER NO</b></td>
                    </tr>
                <tr> 
                <td><select style="width:300px;height:25px;border-radius:5px;background-color:#FFE4C4;text-align:center;color:blue;" name="order" id="order" required="3">
                <option  disabled selected>Pilih Order No</option>
                <?php
                    include "koneksi.php";
                    $set_jam = '60'; 
                                        $set_menit = '04'; ///untuk setting selisih 4 menit 
                                        $waktu_indonesia = time() + (60 * 60 * 7) ;
                                        $waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
                                        $tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
                                        $jam_ori = gmdate('H:i:s', $waktu_indonesia);
                                        $jam_oriw = gmdate('H:i', $waktu_indonesia);
                                        $tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
                                        $nama_tahun = gmdate('Y', $waktu_indonesia);
                                        $hari=gmdate('D', $waktu_indonesia);
                                        $nama_bulan = gmdate('M-Y', $waktu_indonesia);
                                        $nama_tgl = gmdate('d-m-y', $waktu_indonesia);
                                        $nama_hari=gmdate('D', $waktu_indonesia);
                                        $tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
                                        $bulan_nama2 = gmdate('M', $waktu_indonesia);
                                        $tgl2=date("Y-m-d");

                    $sql=mysqli_query($koneksi,"SELECT * FROM tb_proses_packing WHERE month = '$bulan_nama2' and year = '$nama_tahun' ");
                    while ($data = mysqli_fetch_array($sql)){
                        $indicated_qty = $data['indicated_qty'];
                        $order_number = $data['order_number'];
                        $item_no = $data['item_no'];
                      
                ?>
                <?php
                    include "koneksi.php";
                    $sqlqty=mysqli_query($koneksi,"SELECT SUM(qty) AS qty FROM tb_record_packing WHERE order_number = '$order_number' and item_no = '$item_no' and month = '$bulan_nama2' and year = '$nama_tahun' ");
                    while ($dataqty = mysqli_fetch_array($sqlqty)){
                        $act_qty = $dataqty['qty'];      
                ?>
                <?php
                    $total_qty = $act_qty - $indicated_qty  ;
                ?>
                    
                <option  value="<?=$data['order_number']?>"><?=$data['order_number']?> remain <?= $total_qty ?></option>
                <?php
                        }
                    }
                ?>
                </select>
                    <!-- <input type="submit" name="simpan" value="Simpan"> -->
                </td>

                <!-- <td><center><input style="width:300px;border-radius:5px;background-color:#FFE4C4;text-align:center;color:blue;" type="text" name="model" required="1" autofocus placeholder="pilih order no"></center></td> -->
            </tr>
            <tr> 
                <td><b>ITEM NO</b></td>
            </tr>
            <tr> 
                <td><center><input style="width:300px;border-radius:5px;background-color:#FFE4C4;text-align:center;color:blue;" type="text" name="item_no" required="2" placeholder="Scan Item No" autofocus required="1"></center></td>
            </tr> 
            <tr > 
                <td><b>QTY</b></td>
            </tr>
            <tr> 
                <td><center><input style="width:300px;border-radius:5px;background-color:#FFE4C4;text-align:center;color:blue;" type="text" name="qty" required="3" placeholder="Scan Qty" required="2"></center></td>
            </tr> 
            
             
            <tr> 
                <td></td>
                <td><input style="border-radius:10px;width:70px;height:30px;" type="submit" name="Submit" value="" hidden></td>
            </tr>
            
        </table>
        
    </form>
    <div style="position:relative;left:1500px;top:-180px;"><a href="index.php"><img style="border-radius:20px;" src="gambar/orb.gif" width="50px" height="50px;"></a>	</div>
    <div style="position:relative;left:1600px;top:-230px;"><a href="pod_logout.php"><img style="border-radius:20px;" src="gambar/out.jpg" width="50px" height="50px;"></a>	</div>
    <?php
     // include database connection file
     include "koneksi.php";
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
            $set_jam = '60'; 
            $set_menit = '04'; ///untuk setting selisih 4 menit 
            $waktu_indonesia = time() + (60 * 60 * 7) ;
            $waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
            $tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
            $jam_ori = gmdate('H:i:s', $waktu_indonesia);
            $jam_oriw = gmdate('H:i', $waktu_indonesia);
            $tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
            $nama_tahun = gmdate('Y', $waktu_indonesia);
            $hari=gmdate('D', $waktu_indonesia);
            $nama_bulan = gmdate('M-Y', $waktu_indonesia);
            $nama_tgl = gmdate('d-m-y', $waktu_indonesia);
            $nama_hari=gmdate('D', $waktu_indonesia);
            $tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
            $bulan_nama2 = gmdate('M', $waktu_indonesia);

            $getusername = $_SESSION['username'];
            $grup = $_SESSION['grup'];

            $order = $_POST['order'];
            $item_no = $_POST['item_no'];
            $qty = $_POST['qty'];
            
          
            $cekdata = mysqli_query($koneksi,"SELECT * FROM tb_proses_packing where order_number = '$order' and item_no = '$item_no' ");
            if(mysqli_num_rows($cekdata) == 1){
                
                $result = mysqli_query($koneksi, "INSERT INTO tb_record_packing(tgl,order_number,item_no,qty,pengguna,grup,month,year) VALUES ('$tanggal_ori','$order','$item_no','$qty','$getusername','$grup','$bulan_nama2','$nama_tahun')");
                
                // $result1 = mysqli_query($koneksi, "UPDATE tb_proses_packing SET actual_packing = '$tanggal_ori',act_qty = '$qty' WHERE order_number = '$order' and item_no='$item_no' ");
                // echo '<audio src="cekdata.mp3" controls autoplay> </audio>';
            }else{
         // Insert user data into table
         echo '<div id="tampil_modal"><div id="modal"><div id="modal_atas">warning</div><p>DATA TIDAK DITEMUKAN...!!!</p>
         <a href="pod_proses_packing.php"></a></div></div>';
        // Show message when user added
        // echo "Data added successfully. <a href='page-proses-cbu.php'>thanks</a>";
            }
    }
    ?>
<button style="position:relative;top:-70px;left:15px;width:150px;height:25px;border-radius:5px;background-image: linear-gradient(to bottom right, lime, white);"><a href="record_proses_packing.php" >Record Data</a></button>
<div class="scroll1">
<h4><b>POD DAILY REPORT</b></h4>
    <table class="table table-hover my-0">

        <thead>
            <tr>
                                        
                <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>MONTH</center></th>
                <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>YEAR</center></th>
                <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>PLAN</center></th>                              
                <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ACTUAL</center></th>
                <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>BALANCE</center></th>

            </tr>
        </thead>
        <?php
            include "koneksi.php";
            $set_jam = '60'; 
            $set_menit = '04'; ///untuk setting selisih 4 menit 
            $waktu_indonesia = time() + (60 * 60 * 7) ;
            $waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
            $tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
            $jam_ori = gmdate('H:i:s', $waktu_indonesia);
            $jam_oriw = gmdate('H:i', $waktu_indonesia);
            $tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
            $nama_tahun = gmdate('Y', $waktu_indonesia);
            $hari=gmdate('D', $waktu_indonesia);
            $nama_bulan = gmdate('M-Y', $waktu_indonesia);
            $nama_tgl = gmdate('d-m-y', $waktu_indonesia);
            $nama_hari=gmdate('D', $waktu_indonesia);
            $tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
            $bulan_nama2 = gmdate('M', $waktu_indonesia);
            $tgl2=date("Y-m-d");
                                        
            $no=1;
            $ambildata1 = mysqli_query($koneksi,"SELECT SUM(indicated_qty) AS indicated_qty FROM tb_proses_packing where month = '$bulan_nama2' and year = '$nama_tahun' ");                        
            while($tampil1 = mysqli_fetch_array($ambildata1)){
                $indicated_qty = $tampil1['indicated_qty'];
            ?>
            <?php
            $ambildata2 = mysqli_query($koneksi,"SELECT SUM(qty) AS qty FROM tb_record_packing where month = '$bulan_nama2' and year = '$nama_tahun' ");                        
            while($tampil2 = mysqli_fetch_array($ambildata2)){
                $qty_record = $tampil2['qty'];
            ?>
            <?php
                $balance_total = $qty_record - $indicated_qty ;
            ?>
            <tr>

                <td><center><b><?php echo $bulan_nama2 ; ?></b></center></td>
                <td><center><b><?php echo $nama_tahun ; ?></b></center></td>
                <td><center><b><?php echo $indicated_qty ; ?></b></center></td>
                <td><center><b><?php echo $qty_record ; ?></b></center></td>
                <td><center><b><?php echo $balance_total ; ?></b></center></td>
             
            </tr>
            <?php  
                }  
                }
            ?>
    </table>
</div>
<div class="scroll2">
<!-- <a href="importan-fas/form.php">Import Data </a><br><br> -->

<table class="table table-hover my-0">

                                    <thead>
                                        <tr>
                                        
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>NO</center></th>
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>INDICATED DAY</center></th>
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ITEM NO</center></th>                              
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ITEM NAME</center></th>
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>TYPE</center></th>
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ORDER NUMBER</center></th>
											<th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>INDICATED QTY</center></th>
											<th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ACTUAL PACKING</center></th>
											<th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ACT QTY</center></th>
											<th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>REMARK</center></th>
											<th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>REMAIN</center></th>
											<th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>STATUS PACKING</center></th>

                                        </tr>
                                    </thead>
                                    <?php
                                        include "koneksi.php";
                                        $set_jam = '60'; 
                                        $set_menit = '04'; ///untuk setting selisih 4 menit 
                                        $waktu_indonesia = time() + (60 * 60 * 7) ;
                                        $waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
                                        $tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
                                        $jam_ori = gmdate('H:i:s', $waktu_indonesia);
                                        $jam_oriw = gmdate('H:i', $waktu_indonesia);
                                        $tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
                                        $nama_tahun = gmdate('Y', $waktu_indonesia);
                                        $hari=gmdate('D', $waktu_indonesia);
                                        $nama_bulan = gmdate('M-Y', $waktu_indonesia);
                                        $nama_tgl = gmdate('d-m-y', $waktu_indonesia);
                                        $nama_hari=gmdate('D', $waktu_indonesia);
                                        $tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
                                        $bulan_nama2 = gmdate('M', $waktu_indonesia);
                                        $tgl2=date("Y-m-d");
                                        
                                        $no=1;
                                        $ambildata = mysqli_query($koneksi,"SELECT * FROM tb_proses_packing");
                                        while($tampil = mysqli_fetch_array($ambildata)){
                                            $order_number = $tampil['order_number'];
                                            $item_no = $tampil['item_no'];
                                        ?>

                                        <?php
                                            include "koneksi.php";
                                            $ambildata3 = mysqli_query($koneksi,"SELECT sum(qty) AS qty FROM tb_record_packing WHERE order_number = '$order_number' AND item_no = '$item_no' ");
                                            while($tampil3 = mysqli_fetch_array($ambildata3)){
                                                $qty = $tampil3['qty'];
                                            }
                                        ?>

                                        <?php
                                            include "koneksi.php";
                                            $ambildata4 = mysqli_query($koneksi,"SELECT DISTINCT tgl AS tgl FROM tb_record_packing WHERE order_number = '$order_number' AND item_no = '$item_no' ");
                                            while($tampil4 = mysqli_fetch_array($ambildata4)){
                                                $actual_packing4 = $tampil4['tgl'];
                                            }
                                        ?>

                                    <tr>
                                        <td><center><b><?php echo $no++ ?></b></center></td>
                                        <td><center><b><?php echo $tampil['indicated_day']; ?></b></center></td>
                                        <td><center><b><?php echo $tampil['item_no']; ?></b></center></td>
                                        <td><center><b><?php echo $tampil['item_name']; ?></b></center></td>
                                        <td><center><b><?php echo $tampil['type']; ?></b></center></td>
                                        <td><center><b><?php echo $tampil['order_number']; ?></b></center></td>
                                        <td><center><b><?php echo $tampil['indicated_qty']; ?></b></center></td>
                                        <td><center><b><?php echo $actual_packing4; ?></b></center></td>
                                        <td><center><b><?php echo $qty; ?></b></center></td>
                                       
                    
										<td><?php
										if ($actual_packing4 > $tampil['indicated_day'])  { 																					
											echo '<center><p style="color:red;">DELAY</p></center>';																			
										}elseif ($actual_packing4 == $tampil['indicated_day']){
											echo '<center><p style="color:green;">ON TIME</p></center>';		
										}else{
                                            echo '<center><p style="color:red;"></p></center>';
                                        }
										?></td>
                                           
                                        <td><center><?php
                                            echo $qty - $tampil['indicated_qty']  ;
										?></center></td>

                                        <td><?php
										if ($qty > $tampil['indicated_qty'])  { 																					
											echo '<center><p style="color:green;">COMPLETED</p></center>';																			
										}elseif ($qty == $tampil['indicated_qty']){
											echo '<center><p style="color:green;">COMPLETED</p></center>';		
										}else{
                                            echo '<center><p style="color:red;">NOT COMPLETED</p></center>';
                                        }
										?></td>
                                    </tr>
                                    <?php  
                                            
                                        }
                                    ?>
                                </table>
                                </div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-left">
							<p class="mb-0">
                            <a href="#" class="text-muted">&copy; <strong ><b>2022 <i style="color:blue;">Ramandani Gilang S [19968]</i> YIMM-WJF.</b></strong></a>	 
								
							</p>
						</div>
						<div class="col-6 text-right">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>

	<?php
 $set_jam = '60'; 
 $set_menit = '04'; ///untuk setting selisih 4 menit 
 $waktu_indonesia = time() + (60 * 60 * 7) ;
 $waktu_yamaha = time() + (60 * 60 * -1) + (60 * 120) ;
 $tanggal_yamaha_def = gmdate('Y-m-d', $waktu_yamaha);
 $jam_ori = gmdate('H:i:s', $waktu_indonesia);
 $jam_oriw = gmdate('H:i', $waktu_indonesia);
 $tanggal_ori = gmdate('Y-m-d', $waktu_indonesia);
 $nama_tahun = gmdate('Y', $waktu_indonesia);
 $hari=gmdate('D', $waktu_indonesia);
 $nama_bulan = gmdate('M-Y', $waktu_indonesia);
 $nama_tgl = gmdate('d-m-y', $waktu_indonesia);
 $nama_hari=gmdate('D', $waktu_indonesia);
 $tanggal_home=gmdate(', d/m/Y  H:i:s', $waktu_indonesia);
 $bulan_nama2 = gmdate('M', $waktu_indonesia);
  $jam_ori1 = gmdate('H:i', $waktu_indonesia);

include "koneksi.php";
if ($jam_ori1 == '07:36'){
    $update1 = mysqli_query($koneksi,"UPDATE tb_dashboard SET total_plan='0',plan_now='0',
    actual='0',balance='0' ");
}

?>


<script src="js/app.js"></script>
	
<script type="text/javascript">
 window.onload = function() { jam(); }

function jam() {
 var e = document.getElementById('jam'),
 d = new Date(), h, m, s;
 h = d.getHours();
 m = set(d.getMinutes());
 s = set(d.getSeconds());

 e.innerHTML = h +':'+ m +':'+ s;

 setTimeout('jam()', 1000);
}

function set(e) {
 e = e < 10 ? '0'+ e : e;
 return e;
}
$(document).on('keypress', 'input,select', function (e) {
    if (e.which == 13) {
        e.preventDefault();
        var $next = $('[tabIndex=' + (+this.tabIndex + 1) + ']');
        console.log($next.length);
        if (!$next.length) {
       $next = $('[tabIndex=1]');        }
        $next.focus() .click();
    }
});

    </script>

</body>

</html>