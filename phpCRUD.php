<?php
//connecting to a Databasese
// INSERT INTO `notes` (`sno`, `title`, `description`, `tstamp`) VALUES ('1', 'go to buy Fruit ', 'hey! sameer \r\nI want to buy a Fruits. Delete this once you are done with this task  ', current_timestamp());
$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";
$insert = false;

//Create a connection 
 $conn = mysqli_connect($servername, $username, $password, $database);
//Die  if connection was not successful
if(!$conn){ 
    die("Sorry! we can failed to connect: ". mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
$title = $_POST["title"];
$description =$_POST["description"];

//sql query to be executed
$sql = "INSERT INTO  `notes`(`title`,`description`)VALUES('$title','$description')";
$result = mysqli_query($conn,$sql); 

//Add a new trip to the trip table in the database 
if($result){
  // echo "The record was has been inserted successfully!<br>";
  $insert= true;
  
}
else{
  echo " The record was not inserted successfully because of this error -->".$mysqli_error($conn); 
}
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.4/css/dataTables.dataTables.min.css">
    
    <title>php CRUD</title>
  
</head>

<body>
  <!-- Edit modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal">
 Edit Modal
</button> -->

<!--Edit Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="editmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editmodalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ... 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iSamsoder</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
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
if($insert){
  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Success!</strong> Your note has been inserted successfully.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}


?>
<div class="container my-4">
    <h2>Add a Note</h2>
    <form action="/phpCRUD.php" method="post">
  <div class="mb-3">
    <label for="title" class="form-label">Note Title</label>
    <input type="text" class="form-control" id="title" name="title"aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
 
  <div class="mb-3">
  <label for="desc" class="form-label">Note Description </label>
  <textarea class="form-control" id="description" name="description" rows="3"></textarea>
</div>


  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Add Note </button>
</form></div>
<div class="container my-4">
   
    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">S.no</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $sql = "SELECT * FROM `notes`";
    $result = mysqli_query($conn ,$sql);
    $sno = 0;
    while ($row = mysqli_fetch_assoc($result)) {
      $sno =$sno + 1;
        echo " <tr>
      <th scope='row'>".$sno."</th>
      <td>".$row['title']."</td>
      <td>".$row['description']."</td>
      <td> <button class='edit btn btn-sm btn-primary'>Edit</button> <a href='/del'>Delete</a></td>
    </tr>";
          }
    ?>


  </tbody>
</table>
</div>
<!-- optical javascript  -->
  <script
    src="https://code.jquery.com/jquery-3.7.1.js"integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <script src="//cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
        <script>
let table = new DataTable('#myTable');</script>
  <script>
     edits = document.getElementsByClassName('edit');
     Array.from(edits).forEach((element)=>{
      element.addEventListener("click", (e)=>{
        console.log("edit", e );
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        Descripton = tr.getElementsByTagName("td")[1].innerText;
        console.log(title,description);
        // $('#editModal').modal('toggle');
      })
     })
    </script>
</body>

</html>