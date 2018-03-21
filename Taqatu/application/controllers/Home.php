<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

    function __construct() {
        parent::__construct();
        //echo "hii";
        /* if($this->session->userdata("user_id")=="")
          {

          redirect();


          } */
    }

    public function index() {
        $this->load->model("m_home");
        $home_page_content = $this->m_home->get_home_page_content();
        $data["home_page_content"] = $home_page_content;
        $this->load->view("home_include/header");
        $this->load->view("home/index", $data);
        $this->load->view("home_include/footer");
    }

  
    public function contactus() {


        $this->load->model("m_home");
        $contactus_data = $this->m_home->get_contactus_data();

        $data["contactus_data"] = $contactus_data;
        if ($this->input->post("contact")) {

            $data = $_POST;
            $last_name = $data["last_name"];
            $first_name = $data["first_name"];
            $address = $data["address"];
            $city = $data["city"];
            $zip_code = $data["zip_code"];
            $state = $data["state"];
            $phone = $data["phone"];
            $fax = $data["fax"];
            $from_email = $data["email"];
            $notes = $data["notes"];

            $to_email = "ankitmishra.kinfo@gmail.com";
            $subject = "contactus";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= $from_email . "\r\n";

            $message = '<p><strong>This is Detail Information below</strong></p>';
            $message .= '<p>First Name: ' . $first_name . '</p><br />';
            $message .= '<p>Last Name: ' . $last_name . '</p><br />';
            $message .= '<p>Address: ' . $address . '</p><br />';
            $message .= '<p>City: ' . $city . '</p><br />';
            $message .= '<p>Zip Code: ' . $zip_code . '</p><br />';
            $message .= '<p>State: ' . $state . '</p><br />';
            $message .= '<p>Phone: ' . $phone . '</p><br />';
            $message .= '<p>Fax: ' . $fax . '</p><br />';
            $message .= '<p>Notes: ' . $notes . '</p><br />';
            $abc = mail($to_email, $subject, $message, $headers);
            if ($abc == 1) {
                $this->session->set_flashdata('contactus', 'send successfully');
                redirect("home/contactus");
            } else {
                $this->session->set_flashdata('contactus', 'your email id is invalid');
                redirect("home/contactus");
            }
        }
        $this->load->view("home_include/header");
        $this->load->view("home/contactus", $data);
        $this->load->view("home_include/footer");
    }

    public function aboutus() {
        $this->load->model("m_home");
        $about_content = $this->m_home->get_about_content();
        $data['about_content'] = $about_content;
        $this->load->view("home_include/header");

        $this->load->view("home/aboutus", $data);
        $this->load->view("home_include/footer");
    }

    public function forget_password() {

        $this->load->view("home_include/header");

        $this->load->view("home/forgate_password");
        $this->load->view("home_include/footer");
    }

    public function reset_password() {
        $user_id = $this->uri->segment(3);
        $this->load->view("home_include/header");

        $this->load->view("home/reset_password", ['user_id' => $user_id]);
        $this->load->view("home_include/footer");
    }

    public function setting_password() {
        $this->load->model("m_home");
        $data = $_POST;
        $user_id = $data['user_id'];
        $result = $this->m_home->update_password($data);
        $this->session->set_flashdata('set_password', 'your password is reset successfully');
        redirect('http://basicsoftwaresolution.com/Taqatu/home/reset_password/<?php echo $user_id;?>');
    }

    public function doforget() {
        $this->load->model("m_home");
        $email = $_POST['email'];
        $q = $this->m_home->get_user_info($email);

        if (!empty($q)) {
            $user = $q['u_id'];
            $this->load->helper('url');
            $this->load->helper('string');
            $temp_pass = $user;
            $to = $q['email'];
            $subject = "Password reset";
            $message = "
<html>
<head>
  <title>Password Reset</title>
</head>
<body>
 <p>This email has been sent as a request to reset our password</p>
<p><a href='" . base_url() . "home/reset_password/$temp_pass'>Click here </a>if you want to reset your password,
                        if not, then ignore</p>
</body>
</html>
";

            $txt = $message;
            $headers = "From: webmaster@example.com" . "\r\n" .
                    "CC: somebodyelse@example.com";

            $result = mail($to, $subject, $txt, $headers);
            if ($result == 1) {
                $this->session->set_flashdata('check_email', 'reset password link is send to your email id please check your id');
                redirect('home/forget_password');
            }
        } else {
            $this->session->set_flashdata('check_email', 'your email id is not registered');
            redirect('home/forget_password');
        }
    }

 public function floors() {


      if($this->session->userdata("user_id")!="")
      {
      $this->load->model("m_home");
      $project_id = $this->uri->segment(3);
      $this->load->view("home_include/header");
      $result= $this->m_home->get_floors_same_id($project_id);
      $this->load->view("home/floor",['project_id'=>$project_id,'result'=>$result]);
   	$this->load->view("home_include/footer");
      }
      else
      {

      redirect();

      }
      } 

    public function duration() {


        if($this->session->userdata("user_id") != "") {
            $this->load->model("m_home");
            $project_id = $this->uri->segment(3);
             $this->load->view("home_include/header");
            $result = $this->m_home->get_event_same_id($project_id);
            $excluded = $this->m_home->get_excluded_bu_id($project_id);
			
            $result12 = $this->m_home->get_event_show_id($project_id);
            $this->load->view("home/calndr", ['project_id' => $project_id, 'result' => $result,'event'=>$result12,'excluded'=>$excluded]);
            //	$this->load->view("home_include/footer");
        } else {

            redirect();
        }
    }

    public function budget() {
        $this->load->model("m_home");
        $this->load->model("m_projects");
        $project_id = $this->uri->segment(3);
        $this->load->view("home_include/header");
        $result12 = $this->m_projects->get_project_budget($project_id);
        $this->load->view("home/project_budget", ['project_id' => $project_id, 'result12' => $result12]);
        $this->load->view("home_include/footer");
    }

    // public function excl_day() {
		
		// $project_id = $this->uri->segment(3);
	 // $this->load->model("m_home");
	  // $day_off = $_POST['option'];//array of features
	 
         //  $json = json_encode($day_off);
			
	// $result12 =$this->m_home->get_all_data_show($project_id);
			// if(!empty($result12)){
				 // $data= array (
           // 'days_off' => $day_off,
           // 'pro_id' => $project_id,
           // 'off_day_name' => $_POST['option2']
		   
             // );
			 
		// $result11= $this->m_home->update_event_show_day($result12['pro_id'],$data); 
			// }
			// else{
			 // $data= array (
           // 'days_off' => $day_off,
           // 'pro_id' => $project_id,
		    // 'off_day_name' => $_POST['option2']
             // );
			 
            // $result11 = $this->m_home->add_event_show_day($data);
			
			// }
	// print_r($project_id);
		// die;	
	 //redirect('home/duration/' . $_POST['pr_id']);
			
	// }	 
	public function add_excl_days() 
	{
		
		$off_day_name=array();
		foreach($_POST['chck'] as $evday){
			if($evday==0){
				$off_day_name[] = "Sun";
			}
			else if($evday==1){
				$off_day_name[] = "Mon";
			}
			else if($evday==2){
				$off_day_name[] = "Tue";
			}
			else if($evday==3){
				$off_day_name[] = "Wed";
			}
			else if($evday==4){
				$off_day_name[] = "Thu";
			}
			else if($evday==5){
				$off_day_name[] = "Fri";
			}
			else if($evday==6){
				$off_day_name[] = "Sat";
			}
		}
		
		$json = json_encode($_POST['chck']);
		$json_days = json_encode($off_day_name);
		$project_id = $_POST['pr_id'];
		$this->load->model("m_home");
		//$day_off = $_POST['option'];//array of features
		$result12 =$this->m_home->get_all_data_show($project_id);
			if(!empty($result12)){
				 $data= array (
           'days_off' => $json,
           'pro_id' => $project_id,
           'off_day_name' => $json_days
		   
             );
			 
		$result11= $this->m_home->update_event_show_day($result12['pro_id'],$data); 
			}
			else{
			 $data= array (
           'days_off' => $json,
           'pro_id' => $project_id,
		    'off_day_name' => $json_days
             );
			 
            $result11 = $this->m_home->add_event_show_day($data);
			
			}
			if($result11){
	      redirect('home/duration/' . $_POST['pr_id']);
			}
			
	}	
	public function add_event() {
		
		$day = $this->input->post("from_day");
		$month = $this->input->post("from_month");
		$year = $this->input->post("from_year");
		$day_to= $this->input->post("to_day");
		$month_to = $this->input->post("to_month");
		$year_to = $this->input->post("to_year");
		$start_date = $year . "-" . $month . "-" . $day;
		$end_date = $year_to . "-" . $month_to . "-" . $day_to;
	
        $this->load->model("m_home");
        $name = $this->input->post("name", TRUE);
        $pro_id = $this->input->post("pro_id", TRUE);
		  $data = array( 
                "pro_id" => $pro_id,
                "start" => $start_date,
                "end" => $end_date
            );
           $result11 = $this->m_home->add_event($data);
        redirect('home/duration/' . $pro_id);
    }
public function add_test(){
	   $this->load->model("m_home");
	    $pro_id = $this->input->post("pro_id", TRUE);
		$data = array(
                'pro_id' => $pro_id,
                'floor' => $_POST['floor']
            );
           $result11 = $this->m_home->add_floor($data);
			redirect('home/floors/'.$pro_id);
	
	}
    public function add_excluded() {
       
		$day = $this->input->post("from_exday");
		$month = $this->input->post("from_exmonth");
		$year = $this->input->post("from_exyear");
		$day_to= $this->input->post("to_exday");
		$month_to = $this->input->post("to_exmonth");
		$year_to = $this->input->post("to_exyear");
		$start_date = $year . "-" . $month . "-" . $day;
		$end_date = $year_to . "-" . $month_to . "-" . $day_to;
		 $this->load->model("m_home");
        $name = $this->input->post("name", TRUE);
        $pro_id = $this->input->post("pid", TRUE);
		  $data = array(
                "pro_id" => $pro_id,
                "excluded_start" => $start_date,
                "excluded_end" => $end_date
             
            );
           $result11 = $this->m_home->add_event_excluded($data);
   
        redirect('home/duration/' . $pro_id);
    }

    public function edit_event() {
        $this->load->model("m_home");
        $eventid = intval($this->input->post("eventid"));
        $event = $this->m_home->get_event($eventid);
        if ($event->num_rows() == 0) {
            echo"Invalid Event";
            exit();
        }
        $event->row();
        $name = $this->input->post("name");
        $pro_id = $this->input->post("pro_id");
        $desc = $this->input->post("description");
        $start_date = $this->input->post("start_date");
        $end_date = $this->input->post("end_date");
        $delete = intval($this->input->post("delete"));

        if (!$delete) {
            $this->m_home->update_event($eventid, array(
                "title" => $name,
                "pro_id" => $pro_id,
                "description" => $desc,
                "start" => $start_date,
                "end" => $end_date,
                    )
            );
        } else {
            $this->m_home->delete_event($eventid);
        }

        redirect('home/duration');
    }

  
    public function delete_event() {
		 $this->load->model("m_home");
		 $id = $this->uri->segment(3);
		 $pid = $this->uri->segment(4);
		 $this->m_home->delete_event($id);
		redirect('home/duration/' . $pid);
	} 
	public function delete_event_excluded() {
		 $this->load->model("m_home");
		 $id = $this->uri->segment(3);
		 $pid = $this->uri->segment(4);
		 $this->m_home->delete_event_excluded($id);
		redirect('home/duration/' . $pid);
	}
 public function get_offday($pro_id) {
	  $this->load->model("m_home");
  $events = $this->m_home->get_events($pro_id); 
  $from_date = $events['start'];
$to_date = $events['end'];

$from_date = new DateTime($from_date);
$to_date = new DateTime($to_date);
$i=0;
$new =array();
 
for ($date = $from_date; $date <= $to_date; $date->modify('+1 day')) {
	$evnt = json_decode($events['off_day_name']);
	foreach($evnt as $eve){
	if($eve == $date->format('D')){
		$yearDataArr = [
             [
                'id' => ++$i,
                'day' => $date->format('d'),
				'month' => $date->format('m')
            ],   
        ];  
		
		
		$new []= $date->format('d');
		 $year[] = $date->format('Y');
		
		if($date->format('M')== 'Jan'){
		 $mnew[]= 0 ;
			}
		else if($date->format('M')== 'Feb'){
			 $mnew[]= 1 ;
		}
		else if($date->format('M')== 'Mar'){
			 $mnew[]= 2 ;
		}
		else if($date->format('M')== 'Apr'){
			 $mnew[]= 3 ;
		}
		else if($date->format('M')== 'May'){
			 $mnew[]= 4 ;
		}
		else if($date->format('M')== 'Jun'){
			 $mnew[]= 5 ;
		}
		else if($date->format('M')== 'Jul'){
			 $mnew[]= 6 ;
		}
		else if($date->format('M')== 'Aug'){
			 $mnew[]= 7 ;
		}
		else if($date->format('M')== 'Sep'){
			 $mnew[]= 8 ;
		}
		else if($date->format('M')== 'Oct'){
			 $mnew[]= 9 ;
		}
		else if($date->format('M')== 'Nov'){
			 $mnew[]= 10 ;
		}
		else if($date->format('M')== 'Dec'){
			 $mnew[]= 11 ;
		}
		
	}
	}
	
	
  
}

  $day_cnt =  count($new);
  $data23 = array( 
                "pro_id" => $pro_id,
                "day_cnt" => $day_cnt
            );
 $res = $this->m_home->add_day_cnts($pro_id,$data23);
echo json_encode(array('newarray'=>$yearDataArr,'new'=>$new, 'm'=>$mnew,'y'=> $year));
//echo $day_ofs = $events['days_off']; 
 die;
 
 }

 public function get_events($pro_id) {


        // Our Start and End Dates
        $this->load->model("m_home");
        $start = $this->input->get("start");
        $end = $this->input->get("end");
        $startdt = new DateTime('now'); // setup a local datetime
        $startdt->setTimestamp($start); // Set the date based on timestamp
        $start_format = $startdt->format('Y-m-d H:i:s');

        $enddt = new DateTime('now'); // setup a local datetime
        $enddt->setTimestamp($end); // Set the date based on timestamp
        $end_format = $enddt->format('Y-m-d H:i:s');
		
        $events = $this->m_home->get_events($pro_id);
		$day_ofs =json_decode($events['days_off']);
	
		  if($events){
			    $yearDataArr = [
             
                [
                'id' => $events['id'],
                'name' => '',
                'type' => '',
                'startDate' =>$events['start'],
                'endDate' => $events['end'],
				'color'=> 'yellow',
			
               
            ],
              
        ];  
		$excl = [
               
                [
                'id' => $events['id'],
                'name' => '',
                'type' => '',
                'startDate' =>$events['excluded_start'],
                'endDate' => $events['excluded_end'],
				'color'=> '#8B8D90',
				
            ],
                
        ];
		
		 $yr_data=array_merge($yearDataArr,$excl);
        echo $yearData = json_encode($yr_data);
        die;
		  }
		  else{
        $yearDataArr = [
             
                [
                'id' => '2',
                'name' => 'Media Teste',
                'type' => 'Media',
                'startDate' => '',
                'endDate' => '',
            ],
               
        ];

        echo $yearData = json_encode($yearDataArr);
        die;
    }
	}
    private function convertYearData(array $yearData) {
        if (empty($yearData)) {
            return 'null';
        }
        $data = '[';
        foreach ($yearData as $event) {
            if (empty($data)) {
                $data = "{id:{$event['id']}, name:'{$event['name']}', type:'{$event['type']}', startDate: new Date('{$event['startDate']}'), endDate: new Date('{$event['endDate']}')},";
            } else {
                $data .= "{id:{$event['id']}, name:'{$event['name']}', type:'{$event['type']}', startDate: new Date('{$event['startDate']}'), endDate: new Date('{$event['endDate']}')},";
            }
        }
        $data .= ']';
        return $data;
    }

    public function get_excluded($pro_id) {

        $this->load->model("m_home");
        $start = $this->input->get("start");
        $end = $this->input->get("end");

        $startdt = new DateTime('now'); // setup a local datetime
        $startdt->setTimestamp($start); // Set the date based on timestamp
        $start_format = $startdt->format('Y-m-d H:i:s');

        $enddt = new DateTime('now'); // setup a local datetime
        $enddt->setTimestamp($end); // Set the date based on timestamp
        $end_format = $enddt->format('Y-m-d H:i:s');

        $events = $this->m_home->get_excluded($start_format, $end_format, $pro_id);

        $data_events = array();

        foreach ($events->result() as $r) {

            $data_events[] = array(
                "id" => $r->ID,
                "title" => $r->title,
                "description" => $r->description,
                "end" => $r->excluded_end,
                "start" => $r->excluded_start
            );
        }

        echo json_encode(array("excluded" => $data_events));
        exit();
    }

    public function user_register() {
        if ($this->input->post("register")) {
            $data = $_POST;
            $this->load->model("m_home");
            $result = $this->m_home->add_user_register($data);
            if ($result == 1) {

                redirect();
            }
        }
    } 
	public function change_status() {
		$this->load->model("m_home");
		$ID= $this->input->post("ID");
			$result= $this->m_home->get_all_data($ID);
			$result12 =$this->m_home->get_all_data_show($result['pro_id']);
			
			
			if(!empty($result12)){
				
				$st = new DateTime($result['start']);
				$ed = new DateTime($result['end']);
				$exc_st = new DateTime($result12['excluded_start']);
				$exc_ed = new DateTime($result12['excluded_end']);
				$dteDiff = $st->diff($ed);
				$work = $dteDiff->days;
							if ($work == 0) {
							$work = $work + 1;
							}
							else
							{
							$work = $work;
							}
							$dteDiff11 = $exc_st->diff($exc_ed);
							$off_day = $dteDiff11->days;
							if ($off_day == 0) 
							{
							$off_day = $off_day + 1;
							} 
							else 
							{
							$off_day = $off_day;
							}
							$total_day = $work - $off_day;
				$data = array(
				"pro_id " => $result['pro_id'],
				"cal_id" => $result['ID'],
				"start" => $result['start'],
				"end" => $result['end'],
				"total_day" => $total_day,
				"status " => 1

				);
		$result11= $this->m_home->update_event_show($result12['pro_id'],$data); 
		print_r($result['pro_id']);
		die;
			}
			else{
				 $st = new DateTime($result['start']);
            $ed = new DateTime($result['end']);
            $dteDiff = $st->diff($ed);
            $work = $dteDiff->days;
            if ($work == 0) {
                $work = $work + 1;
            } else {
                $work = $work;
            }
			$data = array(
                "pro_id " => $result['pro_id'],
                "cal_id" => $result['ID'],
                "start" => $result['start'],
                "end" => $result['end'],
				"total_day" => $work,
                "status " => 1
            );
            $result11 = $this->m_home->add_event_show($data);
			print_r($result['pro_id']);
			die;
			}
		
    }
	public function change_excluded() {
		$this->load->model("m_home");
		$ID= $this->input->post("ID");
			$result= $this->m_home->get_all_excluded_data($ID);
			$result12 =$this->m_home->get_all_data_show($result['pro_id']);
			if(!empty($result12)){
			$st = new DateTime($result12['start']);
			
            $ed = new DateTime($result12['end']);
            $exc_st = new DateTime($result['excluded_start']);
            $exc_ed = new DateTime($result['excluded_end']);
            $dteDiff = $st->diff($ed);
            $work = $dteDiff->days;
            if ($work == 0) {
                $work = $work + 1;
            } else {
                $work = $work;
            }
            $dteDiff11 = $exc_st->diff($exc_ed);
            $off_day = $dteDiff11->days;
            if ($off_day == 0) {
                $off_day = $off_day + 1;
            } else {
                $off_day = $off_day;
            }
            $total_day = $work - $off_day;
				$data = array(
				 "pro_id " => $result['pro_id'],
                "exclu_id " => $result['id'],
                "excluded_start" => $result['excluded_start'],
                "excluded_end" => $result['excluded_end'],
				"total_day" => $total_day,
                "status " => 1
               
            );
		$result11= $this->m_home->update_event_show($result12['pro_id'],$data); 
		print_r($result['pro_id']);
		die;
			}
			else{
				 $st = new DateTime($result['excluded_start']);
            $ed = new DateTime($result['excluded_end']);
            $dteDiff = $st->diff($ed);
            $work = $dteDiff->days;
            if ($work == 0) {
                $work = $work + 1;
            } else {
                $work = $work;
            }
			$data = array(
               "pro_id " => $result['pro_id'],
                "exclu_id " => $result['id'],
                "excluded_start" => $result['excluded_start'],
                "excluded_end" => $result['excluded_end'],
				"total_day" => $work,
                "status " => 1
            );
            $result11 = $this->m_home->add_event_show($data);
			print_r($result['pro_id']);
			die;
			}
		
    }

}

?>