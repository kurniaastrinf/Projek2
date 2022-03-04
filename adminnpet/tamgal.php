<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>

		<?php
		if(isset($_POST['submit'])){
		    $id			= $_POST['id'];
			$judul		= $_POST['namahewan'];
			$isi	= $_POST['jenis'];
			$tgl	= $_POST['tetang'];

			$cek = mysqli_query($koneksi, "SELECT * FROM tbl_hewan WHERE id='$id'") or die(mysqli_error($koneksi));

			if(mysqli_num_rows($cek) == 0){
				$sql = mysqli_query($koneksi, "INSERT INTO tbl_hewan(id, namahewan, jenishewan, tentang, ) VALUES('$id', '$namahewan', '$jenishewan', '$tentang', )") or die(mysqli_error($koneksi));
				
				  
				if($sql){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=blog";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}else{
				echo '<div class="alert alert-warning">Gagal, id sudah terdaftar.</div>';
			}
		}
	
?>

		<div class="row">
	<div class="col-md-12">
				<form enctype="multipart/form-data" action="index.php?page=tambah_blog" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="id" placeholder="Id" required="required" >
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="nama" placeholder="Nama Hewan" required="required" >
					</div>
                    <div class="form-group">
						<input type="text" class="form-control" name="jenis" placeholder="Jenis Hewan" required="required" >
					</div>
                    </div>
					 <div class="form-group">
				      <textarea rows="5" cols="40" class="form-control" placeholder="tentang" name="Tentang" required="required"></textarea>
				    </div>
				    <div class="controls">  
				    </div>  
				  </div>  
								
					<div class="form-group">
						<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
						<a href="index.php?page=blog" class="btn btn-warning">Kembali</a>
			</div>
				</form>
	</div>

</div>

<?php  ?>