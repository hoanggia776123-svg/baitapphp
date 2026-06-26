<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách khóa học</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
        }

        .card{
            width:500px;
            margin:50px auto;
            background:white;
            padding:20px;
            border-radius:10px;
            box-shadow:0 0 10px gray;
        }

        h2{
            text-align:center;
            color:blue;
        }

        ul{
            font-size:20px;
        }

        li{
            margin:10px 0;
        }

        .study{
            color:green;
            font-weight:bold;
        }
    </style>
</head>
<body>

<div class="card">

<h2>DANH SÁCH KHÓA HỌC</h2>

<?php

// Tạo mảng khóa học
$khoahoc = array("HTML","CSS","JavaScript","PHP");

echo "<ul>";

// Duyệt mảng
foreach($khoahoc as $mon)
{
    echo "<li>";

    echo $mon;

    if($mon == "PHP")
    {
        echo " <span class='study'>(Đang học)</span>";
    }

    echo "</li>";
}

echo "</ul>";

?>

</div>

</body>
</html>