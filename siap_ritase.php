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

	<title>Proses Packing to Ritase</title>

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
          <h1 style="font-family: inherit;color:white;position:relative;top:4px;right:190px;font-size:19px;"><b> PROSES</b></h1>
          <h1 style="font-family: inherit;color:white;position:relative;top:4px;right:185px;font-size:19px;"><b> PACKING</b></h1>
          <h1 style="font-family: inherit;color:white;position:relative;top:4px;right:180px;font-size:19px;"><b> TO</b></h1>
          <h1 style="font-family: inherit;color:white;position:relative;top:4px;right:175px;font-size:19px;"><b> RITASE</b></h1>
                    
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

.scroll2{
    display:block;
    border: 1px solid white;
    padding:10px;
    margin-top:5px;
    
    width:100%;
    height:650px;
    overflow:auto;
}


</style>
<div style="position:relative;left:1500px;top:-10px;"><a href="pod_proses_packing.php"><img style="border-radius:20px;" src="gambar/orb.gif" width="50px" height="50px;"></a>	</div>

<form id="in-bar" method="get" action="" class="fill-barcode">
			<p style="margin-left: 2%;">
				<center><input style="position:relative;background-color:#44566C;border-radius:5px;color:white;" type="date" name="dani" placeholder="Input di sini" autofocus><center>
				<div id="toggle" onclick="showHide();"></div>
			</p>
			<td><input type="submit"  value="OK" hidden=""></td>
</form>
<div class="scroll2">
<!-- <a href="importan-fas/form.php">Import Data </a><br><br> -->

<table class="table table-hover my-0">

                                    <thead>
                                        <tr>
                                        
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>NO</center></th>
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>TANGGAL</center></th>
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ITEM NO</center></th>
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>ORDER NO</center></th>                              
                                            
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>QTY</center></th>
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>PENGGUNA</center></th>
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>GRUP</center></th>
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>INDIKATOR</center></th>
                                            <th class="d-none d-md-table-cell" style="color:white;" id="gradient3"><center>AKSI</center></th>
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
                                        if(isset($_GET['dani'])){
                                            $dtgl = $_GET['dani'];
                                        $ambildata = mysqli_query($koneksi,"SELECT * FROM tb_record_packing_to_ritase WHERE tgl = '$dtgl' ");
                                        }else{
                                        $ambildata = mysqli_query($koneksi,"SELECT * FROM tb_record_packing_to_ritase WHERE tgl = '$tanggal_ori' ");
                                        
                                        }
                                            while($tampil = mysqli_fetch_array($ambildata)){
                                                $indikator = $tampil['indikator'];
                                            ?>

                                        <?php
                                        include "koneksi.php";
                                            if ($indikator == '1'){
                                                $warna = mysqli_query($koneksi,"SELECT * FROM tb_indikator where id='2' ");
                                            }elseif($indikator == '2'){
                                                $warna = mysqli_query($koneksi,"SELECT * FROM tb_indikator where id='1' ");
                                            }
                                                while ($data =  mysqli_fetch_array($warna,MYSQLI_ASSOC)) {                                                                                         
                                        ?>

                                    <tr>
                                        <!-- <td>$no</td> -->
                                       
                                        <td><center><b><?php echo $no++ ?></b></center></td>
                                        <td><center><b><?php echo $tampil['tgl']; ?></b></center></td>
                                        <td><center><b><?php echo $tampil['item_no']; ?></b></center></td>
                                        <td><center><b><?php echo $tampil['order_number']; ?></b></center></td>
                                        <td><center><b><?php echo $tampil['qty']; ?></b></center></td>
                                        <td><center><b><?php echo $tampil['pengguna']; ?></b></center></td>
                                        <td><center><b><?php echo $tampil['grup']; ?></b></center></td>
                                        <td><center><b><?php echo "<img  src='gambar/$data[warna]' width='30px' height='30px' />" ; ?></b></center></td>
                                        <td><center><?php echo "<a href='edit_record_packing.php?id=$tampil[id]'><b style='color:red;'>back</b></a> || <a href='to_ritase.php?id=$tampil[id]'><b style='color:blue;'>to container</b></a></center></td></tr>";?>       
                                    
                                    <?php
                                            }
                                        }
                                    ?>                  
									</tr>
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