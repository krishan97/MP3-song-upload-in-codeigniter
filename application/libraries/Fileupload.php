<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fileupload{
       private $chkExt = array( 'mp3');
       function uploadMp3($asset_url,$fileName,$foldername){
                        $ext = strtolower(pathinfo($asset_url, PATHINFO_EXTENSION)); // Using strtolower to overcome case sensitive
                        if (in_array($ext, $this->chkExt)) {
                        $rand=mt_rand(1000,100000);
			$asset_url_type=$_FILES['uploadSong']['type'];
			$up=explode(".",$asset_url);
			$name2=$up[0];
			$end=end($up);
			$asset_url_name=str_replace(' ','',$name2).strtotime(date('Y-m-d')).'.'.$end;
			$completePath=$foldername.'/'.$asset_url_name;
                         copy($_FILES['uploadSong']['tmp_name'],$fileName.'/'.$asset_url_name);
                                return array('success'=>1,'filepath'=>$completePath);
                       }else{
                               return array('success'=>0,'message'=>'Only Mp3 songs upload');
                      }
	    }
}
?>

