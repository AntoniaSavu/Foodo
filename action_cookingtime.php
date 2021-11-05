<header>
    <a class="active" href="index.php"><img alt=Foodo src="foodo.jpeg" width=180"></a>
    <a class="active" href="search.php">Back to search</a>
    
     	<link rel="stylesheet" href="style3.css" type="text/css">
    

</header>
<?php
include 'db.php';
?>
<?php

    $cooking_time=$_REQUEST['cooking_time'];
    $stmt= $pdo->prepare('SELECT * FROM recipes WHERE cooking_time <=:cooking_time');
    $stmt->execute(['cooking_time'=>$cooking_time]);
    $recipes=$stmt->fetchAll();
    ?>
        <h2> Recipes found: </h2>
 <?php 
$count=$stmt->rowCount();
if($count>0){
  foreach ($recipes as $recipe)
    {
      ?>
      <a href="recipe_page.php?rid=<?php echo $recipe['rid']?>"> <?php echo $recipe["recipe_name"]."\n"; ?> </a>
      <br>
      <?php
      
    }
    }
    else
{
    echo 'No recipes found with this criteria!'?>
    <a href="search_by_cookingtime.php"> Try again? </a>
    <?php
}
?>