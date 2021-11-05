<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Foodo</title>
  <link href="style2.css" rel="stylesheet" type="text/css" />

</head>

<div class="topnav">
  <a class="active" href="index.php"><img alt=Foodo src="foodo.jpeg" width=180"                                 ></a>

</head>
<body>

<center>
        <h2>Register</h2>
        <p>Please fill this form to create an account.</p>
        <form action="register.inc.php" method="post">
         <p> <div class="form-group">
            <label>Full Name</label>
            <input type="text" name="name" class="form-control" required>
</p>
<p>
            <div class="form-group">
            <label>Email Adress</label>
            <input type="email" name="email_adress" class="form-control" required>
            </div>

<p>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
</p>
<p>
          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
          </div>
</p>
          <p>Already have an account? <a href="login.php">Login here</a>.</p>

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
