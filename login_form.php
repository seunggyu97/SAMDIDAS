<!DOCTYPE html>
<html lang="ko">
    <head>
        <title>로그인</title>
        <meta charset="utf-8">
        <link rel= "stylesheet" type="text/css" href="main_style.css">
    </head>

    <body>
        <div class="login">
            <h3>LOGIN</h3>
            <p>ID : <input type="text" placeholder="아이디"></p>
            <p>PW : <input type="password" placeholder="비밀번호"></p>
            <div class="login_box">
                <!-- login.php: 로그인 DB연동 파일 -->
                <input type="submit" onclick="location.href='login.php'" value="로그인" id="login">
                <input type="button" onclick="location.href='register.html'" value="회원가입" id="register">
            </div>
        </div>
    </body>

</html>