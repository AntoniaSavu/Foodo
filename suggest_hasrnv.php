<link href="style2.css" rel="stylesheet" type="text/css" />
<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Foodo</title>
    <link rel="stylesheet" href="style1.css" type="text/css"/>
</head>
  <div class="topnav">
	<a class="active" href="index.php"><img alt=Foodo src="foodo.jpeg" width=180"></a>
</div>
<body>
    <center>
        <h1>Select the recipe and its ingredients</h1>
  
        <form action="insert_hasrnv.php" method="post">
              
                     <p>   <label for="type">Choose the recipe :</label>
                     
           
<?php
    include "db.php";
    $recipes=$pdo->query("SELECT * FROM recipes ORDER BY recipe_name");
?>
  <select name="rid" id="rid">
<?php
  foreach($recipes as $recipe)
  {
    echo "<option value=".$recipe[rid].">".$recipe['recipe_name']."</option>";
  }  
  ?>
 

  </select>
</p>
    <p>Don't see the recipe you want?<a class="active" href="suggest_recipe.php"> Try suggesting one!</a></p>
<?php
$n_values=$pdo->query("SELECT * FROM nutritional_values");
?>
           <p>   <label for="type">Choose its nutritional values :</label>
           
  <select name="nid" id="nid">
    <?php
    foreach($n_values as $n_value)
    {
      echo "<option value=".$n_value[nid].">"."Carbs: ".$n_value['carbs']." Proteins: ".$n_value['proteins']." Fats: ".$n_value['fats']." Potassium: ".$n_value['potassium']."</option>";
    }
?>
  </select>
</p>
  <p>Don't see the nutritional values you are looking for?<a class="active" href="suggest_nv.php"> Try suggesting some!</a></p>
              
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
<footer>
    <div class="footer">

       <ul class="footer-menu">
    <li> <a href="imprint.html"> Imprint </a> </li>
    <li><a href="contact.html"> Contact </a> </li>
       </ul>

      </div>
</footer>
</html>