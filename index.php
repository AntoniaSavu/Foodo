<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Foodo</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>



<header>
	<div class="topnav">
		<a class="active" href="index.php"><img alt=Foodo src="foodo.jpeg" width=180"></a>
    <nav>
      <ul>
        
      <li>
        <a href="submission.php">Suggest</a>
        </li>
       
     <li>
	      <a href="about.html">About</a>
    </li>
    <li>
    <div class="Sign up">
	      <a href="register.php">Sign up</a>
    </div>
    </li>
    <li>
    <div class="search">
      <a href="search.php"> Search </a>
  </div>
  </li>
  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
      </ul>
    </nav>
  </div>
</header>
<body>
<main>
<aside>
        <h2> Recipes</h2>
        <br>
        <?php

$recipes = $pdo->query('SELECT * FROM recipes');

  ?>
 

        <?php 
//'".$row['id']."'";

  foreach ($recipes as $recipe)
    {
      ?>
      <a href="recipe_page.php?rid=<?php echo $recipe['rid']?>"> <?php echo $recipe["recipe_name"]."\n"; ?> </a>
      <?php
      
    }
    
    ?>


  </aside>
  <div class="row">

 


<?php

$stmt = $pdo->query('SELECT * FROM type');

foreach ($stmt as $row)
{  

  ?>
  <div class="column">

    <h2><?php echo $row['name']  ?></h2> 
        <?php 
//'".$row['id']."'";
    $query = "SELECT * FROM ingredients WHERE type_id = ".$row['id'];
   
    $members = $pdo->query($query);

  foreach ($members as $member)
    {
      echo $member["ingredient_name"]."\n";
      echo "<br>";
    }
    
    ?>
  </div>
<?php    
}
?>
    </div>

</div>


</div>

</main>
<footer>
    <div class="footer">
       <ul class="footer-menu">
    <li> <a href="imprint.html"> Imprint </a> </li>
    <li><a href="contact.html"> Contact </a> </li>
       </ul>
      </div>
</footer>
    <script src="script.js"></script>
  </body>
</html>