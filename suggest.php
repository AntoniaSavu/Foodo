
<!DOCTYPE html>
<html lang="en">
  
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <title>Foodo</title>
    <link href="style2.css" rel="stylesheet" type="text/css" />

  </head>
  <div class="topnav">
	<a class="active" href="index.php"><img alt=Foodo src="foodo.jpeg" width=180"></a>
</div>
<body>
    <center>
        <h1>Suggest an Ingredient</h1>
  
        <form action="insert.php" method="post">
              
              
<p>
                <label for="ingredient_name">Ingredient Name:</label>
                <input type="text" name="ingredient_name" id="ingredient_name">
           
  
  
  
              
              
<p>
                <label for="calories">Calories:</label>
                <input type="calories" name="calories" id="calories">
            </p>
  
  
  
              
              
<p>
                <label for="quantity">Quantity (grams):</label>
                <input type="quantity" name="quantity" id="quantity">
            </p>
  
  
               </p>


           <p>   <label for="type">Choose an ingredient type:</label>
  <select name="type" id="type">
    <option value="1">Fruits</option>
    <option value="2">Dairy</option>
    <option value="3">Meats</option>
    <option value="4">Cereals</option>
    <option value="5">Liquids and Sauces</option>
    <option value="6">Vegetables</option>
    <option value="7">Spices</option>
    <option value="8">Sea Food</option>
    <option value="9">Baking</option>
    <option value="10">Pasta</option>
    <option value="11">Oils</option>
    <option value="12">Beverages</option>
  </select>
</p>
  
              
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