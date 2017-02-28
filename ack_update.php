<?php




$link = mysqli_connect("localhost", "root", "", "db_test");
/* check connection */
if (mysqli_connect_errno()) {

    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$secondviavcn= $_POST['updateviavcn'];



$imo = $_POST['uimo'];//1
$shipagencode= $_POST['usac'];//2
$draftcode= $_POST['uda'];//3
$vesselfromcode= $_POST['uvmf'];//4
$vesseltocode= $_POST['uvmt'];//5
$sdfpl= $_POST['udfpl'];//8

$dtoc= $_POST['dtoc'];//11

$sot= $_POST['uot'];//12
$sprdt= $_POST['uprdt'];
$sblf= $_POST['ublf'];//6
$sblt= $_POST['ublt'];//7
$sdtrvtb= $_POST['udtrvtb'];
$sb= $_POST['ub'];//9
$sdtosoa= $_POST['udtosoa'];//10
$spbdt= $_POST['uprdt'];//14
$sdf= $_POST['udf'];//13



$query ='UPDATE plt

 SET

 IMONO ="'.$imo.'",
 SHPAGCD ="'.$shipagencode.'" ,
 DAFT ="'.$draftcode.'" ,
 VSLMFR ="'.$vesselfromcode.'",
 VSLMTO ="'.$vesseltocode.'",
 BTHLOCFR ="'.$sblf.'",
 BTHLOCTO ="'.$sblt.'", 
 DSTFRPTLT ="'.$sdfpl.'",
 DTRVTB = "'.$sdtrvtb.'",
 BEAR ="'.$sb.'", 
 DTOSUB = "'.$sdtosoa.'", 
 DTOCAN ="'.$dtoc.'",
  OPRTP = "'.$sot.'",
  DFWD ="'.$sdf.'",
  PLTRDDT ="'.$spbdt.'"

  where viaovcn='.$secondviavcn. ' ';



	
 

if ($result = mysqli_query($link, $query)) {

     header('Location: http://localhost:8080/final?msg=updated');

    /* free result set */
    mysqli_free_result($result);
}else{
	echo mysqli_error($link);
	echo $query;
	 //header('Location: http://localhost:8080/final?msg=cannot_insert');
	 
}
		
		
	

/* close connection */
mysqli_close($link);









?>