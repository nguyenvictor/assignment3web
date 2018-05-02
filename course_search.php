<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Course Search | Faculty &amp; Staff Professional Development</title>
</head>
<body>
    <div class = "container-fluid">
      <div class = "row">
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
      </div>
      
      <div class = "row">
        <form action = "course_search_results.php" method = "post">
          <div class = "form-group">
            <label for = "courseTerm">Term: </label>
            <select class = "form-control" id = "termSelect">
              <option id = "spring2018"> Spring 2018 </option>
              <option id = "summer2018"> Summer 2018 </option>
              <option id = "fall2018"> Fall 2018 </option>
            </select>
          </div>
          <div class = "form-group">
            <label for = ""> Subject: </label>
            <select class = "form-control" id = "subjectSelect">
              <option id = "ACCT"> Accounting </option>
              <option id = "INFO"> Information Systems </option>
              <option id = "LEAD"> Leadership </option>
              <option id = "MGMT"> Management </option>
            </select>
          </div>
          <div class = "form-check">
            <input class = "form-check-input" type = "checkbox" value = "" id = "openCourseCheck">
            <label class = "form-check-label" for = "openCourseCheck"> Display Open Classes Only: </label>
          </div>
          <button type="button" class="btn btn-light">Submit</button>
        </form>
      </div>
    </div>
  </body>
</html>