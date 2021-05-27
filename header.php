<body>
    <div id="header">
        <div class="logo_center">
            <h1 >
                <a href="index.php" class="logo">SAMDIDAS</a>
            </h1>
        </div>
    </div>

    <div class="menu_bar_center">
        <div id="menu_bar">
            <ul>
                <li><a href="running_shoes.php">운동화</a></li>
                <li><a href="casual_shoes.php">캐주얼</a></li>
                <li><a href="sports_shoes.php">스포츠</a></li>
            </ul>
        </div>
    </div>

<!-- <?php
    session_start();
    if (isset($_SESSION["user_id"])) $userid = $_SESSION["user_id"];
    else $userid = "";
    if (isset($_SESSION["user_nickname"])) $user_nickname = $_SESSION["user_nickname"];
    else $user_nickname = "";
?>
<?php
    if (!$userid) {
?> -->

    <div id="small_menu">
        <ul>
            <li><a href="register.html">회원 가입</a></li>
            <li> | </li>
            <li><a href="login_form.php">로그인</a></li>
        </ul>
    </div>  

<!-- <?php
    } else {
?> -->

    <div id="small_menu">
        <ul>
            <li><a href="mypage.html">마이페이지</a></li>
            <li><a href="logout.php">로그아웃</a></li>
        </ul>
    </div>

<!-- <?php
    }
?> -->
</body>