<style type="text/css">
    .tombol{
        background:Red;
        color: white;
        border-top: 0;
        border-right:1;
        border-left: 0;
        border-bottom:0;
        padding: 4px 11px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 8pt;
    }
    .tombol3{
        background:#036d0a;
        color: white;
        border-top: 0;
        border-right:1;
        border-left: 0;
        border-bottom:0;
        padding: 4px 11px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 8pt;
    }
    .tombol2{
        background:#2C97DF;
        color: white;
        border-top: 0;
        border-right: 0;
        border-left: 0;
        border-bottom:0;
        padding: 4px 11px;
        text-decoration: none;
        font-family: sans-serif;
        font-size: 12pt;
    }
    .btn{
        border-radius: 30px;
        background-color: blue;
        width: 130px;
        text-align:center;
        color : white;
        text-decoration-line: none;
    }
    p a{
        text-decoration-line: none;
        color: white;
    }
</style>
<?php
$query="SELECT * FROM bidang";
$result=mysql_query($query);
?>
<p align="left"><a href="index.php?page=bidang_tambah" class="tombol2"><span class="fa fa-plus" style="font-size: 15pt;"></span>&nbsp;TAMBAH</a></p>
<br>
<table id="example" border="0" width="100%" align="center" bgcolor="#036d0a">
    <thead>
	<tr style="color: white;">
		<th>Nama Bidang</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
<?php
while ($data=mysql_fetch_array($result)) {
?>
    <tr align="center">
    	<td><?php echo $data['bidang_nama'];  ?></td>
    	<td align="center"><a class="tombol" href="index.php?page=bidang_hapus&bidang_id=<?php echo $data['bidang_id'];  ?>" onclick="return confirm('Yakin akan hapus')">HAPUS <a class="tombol3" href="index.php?page=bidang_ubah&bidang_id=<?php echo $data['bidang_id'];?>">UBAH</a></td>
    </tr>
<?php
}
?>
</tbody>
<script type="text/javascript">
    $(document).ready(function(){
        $('#example').DataTable();
    });
</script>
</table>