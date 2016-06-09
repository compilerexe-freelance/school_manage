<?php
  if ($this->session->state_login != "admin" && $this->session->state_login != "user") {
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
          <b>ลงทะเบียนเรียน</b>
        </div>
        <div class="panel-body">
          <div class="panel panel-default">
            <div class="panel-heading">
              <span>ข้อมูลนักเรียน</span>
            </div>
            <div class="panel-body">
              <div class='table table-responsive'>
                <table class='table table-bordered text-center' style='border: none !important'>
                  <tr>
                    <th style='text-align:center;'>รูปภาพ</th>
                    <th style='text-align:center;'>รหัสสมาชิก</th>
                    <th style='text-align:center;'>ชื่อ-นามสกุล</th>
                  </tr>
                  <?php $this->Admin_model->get_info_regis(); ?>
                </table>
              </div>
            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">
              <span>วิชาที่สามารถลงทะเบียนเรียนได้</span>
            </div>
            <div class="panel-body">
              <div class='table table-responsive'>
                <table class='table borderless text-center' style='border: none !important'>
                  <tr>
                    <th style='text-align:center;'></th>
                    <th style='text-align:center;'></th>
                  </tr>
                  <tr>
                    <form action="<?php echo base_url(); ?>index.php/main/regis_detail" method="post">
                      <td>

                        <?php
                          echo '<select class="form-control" name="select_class">';
                          $this->session->state_id = $this->input->get('id');
                          $query = $this->db->query("SELECT id,title_class,code_class FROM tb_class");
                          foreach ($query->result() as $row) {
                            echo "<option>[".$row->code_class."] ".$row->title_class."</option>

                            ";
                          }
                          echo '</select>';

                          // foreach ($query->result() as $row) {
                          //   echo "<input type='hidden' name='id' value='".$row->id."'>";
                          // }

                        ?>

                      </td>
                      <td><button type="submit" class="btn btn-success">แสดงข้อมูล</button></td>
                    </form>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
