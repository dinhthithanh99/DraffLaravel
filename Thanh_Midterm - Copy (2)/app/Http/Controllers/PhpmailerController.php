<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class PhpmailerController extends Controller
{
	 public function index(){

    	return View("phpmailer")->with('title','LaraMail');
    }
    public function sendEmail(Request $request){
    	$mail = new PHPMailer(true);
    	try{
    		$mail->isSMTP();

    		$mail->CharSet = 'utf-8';
    		$mail->Mailer = 'smtp';
    		$mail->SMTPAuth =true;
			$mail->SMTPSecure = 'tls';
    		$mail->Host = 'smtp.gmail.com'; 
    		$mail->Port = 587; 
    		$mail->Username = 'demowebsitelaravel@gmail.com';
    		$mail->Password = '@Thanh1234567';

    		$mail->addAddress($request->getemail , $request->getname); 
    		$mail->From = $request->getemail; 
    		$mail->FromName = 'abc'; 
    		$mail->Subject = $request->subject;
    		$mail->MsgHTML($request->content);
    		
    		$mail->send();
    	}catch(phpmailerException $e){
    		dd($e);
    	}catch(Exception $e){
    		dd($e);
    	}
    	if($mail){
    		return View("phpmailer")->with("phpmailer","success")->with("title","Success");
    	}else{
    		return View("phpmailer")->with("phpmailer","failed")->with("title","Failed");
    	}
    }

}
