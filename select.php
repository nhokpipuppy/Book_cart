<?php session_start();
$link=new mysqli('localhost','root','','book')or die('kết nối thất bại');
    mysqli_query($link,'SET NAMES UTF8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/select.css?v=<?php echo time()?>">
</head>
<body>
    <form action="" method="post">
        <table border="1">
            <tr class="title">
                <td>Tên sách</td>
                <td>Số Lượng</td>
                <td>Đơn giá</td>
                <td>Thành Tiền</td>
                <td>Mở Rộng</td>
            </tr>
           
                <?php
                $select=$_SESSION['select'];

                var_dump($select);
                if(count($select)>0){ // nếu đã chọn sách rồi thì session sẽ có ptu 
                    $total=0;
                    foreach($select as $id => $amount){
                        echo " <tr>";
                        $query="SELECT * FROM book where id='$id'";
                        $result=mysqli_query($link,$query);
                        $row=mysqli_fetch_assoc($result);
                        ?>
                        <td><?php echo $row['name_book'];?></td>
                        <td><input type="text" name="amount_<?php echo $id;?>" value="<?php echo $amount;?>"></td>
                        <td><?php echo $row['price']."VND";?></td>
                        <td><?php echo $row['price']*$amount;?> VND</td>
                        <td><a href="delete.php?id=<?php echo $id;?>">Xóa sách</a></td>
                    <?php
                    $total += $row['price']*$amount;
                    echo " </tr>";
                          }
                        }
                    ?>
              
               
           
            <tr>
                <td colspan="5">
                    Tổng số tiền= <?php if(count($select)>0) {
                        echo $total." VND";
                        }?>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <input type="submit" name="update" value="update">
                    <input type="submit" name="Buy more" value="Buy more">
                </td>
            </tr>
        </table>
    </form>
<?php 

?>
</body>
</html>