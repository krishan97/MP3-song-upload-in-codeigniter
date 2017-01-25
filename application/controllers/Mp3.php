<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mp3 extends CI_Controller {
          public function __construct() { 
	         parent::__construct(); 
	          $this->load->helper(array('form', 'url')); 
	 }
	public function index()
	{
	        $arr['title']='Mp3 Upload';
	        $arr['error']='';
	        $arr['success']='';
	        if(isset($_POST['save'])){
	        if(empty($_FILES["uploadSong"]["name"])){
				$arr['error']='The Upload track field is required';
				$this->load->view('songupload',$arr);	
			}else{
			 $fileName=FCPATH.'uploadSong';
			 $foldername='uploadSong';
			 $this->load->library('fileupload');
                         $returnArr=$this->fileupload->uploadMp3($_FILES["uploadSong"]["name"],$fileName,$foldername);
                         if($returnArr['success']==1){
                          $arr['success']='Song upload path is : '.$returnArr['filepath'];
                          $this->load->view('songupload',$arr);
                         }else{
                           $arr['error']=$returnArr['message'];
                         $this->load->view('songupload',$arr);
                         }
                         
			}
		}else{
		        $this->load->view('songupload',$arr);	
		}
	}
}
