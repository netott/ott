
<!DOCTYPE html>
<head>

   <link  type="text/css" rel="stylesheet" href="css\style1.css">
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
<div id="money">
	<?php
	$connect=mysqli_connect('localhost','root');
	mysqli_select_db($connect,"ott");
	$sub_type=$_POST['sub_type'];
	$duration=$_POST['duration'];
	$query1="insert into user_subscription(sub_type,duration,start_date,due_date) values('$sub_type','$duration', curdate(),date_add(start_date,interval '$duration' month))";
	mysqli_query($connect,$query1);
	$query2="select * from sub_details";
	$result=mysqli_query($connect,$query2);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			if($row['sub_type']==$sub_type)
			{
						echo "Amount to be paid:Rs.".$row["amount_per_month"]*$duration;
			}
		}
	}
	 ?>

    <a href="payment.html">NEXT</a>
	</div>
</main>
</header>
   </body>
   </html>
