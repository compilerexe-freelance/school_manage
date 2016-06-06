<?php
  if ($this->session->state_login != "admin") {
    header('location: '.base_url());
    exit(0);
  }
  include('header_admin.php');
  $this->session->select_menu = "student_payment";
?>

<div class="container">
  <div class="row" style="margin-top: 15px;">

    <?php include('menu_admin.php'); ?>

    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <b>การจ่ายเงิน - รายชื่อผู้ค้างชำระ</b>
        </div>
        <div class="panel-body">
          <div class="form-group">

            <div class="form-inline">
              <div class="form-group">
                <form action="<?php echo base_url(); ?>main/payment_success" method="get">
                  <button type="submit" class="btn btn-success">รายชื่อผู้ชำระแล้ว</button>
                </form>
              </div>
              <div class="form-group">
                <form action="<?php echo base_url(); ?>main/payment_remain" method="get">
                  <button type="submit" class="btn btn-danger">รายชื่อผู้ค้างชำระ</button>
                </form>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class='table table-responsive'>
              <table class='table table-bordered text-center' style='border: none !important'>
                <tr>
                  <th style='text-align:center;'>ชื่อ-นามสกุล</th>
                  <th style='text-align:center;'>รหัสวิชา</th>
                  <th style='text-align:center;'>ชื่อวิชา</th>
                  <th style='text-align:center;'>จำนวนเงินที่ต้องชำระ</th>
                  <th style='text-align:center;'>ชำระเงิน</th>
                </tr>

                <?php

                  $query = $this->db->query("SELECT * FROM tb_regis_class WHERE payment=0");
                  foreach ($query->result() as $row) {
                    echo "
                    <tr>
                      <td>".$row->prefix." ".$row->firstname." ".$row->lastname."</td>
                      <td>".$row->code_class."</td>
                      <td>".$row->title_class."</td>
                      <td>".number_format($row->price_class, 0)."</td>
                      <td>
                        <form action='".base_url()."main/confirm_payment' method='post'>
                          <input type='hidden' name='prefix' value='".$row->prefix."'>
                          <input type='hidden' name='firstname' value='".$row->firstname."'>
                          <input type='hidden' name='lastname' value='".$row->lastname."'>
                          <input type='hidden' name='title_class' value='".$row->title_class."'>
                          <input type='hidden' name='code_class' value='".$row->code_class."'>
                          <input type='hidden' name='price_class' value='".$row->price_class."'>
                          <button type='submit' class='btn btn-success'>ยืนยัน</button>
                        <form>
                      </td>
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
