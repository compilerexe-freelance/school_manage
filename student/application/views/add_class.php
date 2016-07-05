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
                  <td>ชื่อหัวข้อ</td>
                  <td><input type="text" class="form-control" id="txt_topic" value="" maxlength="255" ></td>
                  <td><button type="button" class="btn btn-success" id="btn_topic" style="width:100%;">เพิ่มหัวข้อ</button></td>
                </tr>
                <tr id="title_1">
                  <td>หัวข้อที่ 1</td>
                  <td><input type="text" class="form-control" name="title_1" id="topic1" value="" maxlength="255"></td>
                </tr>
                <tr id="title_2">
                  <td>หัวข้อที่ 2</td>
                  <td><input type="text" class="form-control" name="title_2" id="topic2" value="" maxlength="255"></td>
                </tr>
                <tr id="title_3">
                  <td>หัวข้อที่ 3</td>
                  <td><input type="text" class="form-control" name="title_3" id="topic3" value="" maxlength="255"></td>
                </tr>
                <tr id="title_4">
                  <td>หัวข้อที่ 4</td>
                  <td><input type="text" class="form-control" name="title_4" id="topic4" value="" maxlength="255"></td>
                </tr>
                <tr id="title_5">
                  <td>หัวข้อที่ 5</td>
                  <td><input type="text" class="form-control" name="title_5" id="topic5" value="" maxlength="255"></td>
                </tr>
                <tr id="title_6">
                  <td>หัวข้อที่ 6</td>
                  <td><input type="text" class="form-control" name="title_6" id="topic6" value="" maxlength="255"></td>
                </tr>
                <tr id="title_7">
                  <td>หัวข้อที่ 7</td>
                  <td><input type="text" class="form-control" name="title_7" id="topic7" value="" maxlength="255"></td>
                </tr>
                <tr id="title_8">
                  <td>หัวข้อที่ 8</td>
                  <td><input type="text" class="form-control" name="title_8" id="topic8" value="" maxlength="255"></td>
                </tr>
                <tr id="title_9">
                  <td>หัวข้อที่ 9</td>
                  <td><input type="text" class="form-control" name="title_9" id="topic9" value="" maxlength="255"></td>
                </tr>
                <tr id="title_10">
                  <td>หัวข้อที่ 10</td>
                  <td><input type="text" class="form-control" name="title_10" id="topic10" value="" maxlength="255"></td>
                </tr>
                <tr id="title_11">
                  <td>หัวข้อที่ 11</td>
                  <td><input type="text" class="form-control" name="title_11" id="topic11" value="" maxlength="255"></td>
                </tr>
                <tr id="title_12">
                  <td>หัวข้อที่ 12</td>
                  <td><input type="text" class="form-control" name="title_12" id="topic12" value="" maxlength="255"></td>
                </tr>
                <tr id="title_13">
                  <td>หัวข้อที่ 13</td>
                  <td><input type="text" class="form-control" name="title_13" id="topic13" value="" maxlength="255"></td>
                </tr>
                <tr id="title_14">
                  <td>หัวข้อที่ 14</td>
                  <td><input type="text" class="form-control" name="title_14" id="topic14" value="" maxlength="255"></td>
                </tr>
                <tr id="title_15">
                  <td>หัวข้อที่ 15</td>
                  <td><input type="text" class="form-control" name="title_15" id="topic15" value="" maxlength="255"></td>
                </tr>
                <tr id="title_16">
                  <td>หัวข้อที่ 16</td>
                  <td><input type="text" class="form-control" name="title_16" id="topic16" value="" maxlength="255"></td>
                </tr>
                <tr id="title_17">
                  <td>หัวข้อที่ 17</td>
                  <td><input type="text" class="form-control" name="title_17" id="topic17" value="" maxlength="255"></td>
                </tr>
                <tr id="title_18">
                  <td>หัวข้อที่ 18</td>
                  <td><input type="text" class="form-control" name="title_18" id="topic18" value="" maxlength="255"></td>
                </tr>
                <tr id="title_19">
                  <td>หัวข้อที่ 19</td>
                  <td><input type="text" class="form-control" name="title_19" id="topic19" value="" maxlength="255"></td>
                </tr>
                <tr id="title_20">
                  <td>หัวข้อที่ 20</td>
                  <td><input type="text" class="form-control" name="title_20" id="topic20" value="" maxlength="255"></td>
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

    $('#title_1').hide();
    $('#title_2').hide();
    $('#title_3').hide();
    $('#title_4').hide();
    $('#title_5').hide();
    $('#title_6').hide();
    $('#title_7').hide();
    $('#title_8').hide();
    $('#title_9').hide();
    $('#title_10').hide();
    $('#title_11').hide();
    $('#title_12').hide();
    $('#title_13').hide();
    $('#title_14').hide();
    $('#title_15').hide();
    $('#title_16').hide();
    $('#title_17').hide();
    $('#title_18').hide();
    $('#title_19').hide();
    $('#title_20').hide();

    var count = 0;
    $('#btn_topic').click(function() {
      var topic = $('#txt_topic').val();
      $('#txt_topic').val('');
      count++;
      switch (count) {
        case 1:
          $('#topic1').val(topic);
          $('#title_1').fadeIn('slow');
        break;
        case 2:
          $('#topic2').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
        break;
        case 3:
          $('#topic3').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
        break;
        case 4:
          $('#topic4').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
        break;
        case 5:
          $('#topic5').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
        break;
        case 6:
          $('#topic6').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
        break;
        case 7:
          $('#topic7').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
        break;
        case 8:
          $('#topic8').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
        break;
        case 9:
          $('#topic9').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
          $('#title_9').fadeIn('slow');
        break;
        case 10:
          $('#topic10').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
          $('#title_9').fadeIn('slow');
          $('#title_10').fadeIn('slow');
        break;
        case 11:
          $('#topic11').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
          $('#title_9').fadeIn('slow');
          $('#title_10').fadeIn('slow');
          $('#title_11').fadeIn('slow');
        break;
        case 12:
          $('#topic12').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
          $('#title_9').fadeIn('slow');
          $('#title_10').fadeIn('slow');
          $('#title_11').fadeIn('slow');
          $('#title_12').fadeIn('slow');
        break;
        case 13:
          $('#topic13').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
          $('#title_9').fadeIn('slow');
          $('#title_10').fadeIn('slow');
          $('#title_11').fadeIn('slow');
          $('#title_12').fadeIn('slow');
          $('#title_13').fadeIn('slow');
        break;
        case 14:
          $('#topic14').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
          $('#title_9').fadeIn('slow');
          $('#title_10').fadeIn('slow');
          $('#title_11').fadeIn('slow');
          $('#title_12').fadeIn('slow');
          $('#title_13').fadeIn('slow');
          $('#title_14').fadeIn('slow');
        break;
        case 15:
          $('#topic15').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
          $('#title_9').fadeIn('slow');
          $('#title_10').fadeIn('slow');
          $('#title_11').fadeIn('slow');
          $('#title_12').fadeIn('slow');
          $('#title_13').fadeIn('slow');
          $('#title_14').fadeIn('slow');
          $('#title_15').fadeIn('slow');
        break;
        case 16:
          $('#topic16').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
          $('#title_9').fadeIn('slow');
          $('#title_10').fadeIn('slow');
          $('#title_11').fadeIn('slow');
          $('#title_12').fadeIn('slow');
          $('#title_13').fadeIn('slow');
          $('#title_14').fadeIn('slow');
          $('#title_15').fadeIn('slow');
          $('#title_16').fadeIn('slow');
        break;
        case 17:
          $('#topic17').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
          $('#title_9').fadeIn('slow');
          $('#title_10').fadeIn('slow');
          $('#title_11').fadeIn('slow');
          $('#title_12').fadeIn('slow');
          $('#title_13').fadeIn('slow');
          $('#title_14').fadeIn('slow');
          $('#title_15').fadeIn('slow');
          $('#title_16').fadeIn('slow');
          $('#title_17').fadeIn('slow');
        break;
        case 18:
          $('#topic18').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
          $('#title_9').fadeIn('slow');
          $('#title_10').fadeIn('slow');
          $('#title_11').fadeIn('slow');
          $('#title_12').fadeIn('slow');
          $('#title_13').fadeIn('slow');
          $('#title_14').fadeIn('slow');
          $('#title_15').fadeIn('slow');
          $('#title_16').fadeIn('slow');
          $('#title_17').fadeIn('slow');
          $('#title_18').fadeIn('slow');
        break;
        case 19:
          $('#topic19').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
          $('#title_9').fadeIn('slow');
          $('#title_10').fadeIn('slow');
          $('#title_11').fadeIn('slow');
          $('#title_12').fadeIn('slow');
          $('#title_13').fadeIn('slow');
          $('#title_14').fadeIn('slow');
          $('#title_15').fadeIn('slow');
          $('#title_16').fadeIn('slow');
          $('#title_17').fadeIn('slow');
          $('#title_18').fadeIn('slow');
          $('#title_19').fadeIn('slow');
        break;
        case 20:
          $('#topic20').val(topic);
          $('#title_1').fadeIn('slow');
          $('#title_2').fadeIn('slow');
          $('#title_3').fadeIn('slow');
          $('#title_4').fadeIn('slow');
          $('#title_5').fadeIn('slow');
          $('#title_6').fadeIn('slow');
          $('#title_7').fadeIn('slow');
          $('#title_8').fadeIn('slow');
          $('#title_9').fadeIn('slow');
          $('#title_10').fadeIn('slow');
          $('#title_11').fadeIn('slow');
          $('#title_12').fadeIn('slow');
          $('#title_13').fadeIn('slow');
          $('#title_14').fadeIn('slow');
          $('#title_15').fadeIn('slow');
          $('#title_16').fadeIn('slow');
          $('#title_17').fadeIn('slow');
          $('#title_18').fadeIn('slow');
          $('#title_19').fadeIn('slow');
          $('#title_20').fadeIn('slow');
        break;
        default:

      }
    });

  });
</script>

<?php include('footer.php'); ?>
