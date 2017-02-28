<?php




$link = mysqli_connect("localhost", "root", "", "db_test");
/* check connection */
if (mysqli_connect_errno()) {

    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$secondviavcn= $_POST['secondviavcn'];
$imo = $_POST['simo'];
$shipagencode= $_POST['ssac'];
$draftcode= $_POST['sda'];
$vesselfromcode= $_POST['svmf'];
$vesseltocode= $_POST['svmt'];
$sdfpl= $_POST['sdfpl'];
$sdt= $_POST['sdt'];
$dtoc= $_POST['dtoc'];
$sas= $_POST['sas'];
$scr= $_POST['scr'];
$sot= $_POST['sot'];
$sprdt= $_POST['sprdt'];
$sblf= $_POST['sblf'];
$sblt= $_POST['sblt'];

$sb= $_POST['sb'];
$sdtosoa= $_POST['sdtosoa'];
$spbdt= $_POST['spbdt'];
$sdf= $_POST['sdf'];
$reason_input= $_POST['reason_input'];


$query ='INSERT INTO plt (IMONO,VIAOVCN, 
SHPAGCD,
DAFT,VSLMFR,VSLMTO, DTRVTB,
BTHLOCFR,BTHLOCTO,DSTFRPTLT,
BEAR,DTOSUB,DTOCAN, 
reason ,OPRTP, DFWD,
PLTRDDT) values('.$imo.','.$secondviavcn.','.$shipagencode.',
'.$draftcode.' ,'.$vesselfromcode.','.$vesseltocode.', '.$sdt.','.$sblf.','.$sblt.',
'.$sdfpl.','.$sb.', '.$sdtosoa.', '.$dtoc.','.$reason_input.', 
  '.$sot.','.$sdf.','.$spbdt.') ';
	
  $querytochecktheexisting ='SELECT * from plt where viaovcn= '.$secondviavcn.'';
  
  // first condition
if ($result1 = mysqli_query($link, $querytochecktheexisting)) {

    /* fetch associative array */
    if ($row = mysqli_fetch_assoc($result1)) {
  header('Location: http://localhost:8080/final?msg=already');
    }else{
		  
  //second condiyion
if (mysqli_query($link, $query)) {

     header('Location: http://localhost:8080/final?msg=success');

    /* free result set */
    mysqli_free_result($result);
}else{
	echo mysqli_error($link);
	// header('Location: http://localhost:8080/final?msg=cannot_insert');
	 
}
		
		
	}

    /* free result set */
    mysqli_free_result($result1);
}
  
  
  
  
  
  
  
  
  
  
  


/* close connection */
mysqli_close($link);









?>