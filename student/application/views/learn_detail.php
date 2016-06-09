<?php
  if ($this->session->state_login != "admin" && $this->session->state_login != "user") {
    header('location: '.base_url());
    exit(0);
  }
  include('header_admin.php');
  $this->session->select_menu = "info_learn";
?>

<div class="container">
  <div class="row" style="margin-top: 15px;">

    <?php
    include('menu_admin.php');

    $title_class = $this->input->get('title_class'); $firstname = ""; $lastname = "";
    $id_student = $this->input->get('id_student');
    $query = $this->db->query("SELECT firstname,lastname FROM tb_student WHERE id_student='$id_student'");
    foreach ($query->result() as $row) {
      $firstname = $row->firstname;
      $lastname = $row->lastname;
    }

    // $query = $this->db->query("SELECT title_class ");

    ?>

    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <b>ข้อมูลการเรียน วิชา <?php echo $title_class; ?></b>
        </div>
        <div class="panel-body">
          <div class="table table-responsive">
            <table class="table table-bordered text-center" style="border: none !important">
              <tr>
                <th style="text-align:center;">จำนวนชั่วโมงที่เหลือ</th>
                <th style="text-align:center;">จำนวนชั่วโมงที่เรียน</th>
                <th style="text-align:center;">วันที่บันทึก</th>
                <th style="text-align:center;">ผู้บันทึก</th>
              </tr>
              <tr>
                <form action="<?php echo base_url(); ?>index.php/main/db_history_class" method="get">
                  <?php
                    $query = $this->db->query("SELECT hour_class,hour_total,last_update,save_by FROM tb_regis_class WHERE firstname='$firstname' AND lastname='$lastname'");
                    foreach ($query->result() as $row) {
                      echo "
                      <td>".$row->hour_total." / ".$row->hour_class."</td>
                      <td>
                        <div class='form-inline'>
                        <div class='form-group'>
                        <select name='select_hour' class='form-control'>
                      ";

                      $total_select = $row->hour_class - $row->hour_total;

                      for ($i = 1; $i <= $total_select; $i++) {
                        echo "<option>".$i."</option>";
                      }

                      echo "
                        </select>
                        </div>
                        <div class='form-group'>
                          <button type='submit' class='btn btn-success'>บันทึก</button>
                        </div>
                      </td>
                      <td>".$row->last_update."</td>
                      <td>".$row->save_by."</td>
                      <input type='hidden' name='id_student' value='".$id_student."'>
                      <input type='hidden' name='title_class' value='".$title_class."'>
                      ";
                    }
                  ?>
                </form>
              </tr>
            </table>

            <table class="table table-bordered text-center">
              <tr>
                <th style="text-align:center;">ชื่อ-นามสกุล</th>
                <th style="text-align:center;">จำนวนชั่วโมงที่เรียน</th>
                <th style="text-align:center;">วันที่บันทึก</th>
                <th style="text-align:center;">ผู้บันทึก</th>
              </tr>

              <?php
              $prefix = "";
              $query = $this->db->query("SELECT prefix FROM tb_student WHERE id_student='$id_student'");
              foreach ($query->result() as $row) {
                $prefix = $row->prefix;
              }
              $query = $this->db->query("SELECT * FROM tb_history_class WHERE id_student='$id_student'");
              foreach ($query->result() as $row) {
                echo "
                <tr>
                  <td>".$prefix." ".$firstname." ".$lastname."</td>
                  <td>".$row->hour_used."</td>
                  <td>".$row->last_update."</td>
                  <td>".$this->session->state_login."</td>
                </tr>
                ";
              }

              ?>

            </table>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
