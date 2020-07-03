<?php
require_once "./mvc/view/Blocks/Header.php";
require_once "./mvc/view/Blocks/Loading.php";
?>

<div class="wrap">
    <form method="post"  id="register" enctype="multipart/form-data">
        <div class="wrapper">
            <div class="title">
              Đăng kí tài khoản
            </div>
            <div class="line"></div>
            <div class="form">
                <div class="inputfield">
                  <label>Họ và tên: </label>
                  <input type="text" name="userFullName" placeholder="Nguyễn Văn A"
                  value="" class="input"
                  autofocus required
                  oninvalid="this.setCustomValidity('Định dạng họ tên không đúng!')"
                  oninput="this.setCustomValidity('')" title="Họ tên của bạn"  />
                </div>  
                <div class="inputfield">
                  <label>Tên đăng nhập: </label>
                  <input type="text" name="userName" placeholder="Tên đăng nhập..."
                  value="" class="input"
                  autofocus required
                  oninvalid="this.setCustomValidity('Định dạng tên đăng nhập không đúng! (Tên đăng nhập từ 5-32 kí tự, và không có kí tự đặt biệt )')"
                  oninput="this.setCustomValidity('')" title="Tên đăng nhập từ 5-32 kí tự, bao gồm chữ, số, dấu gạch dưới.."  />
                </div>  
                <div class="inputfield">
                  <label>Mật khẩu: </label>
                  <input id="userPass" type="password" name="userPass" placeholder="Mật khẩu..."
                  value="" class="input" required
                  autofocus 
                  oninvalid="this.setCustomValidity('Định dạng mật khẩu không đúng! (Mật khẩu từ 6-20 kí tự, bao gồm kí tự latin chữ thường, chữ hoa, kí tự đặt biệt và số )')"
                  oninput="this.setCustomValidity('')" title="Mật khẩu bao gồm kí tự, số, kí tự đặt biệt"  />
                </div>
                <div id="passwordStrength" style="margin-bottom: 0px;display: none;">
                  <small>Độ mạnh mật khẩu: </small>
                  <progress value="0" max="100" id="strength" style="max-width: 100%;"></progress>
                </div>
              <div class="inputfield">
                  <label>Xác nhận mật khẩu: </label>
                  <input  type="password" name="userConfirm" placeholder="Nhập lại mật khẩu"
                  value="" class="input" required
                  autofocus 
                  oninvalid="this.setCustomValidity('Mật khẩu không giống nhau!')"
                  oninput="this.setCustomValidity('')"  />
                </div> 
                <div class="inputfield">
                  <label>Email: </label>
                  <input  type="text" name="userEmail" placeholder="example@gmail.com"
                  value=" " class="input" required
                  oninvalid="this.setCustomValidity('Email không hợp lệ!')"
                  oninput="this.setCustomValidity('')" />
                </div> 
                <div class="inputfield">
                  <label>Giới tính: </label>
                  <div class="custom_select">
                    <select name="userGender">
                      <option value="nam">Nam</option>
                      <option value="nu">Nữ</option>
                    </select>
                  </div>
                </div> 
              <div class="inputfield">
                  <label>Số điện thoại: </label>
                  <input name="userPhoneNumber" value="" type="text" class="input"placeholder="0372746xxx..."
                   
                  autofocus 
                  oninvalid="this.setCustomValidity('Số điện thoại không hợp lệ!')"
                  oninput="this.setCustomValidity('')" />
                </div> 
              <div class="inputfield">
                  <label>Địa chỉ: </label>
                  <textarea name="userAddress" value=""  class="textarea"></textarea>
                </div> 
              <div class="terms">
                  <label class="check">
                    <input name="termsAgree" type="checkbox" required/>
                    <span class="checkmark"></span>
                  </label>
                  <p >Đồng ý với điều khoản sử dụng của chúng tôi</p>
                </div> 
                <input name="g-captcha" id="ct" style="display:none;"/>
                <div  class="haveAccount">
                    <p>Đã có tài khoản? 
                    <a href="<?php echo ( $data["Dashboard"] );?>/Login/LoginPage/login">Đăng nhập</a></p>  
                </div>
              <div class="submitField">
                <button type="submit" id="registerBtn" class="btn">Đăng kí <img src="<?php echo $data["Dashboard"] ?>/public/unnamed.gif" alt="loading"/> </button>
              </div>
            </div>
        </div> 
        </form>
        
</div>
<?php
require_once "./mvc/view/Blocks/Footer.php";
?>
<script>
  grecaptcha.ready(function() {
    grecaptcha.execute('6LeXwKwZAAAAAAY04oITvhQKl7ui7bpYYv95binH', {action: 'submit'}).then(function(token) {
        document.getElementById("ct").value = token;
    });
  });
</script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/login.js");?>></script>
<script type="text/javascript" src=<?php echo ( $data["Dashboard"] . "/mvc/view/Js/Master.js");?>></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>