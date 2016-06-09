<?php
  if ($this->session->state_login != "admin" && $this->session->state_login != "user") {
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
          <b>วิชาที่เปิดสอน</b>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <form action="<?php echo base_url(); ?>index.php/main/add_class" method="get">
              <button type="submit" class="btn btn-success">เพิ่มวิชาที่เปิดสอน</button>
            </form>
          </div>
          <?php $this->Admin_model->get_class_learn(); ?>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
