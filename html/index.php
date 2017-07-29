<?php
session_start();

    
     include_once "Db_info.php";
//On page 2

  if($_SERVER["REQUEST_METHOD"] == "POST") 
   {
     


$mysqli = new mysqli($Server, $UserName, $Password, $DBname);

$user=$_POST['User'];
$pass=$_POST['Pass'];
$q="select * from Users where Username='$user' and Password='$pass'";
$result=$mysqli->query($q);
$row = $result->fetch_assoc();

if($row["Username"]==$user and $row["Password"]==$pass )
{
	$BN=  $row["BusinessNum"]; 
	  
      $_SESSION['BusinessNum']=$row["BusinessNum"];
  
         $q = "select Name
			 from Business
      where BusinessNum = '$BN ' " ; 
      $result=$mysqli->query($q);
		$row = $result->fetch_assoc();
      $_SESSION['UserName']=$user;
      $_SESSION['RSname']=$row["Name"];
      
      header("Location: /admin.php"); /* Redirect browser */
    
exit();
     
}
else
{
      echo '
				<h1 style="text-align:center; color : red; " > User name or pass word Not Found Please try again</h1>';
      
}
}

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Real Estate Manegment System | سیستم مدیریت املاک</title>
 


 <link rel="stylesheet" href="css/normalize.min.css">
 <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login">
  <header class="header">
    <span class="text">Login</span>
    <span class="loader"></span>
  </header>
  
  <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <input class="input" type="text", placeholder="Username" name="User">
    <input class="input" type="password" placeholder="Password" name="Pass">
    <button class="btn" type="submit"></button>

  </form>
</div>
<!-- <button class ="resetbtn" >Admin</button> 

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src="js/index.js"></script>-->

</body>
</html>
