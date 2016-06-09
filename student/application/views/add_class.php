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
          <b>เพิ่มวิชาที่เปิดสอน</b>
        </div>
        <div class="panel-body">
          <form action="<?php echo base_url(); ?>index.php/main/db_add_class" method="post">
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
                  <td>ชื่อวิชา</td>
                  <td><input type="text" class="form-control" name="title_class" value="" maxlength="50"></td>
                </tr>
                <tr>
                  <td>รหัสวิชา</td>
                  <td><input type="text" class="form-control" name="code_class" value="" maxlength="10"></td>
                </tr>
                <tr>
                  <td>รายละเอียด</td>
                  <td><textarea class="form-control" name="detail_class" rows="8" cols="40" style="resize:none;"></textarea></td>
                </tr>
                <tr>
                  <td>อาจารย์ผู้สอน</td>
                  <td><input type="text" class="form-control" name="name_teacher" value="" maxlength="50"></td>
                </tr>
                <tr>
                  <td>เปิดสอนตั้งแต่วันที่</td>
                  <td><input type="text" class="form-control" name="open_class" id="datepicker_open" value=""></td>
                </tr>
                <tr>
                  <td>ถึงวันที่</td>
                  <td><input type="text" class="form-control" name="close_class" id="datepicker_close" value=""></td>
                </tr>
                <tr>
                  <td>จำนวนชั่วโมงเรียน</td>
                  <td><input type="text" class="form-control" name="hour_class" value=""></td>
                </tr>
                <tr>
                  <td>วันที่เรียน</td>
                  <td>
                    <div class="text-left checkbox">
                      <label style="margin-right:5px;"><input type="checkbox" name="day_class_a" value="a">จันทร์</label>
                      <label style="margin-right:5px;"><input type="checkbox" name="day_class_b" value="b">อังคาร</label>
                      <label style="margin-right:5px;"><input type="checkbox" name="day_class_c" value="c">พุธ</label>
                      <label style="margin-right:5px;"><input type="checkbox" name="day_class_d" value="d">พฤหัสบดี</label>
                      <label style="margin-right:5px;"><input type="checkbox" name="day_class_e" value="e">ศุกร์</label>
                      <label style="margin-right:5px;"><input type="checkbox" name="day_class_f" value="f">เสาร์</label>
                      <label style="margin-right:5px;"><input type="checkbox" name="day_class_g" value="g">อาทิตย์</label>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>เวลาเรียน</td>
                  <td><input type="text" class="form-control" name="time_class" value="" maxlength="15"></td>
                </tr>
                <tr>
                  <td>ค่าลงทะเบียนเรียน</td>
                  <td><input type="text" class="form-control" name="price_class" maxlength="11"></td>
                </tr>
                <tr>
                  <td>สถานะวิชา</td>
                  <td>
                    <select class="form-control" name="state_class">
                      <option value="1">อนุญาตให้ลงทะเบียน</option>
                      <option value="0">ไม่อนุญาตให้ลงทะเบียน</option>
                    </select>
                  </td>
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

<script>
  $(function() {
    $("#datepicker_open").datepicker({dateFormat: 'yy-mm-dd'});
    $("#datepicker_close").datepicker({dateFormat: 'yy-mm-dd'});
  });
</script>

<?php include('footer.php'); ?>
