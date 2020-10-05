
<!DOCTYPE html>
<head>

   <link  type="text/css" rel="stylesheet" href="css\style3.css">
	 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
   <meta charset="UTF-8">
</head>
  <body>
		<header>
	    <nav>
	        <div class="logo">
	          <h1>Netflix</h1>

	        </div>
	        <div class="menu">

	          <a href="index.html" class="bttwo">home </a>

	        </div>
	      </nav>

        <main>
          <div class="loginbox">
            <img src="images\avatar.png" alt="avtar" class="avatar">

           <h1 class="lo">OPPPS!!!! Your email or password is incorrect!!
please try again!!</h1>
         <form action="user_signin.php" method="post">
        <p>Email</p>
       <input type="email" name="user_email" placeholder="email">
        <p>Password</p>
        <input type="password" name="user_password" placeholder="password">
        <input type="submit" value="login" style="font-family:serif">

</form>

</div>
</main>
</body>
</html>
<?php
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,"ott");
$user_email=$_POST["user_email"];
$user_password=$_POST["user_password"];
$query2="select * from user_info";
$result=mysqli_query($connect,$query2);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		if($row['user_email']==$user_email && $row['user_password']==$user_password )
		{
			$p=1;
            break;
		}
		else
		{
		    $p=0;
		}


	}
}
if($p==0)
{
	exit;

}


?>
</h3>
<script type="text/javascript">

	window.open("choose.html");
</script>
