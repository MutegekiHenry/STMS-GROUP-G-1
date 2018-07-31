#!/usr/bin/php
<?php 

$conn=mysqli_connect("localhost","root","HENRY117", "stms_db");

	if(!$conn){
		die("Cannot connect to database! Error: " .mysqli_error($conn));
	}

$dir = "busylist.txt";

$busylist = fopen($dir, "r") or die();

$status = 'waiting';

while(!feof($busylist)){
	//echo fgets($busylist). "</br>";
	$line = fgets($busylist);

	$arrWords = explode(" ",$line);

	#echo print_r($arrWords)."</br>";

			$arrIDandJobType = explode("-",$arrWords[0]);

			$jobType = $arrIDandJobType[1];

			if($jobType == "Delete" || $jobType == "Replace"){

					$arrYearandPriority =explode("#", @$arrWords[7]);

					$id = @$arrIDandJobType[0];
					$jobType = @$arrIDandJobType[1];
					$job = @$arrWords[1]." ".$arrWords[2];
					$day = @$arrWords[3];
					$cal = @$arrWords[5];
					$month = @$arrWords[4];
					$time = @$arrWords[6];
					$year = @$arrYearandPriority[0];
					$priority = @$arrYearandPriority[1];
				

					$q = "INSERT INTO job(userId,jobType,job,submissionTime,status,priority)VALUES('$id','$jobType','$job','$cal $month $year $time','$status','$priority')";
					$r = mysqli_query($conn,$q);

				if($r){
					echo "Successfully added busy list data to database <br/>";
				}else {echo"error----".mysqli_error($conn)."<br/>";}

			} else {

				$arrYearandPriority =explode("#", @$arrWords[6]);

				$id = @$arrIDandJobType[0];
				$jobType = @$arrIDandJobType[1];
				$job = @$arrWords[1];
				$day = @$arrWords[2];
				$cal = @$arrWords[4];
				$month = @$arrWords[3];
				$time = @$arrWords[5];
				$year = @$arrYearandPriority[0];
				$priority = @$arrYearandPriority[1];

				$n = "INSERT INTO job(userId,jobType,job,submissionTime,status,priority)VALUES('$id','$jobType','$job','$cal $month $year $time','$status','$priority')";
				$m = mysqli_query($conn,$n);

				if($m){
					echo "Successfully added busy list data to database <br/>";
				} else {echo"error----".mysqli_error($conn)." <br/>";}
			}

}
file_put_contents($dir, "");
fclose($busylist);


?>
