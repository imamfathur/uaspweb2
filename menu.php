
<?php
    if( !empty( $_SESSION['id_user'] ) ){
    include "koneksi.php";
?>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>

	  <div class="navbar-brand" href=""><span class="glyphicon glyphicon-cloud"></span> Penjualan Motor</div>
	</div>
	<div class="navbar-collapse collapse">
	  <ul class="nav navbar-nav">
		<li><a href="./admin.php"><span class="glyphicon glyphicon-home"></span>Beranda</a></li>

		<?php
        if( $_SESSION['level'] == 1 ){
        ?>	
		<li><a href="./admin.php?hlm=transaksi"><span class="glyphicon glyphicon-usd"></span>Transaksi</a></li>
        <li><a href="?hlm=laporan"><span class="glyphicon glyphicon-exclamation-sign"></span>Laporan</a></li>

        
			<li><a href="./admin.php?hlm=user"><span class="glyphicon glyphicon-user "></span>Pengguna</a></li>
			<?php
			}
			?>
		  </ul>
		</li>
	  </ul>
	  <ul class="nav navbar-nav navbar-right">
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>
			<?php echo $_SESSION['nama']; ?> <b class="caret"></b>
		  </a>
		  <ul class="dropdown-menu">
			<li><a href="logout.php"><span class="glyphicon glyphicon-left"></span>Keluar</a></li>
		  </ul>
		</li>
	  </ul>
	</div><!--/.nav-collapse -->
  </div>
</div>
<?php
} else {
	header("Location: ./");
	die();
}
?>
