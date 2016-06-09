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
          <b>เพิ่มผู้ใช้งานระบบ</b>
        </div>
        <div class="panel-body">
          <form action="<?php echo base_url(); ?>index.php/main/db_add_users" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="table table-responsive">
                <table class="table borderless text-center" style="border: none !important">
                  <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                  </tr>
                    <td>ชื่อ</td>
                    <td><input type="text" class="form-control" name="firstname" value="" maxlength="25"></td>
                  </tr>
                  <tr>
                    <td>นามสกุล</td>
                    <td><input type="text" class="form-control" name="lastname" value="" maxlength="25"></td>
                  </tr>
                  <tr>
                    <td>ชื่อผู้ใช้งาน</td>
                    <td><input type="text" class="form-control" name="username" value="" maxlength="25"></td>
                  </tr>
                  <tr>
                    <td>รหัสผ่าน</td>
                    <td><input type="password" class="form-control" name="password" value="" maxlength="25"></td>
                  </tr>
                  <tr>
                    <td>ยืนยันรหัสผ่าน</td>
                    <td><input type="password" class="form-control" name="confirm_pwd" value="" maxlength="25"></td>
                  </tr>
                  <tr>
                    <td>อีเมล</td>
                    <td><input type="text" class="form-control" name="email" value="" maxlength="25"></td>
                  </tr>
                  <tr>
                    <td>หมายเลขโทรศัพท์</td>
                    <td><input type="text" class="form-control" name="tel" value="" maxlength="10"></td>
                  </tr>
                  <tr>
                    <td>กลุ่มผู้ใช้งาน</td>
                    <td>
                      <select class="form-control" name="member_group">
                        <option>ผู้ใช้งานระบบ</option>
                        <option>ผู้ดูแลระบบ</option>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td>รูปภาพ</td>
                    <td><input type="file" class="form-control" name="image_student" value=""></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td><button type="submit" class="btn btn-success" name="button" style="width:100%">บันทึก</button></td>
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

<?php include('footer.php'); ?>
