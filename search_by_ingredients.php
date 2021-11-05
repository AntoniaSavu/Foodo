<header>
    <a class="active" href="index.php"><img alt=Foodo src="foodo.jpeg" width=180"></a>
    <a class="active" href="search.php">Back to search</a>
     <h2> Search recipes </h2>
     	<link rel="stylesheet" href="style3.css" type="text/css">
    
 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $(window).scroll(function () {
                    $("#rightside").fadeOut();
                });
               
            });
        </script>
        <script>
    $(document).ready(function(){
    $("form").submit(function(){
		if ($('input:checkbox').filter(':checked').length < 1){
        alert("Choose at least one ingredient!");
		return false;
		}
    });
});
</script>
</header>

<?php
include 'db.php';
$types = $pdo->query("SELECT * FROM type ORDER BY id");
?>
<form action="action_ingredients.php" method="get">
<?php foreach($types as $type)
{?>
<fieldset>

  <legend>Choose <?php echo $type['name']?>:</legend>
    <?php
    $id=$type['id'];

 $stmt= $pdo->prepare('SELECT * FROM  ingredients
    WHERE type_id=:id');
    $stmt->execute([$id]);
    $ingredients=$stmt->fetchAll();
    foreach($ingredients as $ingredient)
      {
        echo "<input type='checkbox' name='ing[]' value=".$ingredient['iid']."> ".$ingredient['ingredient_name']." <br>";
      }
    ?>
    
</fieldset>
   <?php }?>
   <input type="submit" name="submit" value="Search!" />
    </form>


