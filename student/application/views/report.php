<?php
  if ($this->session->state_login != "admin" && $this->session->state_login != "user") {
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
          <b>รายงานเกี่ยวกับผู้ใช้งาน</b>
        </div>
        <div class="panel-body">
          <div class="col-md-3 form-group" style="//border: 1px solid #abc; border-radius: 5px;">

            <!-- <a href="<?php echo base_url(); ?>index.php/main/student_all"><img src="<?php echo base_url(); ?>assets/images/icon/student.png" alt="" class="img-responsive" style="cursor: pointer;" /></a> -->

            <a href="<?php echo base_url(); ?>index.php/main/graph_student"><img src="<?php echo base_url(); ?>assets/images/icon/student.png" alt="" class="img-responsive" style="cursor: pointer;" /></a>

            <span>ประวัตินักเรียน</span>
          </div>
          <div class="col-md-3 form-group" style="//border: 1px solid #abc; border-radius: 5px;">
            <a href="<?php echo base_url(); ?>index.php/main/users"><img src="<?php echo base_url(); ?>assets/images/icon/report.png" alt="" class="img-responsive" style="cursor: pointer;" /></a>
            <span>ข้อมูลผู้ใช้งานระบบ</span>
          </div>
          <div class="col-md-3 form-group" style="//border: 1px solid #abc; border-radius: 5px;">
            <a href="<?php echo base_url(); ?>index.php/main/login_log"><img src="<?php echo base_url(); ?>assets/images/icon/history.png" alt="" class="img-responsive" style="cursor: pointer;" /></a>
            <span>การใช้งานระบบ</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
