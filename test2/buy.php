<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
    .navbar {
      margin-bottom: = 0;
      border-radius: = 0;
      background-color: #FFD700;
      color: #000000;
      padding: 1% 0;
      font-size: 1.2em;
      border: 0;
    }
    </style>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Buy books!</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Displaying books available!</h1>
<?php
    $host = "localhost";
       $dbUsername = "root";
       $dbPassword = "";
       $dbname = "sell_data";

       $conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
       if(!$conn)
       {
         die("failed to connect" . mysqli_connect_error());
       }

       $sql = 'SELECT * from sell';
       $query = mysqli_query($conn,$sql);
       if(!$query)
       {
         die ('error found' . mysqli_error($conn));
       }

       echo  "
       <table class = 'table'>
         <tr>
           <th>Name</th>
           <th>Author</th>
           <th>Price</th>
           <th>Phonecode</th>
           <th>Phone no.</th>
        </tr>";

        while($row = mysqli_fetch_array($query))
        {
          echo "<tr>
            <td>".$row["name"]."</td>
            <td>".$row["author"]."</td>
            <td>".$row["price"]."</td>
            <td>".$row["phonecode"]."</td>
            <td>".$row["phone"]."</td>
            </tr>";
        }
          echo "</table>";
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
