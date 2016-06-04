<?php
  if ($this->session->state_login != "admin") {
    header('location: '.base_url());
    exit(0);
  }
  include('header_admin.php');
  $this->session->select_menu = "info_learn";
?>

<div class="container">
  <div class="row" style="margin-top: 15px;">

    <?php include('menu_admin.php'); ?>

    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <b>ข้อมูลการเรียน</b>
        </div>
        <div class="panel-body">
          <div class="table table-responsive">
            <table class="table borderless text-center" style="border: none !important">
              <tr>
                <th></th>
                <th></th>
                <th></th>
              </tr>
              <tr>
                <td><span>ชื่อหรือรหัสสมาชิก</span></td>
                <td><input type="text" class="form-control" name="text_search" value=""></td>
                <td><button type="button" class="btn btn-success" name="button" style="width:100%">ค้นหา</button></td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="panel panel-default">
        <div class="panel-heading">
          <b>ข้อมูลบัตร</b>
        </div>
        <div class="panel-body">
          <?php $this->Admin_model->get_info_learn_search(); ?>
        </div>
      </div>

      <div class="form-group">
        <button class="btn btn-success">ลงทะเบียนเรียน</button>
      </div>

      <div class="table table-responsive">
        <table class="table table-bordered text-center" style="border: none !important">
          <tr>
            <th style="text-align:center;">ลำดับ</th>
            <th style="text-align:center;">ชื่อวิชา</th>
            <th style="text-align:center;">จำนวนชั่วโมงที่เหลือ</th>
            <th style="text-align:center;">เวลาเรียน</th>
            <th style="text-align:center;">การจ่ายเงิน</th>
            <th style="text-align:center;">เพิ่มเติม</th>
          </tr>
          <tr>

          </tr>
        </table>
      </div>

    </div>

  </div>
</div>

<?php include('footer.php'); ?>
