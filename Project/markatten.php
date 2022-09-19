<?php 

        $con=mysqli_connect("localhost","root","","employeeigniter");
        date_default_timezone_set("Asia/Calcutta");
$id=$_POST["id"]; 
$name=$_POST["name"]; 
$date=date("Y-m-d");
$time=date("h:i:s");
$state=$_POST["state"]; 


$sql = "INSERT INTO attendance (empid,name,date,time,state) VALUES('$id','$name','$date','$time','$state');";
    
$sql1="SELECT * FROM attendance WHERE empid = '$id' AND date='$date' AND state='$state' ";
$result = mysqli_query($con,$sql1);
        if($result->num_rows > 0){
            echo "attendance already exist" ;
        }else{
            
                      
        
    if ($con->query($sql) === TRUE) 
{
  echo "Attendance Marked Successfully" ;
} 
else 
{
  echo "Error: " . $sql . "<br>" . $con->error;
}   
        
 }  

?>
