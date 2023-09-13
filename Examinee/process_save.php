<?php 
	include '../config.php';
	date_default_timezone_set('Asia/Manila');
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../vendor/PHPMailer/src/Exception.php';
	require '../vendor/PHPMailer/src/PHPMailer.php';
	require '../vendor/PHPMailer/src/SMTP.php';


	// SEND CONTACT EMAIL - CONTACT-US.PHP
	if(isset($_POST['sendEmail'])) {

		$name    = mysqli_real_escape_string($conn, $_POST['name']);
		$email	 = mysqli_real_escape_string($conn, $_POST['email']);
		$subject = mysqli_real_escape_string($conn, $_POST['subject']);
		$msg     = mysqli_real_escape_string($conn, $_POST['message']);

	    $message = '<h3>'.$subject.'</h3>
					<p>
						Good day!<br>
						'.$msg.'
					</p>
					<p>
						Name of Sender: '.$name.'<br>
						Email: '.$email.'
					</p>
					<p><b>Note:</b> This is a system generated email please do not reply.</p>';
					//Load composer's autoloader

	    $mail = new PHPMailer(true);                            
	    try {
	        //Server settings
	        $mail->isSMTP();                                     
	        $mail->Host = 'smtp.gmail.com';                      
	        $mail->SMTPAuth = true;                             
	        $mail->Username = 'nhsmedellin@gmail.com';     
			$mail->Password = 'fgzyhjjhjxdikkjp';                
	        $mail->SMTPOptions = array(
	            'ssl' => array(
	            'verify_peer' => false,
	            'verify_peer_name' => false,
	            'allow_self_signed' => true
	            )
	        );                         
	        $mail->SMTPSecure = 'ssl';                           
	        $mail->Port = 465;                                   

	        //Send Email
	        $mail->setFrom('nhsmedellin@gmail.com');
	        
	        //Recipients
	        $mail->addAddress('sonerwin12@gmail.com');              
	        $mail->addReplyTo('sonesrwin12@gmail.com');
	        
	        //Content
	        $mail->isHTML(true);                                  
	        $mail->Subject = $subject;
	        $mail->Body    = $message;

	        $mail->send();
			$_SESSION['success'] = "Email sent successfully!";
			header("Location: contact-us.php");

	    } catch (Exception $e) {
	    	$_SESSION['success'] = "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
			header("Location: contact-us.php");
	    }
    }







   






	if(isset($_POST['exam'])) {

		$user_Id = $_POST['user_Id'];
		$date_registered = date('Y-m-d');

		// ENGLISH **************************************************************************************
		$one       = $_POST['one'];       $correct_one       =	$_POST['correct_one'];      $ans_q1  = mysqli_real_escape_string($conn, $_POST['ans_q1']);
		$two       = $_POST['two'];       $correct_two	     =	$_POST['correct_two'];      $ans_q2  = mysqli_real_escape_string($conn, $_POST['ans_q2']);
		$three     = $_POST['three'];     $correct_three     =	$_POST['correct_three'];    $ans_q3  = mysqli_real_escape_string($conn, $_POST['ans_q3']);
		$four      = $_POST['four'];      $correct_four	     =	$_POST['correct_four'];     $ans_q4  = mysqli_real_escape_string($conn, $_POST['ans_q4']);
		$five      = $_POST['five'];      $correct_five      =	$_POST['correct_five'];     $ans_q5  = mysqli_real_escape_string($conn, $_POST['ans_q5']);
		$six       = $_POST['six'];       $correct_six	     =	$_POST['correct_six'];      $ans_q6  = mysqli_real_escape_string($conn, $_POST['ans_q6']);
		$seven     = $_POST['seven'];     $correct_seven     =	$_POST['correct_seven'];    $ans_q7  = mysqli_real_escape_string($conn, $_POST['ans_q7']);
		$eight     = $_POST['eight'];     $correct_eight     =	$_POST['correct_eight'];    $ans_q8  = mysqli_real_escape_string($conn, $_POST['ans_q8']);
		$nine      = $_POST['nine'];      $correct_nine	     =	$_POST['correct_nine'];     $ans_q9  = mysqli_real_escape_string($conn, $_POST['ans_q9']);
		$ten       = $_POST['ten'];       $correct_ten	     =	$_POST['correct_ten'];      $ans_q10 = mysqli_real_escape_string($conn, $_POST['ans_q10']);
		$eleven    = $_POST['eleven'];    $correct_eleven    = $_POST['correct_eleven'];    $ans_q11 = mysqli_real_escape_string($conn, $_POST['ans_q11']);
		$twelve    = $_POST['twelve'];    $correct_twelve    = $_POST['correct_twelve'];    $ans_q12 = mysqli_real_escape_string($conn, $_POST['ans_q12']);
		$thirteen  = $_POST['thirteen'];  $correct_thirteen  = $_POST['correct_thirteen'];  $ans_q13 = mysqli_real_escape_string($conn, $_POST['ans_q13']);
		$fourteen  = $_POST['fourteen'];  $correct_fourteen  = $_POST['correct_fourteen'];  $ans_q14 = mysqli_real_escape_string($conn, $_POST['ans_q14']);
		$fifteen   = $_POST['fifteen'];   $correct_fifteen   = $_POST['correct_fifteen'];   $ans_q15 = mysqli_real_escape_string($conn, $_POST['ans_q15']);

		$remark_one       = ""; if($correct_one       != $ans_q1 ) { $remark_one       = 0; } else { $remark_one       = 1; }
		$remark_two       = ""; if($correct_two       != $ans_q2 ) { $remark_two       = 0; } else { $remark_two       = 1; }
		$remark_three     = ""; if($correct_three     != $ans_q3 ) { $remark_three     = 0; } else { $remark_three     = 1; }
		$remark_four      = ""; if($correct_four      != $ans_q4 ) { $remark_four      = 0; } else { $remark_four      = 1; }
		$remark_five      = ""; if($correct_five      != $ans_q5 ) { $remark_five      = 0; } else { $remark_five      = 1; }
		$remark_six       = ""; if($correct_six       != $ans_q6 ) { $remark_six       = 0; } else { $remark_six       = 1; }
		$remark_seven     = ""; if($correct_seven     != $ans_q7 ) { $remark_seven     = 0; } else { $remark_seven     = 1; }
		$remark_eight     = ""; if($correct_eight     != $ans_q8 ) { $remark_eight     = 0; } else { $remark_eight     = 1; }
		$remark_nine      = ""; if($correct_nine      != $ans_q9 ) { $remark_nine      = 0; } else { $remark_nine      = 1; }
		$remark_ten       = ""; if($correct_ten       != $ans_q10) { $remark_ten       = 0; } else { $remark_ten       = 1; }
		$remark_eleven    = ""; if($correct_eleven    != $ans_q11) { $remark_eleven    = 0; } else { $remark_eleven    = 1; }
		$remark_twelve    = ""; if($correct_twelve    != $ans_q12) { $remark_twelve    = 0; } else { $remark_twelve    = 1; }
		$remark_thirteen  = ""; if($correct_thirteen  != $ans_q13) { $remark_thirteen  = 0; } else { $remark_thirteen  = 1; }
		$remark_fourteen  = ""; if($correct_fourteen  != $ans_q14) { $remark_fourteen  = 0; } else { $remark_fourteen  = 1; }
		$remark_fifteen   = ""; if($correct_fifteen   != $ans_q15) { $remark_fifteen   = 0; } else { $remark_fifteen   = 1; }


		$exists = mysqli_query($conn, "SELECT * FROM exam WHERE user_Id='$user_Id' AND date_of_exam='$date_registered'");
		if(mysqli_num_rows($exists) > 0 ) {
			  $_SESSION['message'] = "You have already taken the exam today.";
		      $_SESSION['text'] = "Error";
		      $_SESSION['status'] = "error";
			  header("Location: exam_result.php");
		} else {

		// ALL SCORE IN ENGLISH
		$english = $remark_one + $remark_two + $remark_three + $remark_four + $remark_five; 

		// ALL SCORE IN SCIENCE
		$science = $remark_six + $remark_seven + $remark_eight + $remark_nine + $remark_ten;

		// ALL SCORE IN MATH
		$math = $remark_eleven + $remark_twelve + $remark_thirteen + $remark_fourteen + $remark_fifteen;                

		 // TOTAL
		 $total = $english + $science + $math ;
	

		$save = mysqli_query($conn, "INSERT INTO exam (user_Id, q1, q1_remarks, q2, q2_remarks,  q3, q3_remarks,  q4, q4_remarks, q5, q5_remarks, q6, q6_remarks,  q7, q7_remarks,  q8, q8_remarks,  q9, q9_remarks, q10, q10_remarks, q11, q11_remarks,  q12, q12_remarks,  q13, q13_remarks,  q14, q14_remarks, q15, q15_remarks, total, english, math, science, date_of_exam) 
			
		VALUES (
			'$user_Id',
			'$one', '$remark_one', 
			'$two', '$remark_two', 
			'$three', '$remark_three', 
			'$four',	'$remark_four', 
			'$five', '$remark_five', 
			'$six', '$remark_six', 
			'$seven', '$remark_seven', 
			'$eight', '$remark_eight', 
			'$nine', '$remark_nine', 
			'$ten', '$remark_ten', 
			'$eleven', '$remark_eleven', 
			'$twelve', '$remark_twelve', 
			'$thirteen', '$remark_thirteen', 
			'$fourteen',	'$remark_fourteen', 
			'$fifteen',	'$remark_fifteen', 
			'$total', '$english', '$math', '$science', '$date_registered')"
		);

			if($save) {
				
				$save2 = mysqli_query($conn, "INSERT INTO user_answers (user_Id, q1_answer, q2_answer, q3_answer, q4_answer, q5_answer, q6_answer, q7_answer, q8_answer, q9_answer, q10_answer, q11_answer, q12_answer, q13_answer, q14_answer, q15_answer, date_of_exam ) VALUES ('$user_Id', '$ans_q1',   '$ans_q2',   '$ans_q3',  '$ans_q4',	'$ans_q5',	'$ans_q6',  '$ans_q7',	'$ans_q8',	'$ans_q9',  '$ans_q10', '$ans_q11',  '$ans_q12',  '$ans_q13',	'$ans_q14',	'$ans_q15', '$date_registered')");

				if($save2) {
		    		$_SESSION['message'] = "Submitted successfully.";
			        $_SESSION['text'] = "Submission success";
			        $_SESSION['status'] = "success";
					header("Location: exam_result.php");
			    } else {
			        $_SESSION['message'] = "Something went wrong while saving the information.";
			        $_SESSION['text'] = "Please try again.";
			        $_SESSION['status'] = "error";
					header("Location: exam.php");
		    	}

	    } else {
	      $_SESSION['message'] = "Something went wrong while saving the information.";
	      $_SESSION['text'] = "Please try again.";
	      $_SESSION['status'] = "error";
		  header("Location: exam.php");
	    }
  }

}
	

?>



