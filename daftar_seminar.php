<?php 
include_once 'top.php';
include_once 'dbkoneksi.php';

$sql = "SELECT * FROM seminar";
$rs = $dbh->query($sql);

?>


<div class="row">
		<div class="col-md-12">		
		<h1>Daftar Seminar</h1>
<table class="table table-striped table-bordered" id="example">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Kode
						</th>
						<th>
							Judul Seminar
						</th>
						<th>
							Tanggal
						</th>
						<th>
						Action
						</th>
					</tr>
				</thead>
				<tbody>
		<?php 
		$nomor =1;
		foreach($rs as $row){ //buka 			
		?>
					<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $row['kode'];?></td>
					<td><?=$row['judul']?></td>
					<td><?=$row['tanggal']?></td>
					<td>
						<a href="view_seminar.php?id=<?=$row['id']?>">
						   <i class="fa fa-eye"></i>
						</a>
						<a href="form_seminar.php?id=<?=$row['id']?>">
						   <i class="fa fa-pencil"></i>
						</a>
	
						<a href="del_seminar.php?id=<?=$row['id']?>">
						  <i class="fa fa-trash"></i>
						</a>
					</td>
					</tr>
		<?php 
		  $nomor++;
		}
		 ?>
		 	</tbody>
			</table>



		</div>
</div>

<?php 
include_once 'bottom.php';
?>