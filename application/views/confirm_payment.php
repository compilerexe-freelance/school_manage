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
          <b>รายละเอียดการชำระเงิน</b>
        </div>
        <div class="panel-body">
          <div class="form-group">

            <form action='<?php echo base_url(); ?>main/db_confirm_payment' method='post'>
              <div class='table table-responsive'>
                <table class='table borderless text-center' style='border: none !important'>
                  <tr>
                    <th style='text-align:center;'></th>
                    <th style='text-align:center;'></th>
                  </tr>
                  <?php

                    $prefix 			= $this->input->post('prefix');
                    $firstname 		= $this->input->post('firstname');
                    $lastname 		= $this->input->post('lastname');
                    $title_class 	= $this->input->post('title_class');
                    $code_class 	= $this->input->post('code_class');
                    $price_class  = $this->input->post('price_class');

                    echo "
                    <tr>
                      <td>ชื่อ-นามสกุล</td>
                      <td class='text-left'>".$prefix." ".$firstname." ".$lastname."</td>
                    </tr>
                    <tr>
                      <td>ชื่อวิชา</td>
                      <td class='text-left'>[".$code_class."] ".$title_class."</td>
                    </tr>
                    <tr>
                      <td>จำนวนเงินที่ต้องชำระ</td>
                      <td class='text-left'>".number_format($price_class,0)."</td>
                    </tr>
                    <tr>
                      <td>วันที่ชำระเงิน</td>
                      <td class='text-left'>".date('Y-m-d')."</td>
                    </tr>
                    <tr>
                      <td>ผู้รับเงิน</td>
                      <td class='text-left'>".$this->session->state_login."</td>
                    </tr>
                    <tr>
                      <td>ระบุจำนวนเงิน (บาท)</td>
                      <td>
                          <input type='text' class='form-control' style='width: 100px;' placeholder='จำนวนเงิน'>
                      </td>
                    </tr>
                    <tr>

                      <input type='hidden' name='prefix' value='".$prefix."'>
                      <input type='hidden' name='firstname' value='".$firstname."'>
                      <input type='hidden' name='lastname' value='".$lastname."'>
                      <input type='hidden' name='title_class' value='".$title_class."'>
                      <input type='hidden' name='code_class' value='".$code_class."'>
                      <input type='hidden' name='price_class' value='".$price_class."'>
                      <input type='hidden' name='confirm_by' value='".$this->session->state_login."'>

                      <td></td>
                      <td class='text-left'>
                          <button type='submit' class='btn btn-success'>ชำระเงิน</button>
                      </td>
                    </tr>
                    ";

                  ?>
                </table>
              </div>
            </form>

          </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
