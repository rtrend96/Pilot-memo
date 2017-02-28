
<?php

//DB VARS
define('SERVERNAME', '');
define('DBNAME', '');
define('TABLE1', 'PLTMEM_APPLICATIONDETAILS');
define('TABLE2', 'MESSAGE_MASTER');
define('USERNAME', '');
define('PASSWORD', '');










//	memo db elements
$creftype= $_POST["COMMONRENUMBER"];
$recdtp=$_POST["RECORDTYPE"];
$viavcn=$_POST["VIAORVCN"];
$imono=$_POST["IMONUMBER"];
$nxtprtcl=$_POST["NEXTPORTOFCALL"];
$oprtp=$_POST["OPERATIONTYPE"];
$shpagcd=$_POST["SHIPPINGAGENTCODE"];
$pltrddt=$_POST["PILOTREQUIREDDATEANDTIME"];
$daft=$_POST["DRAFTAFT"];
$dfwd=$_POST["DRAFTFWD"];
$vslmfr=$_POST["VESSELMOVEMENTFROM"];
$bthlocfr=$_POST["BERTHLOCATIONFROM"];
$vslmto=$_POST["VESSELMOVEMENTTO"];
$bthlocto=$_POST["BERTHLOCATIONTO"];
$dstfrptlt=$_POST["DISTANCEFROMPORTLIMIT"];
$bear=$_POST["BEARING"];
$dtosub=$_POST["DATEOFSUBMISSON"];
$dtocan=$_POST["DATEOFCANCELLATION"];


// connection statements
$conn = mysqli_connect(SERVERNAME, PASSWORD , USERNAME, DBNAME);


// result


//redirect with results

?>
     

// result
//$result ->mysqli_query($conn, $sql);


//redirect with results
