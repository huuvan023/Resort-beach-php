<?php
include_once("./mvc/core/DB.php");
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
            if(  !empty($_POST['g-recaptcha-response'])) {
                $secret_key = '6Lf6ct8UAAAAANiPeyUqyONjVNoo999F9ev91hEe';

                $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$_POST['g-recaptcha-response']);
                //json_decode mã hóa dữ liệu thành object
                $response_data = json_decode($response);

               /* if(!$response_data->success)
                {
                    echo "captcha k chinh xac";
                //$data  = array('fail' =>  "Captcha không chính xác!");
                }
                else {
                    echo " chinh xas";
                }*/
                $sql = "INSERT INTO user(userid, fullname, loginname, password, email,vkey, gender, phonenumber, address,confirm) 
                VALUES ('','$userFullName','$userName','$userPass','$userEmail','$vkey','$userGender',$userPhoneNumber,'$userAddress',0)";
                $a = new DB();
                $conn = $a -> __construct();
                /*if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }*/
                $checkMail = mysqli_query($conn,"SELECT * FROM user WHERE email ='$userEmail'");
                if(mysqli_num_rows($checkMail) == 0){
                    if($captcha_error == '' && mysqli_query($conn, $sql) == true) {
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
                            $mail->Body = "Xin chào $userEmail, đây là thư xác nhận Email của bạn.<br>
                                            Vui lòng nhấn vào <a href='https://huuvan.herokuapp.com/Vertify/VertifyHandle/$vkey'>đường dẫn này</a> 
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
?>