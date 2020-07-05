<div class="profile">
    <div class="icon_wrap">
    <img src="<?php echo $data["Dashboard"] ?>/public/index-layout.png" alt="profile_pic">
    <span class="name">John Alex</span>
    <i class="fas fa-chevron-down"></i>
    </div>
    <div id="handle2" class="active2 profile_dd ">
    <ul class="profile_ul">
        <li id="headerAccOption">Tài khoản của tôi</li>
        <li><a class="address" href="<?php echo ( $data["Dashboard"] );?>/User/UserPage/profile"><span class="picon"><i class="fas fa-user-alt"></i></span>Hồ sơ</a></li>
        <li><a class="address" href="<?php echo ( $data["Dashboard"] );?>/User/UserPage/booking"><span class="picon"><i class="far fa-check-square"></i></span>Đặt phòng</a></li>
        <li><a class="logout" href="<?php echo ( $data["Dashboard"] );?>/User/Logout"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Đăng xuất</a></li>
    </ul>
    </div>
</div>