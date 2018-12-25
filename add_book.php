<?php
session_start();
$link=new mysqli('localhost','root','','book')or die('kết nối thất bại');
    mysqli_query($link,'SET NAMES UTF8');
    if(isset($_GET['id'])){
       $a= $_GET['id'];
       // kiểm tra xem id có trong cơ sở dữ liệu hay không
$query="SELECT * FROM book WHERE id=$a";
$result=mysqli_query($link,$query);
if (mysqli_num_rows($result)>0){
    if(isset($_SESSION['select'][$a])){
        $_SESSION['select'][$a]++;
    }else{
        $_SESSION['select'][$a]=1;
    }
    //mở trang giỏ hàng
        header('location:select.php');
      
}else{
    header('location:index.php');
}
    }

?>