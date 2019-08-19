<?php
  session_start();
  require_once __DIR__. "/../libraries/database.php";
  require_once __DIR__. "/../libraries/function.php";
  $db= new Database;
  $error =[];
    $data=
[    
    'email'     =>postInput("email"),
    'password'  =>(postInput("password"))    
];

  if($_SERVER['REQUEST_METHOD']=="POST")
{
        if ($data['email']=='') 
    {
        $error['email']="Email không được để trống!";
    }
    

    if ($data['password']=='') 
    {
        $error['password']="Mật khẩu không được để trống!";
    }
    if (empty($error)) 
    {
        $is_check=$db->fetchOne("admin","email='".$data['email']."' AND password='".md5($data['password'])."'");

        //$is_check=$db->fetchOne("admin","email='".$data['email']."' AND password='".$data['password']."'");
        if($is_check!=NULL)
        {

            $_SESSION['admin_name']  =$is_check['name'];
            $_SESSION['admin_id']    =$is_check['id'];

            //echo $_SESSION['admin_id']; exit;
            echo "<script>alert('Đăng nhập thành công');location.href='/Doanphp/admin/'</script>";
        }
        else
        {
            $_SESSION['error']="Đăng nhập thất bại";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="/Doanphp/login/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="/Doanphp/login/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="/Doanphp/login/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Đăng nhập</div>
      <div class="card-body">
        <form class="form-signin" action="" method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email">

          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
          <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Register an Account</a>
          <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="/Doanphp/login/vendor/jquery/jquery.min.js"></script>
  <script src="/Doanphp/login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="/Doanphp/login/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
