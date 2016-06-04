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
                <form action="<?php echo base_url(); ?>main/info_learn_search" method="get">
                  <td><span>ชื่อหรือรหัสสมาชิก</span></td>
                  <td><input type="text" class="form-control" name="text_search" value=""></td>
                  <td><button type="submit" class="btn btn-success" style="width:100%">ค้นหา</button></td>
                </form>
              </tr>
            </table>
          </div>
          <!-- <div class="form-group">
            <span>ชื่อหรือรหัสสมาชิก</span>
          </div>
          <input type="button" class="form-control" name="text_search" value=""> -->
        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
