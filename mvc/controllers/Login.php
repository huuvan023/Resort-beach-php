<?php
include_once("./mvc/core/DB.php");
include_once("./mvc/models/UserModel.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
    class Login extends Controller {  
        public function LoginPage($page){
            //Xu li $page, neu $page == ... thi lam sao con ko bang thi lam sao
            $teo = $this -> model("SinhVienModel");
            $this -> view("LoginPage",["Dashboard" => $this->dashboard,"Page" => $page]);
        }
        protected function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        public function HandleRegister(){
           
            $userFullName = $userName = $userPass = $userEmail = $userGender = $userPhoneNumber = $userAddress = "";
            $captcha_error = "";
            $vkey = md5(time().$userName);
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $userFullName = $this -> test_input($_POST["userFullName"]);
                $userName = $this -> test_input($_POST["userName"]);
                $userPass = $this -> test_input($_POST["userPass"]);
                $userEmail = $this -> test_input($_POST["userEmail"]);
                $userGender = $this -> test_input($_POST["userGender"]);
                $userPhoneNumber = $this -> test_input($_POST["userPhoneNumber"]);
                $userAddress = $this -> test_input($_POST["userAddress"]);
            }
            if(  !empty($_POST['g-captcha'])) {
                $secret_key = '6LeXwKwZAAAAAEm5Fe_SoyAnAuMc7IdZeqWNgQRm';

                $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-captcha']);
                //json_decode mã hóa dữ liệu thành object
                $response_data = json_decode($response);

                if(!$response_data->success)
                {
                    $data  = array('fail' =>  "Lỗi captcha !");
                }
                else {
                    $userModel = new UserModel();
                    if( $userModel -> checkExitsEmail( $userEmail ) ){
                        $insertU = $userModel -> insertUser($userFullName,$userName,$userPass,$userEmail,$vkey,$userGender,$userPhoneNumber,$userAddress);
                        if($captcha_error == '' &&  $insertU ) {
                            include_once './mvc/core/library.php'; // include the library file
                            require './mvc/core/vendor/autoload.php';
                            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                            try {
                                //Server settings
                                $mail->CharSet = "UTF-8";
                                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                                $mail->isSMTP();                                      // Set mailer to use SMTP
                                $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                                $mail->Username = SMTP_UNAME;                 // SMTP username
                                $mail->Password = SMTP_PWORD;                           // SMTP password
                                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                                $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                                //Recipients
                                $mail->setFrom(SMTP_UNAME, "Ngô Hữu Văn");
                                $mail->addAddress($_POST['userEmail'], $userFullName);     // Add a recipient | name is option
                                $mail->addReplyTo(SMTP_UNAME, 'Ngô Hữu Văn');
            //                    $mail->addCC('CCemail@gmail.com');
            //                    $mail->addBCC('BCCemail@gmail.com');
                                $mail->isHTML(true);                                  // Set email format to HTML
                                $mail->Subject = "Thư xác nhận Email";
                                $mail->Body = "Xin chào $userName, đây là thư xác nhận Email của bạn.<br>
                                                Vui lòng nhấn vào <a href='http://localhost/WebProject-2020/Vertify/VertifyHandle/$vkey'>đường dẫn này</a> 
                                                để xác nhận tài khoản của bạn!";
                                $mail->AltBody = ""; //None HTML
                                $result = $mail->send();
                                if (!$result) {
                                    $data = array( 'fail'  => "Có lỗi trong quá trình gởi Email!" );
                                }else{
                                    $data = array( 'success'  => "Bạn đã tạo tài khoản thành công. Vui lòng kiểm tra hộp thư để kích hoạt tài khoản! " );
                                }
                            } catch (Exception $e) {
                                $data = array( 'fail'  => "Có lỗi xảy ra!" );
                            }
                        }
                    }
                    else{
                        $data = array( 'fail'  => "Email đã được sử dụng!" );
                    }
                    //mã hóa dữ liệu thành object
                    echo json_encode($data);
                    //Đóng kết nối
                    mysqli_close($conn);
                }
            }
        }
    }
?>