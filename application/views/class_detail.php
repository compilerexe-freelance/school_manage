<?php
  if ($this->session->state_login != "admin") {
    header('location: '.base_url());
    exit(0);
  }
  include('header_admin.php');
  $this->session->select_menu = "class_learn";
?>

<div class="container">
  <div class="row" style="margin-top: 15px;">

    <?php include('menu_admin.php'); ?>

    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <b>แก้ไขข้อมูลวิชาที่เปิดสอน</b>
        </div>
        <div class="panel-body">
          <?php $this->Admin_model->get_class_detail(); ?>

        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>