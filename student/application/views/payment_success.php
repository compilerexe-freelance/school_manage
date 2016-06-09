<?php
  if ($this->session->state_login != "admin" && $this->session->state_login != "user") {
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
          <b>การจ่ายเงิน - รายชื่อผู้ชำระแล้ว</b>
        </div>
        <div class="panel-body">
          <div class="form-group">

            <div class="form-inline">
              <div class="form-group">
                <form action="<?php echo base_url(); ?>index.php/main/payment_success" method="get">
                  <button type="submit" class="btn btn-success">รายชื่อผู้ชำระแล้ว</button>
                </form>
              </div>
              <div class="form-group">
                <form action="<?php echo base_url(); ?>index.php/main/payment_remain" method="get">
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
                  <th style='text-align:center;'>จำนวนเงินที่ชำระ</th>
                  <th style='text-align:center;'>วันที่ชำระเงิน</th>
                  <th style='text-align:center;'>ผู้รับเงิน</th>
                </tr>
                <?php
                  $query = $this->db->query("SELECT * FROM tb_history_payment");
                  foreach ($query->result() as $row) {
                    echo "
                    <tr>
                      <td>".$row->prefix." ".$row->firstname." ".$row->lastname."</td>
                      <td>".$row->code_class."</td>
                      <td>".$row->title_class."</td>
                      <td>".$row->price_class."</td>
                      <td>".$row->last_update."</td>
                      <td>".$row->confirm_by."</td>
                    </tr>
                    ";
                  }
                ?>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
