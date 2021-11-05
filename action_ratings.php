

<header>
    <a class="active" href="index.php"><img alt=Foodo src="foodo.jpeg" width=180"></a>
    <a class="active" href="search.php">Back to search</a>
    
     	<link rel="stylesheet" href="style3.css" type="text/css">
    

</header>
<?php
include 'db.php';
?>
<?php

    $overall_rating=$_REQUEST['overall_rating'];
    $stmt= $pdo->prepare('SELECT * FROM recipes R, receives K, review W WHERE R.rid=K.rid AND W.revid=K.revid 
    GROUP BY R.rid HAVING AVG(W.overall_rating)>=:overall_rating');
    $stmt->execute(['overall_rating'=>$overall_rating]);
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
    <a href="search_by_difficulty.php"> Try again? </a>
    <?php
}
?>

    