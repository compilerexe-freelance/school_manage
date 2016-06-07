<?php
  if ($this->session->state_login != "admin") {
    header('location: '.base_url());
    exit(0);
  }
  include('header_admin.php');
  $this->session->select_menu = "report";
?>

<div class="container">
  <div class="row" style="margin-top: 15px;">

    <?php include('menu_admin.php'); ?>

    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <b>รายงานข้อมูลผู้ใช้งานระบบ</b>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <?php $this->Admin_model->get_users(); ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
