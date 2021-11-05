<header>
    <a class="active" href="index.php"><img alt=Foodo src="foodo.jpeg" width=180"></a>
    <a class="active" href="search.php">Back to search</a>
     <h2> Search recipes </h2>
     	<link rel="stylesheet" href="style3.css" type="text/css">
    

</header>
<?php
include 'db.php';
$cuisines = $pdo->query("SELECT * FROM cuisine ORDER BY name");
?>
<form action="action_cuisine.php" method="get">
<fieldset>
  <legend>Choose the cuisines:</legend>
    <?php
    foreach($cuisines as $cuisine)
      {
        echo "<input type='checkbox' name='countries[]' value=".$cuisine['cuid']."> ".$cuisine['name']." <br>";
      }
    ?>
    <input type="submit" name="submit" value="Search!" />
</fieldset>
    </form>


