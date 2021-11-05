<header>
    <a class="active" href="index.php"><img alt=Foodo src="foodo.jpeg" width=180"></a>
    <a class="active" href="search.php">Back to search</a>
     <h2> Search recipes </h2>
     	<link rel="stylesheet" href="style3.css" type="text/css">
    

</header>
<?php
include 'db.php';
?>

<body>

      <form action="action_ratings.php" method="get">
        Minimum average rating ( from 1 to 5) : <input type="number" min="1" max="5" step="0.01" name="overall_rating" /><br />
      <input type="submit" name="submit" value="Search!" />
      </form>

</body>

