<?php
  $servername = "";
  $username = "";
  $password = "";
  $dbname = "PROF_DEV_TRACKER";
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }
  
  $sql = "SELECT";
  $result = mysql_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Search Results | Faculty &amp; Staff Professional Development</title>
</head>
<body>
        <div class = "container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Faculty &amp; Staff Professional Developnent Tracker</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="catalogs.html">Course Catalogs</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="course_search.php">Course Search <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="account.php">Account</a>
              </li>
            </ul>
          </div>
        </nav>
        
        <div class = "row">
            <!--search results-->
        </div>
        <!--populate with a for each statement-->
        <div class = "row">
          <table>
            
            <?php
              if (mysqlii_num_rows($result) > 0) 
              {
                echo "<thead><tr><th scope = \"col\">Class Number</th><th scope = \"col\">Class Name</th><th scope = \"col\">Instructor</th><th scope = \"col\">Dates</th><th scope = \"col\">Times</th></tr></thead>";
                echo "<tbody>";
                while($row = mysqli_fetch_assoc($result))
                {
                  echo "<trow>";
                  #echo out populated rows here
                  echo"<td></td>";
                  echo "</trow>";
                }
                echo "tbody";
              }
              else
              {
                echo "0 results.";
              }
              mysqli_close($conn);
            ?>
          </table>
        </div>
        
    </div>
    
    
    
    
</body>
</html>