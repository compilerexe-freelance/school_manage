<?php
  if ($this->session->state_login != "admin") {
    header('location: '.base_url());
    exit(0);
  }
  include('header_admin.php');
  $this->session->select_menu = "home";
?>

<div class="container">
  <div class="row" style="margin-top: 15px;">

    <?php include('menu_admin.php'); ?>

    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <b>หน้าหลัก</b>
        </div>
        <div class="panel-body">
          <div class="col-md-2 text-center form-group" style="//border: 1px solid #abc; border-radius: 5px;">
            <!-- <button type="button" class="btn btn-default" name="button" style="width:100%">ข้อมูลการเรียน</button> -->
            <a href="<?php echo base_url(); ?>main/info_learn"><img src="<?php echo base_url(); ?>assets/images/icon/info.png" alt="" class="img-responsive" style="cursor: pointer;" /></a>
            <span>ข้อมูลการเรียน</span>
          </div>
          <div class="col-md-2 text-center form-group" style="//border: 1px solid #abc; border-radius: 5px;">
            <!-- <button type="button" class="btn btn-default" name="button" style="width:100%">ข้อมูลการเรียน</button> -->
            <a href="<?php echo base_url(); ?>main/info_student"><img src="<?php echo base_url(); ?>assets/images/icon/student.png" alt="" class="img-responsive" style="cursor: pointer;" /></a>
            <span>ประวัตินักเรียน</span>
          </div>
          <div class="col-md-2 text-center form-group" style="//border: 1px solid #abc; border-radius: 5px;">
            <!-- <button type="button" class="btn btn-default" name="button" style="width:100%">ข้อมูลการเรียน</button> -->
            <a href="<?php echo base_url(); ?>main/class_learn"><img src="<?php echo base_url(); ?>assets/images/icon/book.png" alt="" class="img-responsive" style="cursor: pointer;" /></a>
            <span>วิชาเรียน</span>
          </div>
          <div class="col-md-2 text-center form-group" style="//border: 1px solid #abc; border-radius: 5px;">
            <!-- <button type="button" class="btn btn-default" name="button" style="width:100%">ข้อมูลการเรียน</button> -->
            <a href="<?php echo base_url(); ?>main/payment"><img src="<?php echo base_url(); ?>assets/images/icon/wallet.png" alt="" class="img-responsive" style="cursor: pointer;" /></a>
            <span>การจ่ายเงิน</span>
          </div>
          <div class="col-md-2 text-center form-group" style="//border: 1px solid #abc; border-radius: 5px;">
            <!-- <button type="button" class="btn btn-default" name="button" style="width:100%">ข้อมูลการเรียน</button> -->
            <a href="<?php echo base_url(); ?>main/report"><img src="<?php echo base_url(); ?>assets/images/icon/file.png" alt="" class="img-responsive" style="cursor: pointer;" /></a>
            <span>รายงาน</span>
          </div>
          <div class="col-md-2 text-center form-group" style="//border: 1px solid #abc; border-radius: 5px;">
            <!-- <button type="button" class="btn btn-default" name="button" style="width:100%">ข้อมูลการเรียน</button> -->
            <a href="<?php echo base_url(); ?>main/setting"><img src="<?php echo base_url(); ?>assets/images/icon/setting.png" alt="" class="img-responsive" style="cursor: pointer;" /></a>
            <span>ตั้งค่า</span>
          </div>
          <div class="col-md-2 text-center form-group" style="//border: 1px solid #abc; border-radius: 5px;">
            <!-- <button type="button" class="btn btn-default" name="button" style="width:100%">ข้อมูลการเรียน</button> -->
            <a href="<?php echo base_url(); ?>main/logout"><img src="<?php echo base_url(); ?>assets/images/icon/logout.png" alt="" class="img-responsive" style="cursor: pointer;" /></a>
            <span>ออกจากระบบ</span>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
