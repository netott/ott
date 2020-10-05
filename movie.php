<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="csstyle.css">
</head>
<h3>
<?php
$connect=mysqli_connect('localhost','root');
mysqli_select_db($connect,"ott");
$query="select * from movie_list";
$result=mysqli_query($connect,$query);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "movie name: " . $row["movie_name"]. ","."  movie rating: " . $row["movie_rating"]. ","." movie duration:" . $row["movie_duration"].","."movie release date: " . $row["movie_release_date"].","." genere: " . $row["genere"]. "<br>"."<br>";
		}
}

?>
<form action="index.html" method="post">
        <pre>        <input type="submit"value="exit"><br></pre>
        
</form>

</h3>
</html>