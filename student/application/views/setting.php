<?php
  if ($this->session->state_login != "admin" && $this->session->state_login != "user") {
    header('location: '.base_url());
    exit(0);
  }
  include('header_admin.php');
  $this->session->select_menu = "setting";
?>

<div class="container">
  <div class="row" style="margin-top: 15px;">

    <?php include('menu_admin.php'); ?>

    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <b>ตั้งค่า</b>
        </div>
        <div class="panel-body">
          <?php
            if ($this->session->get_permission == "admin") {
              echo '
              <div class="col-md-3 form-group" style="//border: 1px solid #abc; border-radius: 5px;">
                <a href="'.base_url().'index.php/main/add_users"><img src="'.base_url().'assets/images/icon/report.png" alt="" class="img-responsive" style="cursor: pointer;" /></a>
                <span>ผู้ใช้งานระบบ</span>
              </div>
              ';
            }
          ?>
          <div class="col-md-2 text-center form-group" style="//border: 1px solid #abc; border-radius: 5px;">
            <!-- <button type="button" class="btn btn-default" name="button" style="width:100%">ข้อมูลการเรียน</button> -->
            <a href="<?php echo base_url(); ?>index.php/main/user_detail?user=<?php echo $this->session->state_login; ?>"><img src="<?php echo base_url(); ?>assets/images/icon/student.png" alt="" class="img-responsive" style="cursor: pointer;" /></a>
            <span>ตั้งค่าส่วนตัว</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
