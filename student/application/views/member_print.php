<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Member Print</title>
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
    <div class="card">
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
  </body>
</html>
