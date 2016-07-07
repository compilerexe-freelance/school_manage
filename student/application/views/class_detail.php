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
          <b>แก้ไขข้อมูลวิชาที่เปิดสอน</b>
        </div>
        <div class="panel-body">
          <?php $this->Admin_model->get_class_detail(); ?>

        </div>
      </div>
    </div>

  </div>
</div>

<script>
  $(function() {

    if ($('#topic1').val() == '') { $('#title_1').hide(); $('#topic1').hide(); }
    if ($('#topic2').val() == '') { $('#title_2').hide(); $('#topic2').hide(); }
    if ($('#topic3').val() == '') { $('#title_3').hide(); $('#topic3').hide(); }
    if ($('#topic4').val() == '') { $('#title_4').hide(); $('#topic4').hide(); }
    if ($('#topic5').val() == '') { $('#title_5').hide(); $('#topic5').hide(); }
    if ($('#topic6').val() == '') { $('#title_6').hide(); $('#topic6').hide(); }
    if ($('#topic7').val() == '') { $('#title_7').hide(); $('#topic7').hide(); }
    if ($('#topic8').val() == '') { $('#title_8').hide(); $('#topic8').hide(); }
    if ($('#topic9').val() == '') { $('#title_9').hide(); $('#topic9').hide(); }
    if ($('#topic10').val() == '') { $('#title_10').hide(); $('#topic10').hide(); }
    if ($('#topic11').val() == '') { $('#title_11').hide(); $('#topic11').hide(); }
    if ($('#topic12').val() == '') { $('#title_12').hide(); $('#topic12').hide(); }
    if ($('#topic13').val() == '') { $('#title_13').hide(); $('#topic13').hide(); }
    if ($('#topic14').val() == '') { $('#title_14').hide(); $('#topic14').hide(); }
    if ($('#topic15').val() == '') { $('#title_15').hide(); $('#topic15').hide(); }
    if ($('#topic16').val() == '') { $('#title_16').hide(); $('#topic16').hide(); }
    if ($('#topic17').val() == '') { $('#title_17').hide(); $('#topic17').hide(); }
    if ($('#topic18').val() == '') { $('#title_18').hide(); $('#topic18').hide(); }
    if ($('#topic19').val() == '') { $('#title_19').hide(); $('#topic19').hide(); }
    if ($('#topic20').val() == '') { $('#title_20').hide(); $('#topic20').hide(); }

  });
</script>

<?php include('footer.php'); ?>
