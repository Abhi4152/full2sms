


<?php
if(!isset($_GET['sub'])){
	echo'<form action="?" method="GET" autocomplete="off">
	<lable>Enter User Id </lable><br><input type="text" name="ref" placeholder="Enter User "required/><br>
	
	
	
<br>	
	
	
	
	
	
	
	<br><input type="submit" name="sub" value="SUBMIT"/>
	</form><br><hr>';
	
}

if(isset($_GET['sub'])){
  $ref = $_GET['ref'];
  ;	
  function RandomNumber($length)
{
$str="";
for($i=0;$i<$length;$i++){
$str.=mt_rand(0,9);
}
return $str;
}
$n = array('charan','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','preetham','suman','sunitha','tanu','manu','mahesh','mahendra','manoj','vikas','abhinav','arya','raaghu','sumit','chandru','rishab','tanmay','ravi','riya','deepak','shashi','revanth','smitha','gowri','arun','arpitha','anusha','chinmay','thilak','manu','mithun','rahul','abhishek','kavya','kavitha','savitha','sachin','manohar','ajay','anurag','madhu','kushal','anil','askash','yogesh','vidya','rajesh','sagar','madhan','vishal','ramya','riyanth','ravishankar','radha','raju','sudha','avinash','fidju','arihanth','babu','priya','preethi','priyanka','ananth','sumana','saritha','yogesh','razz');
$fname = $n[mt_rand(0,count($n))];	
$name=''.$fname.''.$pwd.'';
$pw=RandomNumber(8);
$two=RandomNumber(2);
$pwd=''.$pw.'B'.$fname.'';


$url6="https://pockettcash.xyz/api/update_points";
 
$data6='user_id='.$ref.'&update_point=any&new_point='.$ref1.'&';

$headers6[]='Content-Type:application/x-www-form-urlencoded; charset=UTF-8';
$headers6[]='User-Agent:Dalvik/2.1.0 (Linux; U; Android 10; Infinix X690 Build/QP1A.190711.020)';
$headers6[]='Host:pockettcash.xyz';
$headers6[]='Connection: Keep-Alive';
$headers6[]='Accept-Encoding:gzip';
$headers6[]='Content-Length: '.strlen($data).'';
$headers6[]='';
$headers6[]='';




 $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url6);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $url6);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($ch, CURLOPT_HTTPHEADER,$headers1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
  curl_setopt($ch, CURLOPT_PORT,"8051");
  
  $output1= curl_exec ($ch);
  $json1=json_decode($output1,true);
  curl_close ($ch);
  

echo"<br><div class='success'><center>
<font color='green'size='3'><hr>Msg ==> $output1 <hr>";


echo "<meta http-equiv='refresh' content='20'><br>";   
    
  
 
}

