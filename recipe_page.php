 	<link href="style.css" rel="stylesheet" type="text/css" />
     <link href="style2.css" rel="stylesheet" type="text/css" />

 <header>
     	<a class="active" href="index.php"><img alt=Foodo src="foodo.jpeg" width=180"></a>
</header>    
 <?php

include 'db.php';
$rid=$_REQUEST['rid'];
$stmt= $pdo->prepare("SELECT recipe_name, description, calories, servings , preparation_time, cooking_time, difficulty, instructions FROM recipes WHERE rid=? LIMIT 1");
$stmt->execute([$rid]);
$row=$stmt->fetch();

echo $row['recipe_name'];
echo "<br>";
echo $row['description'];
echo "<br>";
echo $row['calories'];
echo "<br>";
echo $row['servings'];
echo "<br>";
echo $row['preparation_time'];
echo "<br>";
echo $row['cooking_time'];
echo "<br>";
echo $row['difficulty'];
echo "<br>";
echo $row['instructions'];

/*foreach ($rows as $row)
{
    echo $row;
    echo "<br>";
}*/



?>

<footer>
    <div class="footer">

       <ul class="footer-menu">
    <li> <a href="imprint.html"> Imprint </a> </li>
    <li><a href="contact.html"> Contact </a> </li>
       </ul>

      </div>
</footer> 
</html>