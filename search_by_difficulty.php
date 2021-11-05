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

      <form action="action_difficulty.php" method="get">
        Maximum difficulty ( from 1 to 10) : <input type="number" min="1" max="10" name="difficulty" /><br />
      <input type="submit" name="submit" value="Search!" />
      </form>

</body>

