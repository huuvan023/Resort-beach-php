<?php
include_once("./mvc/core/DB.php");
include_once("./mvc/models/UserModel.php");
//use PHP mailler
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
    class Login extends Controller {  
        //Handle page, get model data and view
        public function LoginPage($page){
            if ( isset($_COOKIE["Name"]) && isset($_COOKIE["Pass"]) ) {
                $this -> view("LoginPage",["Dashboard" => $this->dashboard,"Page" => $page,"Name" => $_COOKIE["Name"], "Pass" => $_COOKIE["Pass"]]);
            }
            else {
            $this -> view("LoginPage",["Dashboard" => $this->dashboard,"Page" => $page,"Name" => "", "Pass" => ""]);
            }
        }
        //Check Input function 
        protected function test_input($data) {
            $data = trim($data);                    //strip unnecessary characters
            $data = stripslashes($data);            //remove backslashes
            $data = htmlspecialchars($data);        //Escape htmlSpecialChar
            return $data;
        }
        //Handle Register, handle data
        public function HandleRegister(){
            $userFullName = $userName = $userPass = $userEmail = $userGender = $userPhoneNumber = $userAddress = "";
            //make random verify code
            $vkey = md5(time().$userName);
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $userFullName = $this -> test_input($_POST["userFullName"]);
                $userName = $this -> test_input($_POST["userName"]);
                $userPass = $this -> test_input($_POST["userPass"]);
                $userEmail = $this -> test_input($_POST["userEmail"]);
                $userGender = $this -> test_input($_POST["userGender"]);
                $userPhoneNumber = $this -> test_input($_POST["userPhoneNumber"]);
                $userAddress = $this -> test_input($_POST["userAddress"]);
                //Check exits captcha
                if(  !empty($_POST['g-captcha'])) {
                    $secret_key = '6LeXwKwZAAAAAEm5Fe_SoyAnAuMc7IdZeqWNgQRm';
    
                    $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-captcha']);
                    //json_decode mã hóa dữ liệu thành object
                    $response_data = json_decode($response);
    
                    if(!$response_data->success)
                    {
                        $data  = array('fail' =>  "Lỗi captcha !");
                    }
                    //Continue
                    else {
                        $userModel = new UserModel();
                        //Check exits email, each account have only 1 mail
                        if( $userModel -> checkExitsEmail( $userEmail ) ){
                            if( $userModel -> checkExitsLoginName($userName) ) {
                                //Insert new User
                                $insertU = $userModel -> insertUser($userFullName,$userName,$userPass,$userEmail,$vkey,$userGender,$userPhoneNumber,$userAddress);
                                if( $insertU ) {
                                    include_once './mvc/core/library.php';                     // include the library file
                                    require './mvc/core/vendor/autoload.php';
                                    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                                    try {
                                        //Server settings
                                        $mail->CharSet = "UTF-8";
                                        $mail->SMTPDebug = 0;                                  // Enable verbose debug output
                                        $mail->isSMTP();                                      // Set mailer to use SMTP
                                        $mail->Host = SMTP_HOST;                                // Specify main and backup SMTP servers
                                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                        $mail->Username = SMTP_UNAME;                           // SMTP username
                                        $mail->Password = SMTP_PWORD;                           // SMTP password
                                        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                                        $mail->Port = SMTP_PORT;                               // TCP port to connect to
                                        //Recipients
                                        $mail->setFrom(SMTP_UNAME, "Ngô Hữu Văn");
                                        $mail->addAddress($_POST['userEmail'], $userFullName); // Add a recipient | name is option
                                        $mail->addReplyTo(SMTP_UNAME, 'Ngô Hữu Văn');
                                        $mail->isHTML(true);                                  // Set email format to HTML
                                        $mail->Subject = "Thư xác nhận Email";
                                        $mail->Body = "Xin chào $userName, đây là thư xác nhận Email của bạn.<br>
                                                        Vui lòng nhấn vào <a href='http://localhost/WebProject-2020/Vertify/VertifyHandle/$vkey'>đường dẫn này</a> 
                                                        để xác nhận tài khoản của bạn!";
                                        $mail->AltBody = ""; //None HTML
                                        $result = $mail->send();
                                        //infused data to client
                                        if (!$result) {
                                            $data = array( 'fail'  => "Có lỗi trong quá trình gởi Email!" );
                                        }else{
                                            $data = array( 'success'  => "Bạn đã tạo tài khoản thành công. Vui lòng kiểm tra hộp thư để kích hoạt tài khoản! " );
                                        }
                                    } catch (Exception $e) {
                                        $data = array( 'fail'  => "Có lỗi xảy ra!" );
                                    }
                                }
                                else {
                                    $data = array( 'fail'  => "Lỗi captcha hoặc lỗi khi thêm user mới" );
                                }
                            }
                            else {
                                $data = array( 'fail' => "Tên đã được sử dụng!" );
                            }
                        }
                        else{
                            $data = array( 'fail'  => "Email đã được sử dụng!" );
                        }
                        //encode data to object
                        echo json_encode($data);
                        //Close connection
                        $userModel -> closeConnection();
                    }
                }
            }
        }
        public function HandleLogin(){
            $userName = $userPass = "";
            //Check method
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $userName = $this -> test_input($_POST["userName"]);
                $userPass = $this -> test_input($_POST["userPass"]);
                if(!empty($_POST["remember"])){
                    setcookie("Name",$userName, time() + (86400 * 30), "/");
                    setcookie("Pass",$userPass, time() + (86400 * 30), "/");
                }else{
                    setcookie("Name","", time() - 3600, "/");
                    setcookie("Pass","", time() - 3600, "/");	
                }
                $userModel = new UserModel();
                $user = $userModel -> Login($userName,$userPass);
                if( $user != NULL ) {
                    $confirm = $user["confirm"];
                    if($confirm == 1){
                        $_SESSION["user"]=$userName;
                        $_SESSION["password"] = $userPass;
                        $_SESSION["userid"] = $user ["userid"];
                        $_SESSION["userfullname"] = $user["fullname"];
                        $data = array(
                            'success'  => true
                        );
                    }
                    else{
                        $data = array( 'fail'  => "Tài khoản này chưa được xác nhận!
                         Vui lòng check mail xác nhận tài khoản!"  );
                    }
                }
                else {
                    $data = array( 'fail'  => "Sai tên tài khoản hoặc mật khẩu!"  );
                }
                echo json_encode($data);
            }
        }    
    }
?>