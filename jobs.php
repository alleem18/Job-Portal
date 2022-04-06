<?PHP include 'header.php' ?>
<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';


$conn = mysqli_connect($server, $username, $password, $database);

if($conn->connect_error){
    die("connection error" .$conn->connect_error);
}
?>
<div class="content">
<br><br><br>
<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Candidate Name</th>
      <th scope="col">College</th>
      <th scope="col">Qualification</th>
      <th scope="col">Passout Year</th>
    </tr>
  </thead>
  <?php
    $sql = "SELECT `name`,`college`,`qual`, `year`FROM `candidates`";
    $result = mysqli_query($conn, $sql);
    $id=0;
    
    if($result->num_rows>0){
      while($row=$result->fetch_assoc()){
        echo"
        <tbody>
        <tr>
             <td>".++$id."</td>
             <td>".$row['name']."</td>
             <td>".$row['college']."</td>
             <td>".$row['qual']."</td>
             <td>".$row['year']."</td>
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
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>