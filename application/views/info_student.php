<?php
  if ($this->session->state_login != "admin") {
    header('location: '.base_url());
    exit(0);
  }
  include('header_admin.php');
  $this->session->select_menu = "info_student";
?>

<div class="container">
  <div class="row" style="margin-top: 15px;">

    <?php include('menu_admin.php'); ?>

    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <b>ข้อมูลนักเรียน</b>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <form action="<?php echo base_url(); ?>main/add_student">
              <button type="submit" class="btn btn-success">เพิ่มนักเรียน</button>
            </form>
          </div>
          <div class="form-group">
            <?php $this->Admin_model->get_info_student(); ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
