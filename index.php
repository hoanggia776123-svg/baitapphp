<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chào sinh viên</title>

    <style>
        body{
            background:#f4f4f4;
            font-family:Arial;
        }

        .card{
            width:450px;
            margin:50px auto;
            background:#fff;
            padding:25px;
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
            font-size:16px;
            box-sizing:border-box;
        }

        button{
            width:100%;
            padding:10px;
            background:#0d6efd;
            color:white;
            border:none;
            font-size:18px;
            cursor:pointer;
        }

        button:hover{
            background:#0b5ed7;
        }

        .success{
            color:green;
            font-weight:bold;
        }

        .danger{
            color:red;
            font-weight:bold;
        }
    </style>
</head>
<body>

<?php

$hoten = "Nguyễn Văn A";
$nganh = "Công nghệ thông tin";
$email = "nguyenvana@gmail.com";

?>

<div class="card">

<h2>THÔNG TIN SINH VIÊN</h2>

<form method="post">

    <label>Nhập tuổi:</label>

    <input type="number" name="tuoi" placeholder="Nhập tuổi..." required>

    <button type="submit">Kiểm tra</button>

</form>

<hr>

<p><strong>Họ tên:</strong> <?php echo $hoten; ?></p>

<p><strong>Ngành học:</strong> <?php echo $nganh; ?></p>

<p><strong>Email:</strong> <?php echo $email; ?></p>

<?php

if(isset($_POST["tuoi"]))
{
    $tuoi = $_POST["tuoi"];

    echo "<p><strong>Tuổi:</strong> $tuoi</p>";

    if($tuoi >= 18)
    {
        echo "<p class='success'>Đủ tuổi học đại học.</p>";
    }
    else
    {
        echo "<p class='danger'>Chưa đủ tuổi học đại học.</p>";
    }
}

?>

</div>

</body>
</html>