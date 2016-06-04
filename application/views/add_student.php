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
          <form action="<?php echo base_url(); ?>index.php/main/db_add_student" method="post" enctype="multipart/form-data">
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
                <tr>
                  <td>รหัสสมาชิก</td>
                  <!-- <td></td> -->
                  <td><input type="text" class="form-control" name="name" value="<?php $this->Admin_model->get_idstudent(); ?>" disabled></td>
                </tr>
                <tr>
                  <td>คำนำหน้า</td>
                  <td>
                    <select class="form-control" name="prefix">
                      <option>เด็กชาย</option>
                      <option>เด็กหญิง</option>
                      <option>นาย</option>
                      <option>นาง</option>
                      <option>นางสาว</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>ชื่อ</td>
                  <td><input type="text" class="form-control" name="firstname" value="" maxlength="25"></td>
                </tr>
                <tr>
                  <td>นามสกุล</td>
                  <td><input type="text" class="form-control" name="lastname" value="" maxlength="25"></td>
                </tr>
                <tr>
                  <td>ที่อยู่</td>
                  <td><textarea class="form-control" name="address" rows="8" cols="40" style="resize:none;"></textarea></td>
                </tr>
                <tr>
                  <td>ตำบล</td>
                  <td><input type="text" class="form-control" name="sub_district" value="" maxlength="20"></td>
                </tr>
                <tr>
                  <td>อำเภอ</td>
                  <td><input type="text" class="form-control" name="district" value="" maxlength="20"></td>
                </tr>
                <tr>
                  <td>จังหวัด</td>
                  <td><input type="text" class="form-control" name="province" value="" maxlength="20"></td>
                </tr>
                <tr>
                  <td>หมายเลขโทรศัพท์</td>
                  <td><input type="text" class="form-control" name="tel" value="" maxlength="10"></td>
                </tr>
                <tr>
                  <td>ชื่อ-นามสกุล ผู้ปกครอง</td>
                  <td><input type="text" class="form-control" name="name_parent" value="" maxlength="50"></td>
                </tr>
                <tr>
                  <td>หมายเลขโทรศัพท์</td>
                  <td><input type="text" class="form-control" name="tel_parent" value="" maxlength="10"></td>
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
