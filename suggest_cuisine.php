<!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Foodo</title>
    <link rel="stylesheet" type="text/css" href="style2.css" />
</head>
  <div class="topnav">
	<a class="active" href="index.php"><img alt=Foodo src="foodo.jpeg" width=180"></a>
</div>
<body>
    <center>
        <h1>Suggest a specific Cuisine</h1>
     <p> For example japanese, ukrainan etc. </p>
        <form action="insert_cuisine.php" method="post">
              
              
<p>
                <label for="name">Country Name:</label>
                <input type="text" name="name" id="name">
                 <p>   <label for="type">Which region does it belong to?:</label>
  <select name="ctype" id="ctype">
    <option value="american">American</option>
    <option value="european">European</option>
    <option value="middle-eastern">Middle - Eastern</option>
    <option value="asian">Asian</option>
  </select>
</p>
  
           
  
  
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