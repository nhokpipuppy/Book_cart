<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <title>Document</title>
</head>
<body>
    <?php
    $link=new mysqli('localhost','root','','book')or die('kết nối thất bại');
    mysqli_query($link,'SET NAMES UTF8');
    $query="SELECT * FROM book order by id ASC";
    $result=mysqli_query($link,$query); // thuc thi lệnh select
    if (mysqli_num_rows($result)>0){ // kiểm tra xem kết quả trả về có giá trị hay không
        while($row=mysqli_fetch_assoc($result)){ // trong khi kết quả trả về vẫn có giá trị
            echo "<div class='container'>";
            echo "<div class='book_name'>".$row["name_book"]."</div>";
            echo "<div class='author'>".$row['composer']."</div>";
            echo "<div class='ok'>";
            echo "<div class='price'>Giá: ".$row['price']." VND</div>";
            echo "<div class='buy'><a href='add_book.php?id=".$row['id']."'>Mua sach</a></div>";
            echo "</div>";
            echo "</div>";
        }
    }else{
        echo "không tìm được dữ liệu ";
    }
    ?>

</body>
</html>