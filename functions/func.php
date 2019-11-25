<?php

/** ----- = SECTION 1 */
/** -- start helper functions */

function clean($string) {
    return htmlentities($string);
}

function redirect($location){
    return header("Location: {$location}");
}

function set_message($message){
    if(!empty($message)){
        $_SESSION['message'] = $message;
    }else{
        $message="";
    }
}

function display_message(){
    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}

function token_generator(){
    $token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));
    return $token;
}

function validation_errors($error_message){

    $error_message = <<<DELIMITER
        <div class="alert alert-success bg-danger text-white small alert-dismissible fade show" role="alert">
               $error_message
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
        </div>
DELIMITER;

    return $error_message;
}

function email_exists($email){
    $sql = "SELECT id from user WHERE email = '$email'";
    $result = query($sql);
    if(row_count($result) == 1){
        return true;
    }else{
        return false;
    }
}
/** -- end helper functions */



/** ----- = SECTION 2 */
/** -- start validation functions */

function validate_user_registration(){
    $errors = [];
    $min = 3;
    $max = 30;

    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        $name = clean($_POST['name']);
        $email = clean($_POST['email']);
        $phone = clean($_POST['phone']);
        $password = clean($_POST['password']);
        $confirm_password = clean($_POST['confirm_password']);
        $token = 0;
        $activated = false;
        $date = time();


        if (strlen($name) < $min) {
            $errors[] = "username should not be less than {$min} characters";
        }


        if (strlen($name) > $max) {
            $errors[] = "First name should not be more than {$max} characters";
        }


        if (strlen($email) > $max) {
            $errors[] = "Email should not be more than {$max} characters";
        }


        if (email_exists($email)) {
            $errors[] = "Email already exists!";
        }

        if ($password !== $confirm_password) {
            $errors[] = "Password fields do not match!";
        }





        if (!empty($errors)) {

            foreach ($errors as $error) {

                echo validation_errors($error);
            }
        } else {
            if (register_user($name, $email, $password)) {

                set_message("<div class='alert alert-success bg-success text-white small alert-dismissible fade show' role='alert'>
               Your account is registered now! Please login here
                 <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                     <span aria-hidden='true'>&times;</span>
                 </button>
         </div>");
                redirect("Page_login.php");
            } else {

                set_message("<div class='alert alert-success bg-success text-white small alert-dismissible fade show' role='alert'>
                Failed to register!
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                      <span aria-hidden='true'>&times;</span>
                  </button>
             </div>");
                redirect("Page_register.php");
            }
        }
    }
}

/** -- end validation functions */

/** -- end helper functions */



/** ----- = SECTION 3 */
/** -- start CRUD functions */

function register_user($name, $email, $phone, $password, $token, $activated, $date){
    $name = escape($name);
    $email = escape($email);
    $phone = escape($phone);
    $password = escape($password);
    $token = escape($token);
    $activated = escape($activated);
    $date = escape($date)


    if(email_exists($email)){
        return false;
    }else{
        $password = md5($password);
        $sql = "INSERT INTO `user` (`name`, `email`, `phone`, `password`, `token`, `activated`, `date`)";
        $sql .= " VALUES ( '$name', '$email', '$phone', '$password', '$token', '$activated', '$date');";
        $result = query($sql);

        return true;
    }
}

/** -- end CRUD functions */