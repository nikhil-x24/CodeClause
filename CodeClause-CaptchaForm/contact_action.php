<?php 
session_start();
$fname=$_POST['fname']; 
$category=$_POST['category']; 
$mobile=$_POST['mobile']; 
$email=$_POST['email']; 
$msg=$_POST['msg']; 
$captcha_val=$_POST['captcha_val'];
$error= array();

if(strlen($fname)<2){
    $error[] = 'Please enter Full Name atleast 3 charaters.';
}

if(strlen($fname)>2){

    if(!preg_match("/^[a-zA-Z\s]+$/", $fname)){
        $error[] = 'Full Name:Characters Only (No digits or special charaters) ';
    } 
}
if(strlen($fname)>20){
    $error[] = 'Full Name: Max length 20 Characters Not allowed';
}
                  
if($email ==''){
    $error[] = 'Please enter email Id';
}

if(strlen($email)!=''){
    if(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){
        $error[] = 'Enter Valid email id';
    } 
}
         
if(strlen($mobile)!=10){
    $error[] = 'Mobile: Please enter 10 digits mobile number';
}

if(strlen($category)==''){
    $error[] = 'Please Select Gender';
}

if(strlen($msg)==''){
    $error[] = 'Please enter your message';
}

if($captcha_val ==''){
    $error[] = 'Please enter captcha';
}

if($captcha_val!=''){

    if ($_SESSION['captcha'] != $captcha_val){
        $error[]='Invalid captcha';
    }
}


    $erro=array(); 
    $i='<i class="fa fa-warning"></i>';
    foreach($error as $err){
        $erro[]=$i.' '.$err;  
    }
    $error_str = implode('<br>', $erro); 
    if($error!=NULL){
        $last_status='failed'; 
    }

    $response = array(
        'errors' =>  $error_str,
        'status' => $last_status
    );
    echo json_encode($response);
?>