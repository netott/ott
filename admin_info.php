
<!DOCTYPE html>
<html>
<head>
  <link  type="text/css" rel="stylesheet" href="css\style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
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
<h1 style="color:white,
font-size:2rem;">
 OPPPS!!!!	Your email or password is incorrect!!<br>
	           please try again!!<br><br></h1>

       <div class="loginbox">
       <img src="images\avatar.png" alt="avtar" class="avatar">

      <h1 class="lo">log in to have access to awessome content!!</h1>
<form action="admin_info.php" method="post">

<p>email:  </p>
<input type="email" name="admin_email">
<p>password:</p>
<input type="password" name="admin_password">
         <input type="submit" value="Sign in">
         </form>
</div>
           Exit to go to home page<br><br>

<form action="index.html" method="post">
              <input type="submit"value="exit">

</form>
</main>
</header>
</body>
</html>

<?php
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,"ott");
$admin_email=$_POST["admin_email"];
$admin_password=$_POST["admin_password"];
$query2="select * from admin_info";
$result=mysqli_query($connect,$query2);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		if($row['admin_email']==$admin_email && $row['admin_password']==$admin_password )
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
