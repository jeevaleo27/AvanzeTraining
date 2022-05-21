<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends MY_Controller {

	function __construct() {
        parent::__construct();
        //$this->load->model('Form_model');
    }

	
	public function index()
	{
		
	    $d["content"]="form";
		$this->load->view("page.php",$d);
		
	}


	public function secpg()
	{
		
	    $d["content"]="secondpg";
		$this->load->view("page.php",$d);
		
	}

	public function create()
	{
		$fname=$this->input->post("fname");
	    $lname=$this->input->post("lname");
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		$phone=$this->input->post("phone");
		$date=$this->input->post("date");
		$gender=$this->input->post("gender");
		$save = implode(",", $this->input->post('save'));
		$area=$this->input->post("area");
		$dropdown=$this->input->post("dropdown");

		$data= array(
			'Fname'=>$fname,
			'Lname'=>$lname,
			'E_Mail'=>$email,
			'Password'=> $password,
			'Phone_No'=> $phone,
			'Dob'=>$date ,
			'Gender'=>$gender ,
			'Checkk'=>$save ,
			'Message'=>$area ,
			'Course'=>$dropdown 
		);
		 $insert = $this->db->insert('reg_details',$data);
		 $last_id=$this->db->insert_id();
		 echo $last_id;
		 echo json_encode($insert);





		 $S_no=$this->input->post("S_no");
		 $CourseE=$this->input->post("course");
		 $Duration_Of_Course=$this->input->post("duration");
		 $Institute=$this->input->post("institute");
		 $Year_Of_Passing=$this->input->post("year");
		 $Percentage=$this->input->post("Percentage");

         foreach ($CourseE as $key => $value) {

         	$MultipleData=[];
         	$MultipleData['S_no']=$last_id;
         	$MultipleData['CourseE']=$CourseE[$key];
         	$MultipleData['Duration_Of_Course']=$Duration_Of_Course[$key];
         	$MultipleData['Institute']=$Institute[$key];
         	$MultipleData[ 'Year_Of_Passing']= $Year_Of_Passing[$key];
         	$MultipleData['Percentage']=$Percentage[$key];


            $insert2 = $this->db->insert('reg_cours_details',$MultipleData);
		    echo json_encode($insert2);
		   
		}
     
	}

	public function select_data()  
      {  
         
      	 $query = $this->db->query("SELECT * FROM reg_details ");
         $query1 = $query->result();
         $data['product'] = $query1;
         $this->load->view("include/header");
         $this->load->view("include/sidebar");
         $this->load->view('select_view1', $data);
         $this->load->view("include/footer"); 
      }  


      function delete_data()
	{
   //   // $S_no=$this->input->post('S_no');
		 // $this->db->where('S_no',$S_no);
			
			// // $this->Crud_model->deleterecords($id);	
			// $query1="DELETE FROM reg_cours_details WHERE S_no= $S_no";
			// $query="DELETE FROM reg_details WHERE S_no= $S_no";
			// $this->db->query($query1);
			// $this->db->query($query);

   //    // $this->db->where('S_no',$S_no);
   //    // $this->db->delete('reg_details');
	  // echo "Date deleted successfully !";
	
	}
	function deleterecords()
	{
		if($this->input->post('type')==2)
		{
			$S_no=$this->input->post('S_no');
			
			// $this->Crud_model->deleterecords($id);	
			$query1="DELETE FROM reg_cours_details WHERE S_no= $S_no";
			$query="DELETE FROM reg_details WHERE S_no= $S_no";
			$this->db->query($query1);
			$this->db->query($query);
			echo json_encode(array(
				"statusCode"=>200
			));
		} 
	}
	public function viewajax()
	{			
		        $query=$this->db->query("select * from reg_details");
		        
				$data=$query->result();
				foreach($data as $row)
				{
					  echo "<tr>";
					  echo "<td>".$row->S_no."</td>";
					  echo "<td>".$row->Fname."</td>";
					  echo "<td>".$row->Lname."</td>";
					  echo "<td>".$row->E_Mail."</td>";
					  echo "<td>".$row->Phone_No."</td>";
					  echo "<td>".$row->Dob."</td>";
					  echo "<td>".$row->Gender."</td>";
					  echo "<td>".$row->Checkk."</td>";
					  echo "<td>".$row->Message."</td>";
					  echo "<td>".$row->Course."</td>";
					  echo "<td><button type='button' class='btn btn-danger btn-sm delete' data-id='".$row->S_no."'>Delete</button></td>";
					 echo "<td><button type='button' id='ShowEditDetails' class='btn btn-success btn-sm update' data-book-id='<?php echo $historico->codigo ?>'
			data-S_no=".$row->S_no."
			data-fname=".$row->Fname."
			data-lname=".$row->Lname."
			data-email=".$row->E_Mail."
			data-password=".$row->Password."
			data-phone=".$row->Phone_No."
			data-dob=".$row->Dob."
			data-gender=".$row->Gender."
			data-save=".$row->Checkk."
			data-message=".$row->Message."
			data-dropdown=".$row->Course."
			>Edit</button></td>";
					  echo "</tr>";
					 
				}
	}

	function updaterecords()
	{
		if($this->input->post('type')==3)
		{


		$S_no=$this->input->post("S_no");
		$fname=$this->input->post("fname");
	    $lname=$this->input->post("lname");
		$email=$this->input->post("email");
		$password=$this->input->post("password");
		$phone=$this->input->post("phone");
		$date=$this->input->post("dob");
		$gender=$this->input->post("gender");
		// $save = implode(",", $this->input->post('save'));
		$save=$this->input->post("save");
		$area=$this->input->post("area");
		$dropdown=$this->input->post("dropdown");

			
			$query=" UPDATE reg_details
		         SET 'Fname'=$fname,
			'Lname'=$lname,
			'E_Mail'=$email,
			'Password'= $password,
			'Phone_No'= $phone,
			'Dob'=$date,
			'Gender'=$gender,
			'Checkk'=$save,
			'Message'=$area,
			'Course'=$dropdown 
		           WHERE S_no=$S_no";
		$this->db->query($query);
			echo json_encode(array(
				"statusCode"=>200
			));
		} 
	}

}
