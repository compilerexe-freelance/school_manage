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
        <form action="<?php echo base_url(); ?>main/regis_class?id=" method="get">
          <?php
            $id = "";
            $id_student = $this->input->get('text_search');
            $sql = "SELECT id FROM tb_student WHERE id_student='$id_student'";
            $query = $this->db->query($sql);
            foreach ($query->result() as $row) {
              $id = $row->id;
            }
          ?>
          <input type="hidden" name="id" value="<?php echo $id; ?>" />
          <button type="submit" class="btn btn-success">ลงทะเบียนเรียน</button>
        </form>
      </div>

      <div class="table table-responsive">
        <table class="table table-bordered text-center" style="border: none !important">
          <tr>
            <!-- <th style="text-align:center;">ลำดับ</th> -->
            <th style="text-align:center;">ชื่อวิชา</th>
            <th style="text-align:center;">จำนวนชั่วโมงที่เหลือ</th>
            <th style="text-align:center;">เวลาเรียน</th>
            <th style="text-align:center;">การจ่ายเงิน</th>
            <th style="text-align:center;">เพิ่มเติม</th>
          </tr>
          <tr>
            <?php
              $buff_idstudent = $this->input->get('text_search');
              $buff_firstname = ""; $buff_lastname = ""; $buff_codeclass = ""; $payment = "";

              $query = $this->db->query("SELECT firstname,lastname FROM tb_student WHERE id_student='$buff_idstudent'");
              foreach ($query->result() as $row) {
                $buff_firstname = $row->firstname;
                $buff_lastname = $row->lastname;
              }

              // read day_class
              $query = $this->db->query("SELECT code_class FROM tb_regis_class WHERE firstname='$buff_firstname' AND lastname='$buff_lastname'");
              foreach ($query->result() as $row) {
                $buff_codeclass = $row->code_class;
              }

              $query = $this->db->query("SELECT * FROM tb_class WHERE code_class='$buff_codeclass'");
              $day = ""; $day_len = 0;

              foreach ($query->result() as $row) {

                $day_len = strlen($row->day_class);

                for ($i = 0; $i < $day_len; $i++) {

                  if ($row->day_class[$i] == "a") { $day[$i] = "จันทร์ "; }
                  if ($row->day_class[$i] == "b") { $day[$i] = "อังคาร "; }
                  if ($row->day_class[$i] == "c") { $day[$i] = "พุธ "; }
                  if ($row->day_class[$i] == "d") { $day[$i] = "พฤหัสบดี "; }
                  if ($row->day_class[$i] == "e") { $day[$i] = "ศุกร์ "; }
                  if ($row->day_class[$i] == "f") { $day[$i] = "เสาร์ "; }
                  if ($row->day_class[$i] == "g") { $day[$i] = "อาทิตย์ "; }
                }

              }
              // end day_class

              $query = $this->db->query("SELECT * FROM tb_regis_class WHERE firstname='$buff_firstname' AND lastname='$buff_lastname'");
              foreach ($query->result() as $row) {
                echo "
                <tr>
                  <td>".$row->title_class."</td>
                  <td>".$row->hour_total." / ".$row->hour_class."</td>
                  <td>
                ";

                for ($i = 0; $i < $day_len; $i++) {
                  echo $day[$i];
                }

                if ($row->payment == 0) {
                  $payment = "ยังไม่ได้ชำระ";
                } else {
                  $payment = "ชำระแล้ว";
                }

                echo "
                  </td>
                  <td>".$payment."</td>
                  <td>
                    <a href='".base_url()."main/learn_detail?title_class=".$row->title_class."&id_student=".$buff_idstudent."'><img src='".base_url()."assets/images/icon/info.png' alt='' style='cursor: pointer; width:30px;' /></a>
                    <a href='".base_url()."main/info_learn'><img src='".base_url()."assets/images/icon/delete.png' alt='' style='cursor: pointer; width:30px;' /></a>
                  </td>
                </tr>
                ";
              }

            ?>
          </tr>
        </table>
      </div>

    </div>

  </div>
</div>

<?php include('footer.php'); ?>
