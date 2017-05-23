<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("adminstyle/css/main.css") ?>">
    <title>Admin Login</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Trang Quản Trị</h1>
      </div>
      <div class="login-box">
        <form class="login-form" action="index.html">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>ĐĂNG NHẬP</h3>
          <div class="form-group">
            <label class="control-label">TÊN TÀI KHOẢN</label>
            <input class="form-control" type="text" placeholder="Nhập tên tài khoản" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">MẬT KHẨU</label>
            <input class="form-control" type="password" placeholder="Nhập mật khẩu">
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
                <label class="semibold-text">
                  <input type="checkbox"><span class="label-text">Stay Signed in</span>
                </label>
              </div>
              <p class="semibold-text mb-0"><a data-toggle="flip">Quên mật khẩu ?</a></p>
            </div>
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">ĐĂNG NHẬP<i class="fa fa-sign-in fa-lg"></i></button>
          </div>


        </form>
        <form class="forget-form" action="index.php">
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Quên mật khẩu ?</h3>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input class="form-control" type="text" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button class="btn btn-primary btn-block">GỬI<i class="fa fa-unlock fa-lg"></i></button>
          </div>
          <div class="form-group mt-20">
            <p class="semibold-text mb-0"><a data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Trở lại trang đăng nhập</a></p>
          </div>
        </form>
      </div>
    </section>
  </body>
  <script src="<?php echo base_url("adminstyle/js/jquery-2.1.4.min.js") ?>"></script>
  <script src="<?php echo base_url("adminstyle/js/bootstrap.min.js") ?>"></script>
  <script src="<?php echo base_url("adminstyle/js/plugins/pace.min.js") ?>"></script>
  <script src="<?php echo base_url("adminstyle/js/main.js") ?>"></script>
</html>