<div class="col-md-2">
  <div class="list-group">
    <a href="<?php echo base_url(); ?>main/home"
      <?php
        if ($this->session->select_menu == "home") {
          echo "class='list-group-item active'";
        } else {
          echo "class='list-group-item'";
        }
      ?>
    >หน้าหลัก</a>
    <a href="<?php echo base_url(); ?>main/info_learn"
      <?php
        if ($this->session->select_menu == "info_learn") {
          echo "class='list-group-item active'";
        } else {
          echo "class='list-group-item'";
        }
      ?>
    >ข้อมูลการเรียน</a>
    <a href="<?php echo base_url(); ?>main/info_student"
      <?php
        if ($this->session->select_menu == "info_student") {
          echo "class='list-group-item active'";
        } else {
          echo "class='list-group-item'";
        }
      ?>
    >ประวัตินักเรียน</a>
    <a href="<?php echo base_url(); ?>main/class_learn"
      <?php
        if ($this->session->select_menu == "class_learn") {
          echo "class='list-group-item active'";
        } else {
          echo "class='list-group-item'";
        }
      ?>
    >วิชาที่เปิดสอน</a>

    <a href="<?php echo base_url(); ?>main/student_payment"
      <?php
        if ($this->session->select_menu == "student_payment") {
          echo "class='list-group-item active'";
        } else {
          echo "class='list-group-item'";
        }
      ?>
    >การจ่ายเงิน</a>

    <a href="#" class="list-group-item">รายงาน</a>
    <a href="#" class="list-group-item">ตั้งค่า</a>
    <a href="<?php echo base_url(); ?>main/logout" class="list-group-item">ออกจากระบบ</a>
  </div>
</div>
