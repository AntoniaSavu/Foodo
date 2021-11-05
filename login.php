<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Foodo</title>
  <link href="style.css" rel="stylesheet" type="text/css" />

</head>

<div class="topnav">
  <a class="active" href="index.php"><img alt=Foodo src="foodo.jpeg" width=180"                                 ></a>
</div
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </ul>
    </nav>
  </div>
</head>
<body>

  <div class= "container">
    <div class="row">
      <div class="col-md-12">
        <h2>Log in</h2>
        <p>Please fill this form.</p>
        <form action="login.inc.php" method="post">
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" required>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>

          <div class="form-group">
            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
          </div>
          <p>Don't have an account? <a href="register.php">Register here</a>.</p>
        </form>
      </div>
    </div>
  </div>
  </body>

  </html>
