<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
public function sajib(){

 	$this->load->view('cgpa');


}

  public function robin()
 {

  	$this->load->view('bindex');

  	var_dump($_POST);



  	 if (isset($_POST['create'])){
        
        $mark1=$_POST['mark1'];
      $credit1=$_POST['credit1'];
      
       echo $mark1."<br>";
       echo "Credit = ".$credit1."<br>";
      
      $mark2=$_POST['mark2'];
      $credit2=$_POST['credit2'];
      
       echo $mark2."<br>";
       echo "Credit = ".$credit2."<br>";
      
      $mark3=$_POST['mark3'];
      $credit3=$_POST['credit3'];
      
       echo $mark3."<br>";
       echo "Credit = ".$credit3."<br>";
      
      $mark4=$_POST['mark4'];
      $credit4=$_POST['credit4'];
      
       echo $mark4."<br>";
       echo "Credit = ".$credit4."<br>";
      
      $mark5=$_POST['mark5'];
      $credit5=$_POST['credit5'];
      
      $tmark = $mark1 + $mark2 + $mark3 + $mark4 + $mark5;
      
       echo $mark5."<br>";
       echo "Credit = ".$credit5."<br>";
      
     //Course name's Data are asignning here...
      
      $coname1=$_POST['crs1'];
      $coname2=$_POST['crs2'];
      $coname3=$_POST['crs3'];
      $coname4=$_POST['crs4'];
      $coname5=$_POST['crs5'];
      
       //Bio--------
      
      $naam    = $_POST['name_id'];
      $id      = $_POST['var_id'];
      $program = $_POST['program_id'];
      $Phname  = $_POST['phone_id'];
      $Uname   = $_POST['versity_id'];
      $semname = $_POST['semname'];
      $email = $_POST['email_id'];
  		}
  	
 	}


 	}
?>