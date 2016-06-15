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
                <th style="text-align:center;">หัวข้อที่สอน</th>
                <th style="text-align:center;">จำนวนชั่วโมงที่เรียน</th>
                <th style="text-align:center;">คะแนน</th>
                <th style="text-align:center;">วันที่บันทึก</th>
                <th style="text-align:center;">ผู้บันทึก</th>
                <td></th>
              </tr>
                <?php
                  $get_title_class = $this->input->get('title_class');
                  $query = $this->db->query("SELECT * FROM tb_regis_class WHERE title_class='$get_title_class' AND lastname='$lastname'");
                  foreach ($query->result() as $row) {
                    echo '
                    <tr>
                      <form action="'.base_url().'index.php/main/db_history_class" method="get">
                    ';

                    echo "
                    <td>".$row->hour_total." / ".$row->hour_class."</td>
                    <td>
                      <select name='select_title' class='form-control'>
                    ";

                    $sql_title_class = "SELECT * FROM tb_class WHERE title_class='$get_title_class'";
                    $query_title_class = $this->db->query($sql_title_class);
                    foreach ($query_title_class->result() as $row_title) {
                      echo "
                        <option>".$row_title->title_1."</option>
                        <option>".$row_title->title_2."</option>
                        <option>".$row_title->title_3."</option>
                        <option>".$row_title->title_4."</option>
                        <option>".$row_title->title_5."</option>
                        <option>".$row_title->title_6."</option>
                        <option>".$row_title->title_7."</option>
                        <option>".$row_title->title_8."</option>
                        <option>".$row_title->title_9."</option>
                        <option>".$row_title->title_10."</option>
                      ";
                    }

                    echo "
                      </select>
                    </td>
                    <td>
                      <select name='select_hour' class='form-control'>
                    ";

                    $total_select = $row->hour_class - $row->hour_total;

                    for ($i = 1; $i <= $total_select; $i++) {
                      echo "<option>".$i."</option>";
                    }

                    echo "
                      </select>
                    </td>
                    <td><input type='number' class='form-control' name='score_class' min='0' max='100'></td>
                    <td>".$row->last_update."</td>
                    <td>".$row->save_by."</td>
                    <input type='hidden' name='id_student' value='".$id_student."'>
                    <input type='hidden' name='title_class' value='".$title_class."'>
                    <td><button type='submit' class='btn btn-success'>บันทึก</button></td>
                    ";

                    echo '</form> </tr>';
                  }
                ?>
              </form>
            </tr>
          </table>

          <table class="table table-bordered text-center">
            <tr>
              <th style="text-align:center;">ชื่อ-นามสกุล</th>
              <th style="text-align:center;">หัวข้อที่สอน</th>
              <th style="text-align:center;">จำนวนชั่วโมงที่เรียน</th>
              <th style="text-align:center;">คะแนน</th>
              <th style="text-align:center;">วันที่บันทึก</th>
              <th style="text-align:center;">ผู้บันทึก</th>
            </tr>

            <?php
            $prefix = "";
            $query = $this->db->query("SELECT prefix FROM tb_student WHERE id_student='$id_student'");
            foreach ($query->result() as $row) {
              $prefix = $row->prefix;
            }
            $query = $this->db->query("SELECT * FROM tb_history_class WHERE id_student='$id_student' AND title_class='$get_title_class'");
            foreach ($query->result() as $row) {
              echo "
              <tr>
                <td>".$prefix." ".$firstname." ".$lastname."</td>
                <td>".$row->subject_title."</td>
                <td>".$row->hour_used."</td>
                <td>".$row->score."</td>
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
