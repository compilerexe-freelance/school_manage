<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Member Print</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/simple-sidebar.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery-1.12.3.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
    <style>

      .card {
        width: 420px;
        height: 200px;
        border: 1px solid #abc;
      }

      .pic {
        float: left;
      }

      .id_student {
        margin-left: 30px;
      }

      .name {
        margin-left: 23px;
      }

      .tel {
        margin-left: 47px;
      }

      .border-barcode {
        margin-top: 50px;
      }

      .barcode {
        width: 200px;
        height: 30px;
        margin-left: 50px;
      }

      @media print {
          #with_print {
              display: none;
          }
      }

    </style>

    <script type="text/javascript">
      window.print();
    </script>
  </head>
  <body>

    <div class="container">

      <div class="col-md-12">
        <?php
          $id = $this->input->get('id');
          $sql = "SELECT * FROM tb_student WHERE id=$id";
          $query = $this->db->query($sql);
          foreach ($query->result() as $row) {
            echo "
              <div class='pic'><img src='".base_url()."assets/images/student/".$row->image."' style='padding-top: 10px; padding-left: 10px;' /></div>
              <div style='padding-top: 10px;'><span class='id_student'>รหัสสมาชิก : ".$row->id_student."</span<div>
              <div><span class='name'>ชื่อ-นามสกุล : ".$row->prefix." ".$row->firstname." ".$row->lastname."</span></div>
              <div><span class='tel'>โทรศัพท์ : ".$row->tel."</span></div>
              <div class='border-barcode'><img class='barcode' src='".base_url()."assets/images/student/barcode.jpg' /><span>
            ";
          }
        ?>
      </div>

    <div class="col-md-12 table-responsive">
      <table class="table table-bordered">
        <tr>
          <th>วิชาที่เรียน</th>
          <th>หัวข้อที่เรียน</th>
          <th>คะแนน</th>
          <th>จำนวนชั่วโมงเรียน</th>
        </tr>
        <?php
          $id = $this->input->get('id');
          $sql = "SELECT * FROM tb_student WHERE id=$id";
          $query = $this->db->query($sql);
          $id_student = "";
          foreach ($query->result() as $row) {
            $id_student = $row->id_student;
          }

          $sql = "SELECT * FROM tb_history_class WHERE id_student='$id_student'";
          $query = $this->db->query($sql);
          foreach ($query->result() as $row) {
            echo "
            <tr>
              <td>".$row->title_class."</td>
              <td>".$row->subject_title."</td>
              <td>".$row->score."</td>
              <td>".$row->hour_used."</td>
            </tr>
            ";
          }

        ?>
      </table>
    </div>

  </div>

  </body>

</html>
