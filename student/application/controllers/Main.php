<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() {
		$this->load->view('index');
	}

	public function get_login() {
		$get_user = $this->input->post('text_user');
		$get_pass = $this->input->post('text_pass');
		$state = 0;

		$sql = "SELECT username, password, member_group FROM tb_user";
		$query = $this->db->query($sql);

		foreach ($query->result() as $row) {
			if ($row->username == $get_user && $row->password == $get_pass) {
				if ($row->member_group == "ผู้ดูแลระบบ") {
					$state = 2;
					$this->session->get_permission = "admin";
				} else {
					$state = 1;
					$this->session->get_permission = "user";
				}
			}
		}

		if ($state == 2) {
			$this->session->state_login = "admin";
			// update log
			$ip = $this->input->ip_address();
			$sql = "INSERT INTO tb_log (
				username,ip_address,detail,last_update,last_login
			) VALUES ('$get_user','$ip','เข้าสู่ระบบ',NOW(),NOW())
			";
			$query = $this->db->query($sql);
			header('location: '.base_url().'index.php/main/home');
		} else if ($state == 1) {

			$this->session->state_login = "user";
			// update log
			$ip = $this->input->ip_address();
			$sql = "INSERT INTO tb_log (
				username,ip_address,detail,last_update,last_login
			) VALUES ('$get_user','$ip','เข้าสู่ระบบ',NOW(),NOW())
			";
			$query = $this->db->query($sql);
			header('location: '.base_url().'index.php/main/home');

		} else {
			header('location: '.base_url());
		}

	}

	public function logout() {
		$get_user = $this->session->state_login;
		// update log
		$ip = $this->input->ip_address();
		$sql = "INSERT INTO tb_log (
			username,ip_address,detail,last_update,last_login
		) VALUES ('$get_user','$ip','ออกจากระบบ',NOW(),NOW())
		";
		$query = $this->db->query($sql);

		$this->session->state_login = "";
		header('location: '.base_url());
	}

	public function home() {
		$this->load->view('home');
	}

	public function info_learn() {
		$this->load->view('info_learn');
	}

	public function info_learn_search() {
		$this->load->view('info_learn_search');
	}

	public function info_student() {
		$this->load->view('info_student');
	}

	public function class_learn() {
		$this->load->view('class_learn');
	}

	public function class_detail() {
		$this->load->view('class_detail');
	}

	public function db_class_detail() {
		$get_id = $this->input->post('id');

		$get_title 				= $this->input->post('title_class');
		$get_code 				= $this->input->post('code_class');
		$get_detail 			= $this->input->post('detail_class');

		$get_title_1 			= $this->input->post('title_1');
		$get_title_2 			= $this->input->post('title_2');
		$get_title_3 			= $this->input->post('title_3');
		$get_title_4 			= $this->input->post('title_4');
		$get_title_5 			= $this->input->post('title_5');
		$get_title_6 			= $this->input->post('title_6');
		$get_title_7 			= $this->input->post('title_7');
		$get_title_8 			= $this->input->post('title_8');
		$get_title_9 			= $this->input->post('title_9');
		$get_title_10 		= $this->input->post('title_10');

		$get_nameteacher 	= $this->input->post('name_teacher');
		$get_open_class 	= $this->input->post('open_class');
		$get_close_class 	= $this->input->post('close_class');
		$get_hour_class 	= $this->input->post('hour_class');
		$get_day_class_a 	= $this->input->post('day_class_a');
		$get_day_class_b 	= $this->input->post('day_class_b');
		$get_day_class_c 	= $this->input->post('day_class_c');
		$get_day_class_d 	= $this->input->post('day_class_d');
		$get_day_class_e 	= $this->input->post('day_class_e');
		$get_day_class_f 	= $this->input->post('day_class_f');
		$get_day_class_g 	= $this->input->post('day_class_g');
		$get_time_class 	= $this->input->post('time_class');
		$get_price_class 	= $this->input->post('price_class');
		$get_state_class 	= $this->input->post('state_class');

		// protect sql injection
		$safe_title 			= $this->db->escape($get_title);
		$safe_code 				= $this->db->escape($get_code);
		$safe_detail 			= $this->db->escape($get_detail);

		$safe_title_1 		= $this->db->escape($get_title_1);
		$safe_title_2 		= $this->db->escape($get_title_2);
		$safe_title_3 		= $this->db->escape($get_title_3);
		$safe_title_4 		= $this->db->escape($get_title_4);
		$safe_title_5 		= $this->db->escape($get_title_5);
		$safe_title_6 		= $this->db->escape($get_title_6);
		$safe_title_7 		= $this->db->escape($get_title_7);
		$safe_title_8 		= $this->db->escape($get_title_8);
		$safe_title_9 		= $this->db->escape($get_title_9);
		$safe_title_10 		= $this->db->escape($get_title_10);

		$safe_nameteacher = $this->db->escape($get_nameteacher);
		$safe_open_class 	= $this->db->escape($get_open_class);
		$safe_close_class = $this->db->escape($get_close_class);
		$safe_hour_class 	= $this->db->escape($get_hour_class);
		// $safe_day_class 	= $this->db->escape($get_day_class);
		$safe_time_class 	= $this->db->escape($get_time_class);
		$safe_price_class = $this->db->escape($get_price_class);
		$safe_state_class = $this->db->escape($get_state_class);
		// end protect

		$day_class = $get_day_class_a.$get_day_class_b.
		$get_day_class_c.$get_day_class_d.$get_day_class_e.
		$get_day_class_f.$get_day_class_g;

		$sql = "UPDATE tb_class SET
			title_class 	= $safe_title,
			code_class 		= $safe_code,
			detail_class 	= $safe_detail,

			title_1 			= $safe_title_1,
			title_2 			= $safe_title_2,
			title_3 			= $safe_title_3,
			title_4 			= $safe_title_4,
			title_5 			= $safe_title_5,
			title_6 			= $safe_title_6,
			title_7 			= $safe_title_7,
			title_8 			= $safe_title_8,
			title_9 			= $safe_title_9,
			title_10 			= $safe_title_10,

			name_teacher 	= $safe_nameteacher,
			open_class 		= $safe_open_class,
			close_class 	= $safe_close_class,
			hour_class 		= $safe_hour_class,
			day_class 		= '$day_class',
			time_class 		= $safe_time_class,
			price_class 	= $safe_price_class,
			state_class 	= $safe_state_class
			WHERE id 			= $get_id
		";

		$this->db->query($sql);


		header('location: '.base_url().'index.php/main/class_detail?search_id='.$get_id);
	}

	public function add_class() {
		$this->load->view('add_class');
	}

	public function db_add_class() {
		$get_title 				= $this->input->post('title_class');
		$get_code 				= $this->input->post('code_class');
		$get_detail 			= $this->input->post('detail_class');

		$get_title_1 			= $this->input->post('title_1');
		$get_title_2 			= $this->input->post('title_2');
		$get_title_3 			= $this->input->post('title_3');
		$get_title_4 			= $this->input->post('title_4');
		$get_title_5 			= $this->input->post('title_5');
		$get_title_6 			= $this->input->post('title_6');
		$get_title_7 			= $this->input->post('title_7');
		$get_title_8 			= $this->input->post('title_8');
		$get_title_9 			= $this->input->post('title_9');
		$get_title_10 		= $this->input->post('title_10');

		$get_nameteacher 	= $this->input->post('name_teacher');
		$get_open_class 	= $this->input->post('open_class');
		$get_close_class 	= $this->input->post('close_class');
		$get_hour_class 	= $this->input->post('hour_class');
		$get_day_class_a 	= $this->input->post('day_class_a');
		$get_day_class_b 	= $this->input->post('day_class_b');
		$get_day_class_c 	= $this->input->post('day_class_c');
		$get_day_class_d 	= $this->input->post('day_class_d');
		$get_day_class_e 	= $this->input->post('day_class_e');
		$get_day_class_f 	= $this->input->post('day_class_f');
		$get_day_class_g 	= $this->input->post('day_class_g');
		$get_time_class 	= $this->input->post('time_class');
		$get_price_class 	= $this->input->post('price_class');
		$get_state_class 	= $this->input->post('state_class');

		// protect sql injection
		$safe_title 			= $this->db->escape($get_title);
		$safe_code 				= $this->db->escape($get_code);
		$safe_detail 			= $this->db->escape($get_detail);

		$safe_title_1 		= $this->db->escape($get_title_1);
		$safe_title_2 		= $this->db->escape($get_title_2);
		$safe_title_3 		= $this->db->escape($get_title_3);
		$safe_title_4 		= $this->db->escape($get_title_4);
		$safe_title_5 		= $this->db->escape($get_title_5);
		$safe_title_6 		= $this->db->escape($get_title_6);
		$safe_title_7 		= $this->db->escape($get_title_7);
		$safe_title_8 		= $this->db->escape($get_title_8);
		$safe_title_9 		= $this->db->escape($get_title_9);
		$safe_title_10 		= $this->db->escape($get_title_10);

		$safe_nameteacher = $this->db->escape($get_nameteacher);
		$safe_open_class 	= $this->db->escape($get_open_class);
		$safe_close_class = $this->db->escape($get_close_class);
		$safe_hour_class 	= $this->db->escape($get_hour_class);
		// $safe_day_class 	= $this->db->escape($get_day_class);
		$safe_time_class 	= $this->db->escape($get_time_class);
		$safe_price_class = $this->db->escape($get_price_class);
		$safe_state_class = $this->db->escape($get_state_class);
		// end protect

		$state 						= 0;

		if ($get_title != "" && $get_code != "") {
			if ($get_detail != "" && $get_nameteacher != "") {
				if ($get_open_class != "" && $get_close_class != "") {
					if ($get_hour_class != "" && $get_time_class != "") {
						if ($get_price_class != "" && $get_state_class != "") {
							$state = 1;
						}
					}
				}
			}
		}

		if ($state == 1) {

			$day_class = $get_day_class_a.$get_day_class_b.
			$get_day_class_c.$get_day_class_d.$get_day_class_e.
			$get_day_class_f.$get_day_class_g;

			$sql = "INSERT INTO tb_class (
				title_class,
				code_class,
				detail_class,
				title_1,
				title_2,
				title_3,
				title_4,
				title_5,
				title_6,
				title_7,
				title_8,
				title_9,
				title_10,
				name_teacher,
				open_class,
				close_class,
				hour_class,
				day_class,
				time_class,
				price_class,
				state_class
			) VALUES (
				$safe_title,
				$safe_code,
				$safe_detail,

				$safe_title_1,
				$safe_title_2,
				$safe_title_3,
				$safe_title_4,
				$safe_title_5,
				$safe_title_6,
				$safe_title_7,
				$safe_title_8,
				$safe_title_9,
				$safe_title_10,

				$safe_nameteacher,
				$safe_open_class,
				$safe_close_class,
				$safe_hour_class,
				'$day_class',
				$safe_time_class,
				$safe_price_class,
				$safe_state_class
			);";

			$this->db->query($sql);

			header('location: '.base_url().'index.php/main/class_learn');

		} else {
			echo $get_title."<br>".
			$get_code."<br>".
			$get_detail."<br>".
			$get_nameteacher."<br>".
			$get_open_class."<br>".
			$get_close_class."<br>".
			$get_hour_class."<br>".
			$get_day_class."<br>".
			$get_time_class."<br>".
			$get_price_class."<br>".
			$get_state_class."<br>";
			// header('location: '.base_url().'main/add_class');
		}

	}

	public function class_delete() {
		$id = $this->input->get('id');
		$sql = "DELETE FROM tb_class WHERE id=$id";
		$this->db->query($sql);
		header('location: '.base_url().'index.php/main/class_learn');
	}

	public function add_student() {
		$this->load->view('add_student');
	}

	public function db_add_student() {
		$get_prefix				= $this->input->post('prefix');
		$get_firstname 		= $this->input->post('firstname');
		$get_lastname 		= $this->input->post('lastname');
		$get_address 			= $this->input->post('address');
		$get_subdistrict 	= $this->input->post('sub_district');
		$get_district 		= $this->input->post('district');
		$get_province 		= $this->input->post('province');
		$get_tel 					= $this->input->post('tel');
		$get_nameparent 	= $this->input->post('name_parent');
		$get_telparent 		= $this->input->post('tel_parent');

		// protect sql injection
		$safe_firstname		= $this->db->escape($get_firstname);
		$safe_lastname 		= $this->db->escape($get_lastname);
		$safe_address 		= $this->db->escape($get_address);
		$safe_subdistrict = $this->db->escape($get_subdistrict);
		$safe_district 		= $this->db->escape($get_district);
		$safe_province 		= $this->db->escape($get_province);
		$safe_tel 				= $this->db->escape($get_tel);
		$safe_nameparent 	= $this->db->escape($get_nameparent);
		$safe_telparent 	= $this->db->escape($get_nameparent);
		// end protect

		$state 						= 0;

		// id_student
		$query = $this->db->query("SELECT * FROM tb_student");
    $get_numrows = $query->num_rows();
		$id_student = "";
		$get_numrows++;

    if ($get_numrows <= 9) {
      $id_student = "ST201600000".$get_numrows;
    } else if ($get_numrows <= 99) {
      $id_student = "ST20160000".$get_numrows;
    } else if ($get_numrows <= 999) {
      $id_student = "ST2016000".$get_numrows;
    } else if ($get_numrows <= 9999) {
      $id_student = "ST201600".$get_numrows;
    } else if ($get_numrows <= 99999) {
      $id_student = "ST20160".$get_numrows;
    }

		// end id_student

		if ($get_firstname != "" && $get_lastname != "") {
			if ($get_address != "" && $get_subdistrict != "") {
				if ($get_district != "" && $get_province != "") {
					if ($get_tel != "" && $get_nameparent != "") {
						if ($get_telparent != "") {
							if ($_FILES["image_student"]["name"] != "") {
				        $url = $this->upload_image_student("image_student","student");
				        $img_name = $_FILES["image_student"]["name"];
				        $sql = "INSERT INTO tb_student (
									id_student,prefix,firstname,lastname,
									address,sub_district,district,province,
									tel,name_parent,tel_parent,image
								) VALUES(
									'$id_student','$get_prefix',$safe_firstname,$safe_lastname,$safe_address,$safe_subdistrict,
									$safe_district,$safe_province,$safe_tel,$safe_nameparent,$safe_telparent,'$img_name'
								);";
				        $this->db->query($sql);

								$sql = "INSERT INTO tb_regis_count (id_student,count) VALUES ('$id_student',0)";
								$this->db->query($sql);

								$state = 1;
							}
						}
					}
				}
			}
		}

		if ($state == 1) {
			header('location: '.base_url().'index.php/main/info_student');
		} else {
			header('location: '.base_url().'index.php/main/add_student');
		}

	}

	// ===== upload =====

  private function upload_image_student($genName,$getDir) {
		$type = explode('.', $_FILES[$genName]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "assets/images/".$getDir."/".$_FILES[$genName]["name"];
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES[$genName]["tmp_name"]))
				if(move_uploaded_file($_FILES[$genName]["tmp_name"],$url))

					return $url;
		return "";
	}

	// end upload

	public function regis_class() {
		$this->load->view('regis_class');
	}

	public function regis_detail() {
		$this->load->view('regis_detail');
	}

	public function db_regis_detail() {
		$id = $this->session->state_id;

		// Read firstname, lastname
		$prefix = ""; $firstname = ""; $lastname = ""; $id_student = ""; $count_class = 0;
		$sql = "SELECT id_student,prefix,firstname,lastname FROM tb_student WHERE id=$id";
		$query = $this->db->query($sql);
		foreach ($query->result() as $row) {
			$prefix = $row->prefix;
			$firstname = $row->firstname;
			$lastname = $row->lastname;
			$id_student = $row->id_student;
		}

		// Read form input
		$code_class = $this->input->post('code_class');
		$title_class = $this->input->post('title_class');
		$hour_class = $this->input->post('hour_class');
		$price_class = $this->input->post('price_class');

		// Check regis class don't double
		$sql = "SELECT id FROM tb_regis_class WHERE firstname='$firstname' AND lastname='$lastname' AND title_class='$title_class'";
		$query = $this->db->query($sql);
		if ($query->num_rows() >= 1) {
			echo "
				<script type='text/javascript'>
					alert('ผู้ใช้งานได้ลงทะเบียนเรียนไปแล้ว');
					setInterval(function() {
						window.location = '".base_url()."index.php/main/regis_class?id=".$this->session->state_id."';
					}, 1000);
				</script>
			";
		} else {

			$save_by = $this->session->state_login;

			$sql = "INSERT INTO tb_regis_class (
				prefix,firstname,lastname,code_class,title_class,price_class,hour_class,
				hour_total,payment,last_update,save_by
			) VALUES (
				'$prefix','$firstname','$lastname','$code_class','$title_class','$price_class',
				$hour_class,0,0,NOW(),'$save_by'
			)";

			$this->db->query($sql);

			// Update counting to class
			$sql = "SELECT id_student FROM tb_student WHERE firstname='$firstname' AND lastname='$lastname'";
			$query = $this->db->query($sql);
			foreach ($query->result() as $row) {
				$id_student = $row->id_student;
			}

			$query = $this->db->query("SELECT count FROM tb_regis_count WHERE id_student='$id_student'");
			foreach ($query->result() as $row) {
				$count_class = $row->count;
			}

			$count_class++;
			$this->db->query("UPDATE tb_regis_count SET count='$count_class' WHERE id_student='$id_student'");

			// Insert to graph

			$sql = "SELECT year,month FROM tb_graph_regis WHERE id_student='$id_student'";
			$query = $this->db->query($sql);
			$year = ""; $current_year = date('Y');
			$month = ""; $current_month = date('m');
			foreach ($query->result() as $row) {
				$year = $row->year;
			  $month = $row->month;
			}

			if ($year != $current_year && $month != $current_month) {
				$sql = "INSERT INTO tb_graph_regis (prefix,id_student,year,month) VALUES('$prefix','$id_student','$current_year','$current_month')";
				$this->db->query($sql);
			}

			echo "
				<script type='text/javascript'>
					alert('ลงทะเบียนเรียน สำเร็จ!');
					setInterval(function() {
						window.location = '".base_url()."index.php/main/regis_class?id=".$this->session->state_id."';
					}, 1000);
				</script>
			";
		}
	}

	public function member_print() {
		$this->load->view('member_print');
	}

	public function student_detail() {
		$this->load->view('student_detail');
	}

	public function db_student_detail() {
		$id 					= $this->input->post('id');

		$firstname 		= $this->input->post('firstname');
		$lastname 		= $this->input->post('lastname');
		$address 			= $this->input->post('address');
		$sub_district = $this->input->post('sub_district');
		$district 		= $this->input->post('district');
		$province 		= $this->input->post('province');
		$tel 					= $this->input->post('tel');
		$name_parent 	= $this->input->post('name_parent');
		$tel_parent 	= $this->input->post('tel_parent');

		$safe_firstname = $this->db->escape($firstname);
		$safe_lastname = $this->db->escape($lastname);
		$safe_address = $this->db->escape($address);
		$safe_subdistrict = $this->db->escape($sub_district);
		$safe_district = $this->db->escape($district);
		$safe_province = $this->db->escape($province);
		$safe_tel = $this->db->escape($tel);
		$safe_nameparent = $this->db->escape($name_parent);
		$safe_telparent = $this->db->escape($tel_parent);

		if ($_FILES["image_student"]["name"] != "") {
			$url = $this->upload_student_detail("image_student","student");
			$img_name = $_FILES["image_student"]["name"];

			$sql = "UPDATE tb_student SET
				firstname=$safe_firstname, lastname=$safe_lastname,
				address=$safe_address, sub_district=$safe_subdistrict,
				district=$safe_district, province=$safe_province,
				tel=$safe_tel, name_parent=$safe_nameparent,
				tel_parent=$safe_telparent, image='$img_name' WHERE id=$id
			";
		} else {
			$sql = "UPDATE tb_student SET
				firstname=$safe_firstname, lastname=$safe_lastname,
				address=$safe_address, sub_district=$safe_subdistrict,
				district=$safe_district, province=$safe_province,
				tel=$safe_tel, name_parent=$safe_nameparent,
				tel_parent=$safe_telparent WHERE id=$id
			";
		}

		$this->db->query($sql);

		header('location: '.base_url().'index.php/main/student_detail?id='.$id);

	}

	// user_detail
	public function db_save_user() {
		$username 		= $this->input->post('username');
		$firstname 		= $this->input->post('firstname');
		$lastname 		= $this->input->post('lastname');
		$email 				= $this->input->post('email');
		$tel 					= $this->input->post('tel');

		$safe_firstname = $this->db->escape($firstname);
		$safe_lastname = $this->db->escape($lastname);
		$safe_email = $this->db->escape($email);
		$safe_tel = $this->db->escape($tel);

		if ($_FILES["image_student"]["name"] != "") {
			$url = $this->upload_student_detail("image_student","student");
			$img_name = $_FILES["image_student"]["name"];

			$sql = "UPDATE tb_user SET
				firstname=$safe_firstname, lastname=$safe_lastname,
				email=$safe_email, tel=$safe_tel, image='$img_name' WHERE username='$username'
			";
		} else {
			$url = $this->upload_student_detail("image_student","student");
			$img_name = $_FILES["image_student"]["name"];

			$sql = "UPDATE tb_user SET
				firstname=$safe_firstname, lastname=$safe_lastname,
				email=$safe_email, tel=$safe_tel WHERE username='$username'
			";
		}

		$this->db->query($sql);

		header('location: '.base_url().'index.php/main/user_detail?user='.$username);

	}

	// ===== upload db_student_detail =====

  private function upload_student_detail($genName,$getDir) {
		$type = explode('.', $_FILES[$genName]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "assets/images/".$getDir."/".$_FILES[$genName]["name"];
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES[$genName]["tmp_name"]))
				if(move_uploaded_file($_FILES[$genName]["tmp_name"],$url))

					return $url;
		return "";
	}

	// end upload

	public function delete_student() {
		$id = $this->input->get('id');
		// echo $id;
		$this->db->query("DELETE FROM tb_student WHERE id='$id'");
		$this->db->query("DELETE FROM tb_regis_count WHERE id='$id'");
		header('location: '.base_url().'index.php/main/info_student');
	}

	public function learn_detail() {
		$this->load->view('learn_detail');
	}

	public function db_history_class() {
		$title_class 		= $this->input->get('title_class');
		$subject_title 	= $this->input->get('select_title');
		$id_student 		= $this->input->get('id_student');
		$select_hour 		= $this->input->get('select_hour');
		$score 					= $this->input->get('score_class');

		$firstname = ""; $lastname = ""; $hour_total = 0;

		$this->db->query("INSERT INTO tb_history_class (id_student,title_class,subject_title,score,hour_used,last_update) VALUES ('$id_student','$title_class','$subject_title',$score,$select_hour,NOW())");

		$query = $this->db->query("SELECT hour_total FROM tb_regis_class");
		foreach ($query->result() as $row) {
 			$hour_total = $row->hour_total;
		}
		$hour_total = $hour_total + $select_hour;

		// read firstname lastname
		$query = $this->db->query("SELECT firstname,lastname FROM tb_student WHERE id_student='$id_student'");
		foreach ($query->result() as $row) {
			$firstname = $row->firstname;
			$lastname = $row->lastname;
		}
		// end read

		$this->db->query("UPDATE tb_regis_class SET hour_total=$hour_total, last_update=NOW() WHERE lastname='$lastname' AND title_class='$title_class'");
		header('location: '.base_url().'index.php/main/learn_detail?title_class='.$title_class.'&id_student='.$id_student);
	}

	public function student_payment() {
		$this->load->view('student_payment');
	}

	public function payment_success() {
		$this->load->view('payment_success');
	}

	public function payment_remain() {
		$this->load->view('payment_remain');
	}

	public function confirm_payment() {
		$this->load->view('confirm_payment');
	}

	public function db_confirm_payment() {
		$prefix 			= $this->input->post('prefix');
		$firstname 		= $this->input->post('firstname');
		$lastname 		= $this->input->post('lastname');
		$code_class 	= $this->input->post('code_class');
		$title_class 	= $this->input->post('title_class');
		$price_class 	= $this->input->post('price_class');
		$confirm_by 	= $this->input->post('confirm_by');

		$this->db->query("INSERT INTO tb_history_payment (
			prefix,firstname,lastname,code_class,title_class,price_class,last_update,confirm_by
		) VALUES ('$prefix','$firstname','$lastname','$code_class','$title_class',$price_class,NOW(),'$confirm_by')");

		$this->db->query("UPDATE tb_regis_class SET payment=1 WHERE lastname='$lastname' AND code_class='$code_class'");

		header('location: '.base_url().'index.php/main/payment_success');

	}

	public function report() {
		$this->load->view('report');
	}

	public function student_all() {
		$this->load->view('student_all');
	}

	public function users() {
		$this->load->view('users');
	}

	public function user_detail() {
		$this->load->view('user_detail');
	}

	public function db_change_pwd() {
		$user 				= $this->input->post('user');
		$old_pwd 			= $this->input->post('old_pwd');
		$new_pwd 			= $this->input->post('new_pwd');
		$confirm_pwd 	= $this->input->post('confirm_pwd');

		if ($new_pwd != $confirm_pwd) {
			echo "
			<script type='text/javascript'>
				alert('ยืนยันรหัสผ่านใหม่อีกครั้ง');
				setInterval(function() {
					window.location.href = '".base_url()."index.php/main/user_detail?user=".$user."';
				}, 1000);
			</script>
			";
			exit(0);
		}

		$query = $this->db->query("SELECT password FROM tb_user WHERE username='$user'");
		foreach ($query->result() as $row) {
			if ($old_pwd == $row->password) {
				$query = $this->db->query("UPDATE tb_user SET password='$confirm_pwd' WHERE username='$user'");
				echo "
				<script type='text/javascript'>
					alert('เปลี่ยนรหัสผ่านสำเร็จ');
					setInterval(function() {
						window.location.href = '".base_url()."index.php/main/user_detail?user=".$user."';
					}, 1000);
				</script>
				";
				exit(0);
			} else {
				echo "
				<script type='text/javascript'>
					alert('รหัสผ่านผู้ใช้งานไม่ถูกต้อง');
					setInterval(function() {
						window.location.href = '".base_url()."index.php/main/user_detail?user=".$user."';
					}, 1000);
				</script>
				";
				exit(0);
			}
		}

	}

	public function login_log() {
		$this->load->view('login_log');
	}

	public function delete_log() {
		$id = $this->input->get('id');
		$this->db->query("DELETE FROM tb_log WHERE id=$id");
		header('location: '.base_url().'index.php/main/login_log');
	}

	public function setting() {
		$this->load->view('setting');
	}

	public function add_users() {
		$this->load->view('add_users');
	}

	public function form_add_users() {
		$this->load->view('form_add_users');
	}

	public function db_add_users() {
		$firstname 		= $this->input->post('firstname');
		$lastname 		= $this->input->post('lastname');
		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');
		$confirm_pwd 	= $this->input->post('confirm_pwd');
		$email 				= $this->input->post('email');
		$tel 					= $this->input->post('tel');
		$member_group = $this->input->post('member_group');

		$safe_firstname 		= $this->db->escape($firstname);
		$safe_lastname 			= $this->db->escape($lastname);
		$safe_username 			= $this->db->escape($username);
		$safe_password 			= $this->db->escape($password);
		$safe_confirm_pwd 	= $this->db->escape($confirm_pwd);
		$safe_email 				= $this->db->escape($email);
		$safe_tel 					= $this->db->escape($tel);
		$safe_member_group 	= $this->db->escape($member_group);

		$query = $this->db->query("SELECT username FROM tb_user");
		foreach ($query->result() as $row) {
			if ($username == $row->username) {
				echo "
				<script type='text/javascript'>
					alert('มีชื่อผู้ใช้งานนี้ในระบบแล้ว');
					setInterval(function() {
						window.location.href = '".base_url()."index.php/main/form_add_users';
					}, 1000);
				</script>
				";
				exit(0);
			}
		}

		if ($_FILES["image_student"]["name"] != "") {

			$url = $this->upload_image_student("image_student","student");
			$img_name = $_FILES["image_student"]["name"];

			$sql = "INSERT INTO tb_user (
				firstname,lastname,username,password,email,tel,member_group,state,image
			) VALUES (
				$safe_firstname,$safe_lastname,$safe_username,$safe_password,$safe_email,
				$safe_tel,$safe_member_group,1,'$img_name'
			)
			";

			$query = $this->db->query($sql);
			header('location: '.base_url().'index.php/main/add_users');

		} else {

			$sql = "INSERT INTO tb_user (
				firstname,lastname,username,password,email,tel,member_group,state,image
			) VALUES (
				$safe_firstname,$safe_lastname,$safe_username,$safe_password,$safe_email,
				$safe_tel,$safe_member_group,1,'guest.png'
			)
			";

			$query = $this->db->query($sql);

			header('location: '.base_url().'index.php/main/add_users');

		}

	}

	public function graph_student() {
		$this->load->view('graph_student');
	}

} // end controller
