<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body{
            margin:0rem;
            padding: 0rem;
            background-image: url("reg.jpg");
            background-size: cover;
        }
        form{
            background-color: #000;
            color: #fff;
            opacity: .7;
            margin: 5rem auto auto 35rem;
            padding: 2rem;
        }
        h5{
            text-align:center;
        }
    </style>
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form>
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputName" name="Name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputphone_no" class="form-label">Phone Number</label>
    <input type="number" class="form-control" id="exampleInputNumber" name="phone_number">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword" >
  </div>
  <button type="submit" class="btn btn-primary" name = "submit">Submit</button>
  <br>
  <h5>Aready registered? <a href="login.php">Login</a></h5>
</form>
    </div>
</body>
</html>