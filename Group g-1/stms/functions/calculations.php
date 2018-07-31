<?php

function jobs_per_user($usaId) {

	$user=array();
	$num_jobs_submitted=0;

	$a="SELECT *FROM job";
	$b=mysqli_query(mysqli_connect("localhost","root","HENRY117","stms_db"),$a);

			if ($b->num_rows>0) {

					#stores users in an array
					while ($row=$b->fetch_assoc()) {
						$user[]=$row['userId'];
						}

						$arrlength=count($user);

								#checks all jobs with same userID
								for($i = 0; $i < $arrlength; $i++){

									if($user[$i]==$usaId){
										$num_jobs_submitted += 1;
									}

								}
				return $num_jobs_submitted;

		}else {

			return "Empty";
		}

}

function failure_rate($usaId) {

			$failed_tasks=0;
			$failure_rate=0;
			$jobsSubmitted=jobs_per_user($usaId);
			$proctime=0;
			$m="SELECT *FROM job WHERE userId='$usaId' AND status='waiting'";
			$n=mysqli_query(mysqli_connect("localhost","root","HENRY117", "stms_db"),$m);

			if ($n->num_rows>0) {

				$failed_tasks=mysqli_num_rows($n);

				$failure_rate=($failed_tasks/$jobsSubmitted)*100;

				return $failure_rate;
			}
			else{
				exit;
			}
}


function success_rate($usaId) {

		$success_rate=0;
		$successful_tasks=0;
		$jobsSubmitted=jobs_per_user($usaId);
		$proctime=0;
			$m="SELECT *FROM job WHERE userId='$usaId' AND status='ready'";
			$n=mysqli_query(mysqli_connect("localhost","root","HENRY117", "stms_db"),$m);

			if ($n->num_rows>0) {

								$successful_tasks=mysqli_num_rows($n);


				$success_rate=($successful_tasks/$jobsSubmitted)*100;

				return $success_rate;
			}
			else{
				exit;
			}

}

function average_rate() {

	$numberOfReadyJobs=0;
	$total_ptime=0;
	$average=0;
	$m="SELECT *FROM job WHERE status='ready'";
	$n=mysqli_query(mysqli_connect("localhost","root","HENRY117", "stms_db"),$m);

		if ($n->num_rows>0) {

				while ($row=$n->fetch_assoc()) {
					$ptime_seconds=$row['processingTime'];



					$numberOfReadyJobs=mysqli_num_rows($n);
					$total_ptime+=$ptime_seconds;
					$average=($total_ptime/$numberOfReadyJobs);
				}

			return number_format($average,10,'.',',')."s";
		}
		else{
			return "<p class='alert alert-danger'>No completed job!<p>";
		}

}

function generatePIN($digits = 4){
    $i = 0;
    $pin = "";
    while($i < $digits){
        //generate a random number between 0 and 9.
        $pin .= mt_rand(000, 999);
        $i++;
    }
    return "U".$pin;
}

?>
