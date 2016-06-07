<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function get_idstudent() {
    $query = $this->db->query("SELECT * FROM tb_student");
    $get_numrows = $query->num_rows();
    $get_numrows++;
    if ($get_numrows <= 9) {
      echo "ST201600000".$get_numrows;
    } else if ($get_numrows <= 99) {
      echo "ST20160000".$get_numrows;
    } else if ($get_numrows <= 999) {
      echo "ST2016000".$get_numrows;
    } else if ($get_numrows <= 9999) {
      echo "ST201600".$get_numrows;
    } else if ($get_numrows <= 99999) {
      echo "ST20160".$get_numrows;
    }
  }

  public function get_info_student() {

    $query = $this->db->query("SELECT * FROM tb_student");

    echo "
    <div class='table table-responsive'>
      <table class='table table-bordered text-center' style='border: none !important'>
        <tr>
          <th style='text-align:center;'>ลำดับ</th>
          <th style='text-align:center;'>รูปถ่าย</th>
          <th style='text-align:center;'>รหัสสมาชิก</th>
          <th style='text-align:center;'>ชื่อ-นามสกุล</th>
          <th style='text-align:center;'>วิชาที่ลงทะเบียนเรียน</th>
          <th style='text-align:center;'>รายละเอียด</th>
        </tr>
    ";

    foreach ($query->result() as $row) {
      echo "
          <tr>
            <td style='padding-top:50px;'>".$row->id."</td>
            <td><img style='width:100px; height:100px;' src='".base_url()."assets/images/student/".$row->image."'</td>
            <td style='padding-top:50px;'>".$row->id_student."</td>
            <td style='padding-top:50px;'>".$row->prefix." ".$row->firstname." ".$row->lastname."</td>

            ";

            // read regis class count
            $query_read = $this->db->query("SELECT count FROM tb_regis_count WHERE id_student='$row->id_student'");
            foreach ($query_read->result() as $row_read) {
              echo "<td style='padding-top:50px;'>".$row_read->count."</td>";
            }
            // end read

      echo "
            <td style='padding-top:35px;'>

                <a href='".base_url()."main/info_learn_search?text_search=".$row->id_student."'><img src='".base_url()."assets/images/icon/info.png' alt='ข้อมูลการเรียน' style='cursor: pointer; width: 50px; height: 50px;' /></a>
                <a href='".base_url()."main/regis_class?id=".$row->id."'><img src='".base_url()."assets/images/icon/register.png' alt='ลงทะเบียนเรียน' style='cursor: pointer; width: 50px; height: 50px;' /></a>
                <a href='".base_url()."main/member_print?id=".$row->id."' target='_blank'><img src='".base_url()."assets/images/icon/print.png' alt='พิมพ์บัตรสมาชิก' style='cursor: pointer; width: 50px; height: 50px;' /></a>
                <a href='".base_url()."main/student_detail?id=".$row->id."'><img src='".base_url()."assets/images/icon/infomation.png' alt='รายละเอียด' style='cursor: pointer; width: 50px; height: 50px;' /></a>
                <a href='".base_url()."main/delete_student?id=".$row->id."'><img src='".base_url()."assets/images/icon/delete.png' alt='ลบ' style='cursor: pointer; width: 50px; height: 50px;' /></a>

            </td>
          </tr>
        </table>
      </div>
      ";
    }

  }

  public function get_student_all() {

    $query = $this->db->query("SELECT * FROM tb_student");

    echo "
    <div class='table table-responsive'>
      <table class='table table-bordered text-center' style='border: none !important'>
        <tr>
          <th style='text-align:center;'>ลำดับ</th>
          <th style='text-align:center;'>รูปถ่าย</th>
          <th style='text-align:center;'>รหัสสมาชิก</th>
          <th style='text-align:center;'>ชื่อ-นามสกุล</th>
          <th style='text-align:center;'>วิชาที่ลงทะเบียนเรียน</th>
          <th style='text-align:center;'>รายละเอียด</th>
        </tr>
    ";

    foreach ($query->result() as $row) {
      echo "
          <tr>
            <td style='padding-top:50px;'>".$row->id."</td>
            <td><img style='width:100px; height:100px;' src='".base_url()."assets/images/student/".$row->image."'</td>
            <td style='padding-top:50px;'>".$row->id_student."</td>
            <td style='padding-top:50px;'>".$row->prefix." ".$row->firstname." ".$row->lastname."</td>

            ";

            // read regis class count
            $query_read = $this->db->query("SELECT count FROM tb_regis_count WHERE id_student='$row->id_student'");
            foreach ($query_read->result() as $row_read) {
              echo "<td style='padding-top:50px;'>".$row_read->count."</td>";
            }
            // end read

      echo "
            <td style='padding-top:35px;'>
                <a href='".base_url()."main/student_detail?id=".$row->id."'><img src='".base_url()."assets/images/icon/infomation.png' alt='รายละเอียด' style='cursor: pointer; width: 50px; height: 50px;' /></a>
            </td>
          </tr>
        </table>
      </div>
      ";
    }

  }

  public function get_users() {

    $query = $this->db->query("SELECT * FROM tb_user");

    echo "
    <div class='table table-responsive'>
      <table class='table table-bordered text-center' style='border: none !important'>
        <tr>
          <th style='text-align:center;'>ลำดับ</th>
          <th style='text-align:center;'>รูปถ่าย</th>
          <th style='text-align:center;'>ชื่อผู้ใช้งาน</th>
          <th style='text-align:center;'>ชื่อ-นามสกุล</th>
          <th style='text-align:center;'>กลุ่มผู้ใช้งาน</th>
          <th style='text-align:center;'>รายละเอียด</th>
        </tr>
    ";

    foreach ($query->result() as $row) {
      echo "
          <tr>
            <td style='padding-top:50px;'>".$row->id."</td>
            <td><img style='width:100px; height:100px;' src='".base_url()."assets/images/student/".$row->image."'</td>
            <td style='padding-top:50px;'>".$row->username."</td>
            <td style='padding-top:50px;'>".$row->firstname." ".$row->lastname."</td>
            <td style='padding-top:50px;'>".$row->member_group."</td>
            <td style='padding-top:35px;'>
                <a href='".base_url()."main/user_detail?user=".$row->username."'><img src='".base_url()."assets/images/icon/infomation.png' alt='รายละเอียด' style='cursor: pointer; width: 50px; height: 50px;' /></a>
            </td>
          </tr>
        </table>
      </div>
      ";
    }

  }

  public function get_info_learn_search() {
    $get_id_student = $this->input->get('text_search');
    $query = $this->db->query("SELECT * FROM tb_student WHERE id_student='$get_id_student'");

    echo "
    <div class='table table-responsive'>
      <table class='table table-bordered text-center' style='border: none !important'>
        <tr>
          <th style='text-align:center;'>รูปถ่าย</th>
          <th style='text-align:center;'>รหัสสมาชิก</th>
          <th style='text-align:center;'>ชื่อผู้ถือบัตร</th>
          <th style='text-align:center;'>ที่อยู่</th>
          <th style='text-align:center;'>หมายเลขโทรศัพท์</th>
          <th style='text-align:center;'>ชื่อ-นามสกุล ผู้ปกครอง</th>
          <th style='text-align:center;'>หมายเลขโทรศัพท์</th>
        </tr>
    ";

    foreach ($query->result() as $row) {
      echo "
          <tr>
            <td><img style='width:100px; height:100px;' src='".base_url()."assets/images/student/".$row->image."'</td>
            <td style='padding-top:50px;'>".$row->id_student."</td>
            <td style='padding-top:50px;'>".$row->prefix." ".$row->firstname." ".$row->lastname."</td>
            <td style='padding-top:50px;'>".$row->address."</td>
            <td style='padding-top:50px;'>".$row->tel."</td>
            <td style='padding-top:50px;'>".$row->name_parent."</td>
            <td style='padding-top:50px;'>".$row->tel_parent."</td>
          </tr>
        </table>
      </div>
      ";
    }
  }

  public function get_class_learn() {
    $query = $this->db->query("SELECT * FROM tb_class");

    echo "
    <div class='table table-responsive'>
      <table class='table table-bordered text-center' style='border: none !important'>
        <tr>
          <th style='text-align:center;'>ลำดับ</th>
          <th style='text-align:center;'>ชื่อวิชา</th>
          <th style='text-align:center;'>วันเปิดสอน</th>
          <th style='text-align:center;'>ถึงเวลาที่</th>
          <th style='text-align:center;'>จำนวนชั่วโมงเรียน</th>
          <th style='text-align:center;'>จำนวนผู้เรียน</th>
          <th style='text-align:center;'>รายละเอียด</th>
        </tr>
    ";

    foreach ($query->result() as $row) {
      echo "
          <tr>
            <td style='padding-top:25px;'>".$row->id."</td>
            <td style='padding-top:25px;'>".$row->title_class."</td>
            <td style='padding-top:25px;'>".$row->open_class."</td>
            <td style='padding-top:25px;'>".$row->close_class."</td>
            <td style='padding-top:25px;'>".$row->hour_class."</td>
            <td style='padding-top:25px;'>".$row->count_student."</td>
            <td>
              <a href='".base_url()."main/class_detail?search_id=".$row->id."'><img src='".base_url()."assets/images/icon/infomation.png' alt='รายละเอียด' style='cursor: pointer; width: 50px; height: 50px;' /></a>
              <a href='".base_url()."main/class_delete?id=".$row->id."'><img src='".base_url()."assets/images/icon/delete.png' alt='ลบ' style='cursor: pointer; width: 50px; height: 50px;' /></a>
            </td>
          </tr>
        </table>
      </div>
      ";
    }
  }

  public function get_class_detail() {
    $get_id = $this->input->get('search_id');
    $sql = "SELECT * FROM tb_class WHERE id=$get_id";
    $query = $this->db->query($sql);

    echo '
    <form action="'.base_url().'main/db_class_detail" method="post">
      <div class="form-group">
        <div class="table table-responsive">
          <table class="table borderless text-center" style="border: none !important">
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
    ';

    foreach ($query->result() as $row) {
      echo '
      <tr>
        <input type="hidden" name="id" value="'.$row->id.'">
        <td>ชื่อวิชา</td>
        <td><input type="text" class="form-control" name="title_class" value="'.$row->title_class.'" maxlength="50"></td>
      </tr>
      <tr>
        <td>รหัสวิชา</td>
        <td><input type="text" class="form-control" name="code_class" value="'.$row->code_class.'" maxlength="10"></td>
      </tr>
      <tr>
        <td>รายละเอียด</td>
        <td><textarea class="form-control" name="detail_class" rows="8" cols="40" style="resize:none;">'.$row->detail_class.'</textarea></td>
      </tr>
      <tr>
        <td>อาจารย์ผู้สอน</td>
        <td><input type="text" class="form-control" name="name_teacher" value="'.$row->name_teacher.'" maxlength="50"></td>
      </tr>
      <tr>
        <td>เปิดสอนตั้งแต่วันที่</td>
        <td><input type="text" class="form-control" name="open_class" id="datepicker_open" value="'.$row->open_class.'"></td>
      </tr>
      <tr>
        <td>ถึงวันที่</td>
        <td><input type="text" class="form-control" name="close_class" id="datepicker_close" value="'.$row->close_class.'"></td>
      </tr>
      <tr>
        <td>จำนวนชั่วโมงเรียน</td>
        <td><input type="text" class="form-control" name="hour_class" value="'.$row->hour_class.'"></td>
      </tr>
      <tr>
        <td>วันที่เรียน</td>
        <td>
          <div class="text-left checkbox">
          ';

          $get_day = $row->day_class;
          $a = 0; $b = 0; $c = 0; $d = 0; $e = 0; $f = 0; $g = 0;
          for ($i = 0; $i < strlen($get_day); $i++) {
            if ($get_day[$i] == "a") { $a = 1; }
            if ($get_day[$i] == "b") { $b = 1; }
            if ($get_day[$i] == "c") { $c = 1; }
            if ($get_day[$i] == "d") { $d = 1; }
            if ($get_day[$i] == "e") { $e = 1; }
            if ($get_day[$i] == "f") { $f = 1; }
            if ($get_day[$i] == "g") { $g = 1; }
          }

          if ($a == 1) {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_a" value="a" checked>จันทร์</label>';
          } else {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_a" value="a">จันทร์</label>';
          }

          if ($b == 1) {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_b" value="b" checked>อังคาร</label>';
          } else {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_b" value="b">อังคาร</label>';
          }

          if ($c == 1) {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_c" value="c" checked>พุธ</label>';
          } else {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_c" value="c">พุธ</label>';
          }

          if ($d == 1) {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_d" value="d" checked>พฤหัสบดี</label>';
          } else {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_d" value="d">พฤหัสบดี</label>';
          }

          if ($e == 1) {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_e" value="e" checked>ศุกร์</label>';
          } else {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_e" value="e">ศุกร์</label>';
          }

          if ($f == 1) {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_f" value="f" checked>เสาร์</label>';
          } else {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_f" value="f">เสาร์</label>';
          }

          if ($g == 1) {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_g" value="g" checked>อาทิตย์</label>';
          } else {
            echo '<label style="margin-right:5px;"><input type="checkbox" name="day_class_g" value="g">อาทิตย์</label>';
          }

          // if ($get_day[0] == "a") { echo '<label><input type="checkbox" name="day_class_a" value="a" checked>จันทร์</label>'; }
          // if ($get_day[1] == "b") { echo '<label><input type="checkbox" name="day_class_b" value="b" checked>อังคาร</label>'; }
          // if ($get_day[2] == "c") { echo '<label><input type="checkbox" name="day_class_c" value="c" checked>พุธ</label>'; }
          // if ($get_day[3] == "d") { echo '<label><input type="checkbox" name="day_class_d" value="d" checked>พฤหัสบดี</label>'; }
          // if ($get_day[4] == "e") { echo '<label><input type="checkbox" name="day_class_e" value="e" checked>ศุกร์</label>'; }
          // if ($get_day[5] == "f") { echo '<label><input type="checkbox" name="day_class_f" value="f" checked>เสาร์</label>'; }
          // if ($get_day[6] == "g") { echo '<label><input type="checkbox" name="day_class_g" value="g" checked>อาทิตย์</label>'; }
      echo '
          </div>
        </td>
      </tr>
      <tr>
        <td>เวลาเรียน</td>
        <td><input type="text" class="form-control" name="time_class" value="'.$row->time_class.'" maxlength="15"></td>
      </tr>
      <tr>
        <td>ค่าลงทะเบียนเรียน</td>
        <td><input type="text" class="form-control" name="price_class" value="'.$row->price_class.'" maxlength="11"></td>
      </tr>
      <tr>
        <td>สถานะวิชา</td>
        <td>
          <select class="form-control" name="state_class">
          ';

          if ($row->state_class == 1) {
            echo '
            <option value="1">อนุญาตให้ลงทะเบียน</option>
            <option value="0">ไม่อนุญาตให้ลงทะเบียน</option>
            ';
          } else {
            echo '
            <option value="0">ไม่อนุญาตให้ลงทะเบียน</option>
            <option value="1">อนุญาตให้ลงทะเบียน</option>
            ';
          }

      echo '
          </select>
        </td>
      </tr>
      <tr>
        <td></td>
        <td><button type="submit" class="btn btn-success" name="button" style="width:100%">บันทึก</button></td>
      </tr>
      ';
    }

    echo '
          </table>
        </div>
      </div>
    </form>
    ';
  }

  public function get_info_regis() {
    $id = $this->input->get('id');
    $query = $this->db->query("SELECT * FROM tb_student WHERE id=$id");

    foreach ($query->result() as $row) {
      echo "
          <tr>
            <td><img style='width:100px; height:100px;' src='".base_url()."assets/images/student/".$row->image."'</td>
            <td style='padding-top:50px;'>".$row->id_student."</td>
            <td style='padding-top:50px;'>".$row->prefix." ".$row->firstname." ".$row->lastname."</td>
          </tr>
      ";
    }
  }

  // get regis class

  public function get_student_detail() {
    $id = $this->input->get('id');
    $sql = "SELECT * FROM tb_student WHERE id=$id";
    $query = $this->db->query($sql);

    echo '
    <form action="'.base_url().'main/db_student_detail" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="'.$id.'">
      <div class="form-group">
        <div class="table table-responsive">
          <table class="table borderless text-center" style="border: none !important">
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
    ';

    foreach ($query->result() as $row) {
      echo '
            <tr>
              <td></td>
              <td><img style="width:100px; height:100px;" src="'.base_url().'assets/images/student/'.$row->image.'"  /></td>
            </tr>
            <tr>
              <td>รหัสสมาชิก</td>
              <!-- <td></td> -->
              <td><input type="text" class="form-control" name="name" value="'.$row->id_student.'" disabled></td>
            </tr>
            <tr>
              <td>คำนำหน้า</td>
              <td>
                <select class="form-control" name="prefix">
                  <option>'.$row->prefix.'</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>ชื่อ</td>
              <td><input type="text" class="form-control" name="firstname" value="'.$row->firstname.'" maxlength="25"></td>
            </tr>
            <tr>
              <td>นามสกุล</td>
              <td><input type="text" class="form-control" name="lastname" value="'.$row->lastname.'" maxlength="25"></td>
            </tr>
            <tr>
              <td>ที่อยู่</td>
              <td><textarea class="form-control" name="address" rows="8" cols="40" style="resize:none;">'.$row->address.'</textarea></td>
            </tr>
            <tr>
              <td>ตำบล</td>
              <td><input type="text" class="form-control" name="sub_district" value="'.$row->sub_district.'" maxlength="20"></td>
            </tr>
            <tr>
              <td>อำเภอ</td>
              <td><input type="text" class="form-control" name="district" value="'.$row->district.'" maxlength="20"></td>
            </tr>
            <tr>
              <td>จังหวัด</td>
              <td><input type="text" class="form-control" name="province" value="'.$row->province.'" maxlength="20"></td>
            </tr>
            <tr>
              <td>หมายเลขโทรศัพท์</td>
              <td><input type="text" class="form-control" name="tel" value="'.$row->tel.'" maxlength="10"></td>
            </tr>
            <tr>
              <td>ชื่อ-นามสกุล ผู้ปกครอง</td>
              <td><input type="text" class="form-control" name="name_parent" value="'.$row->name_parent.'" maxlength="50"></td>
            </tr>
            <tr>
              <td>หมายเลขโทรศัพท์</td>
              <td><input type="text" class="form-control" name="tel_parent" value="'.$row->tel_parent.'" maxlength="10"></td>
            </tr>
            <tr>
              <td>รูปภาพ</td>
              <td><input type="file" class="form-control" name="image_student" value=""></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="submit" class="btn btn-success" name="button" style="width:100%">บันทึก</button></td>
            </tr>
      ';
    }

    echo '
        </table>
      </div>
    </form>
    ';
  }

  public function get_regis_detail() {
     $id = $this->input->post('id');

     echo "
     <form action='".base_url()."main/db_regis_detail' method='post'>
       <div class='table table-responsive'>
         <table class='table borderless text-center' style='border: none !important'>
           <tr>
             <th style='text-align:center;'></th>
             <th style='text-align:center;'></th>
           </tr>
     ";

     $query = $this->db->query("SELECT * FROM tb_class WHERE id='$id'");
     $day = ""; $day_len = 0;

     foreach ($query->result() as $row) {

       $day_len = strlen($row->day_class);

       for ($i = 0; $i < $day_len; $i++) {

         if ($row->day_class[$i] == "a") { $day[$i] = "จันทร์ "; }
         if ($row->day_class[$i] == "b") { $day[$i] = "อังคาร "; }
         if ($row->day_class[$i] == "c") { $day[$i] = "พุธ "; }
         if ($row->day_class[$i] == "d") { $day[$i] = "พฤหัสบดี "; }
         if ($row->day_class[$i] == "e") { $day[$i] = "ศุกร์ "; }
         if ($row->day_class[$i] == "f") { $day[$i] = "เสาร์ "; }
         if ($row->day_class[$i] == "g") { $day[$i] = "อาทิตย์ "; }
       }

     }

     foreach ($query->result() as $row) {

       echo "
            <tr>
              <td>รหัสวิชา</td>
              <td style='text-align: left;'><span name='code_class'>".$row->code_class."</span></td>
              <input type='hidden' name='code_class' value='".$row->code_class."'>
            </tr>
            <tr>
              <td>ชื่อวิชา</td>
              <td style='text-align: left;'><span name='title_class'>".$row->title_class."</span></td>
              <input type='hidden' name='title_class' value='".$row->title_class."'>
            </tr>
            <tr>
              <td>รายละเอียด</td>
              <td style='text-align: left;'><span>".$row->detail_class."</span></td>
            </tr>
            <tr>
              <td>อาจารย์ผู้สอน</td>
              <td style='text-align: left;'><span>".$row->name_teacher."</span></td>
            </tr>
            <tr>
              <td>เปิดสอนตั้งแต่วันที่</td>
              <td style='text-align: left;'><span>".$row->open_class."</span> - <span>".$row->close_class."</span></td>
            </tr>
            <tr>
              <td>วันที่เรียน</td>
              <td style='text-align: left;'><span>
       ";

       for ($i = 0; $i < $day_len; $i++) {
         echo $day[$i];
       }

       echo " </span></td>
            </tr>
            <tr>
              <td>เวลาเรียน</td>
              <td style='text-align: left;'><span>".$row->time_class."</span></td>
            </tr>
            <tr>
              <td>จำนวนชั่วโมงเรียน</td>
              <td style='text-align: left;'><span>".$row->hour_class."</span></td>
              <input type='hidden' name='hour_class' value='".$row->hour_class."'>
            </tr>
            <tr>
              <td>ค่าลงทะเบียนเรียน</td>
              <td style='text-align: left;'><span name='price_class'>".$row->price_class."</span></td>
              <input type='hidden' name='price_class' value='".$row->price_class."'>
            </tr>
            <tr>
              <td></td>
              <td style='text-align: left;'><button type='submit' class='btn btn-success'>ลงทะเบียน</button></td>
            </tr>
       ";
     }

     echo "
         </table>
       </div>
     </form>
     ";
  }

  public function db_user_detail() {
    $user = $this->input->get('user');
    $sql = "SELECT * FROM tb_user WHERE username='$user'";
    $query = $this->db->query($sql);

    echo '
    <form action="'.base_url().'main/db_save_user" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="'.$user.'">
      <div class="form-group">
        <div class="table table-responsive">
          <table class="table borderless text-center" style="border: none !important">
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
    ';

    foreach ($query->result() as $row) {
      echo '
            <tr>
              <td></td>
              <td><img style="width:100px; height:100px;" src="'.base_url().'assets/images/student/'.$row->image.'"  /></td>
            </tr>
            <tr>
              <td>ชื่อผู้ใช้งาน</td>
              <td><input type="text" class="form-control" name="username" value="'.$row->username.'" maxlength="25" disabled></td>
              <input type="hidden" name="username" value="'.$row->username.'">
            </tr>
            <tr>
              <td>ชื่อ</td>
              <td><input type="text" class="form-control" name="firstname" value="'.$row->firstname.'" maxlength="25"></td>
            </tr>
            <tr>
              <td>นามสกุล</td>
              <td><input type="text" class="form-control" name="lastname" value="'.$row->lastname.'" maxlength="25"></td>
            </tr>
            <tr>
              <td>อีเมล์</td>
              <td><input type="text" class="form-control" name="email" value="'.$row->email.'" maxlength="25"></td>
            </tr>
            <tr>
              <td>หมายเลขโทรศัพท์</td>
              <td><input type="text" class="form-control" name="tel" value="'.$row->tel.'" maxlength="10"></td>
            </tr>
            <tr>
              <td>รูปภาพ</td>
              <td><input type="file" class="form-control" name="image_student" value=""></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="submit" class="btn btn-success" name="button" style="width:100%">บันทึก</button></td>
            </tr>
      ';
    }

    echo '
        </table>
      </div>
    </form>
    ';
  }

  //
  public function db_user_detail_pwd() {

    echo '
    <form action="'.base_url().'main/db_student_detail" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="'.$user.'">
      <div class="form-group">
        <div class="table table-responsive">
          <table class="table borderless text-center" style="border: none !important">
            <tr>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
    ';

    foreach ($query->result() as $row) {
      echo '
            <tr>
              <td></td>
              <td><img style="width:100px; height:100px;" src="'.base_url().'assets/images/student/'.$row->image.'"  /></td>
            </tr>
            <tr>
              <td>ชื่อผู้ใช้งาน</td>
              <td><input type="text" class="form-control" name="firstname" value="'.$row->username.'" maxlength="25"></td>
            </tr>
            <tr>
              <td>ชื่อ</td>
              <td><input type="text" class="form-control" name="firstname" value="'.$row->firstname.'" maxlength="25"></td>
            </tr>
            <tr>
              <td>นามสกุล</td>
              <td><input type="text" class="form-control" name="lastname" value="'.$row->lastname.'" maxlength="25"></td>
            </tr>
            <tr>
              <td>อีเมล์</td>
              <td><input type="text" class="form-control" name="lastname" value="'.$row->email.'" maxlength="25"></td>
            </tr>
            <tr>
              <td>หมายเลขโทรศัพท์</td>
              <td><input type="text" class="form-control" name="tel" value="'.$row->tel.'" maxlength="10"></td>
            </tr>
            <tr>
              <td>รูปภาพ</td>
              <td><input type="file" class="form-control" name="image_student" value=""></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="submit" class="btn btn-success" name="button" style="width:100%">บันทึก</button></td>
            </tr>
      ';
    }

    echo '
        </table>
      </div>
    </form>
    ';
  }

  public function get_login_log() {

    $query = $this->db->query("SELECT * FROM tb_log");

    echo "
    <div class='table table-responsive'>
      <table class='table table-bordered text-center' style='border: none !important'>
        <tr>
          <th style='text-align:center;'>ลำดับ</th>
          <th style='text-align:center;'>วันที่</th>
          <th style='text-align:center;'>IP Address</th>
          <th style='text-align:center;'>รายละเอียด</th>
          <th style='text-align:center;'>ผู้ใช้งาน</th>
          <th style='text-align:center;'>เพิ่มเติม</th>
        </tr>
    ";

    foreach ($query->result() as $row) {
      echo "
          <tr>
            <td style='padding-top:25px;'>".$row->id."</td>
            <td style='padding-top:25px;'>".$row->last_login."</td>
            <td style='padding-top:25px;'>".$row->ip_address."</td>
            <td style='padding-top:25px;'>".$row->detail."</td>
            <td style='padding-top:25px;'>".$row->username."</td>
            <td>
                <a href='".base_url()."main/delete_log?id=".$row->id."'><img src='".base_url()."assets/images/icon/delete.png' alt='ลบ' style='cursor: pointer; width: 50px; height: 50px;' /></a>
            </td>
          </tr>
      ";
    }

    echo "
        </table>
      </div>
    ";

  }

} // end model
