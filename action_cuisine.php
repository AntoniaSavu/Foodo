<?php
include 'db.php';
$checkboxselect=$_REQUEST['countries'];
$boolean=false;
foreach($checkboxselect as $row)
{
    $stmt= $pdo->prepare('SELECT * FROM  recipes R,cuisine C, contains T 
    WHERE R.rid=T.rid AND C.cuid=T.cuid AND C.cuid =:row');
    $stmt->execute([$row]);
    $recipes=$stmt->fetchAll();
$count=$stmt->rowCount();
if($count>0){
    $boolean=true;
  foreach ($recipes as $recipe)
    {
        
      ?>
      <a href="recipe_page.php?rid=<?php echo $recipe['rid']?>"> <?php echo $recipe["recipe_name"]."\n"; ?> </a>
      <br>
      <?php
      
    }
            }
    
}
if($boolean==false)
    {
    echo 'No recipes found with this criteria!';
    ?>
    
    <a href="search_by_cuisine.php"> Try again? </a>
    <?php
    }
?>
    


