<?php if(!isset($_SESSION['username'])) {

	echo '<p class="alert alert-danger">You are not logged in, please log in first!<p>';
	echo '<meta http-equiv="refresh" content="2;url=?page=login.php" />';
}else {?>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">

					<center><h3 id="heading">SUCCESS RATE</h3></center>

<table class='table table-bordered table-hover' border='1'>
	<thead>
		<tr>
			<th>USER ID</th>
			<th>JOBS SUBMITTED</th>
			<th>SUCCESS(%)</th>
		</tr>
	</thead>
<tbody>


<?php

	$q="SELECT *FROM job";
	$r=mysqli_query($conn,$q);

			if ($r->num_rows>0) {
$i=0;
				while ($row=$r->fetch_assoc()) {
					$userId[$i]=$row['userId'];
					$i++;
					}


					$arraylength = count($userId);
					$k=0;
					$j=0;
					$count = 0;

				 while($k<$arraylength){

				 	while($j<$arraylength){


						if($userId[$k]==$userId[$j]){


							if($count!=0){
							 	break;
							}

							 echo "<tr>
							 		<td>".$userId[$k]."</td>
							 		<td>".jobs_per_user($userId[$k])."</td>
							 		<td>".success_rate($userId[$k])."</td>
							 	</tr>";
								$count++;

						}else{
							
									 echo "<tr>
									 		<td>".$userId[$k]."</td>
									 		<td>".jobs_per_user($userId[$k])."</td>
									 		<td>".success_rate($userId[$k])."</td>
									 </tr>";

						}
						$j++;

					}

					$k++;

				 }

			}
			else{
				echo "<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>";
				echo '<p class="alert alert-danger">No jobs available as yet!</p>';
			}
?>
</tbody>
<tfoot></tfoot>
</table>

				</div>
			</div>
		</div>
	</div>


<?php } ?>
