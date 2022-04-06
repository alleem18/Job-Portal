
<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';


$conn = mysqli_connect($server, $username, $password, $database);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
.jobs {
  background-color: lightgrey;
  width: 30rem;
  border: .2rem solid #000;
  padding: 1rem;
  margin: 1rem;
  box-shadow: .5rem .5rem #888888;
}
    </style>
    <title>Career</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid" style="background-image:url('first.jpg');background-size:cover;height:20rem">
  <div class="container">
    <h1 class="display-4" style="padding-top:5rem">Job Portal</h1>
    <p class="lead">Best jobs available matching your skills</p>
  </div>
</div>
<div class="row">
    <?php
    $sql = "SELECT `id`, `cname`, `position`, `Jobdesc`, `skills`, `CTC` FROM `jobs`";
    $result = mysqli_query($conn, $sql);
    if($result->num_rows>0){
        while($rows=$result->fetch_assoc()){
            echo' 
            <div class="col-md-4">
            <div class="jobs">
            <h3 style="text-align:center;">'.$rows['position'].'</h3>
            <h4 style="text-align:center;">'.$rows['cname'].'</h4>
            <p style="color:black; text-align:justify;"><b>Job Description: </b>'.$rows['Jobdesc'].'</p>
            <p style="color:black"><b>Skills Required: </b>'.$rows['skills'].'</p>
            <p style="color:black"><b>CTC: </b>'.$rows['CTC'].'</p>
            <br>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
            Apply 
            </button> 
            </div>
            </div>            
            ';
        }
    }
    else{
        echo"";
    }
    ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="company name" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="position">
  </div>
  <div class="mb-3">
    <label for="exampleInputJobdesc" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="Jobdesc" name="JobDesc">
  </div>
  <div class="mb-3">
    <label for="exampleInputskills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

</div>


<script>"http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>