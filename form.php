


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Get /Post </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){

$name = $_POST["name"];
$email = $_POST["email"];
$desc = $_POST['desc'];

//submit these to a database 
 
$servername = "localhost";
$username = "root";
$password = "";
$database ="contacts";

//Create a connection 
//Die  if connection was not successful
$conn = mysqli_connect($servername, $username, $password,$database);
if(!$conn){ 
    die("Sorry! we can failed to connect: ". mysqli_connect_error());
}
 else {
    echo "Connection was Successfully ";


    $sql = "INSERT INTO `contact_me` (`name`, `Email`, `description`) VALUES ('$name', '$email',
     '$desc')";
$result = mysqli_query($conn, $sql);

 
if($result){
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Suceessfully!</strong> Your entry has been success!  
  
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}else {
    echo "The databse not created succesfully because of this error -->".mysqli_error($conn);
}
}
}
?>
<div class="container" mt-8>
    <h2>Contact Us for your Concerns</h2>
<form action ="/form.php" method="post" class="row g-3">
  <div class="col-md-6">
    <label for ="name" class="form label">name</label>
    <input type="name" name="name" class="form-control" id="name">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div><break>
  <div class="col-md-6">
    <label for="desc" class="form-label">Description</label>
    <textarea class="form-control" name="desc" id="desc"></textarea>
  
  </div>
 
    <button type="submit" class="btn btn-primary">submit</button>
  </div>
</form>
</div>
    <h5> Sameer ansari </h5>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>