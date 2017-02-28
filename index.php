<!-- FRAMEWORK FOR HTML ELEMENTS

basic idea of building this framework is to override the skeleton elements and and make them look more neat impressive beautiful

-->



<?php
$querytoretrive =-1;
$settedviavar =-1;
session_start();

$link = mysqli_connect("localhost", "root", "", "db_test");
/* check connection */
if (mysqli_connect_errno()) {
	
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}




?>



<!DOCTYPE html>
<html >
    <head>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 



   <title>Pilot Memo 
				  </title>
	</head>
			<body style="margin:0px; padding:0px; border:0px; font-family:Roboto;">



<nav style="text-align:center; background:#33adff; color:#fff; height:100%; margin:0px; padding:0px; border:0px; ">


 <div style="text-align:center; ">
 <img src="logo.png">
<h3 style="font-family: 'Oswald', sans-serif; text-align:center; padding:0px; margin:0px; font-size:269%;">PILOT MEMO</h3>
                 	</div>
  </nav>
  
<?php
echo '<h3>';
if(isset($_GET['msg']) && ($_GET['msg']=='already')){
	echo'<marquee style="color:red;">Already present</marquee>';
}else if(isset($_GET['msg']) && ($_GET['msg']=='success')){
	echo'<marquee style="color:green;">Succesfully Entered</marquee>';
}else if(isset($_GET['msg']) && ($_GET['msg']=='updated')){
	echo'<marquee style="color:rgba(255, 163, 107, 0.94);">Succesfully Updated</marquee>';
}
echo '</h3>';


	// empty here
	if(isset($_GET['via_id']) && !($_GET['via_id'] == -1)){
		$settedviavar = $_GET['via_id'];
		
		
		
	$querytoretrive = 'SELECT * from plt where viaovcn = '.$settedviavar;
	
		
		//echo '<script type="text/javascript">alert("'.$settedviavar.'");</script>';
	}
		

?>
 <br>
	<form  style="font-size:120%; text-align:center; margin:0px auto;" action="ack_update.php" method="POST">
	 <select  style="font-size:120%; text-align:center; margin:0px auto; " name="updateviavcn" id="select_input" onchange="changedthechooser()">
<!-- php-->
<option value="-1" >Choose VIA/VCN ID </option>




<?php


$query = "SELECT viaovcn from plt";

if ($result = mysqli_query($link, $query)) {

    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
         echo '<option value="'.$row['viaovcn'].'"';
		 if(!($settedviavar == null || $settedviavar== -1 || $settedviavar=='' || $settedviavar==' ')){
			 if($row['viaovcn'] == $settedviavar){
				echo 'selected'; 
			 }
		 }
		 echo '>';
		 echo $row['viaovcn'];
         echo " </option>\n";
    }

    /* free result set */
    mysqli_free_result($result);
}

if ($result = mysqli_query($link, $querytoretrive)) {
	 $roww = mysqli_fetch_assoc($result);
       




//ikde php band hoty hota
echo '
</select>
 
<div style="width:100%;" id="first_box">

<div style="float:left; width:50%;">
	
	
        
  <div>IMO NO. :</div>
            <input id="f2" type="text" name="uimo" value="'.$roww['IMONO'].'" style="width:70%; font-size:100%;">
          
          	<br>
			<br>
 
<div for="f3" > SHIPPING AGENT CODE :</div>
            <input id="f3" type="text" name="usac" value="'.$roww['SHPAGCD'].'" style="width:70%; font-size:100%;">
            
          
        
<br>
          <br>
          
            
  <div for="f2" >Draft AFT :</div>
            <input id="f2" type="number"  name="uda" value="'.$roww['DAFT'].'" style="width:70%; font-size:100%;">
 
		
<br>
<br>
  
           
          
          
   <div for="f1" >VESSEL MOVEMENT FROM :</div>
            <input id="f1" type="text"  name="uvmf" value="'.$roww['VSLMFR'].'" style="width:70%; font-size:100%;">
         
          
        <br>
			<br>
		

		  <div for="f1" >VESSEL MOVEMENT TO :</div>
            <input id="f1"  name="uvmt"  value="'.$roww['VSLMTO'].'" type="text" style="width:70%; font-size:100%;">
         
          
        <br>
			<br>
		

        
   
          
 <div for="f3" >DISTANCE FROM PORT LIMIT : </div>
            <input id="f3"   name="udfpl" value="'.$roww['DSTFRPTLT'].'" type="number" style="width:70%; font-size:100%;">
           <br>
		   <br>
          
        

		<!--dadsad-->

		 
	   

          
   <div for="f1" >D/T OF READINESS VESSEL TO BERTH : </div>
            <input  name="udtrvtb" value="'.$roww['DTRVTB'].'" id="f1" type="text" style="width:70%; font-size:100%;">
         
          
        <br>
		<br>
		
           <div for="f3" >DT/ OF CANCELLATION : </div>
            <input id="f3"  name="dtoc" value="'.$roww['DTOCAN'].'" type="text" style="width:70%; font-size:100%;">
    
	</div>
	<div style="float:right; width:50%;">
	 <div style="">OPERATION TYPE : </div>
            <input id="f2"  name="uot" value="'.$roww['OPRTP'].'" type="text" style="width:70%; font-size:100%;">
          
          	<br>
			<br>
			<div for="f1" >PILOT REQUIRED DATE/TIME :</div>
            <input id="f1"  name="uprdt" value="'.$roww['PLTRDDT'].'" type="text" style="width:70%; font-size:100%;">
			
			
			
			<br>
			<br>
			        
<div for="f3" >Draft FWD :</div>
            <input id="f3"  name="udf" type="number"  value="'.$roww['DFWD'].'" style="width:70%; font-size:100%;">
            
          
      
			<br>
			<br>
           <div for="f3" >BERTH/LOCATION FROM : </div>
            <input id="f3"   name="ublf" value="'.$roww['BTHLOCFR'].'" type="text" style="width:70%; font-size:100%;">

          
        
      
        
<br>
<br>
        
		       
 <div for="f2" >BERTH/LOCATION TO : </div>
            <input id="f2"   name="ublt" value="'.$roww['BTHLOCTO'].'" type="text" style="width:70%; font-size:100%;">
           
          
        
		
		
<br>
<br>

            <div for="f3" >BEARING :</div>
            <input id="f3"   name="ub" type="number" value="'.$roww['BEAR'].'" style="width:70%; font-size:100%;">

          
<br>
<br>
       
            <div for="f2" >D/T OF SUBMISSION OF APPLICATION : </div>
            <input id="f2"  name="udtosoa" value="'.$roww['DTOSUB'].'" type="text" style="width:70%; font-size:100%;">

          
        
		 
<br>
<br>

	</div>
	<br>
	<br>
	 <input  style="width:20%; font-size:130%; padding:10px; background:#33adff; border-radius:5px; border:0px;box-shadow:2px 2px 2px 2px hsla(0, 0%, 69%, 1); color:#fff;" type="submit"  name="action"> 
	 <input  style="width:20%; font-size:130%; padding:10px; background:#33adff; border-radius:5px; border:0px;box-shadow:2px 2px 2px 2px hsla(0, 0%, 69%, 1); color:#fff;" 	value="Cancel" type="button" name="action" >
</form>
';
}else{
	echo '
</select>
 
<div style="width:100%;" id="first_box">

<div style="float:left; width:50%;">
	
	
        
  <div>IMO NO. :</div>
            <input id="f2" type="text"  style="width:70%; font-size:100%;">
          
          	<br>
			<br>
 
<div for="f3" > SHIPPING AGENT CODE :</div>
            <input id="f3" type="text"  style="width:70%; font-size:100%;">
            
          
        
<br>
          <br>
          
            
  <div for="f2" >Draft AFT :</div>
            <input id="f2" type="number"  style="width:70%; font-size:100%;">
 
		
<br>
<br>
  
           
          
          
   <div for="f1" >VESSEL MOVEMENT FROM :</div>
            <input id="f1" type="text" style="width:70%; font-size:100%;">
         
          
        <br>
			<br>
		

		  <div for="f1" >VESSEL MOVEMENT TO :</div>
            <input id="f1"   type="text" style="width:70%; font-size:100%;">
         
          
        <br>
			<br>
		

        
   
          
 <div for="f3" >DISTANCE FROM PORT LIMIT : </div>
            <input id="f3"  type="number" style="width:70%; font-size:100%;">
           <br>
		   <br>
          
        

		<!--dadsad-->

		 
	   

          
   <div for="f1" >D/T OF READINESS VESSEL TO BERTH : </div>
            <input   id="f1" type="text" style="width:70%; font-size:100%;">
         
          
        <br>
		<br>
		
           <div for="f3" >DT/ OF CANCELLATION : </div>
            <input id="f3"  type="text" style="width:70%; font-size:100%;">
    
	</div>
	<div style="float:right; width:50%;">
	 <div style="">OPERATION TYPE : </div>
            <input id="f2" type="text" style="width:70%; font-size:100%;">
          
          	<br>
			<br>
			<div for="f1" >PILOT REQUIRED DATE/TIME :</div>
            <input id="f1"type="text" style="width:70%; font-size:100%;">
			
			
			
			<br>
			<br>
			        
<div for="f3" >Draft FWD :</div>
            <input id="f3" type="number"   style="width:70%; font-size:100%;">
            
          
      
			<br>
			<br>
           <div for="f3" >BERTH/LOCATION FROM : </div>
            <input id="f3"  type="text" style="width:70%; font-size:100%;">

          
        
      
        
<br>
<br>
        
		       
 <div for="f2" >BERTH/LOCATION TO : </div>
            <input id="f2" type="text" style="width:70%; font-size:100%;">
           
          
        
		
		
<br>
<br>

            <div for="f3" >BEARING :</div>
            <input id="f3" type="number"  style="width:70%; font-size:100%;">

          
<br>
<br>
       
            <div for="f2" >D/T OF SUBMISSION OF APPLICATION : </div>
            <input id="f2"  type="text" style="width:70%; font-size:100%;">

          
        
		 
<br>
<br>

	</div>
	<br>
	<br>
	 <input  style="width:20%; font-size:130%; padding:10px; background:#33adff; border-radius:5px; border:0px;box-shadow:2px 2px 2px 2px hsla(0, 0%, 69%, 1); color:#fff;" type="submit"  name="action"> 
	 <input  style="width:20%; font-size:130%; padding:10px; background:#33adff; border-radius:5px; border:0px;box-shadow:2px 2px 2px 2px hsla(0, 0%, 69%, 1); color:#fff;" 	value="Cancel" type="button" name="action" >
</form>
;';
	
	
}
/* close connection */
mysqli_close($link);
?>
	
	</div>
	</div>
	
	


<br>
<br>
<br>
 <div style=" text-align:center; margin:0px auto;">
 <br>
<h3 id="ack_head" style="font-family: 'Oswald', sans-serif;  margin:5px; text-align:center; visibility:hidden;">PILOT MEMO ACKNOWLEDGEMENT</h3>
<br>
<br>

<br>
                 	
<br>
<br>
<br>
<br>



<nav style="text-align:center; background:#33adff; color:#fff; height:100%; margin:0px; padding:0px; border:0px; ">


 <div style="text-align:center; ">
<h3 style="font-family: 'Oswald', sans-serif; text-align:center; padding:0px; margin:0px; font-size:269%;">PILOT MEMO ACKNOWLEDGEMENT</h3>
                 	</div>
  </nav>
<br>
<br>

	<form  style="font-size:120%; text-align:center; margin:0px auto;" action="ack_entry.php" method="post">
<!--	 <select  style="font-size:120%; text-align:center; margin:0px auto; " id="select_sdinput" onchange="changedtgfghechooser()" >
 php
<option value="-1">Choose VIA/VCN ID </option>


    </select>
	-->
	 <input id="secondviavcn" placeholder="Enter the new VIA/VCN" type="number" name="secondviavcn" style="width:30%; text-align:center;font-size:100%;" onkeyup="enteredthesecondvalue()">
<div style="width:100%;">

<div style="float:left; width:50%;">
	
	

            

   
        
  <div style="">IMO NO. :</div>
            <input name="simo" type="text" style="wnameth:70%; font-size:100%;">
          
          	<br>
			<br>
 
<div for="f3" > SHIPPING AGENT CODE :</div>
            <input name="ssac" type="text" style="wnameth:70%; font-size:100%;">
            
          
        
<br>
          <br>
          
            
  <div for="f2" >Draft AFT :</div>
            <input name="sda" type="number" style="wnameth:70%; font-size:100%;">
  
          
        
		
		
<br>
<br>
  
           
          
          
   <div for="f1" >VESSEL MOVEMENT FROM :</div>
            <input name="svmf" type="text" style="wnameth:70%; font-size:100%;">
         
          
        <br>
			<br>
		

		  <div for="f1" >VESSEL MOVEMENT TO :</div>
            <input name="svmt" type="text" style="wnameth:70%; font-size:100%;">
         
          
        <br>
			<br>
		

        
   
          
 <div for="f3" >DISTANCE FROM PORT LIMIT : </div>
            <input name="sdfpl" type="number" style="wnameth:70%; font-size:100%;">
           <br>
		   <br>
          
        

		<!--dadsad-->

		 
	   

          
   <div for="f1" >D/T OF READINESS VESSEL TO BERTH : </div>
            <input name="sdt" type="text" style="wnameth:70%; font-size:100%;">
         
          
        <br>
		<br>
		
           <div for="f3" >DT/ OF CANCELLATION : </div>
            <input name="dtoc" type="text" style="wnameth:70%; font-size:100%;">
			<br>
			<br>
     <div for="f2" >APPROVAL STATUS : </div>
            <input name="sas" type="text" style="wnameth:70%; font-size:100%;">

          
        
		 
<br>
<br>
<div>
   
      <input type="checkbox" name="rej_conf" id="switch_input" defaultValue="off" onchange="shit()">
      
      Confirmation
    </div>
	<br>
	<br>
		<div  >Confirmation/Rejection (date)</div>
          
            <input name="scr" type="text" style="width:70%; font-size:100%;">
            <br>
			<br>
	</div>
	<div style="float:right; width:50%;">
	 <div style="">OPERATION TYPE : </div>
            <input name="sot" type="text" style="width:70%; font-size:100%;">
          
          	<br>
			<br>
			<div for="f1" >PILOT REQUIRED DATE/TIME :</div>
            <input name="sprdt" type="text" style="width:70%; font-size:100%;">
			
			
			
			<br>
			<br>
			        
<div for="f3" >Draft FWD :</div>
            <input name="sdf" type="number" style="width:70%; font-size:100%;">
            
          
      
			<br>
			<br>
           <div for="f3" >BERTH/LOCATION FROM : </div>
            <input name="sblf" type="text" style="width:70%; font-size:100%;">

          
        
      
        
<br>
<br>
        
		       
 <div for="f2" >BERTH/LOCATION TO : </div>
            <input name="sblt" type="text" style="width:70%; font-size:100%;">
           
          
        
		
		
<br>
<br>

            <div for="f3" >BEARING :</div>
            <input name="sb" type="number" style="width:70%; font-size:100%;">

          
<br>
<br>
       
            <div for="f2" >D/T OF SUBMISSION OF APPLICATION : </div>
            <input name="sdtosoa" type="text" style="width:70%; font-size:100%;">

          
        
		 
<br>
<br>

 <div for="f2" >PILOT BOARDING DATE/TIME : </div>
            <input name="spbdt" type="text" style="width:70%; font-size:100%;">

          
        
		 
<br>
<br>
 <div for="f2" >PLACE OF PILOT BOARDING : </div>
            <input name="spopb" type="text" style="width:70%; font-size:100%;">

          
        
		 
<br>
<br>
 <div>Please enter the reason</div>
             <input id="reason_input" name="reason_input" type="text" style="width:70%; font-size:100%;">
          
        
		<br>
		<br>
	</div>
	<br>
	<br>
	
	
	</div>
	</div>
	
	


<br>
<br>
<br>
 <div style=" text-align:center; margin:0px auto;">
 <br>
<h3 style="font-family: 'Oswald', sans-serif;  margin:5px; text-align:center; visibility:hidden;">PILOT MEMO ACKNOWLEDGEMENT</h3>
<br>
<br>

<br>
   
	



	

                 	 <input  style="width:20%; font-size:130%; padding:10px; background:#33adff; border-radius:5px; border:0px;box-shadow:2px 2px 2px 2px hsla(0, 0%, 69%, 1); color:#fff;" type="submit"  name="action" > 
	 <input  style="width:20%; font-size:130%; padding:10px; background:#33adff; border-radius:5px; border:0px;box-shadow:2px 2px 2px 2px hsla(0, 0%, 69%, 1); color:#fff;" 	value="Cancel" type="button" name="action" >

<br>
<br>

</form>












<script type="text/javascript">
//variables definition
var option_tag = document.getElementById("select_input");
var reason_input = document.getElementById("reason_input");
var switch_input = document.getElementById("switch_input");
var first_box =document.getElementById("first_box");
var ack_head = document.getElementById("ack_head");
var secondviavcn = document.getElementById("secondviavcn");
//first_box.style.display = "none";


$('select').on('change', function() {
 console.log(option_tag.value);
});

function enteredthesecondvalue(){
	if(secondviavcn.value == -1 || secondviavcn.value== null || secondviavcn.value == "" || secondviavcn.value == 0 || secondviavcn.value== " "){
		
	}else{
		
	}
}




//console logs

console.log(switch_input);


//initialiazation

//First
if(switch_input.checked){
	reason_input.disabled= true;
}else{
		reason_input.disabled= false;
}


//functions
function shit(){
		if(switch_input.checked){
	reason_input.disabled= true;
}else{
		reason_input.disabled= false;5
}
	}
function changedthechooser(){
	if(!(option_tag.value==-1  || option_tag.value ==null || option_tag.value == "")){
		first_box.style.display = "block";

			 var userName = option_tag.value;
    //'<%Session["viasession"] =  userName ; %>';
	window.location.replace("http://localhost:8080/final/?via_id=" + userName);
    
	
	}else{
			first_box.style.display = "none";
	}
	
	console.log(option_tag.value);
}



</script>

	
      
			</body>
</html>