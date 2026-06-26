<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<title>Form đăng ký</title>

<style>

body{
    font-family:Arial;
    background:#f2f2f2;
}

.card{
    width:450px;
    margin:40px auto;
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 10px gray;
}

h2{
    text-align:center;
    color:blue;
}

input{
    width:100%;
    padding:10px;
    margin:10px 0;
    box-sizing:border-box;
}

button{
    width:100%;
    padding:10px;
    background:blue;
    color:white;
    border:none;
    font-size:18px;
    cursor:pointer;
}

button:hover{
    background:darkblue;
}

.success{
    color:green;
    font-weight:bold;
}

.error{
    color:red;
    font-weight:bold;
}

</style>

</head>
<body>

<div class="card">

<h2>FORM ĐĂNG KÝ</h2>

<form method="post">

    <label>Họ tên</label>
    <input type="text" name="hoten">

    <label>Email</label>
    <input type="email" name="email">

    <label>Mật khẩu</label>
    <input type="password" name="matkhau">

    <button type="submit">Đăng ký</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $hoten=trim($_POST["hoten"]);
    $email=trim($_POST["email"]);
    $matkhau=trim($_POST["matkhau"]);

    if(empty($hoten))
    {
        echo "<p class='error'>Họ tên không được để trống.</p>";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        echo "<p class='error'>Email không hợp lệ.</p>";
    }
    elseif(strlen($matkhau)<6)
    {
        echo "<p class='error'>Mật khẩu phải có ít nhất 6 ký tự.</p>";
    }
    else
    {
        echo "<hr>";

        echo "<p class='success'>Đăng ký thành công!</p>";

        echo "<p><b>Họ tên:</b> ".htmlspecialchars($hoten)."</p>";

        echo "<p><b>Email:</b> ".htmlspecialchars($email)."</p>";

    }

}

?>

</div>

</body>
</html>