<!doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row" style="margin-top: 15px;">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-info">
            <div class="panel-heading">
              <b>Student</b>
            </div>
            <div class="panel-body">
              <form action="<?php echo base_url(); ?>index.php/main/get_login" method="post">
              <div class="form-group">
                <input type="text" class="form-control" name="text_user" placeholder="username" autofocus>
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="text_pass" placeholder="password">
              </div>
              <div class="form-group text-right">
                <button type="submit" class="btn btn-success">Login</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
