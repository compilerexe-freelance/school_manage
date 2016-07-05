<?php
  if ($this->session->state_login != "admin" && $this->session->state_login != "user") {
    header('location: '.base_url());
    exit(0);
  }
  include('header_admin.php');
  $this->session->select_menu = "report";
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.min.js"></script>

<div class="container">
  <div class="row" style="margin-top: 15px;">

    <?php include('menu_admin.php'); ?>

    <div class="col-md-10">
      <div class="panel panel-default">
        <div class="panel-heading">
          <b></b>ข้อมูลทั้งหมด
        </div>
        <div class="panel-body">

          <canvas id="male" width="815" height="407" style="width: 815px; height: 407px;"></canvas>
          <hr size="1">
          <canvas id="female" width="815" height="407" style="width: 815px; height: 407px;"></canvas>

          <?php
            $sql = "SELECT prefix, month FROM tb_graph_regis";
            $query = $this->db->query($sql);
            $current_month = date('m');

            // Student male
            $month1 = 0; $month4 = 0; $month7 = 0; $month10 = 0;
            $month2 = 0; $month5 = 0; $month8 = 0; $month11 = 0;
            $month3 = 0; $month6 = 0; $month9 = 0; $month12 = 0;
            // Student female
            $g_month1 = 0; $g_month4 = 0; $g_month7 = 0; $g_month10 = 0;
            $g_month2 = 0; $g_month5 = 0; $g_month8 = 0; $g_month11 = 0;
            $g_month3 = 0; $g_month6 = 0; $g_month9 = 0; $g_month12 = 0;

            foreach ($query->result() as $row) {
              if ($row->prefix == "เด็กชาย" || $row->prefix == "นาย") {
                if ($row->month == 1) { $month1++; }
                if ($row->month == 2) { $month2++; }
                if ($row->month == 3) { $month3++; }
                if ($row->month == 4) { $month4++; }
                if ($row->month == 5) { $month5++; }
                if ($row->month == 6) { $month6++; }
                if ($row->month == 7) { $month7++; }
                if ($row->month == 8) { $month8++; }
                if ($row->month == 9) { $month9++; }
                if ($row->month == 10) { $month10++; }
                if ($row->month == 11) { $month11++; }
                if ($row->month == 12) { $month12++; }
              } else {
                if ($row->month == 1) { $g_month1++; }
                if ($row->month == 2) { $g_month2++; }
                if ($row->month == 3) { $g_month3++; }
                if ($row->month == 4) { $g_month4++; }
                if ($row->month == 5) { $g_month5++; }
                if ($row->month == 6) { $g_month6++; }
                if ($row->month == 7) { $g_month7++; }
                if ($row->month == 8) { $g_month8++; }
                if ($row->month == 9) { $g_month9++; }
                if ($row->month == 10) { $g_month10++; }
                if ($row->month == 11) { $g_month11++; }
                if ($row->month == 12) { $g_month12++; }
              }
            }

            // Graph male
            echo '
            <script>
              var data = {
                  labels: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
                  datasets: [
                      {
                          label: "นักเรียน ผู้ชาย",
                          backgroundColor: "rgba(255,99,132,0.2)",
                          borderColor: "rgba(255,99,132,1)",
                          borderWidth: 1,
                          hoverBackgroundColor: "rgba(255,99,132,0.4)",
                          hoverBorderColor: "rgba(255,99,132,1)",
                          data: [';

            echo $month1.','.$month2.','.$month3.','.$month4.','.$month5.','.$month6.','.$month7.','.$month8.','.$month9.','.$month10.','.$month11.','.$month12;

            echo '],
                      }
                  ]
              };

              var myBarChart = new Chart(male, {
                  type: "bar",
                  data: data
              });
            </script>
            ';

            // Graph female
            echo '
            <script>
              var data = {
                  labels: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
                  datasets: [
                      {
                          label: "นักเรียน ผู้หญิง",
                          backgroundColor: "rgba(255,99,132,0.2)",
                          borderColor: "rgba(255,99,132,1)",
                          borderWidth: 1,
                          hoverBackgroundColor: "rgba(255,99,132,0.4)",
                          hoverBorderColor: "rgba(255,99,132,1)",
                          data: [';

            echo $g_month1.','.$g_month2.','.$g_month3.','.$g_month4.','.$g_month5.','.$g_month6.','.$g_month7.','.$g_month8.','.$g_month9.','.$g_month10.','.$g_month11.','.$g_month12;

            echo '],
                      }
                  ]
              };

              var myBarChart = new Chart(female, {
                  type: "bar",
                  data: data
              });
            </script>
            ';
          ?>

          <script>


          </script>

        </div>
      </div>
    </div>

  </div>
</div>

<?php include('footer.php'); ?>
