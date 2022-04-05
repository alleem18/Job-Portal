<?php include 'header.php'?>
<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';


$conn = mysqli_connect($server, $username, $password, $database);
?>
<!-- Page content -->
<div class="content">
  <br><br><br>
  <p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post New Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="config.php" method="POST">
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
  
  <button type="submit" class="btn btn-primary" name = "job">Submit</button>
</form>
  </div>
</div>
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
    <?php
    $sql = "SELECT `id`,`cname`, `position`, `CTC` FROM `jobs`";
    $result = mysqli_query($conn, $sql);
    $id=0;
    
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        echo"
        <tbody>
        <tr>
             <td>".++$id."</td>
             <td>".$row['cname']."</td>
             <td>".$row['position']."</td>
             <td>".$row['CTC']."</td>
        </tr>";
      }
    }
    else{
      echo"";
    }
    ?>
  </tbody>
</table>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>