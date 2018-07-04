<script src="../../assetsjs/js/jquery-3.2.1.js"></script>
<script src="tampil/admin/json/proses.js"></script>
<style type="text/css">
	input[type=text], input[type=number],textarea,input[type=date],input[type=number], .lg {
    width: 100%;
    padding: 3px 20px;
    margin: 1px 0;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 3px;

}
.a{
	 width: 500px;
    padding: 3px 20px;
    margin: 1px 0;
    box-sizing: border-box;
    border: 1px solid black;
    border-radius: 3px;
}
	input[type=button], input[type=submit], input[type=reset] {
    background-color: #036d0a;
    border: none;
    color: white;
    padding: 8px 18px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
</style>

<p align="center" style="font-size: 25px; font-weight: bold">UBAH DATA KEGIATAN</p>
<hr><br><br>
<form action="index.php?page=kegiatan_ubah_proses" method="post" enctype="multipart/form-data">
<?php
$kegiatan_id=$_GET['kegiatan_id'];
$tampil="SELECT * FROM kegiatan LEFT JOIN judul ON kegiatan.judul_id=judul.judul_id LEFT JOIN subjudul ON kegiatan.subjudul_id=subjudul.subjudul_id LEFT JOIN pengguna ON kegiatan.pengguna_id=pengguna.pengguna_nip LEFT JOIN bidang ON pengguna.bidang_id =bidang.bidang_id LEFT JOIN subbidang ON pengguna.subbidang_id=subbidang.subbidang_id WHERE kegiatan_id='$kegiatan_id'";
$query=mysql_query($tampil);

$row=mysql_fetch_array($query);

$a=$row['kegiatan_no'];
$b=$row['kegiatan_id'];
$c=$row['pengguna_nip'];
$d=$row['judul_id'];
$e=$row['kegiatan_tanggal'];
$f=$row['subjudul_id'];
$g=$row['kegiatan_tangakhir'];
$h=$row['kegiatan_anggaran'];
$i=$row['kegiatan_rincian'];
$j=$row['pengguna_nama'];
?>
<input type="hidden" name="kegiatan_id" value="<?php echo $b;  ?>">
<table align="center">
	<tr>
		<td>Kode Kegiatan</td>
		<td></td>
		<td><input type="text" name="kegiatan_no" readonly="readonly" value="<?php echo $a; ?>"></td>
	</tr>
    <tr>
		<td>NIP</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;<input type="text" name="kegiatan_nippegawai" id="kegiatan_nippegawai" value="<?php echo $c; ?>"><button type="button" id="btn-search" style="width: 50px; font-weight: bold;">Cari</button></td>
		<td></td>
		<td></td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;Nama Pegawai</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;<input type="text" name="kegiatan_namapegawai" id="kegiatan_namapegawai" style="width:200px;" value="<?php echo $j; ?>"></td>
	</tr>
    <tr>
		<td>Judul Kegiatan</td>
		<td></td>
		<td>
			<select name="kegiatan_judul" id="kegiatan_judul" class="a">
		      <?php
				$query="SELECT * FROM judul ORDER BY judul_id ASC";
				$result=mysql_query($query) or die(mysql_error());
                ?>
                <?php
				while ($data=mysql_fetch_array($result)) {
				?> 
					<option 
					<?php
					if ($data['judul_id'] == $row['judul_id']) {
						echo 'selected="selected"';
					}
					?>
					 value="<?php echo $data['judul_id'];?>"><?php echo $data['judul_nama']; ?></option>
				<?php
				}
				?>
			</select>
		</td>
		<td></td>
		<td></td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;Tanggal Awal Kegiatan</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;<input type="date" name="kegiatan_tanggal" style="width: 200px;"value="<?php echo $e; ?>"/></td>
	</tr>
	<tr>
		<td>Sub Judul Kegiatan</td>
		<td></td>
		<td>
			<select name="kegiatan_subjudul" id="kegiatan_subjudul" class="a">
		       <?php
				$query="SELECT * FROM subjudul ORDER BY subjudul_id ASC";
				$result=mysql_query($query) or die(mysql_error());
                ?>
                <?php
				while ($data=mysql_fetch_array($result)) {
				?> 
					<option 
					<?php
					if ($data['subjudul_id'] == $row['subjudul_id']) {
						echo 'selected="selected"';
					}
					?>
					 value="<?php echo $data['subjudul_id'];?>"><?php echo $data['subjudul_nama']; ?></option>
				<?php
				}
				?>
			</select>
		</td>
		<td></td>
		<td></td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;Tanggal Akhir Kegiatan</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;<input type="date" name="kegiatan_tanggalakhir" style="width: 200px;" value="<?php echo $g; ?>"/></td>
	</tr>
	<tr>
		<td>Anggaran Kegiatan</td>
		<td></td>
		<td><input type="number" name="kegiatan_anggaran" value="<?php echo $h; ?>"/></td>
	</tr>
	<tr>
		<td>Rincian Kegiatan</td>
		<td></td>
		<td>&nbsp;&nbsp;&nbsp;<textarea name="kegiatan_berkas" cols="60px;" rows="10px"><?php echo $i; ?></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="kegiatan_ubah" value="UBAH"><input type="reset" name="kegiatan_reset" value="BATAL"></td>
	</tr>
</table>
</form>
