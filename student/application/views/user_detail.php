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
          <b>ข้อมูลส่วนตัว</b>
        </div>
        <div class="panel-body">
          <?php $this->Admin_model->db_user_detail(); ?>
          <hr size="1">
          <div class="panel panel-default">
            <div class="panel-heading">
              <b>แก้ไขรหัสผ่าน</b>
            </div>
            <div class="panel-body">
              <form action="<?php echo base_url(); ?>index.php/main/db_change_pwd" method="post">
                <input type="hidden" name="user" value="<?php echo $this->input->get('user'); ?>">
                <div class="form-group">
                  <div class="table table-responsive">
                    <table class="table borderless text-center" style="border: none !important">
                      <tr>
                        <th></th>
                        <th></th>
                      </tr>
                      <tr>
                        <td>รหัสผ่านเดิม</td>
                        <td><input type="password" name="old_pwd" class="form-control"></td>
                      </tr>
                      <tr>
                        <td>รหัสผ่านใหม่</td>
                        <td><input type="password" name="new_pwd" class="form-control"></td>
                      </tr>
                      <tr>
                        <td>ยืนยันรหัสผ่านใหม่</td>
                        <td><input type="password" name="confirm_pwd" class="form-control"></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td><button class="btn btn-success" style="width:100%;">บันทึก</button></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
