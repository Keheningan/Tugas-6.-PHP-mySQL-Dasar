<?php
if(isset($_POST['save'])){
    include "../connect.php";
    
    $amount = $_POST['amount'];

    $NRP = $_POST['NRP'];
    $Name = $_POST['Name'];
    $Gmail = $_POST['Gmail'];
    $No_Telp = $_POST['No_Telp'];
    $Mail_PENS = $_POST['Mail_PENS'];
    $Name_GitHub = $_POST['Name_GitHub'];
    $Name_Trello = $_POST['Name_Trello'];

    for($i=0; $i<$amount; $i++){
        mysqli_query($connect, "insert into 21_d4_it_a set
        NRP = '$NRP[$i]',
        Name = '$Name[$i]',
        Gmail = '$Gmail[$i]',
        No_Telp = '$No_Telp[$i]',
        Mail_PENS = '$Mail_PENS[$i]',
        Name_GitHub = '$Name_GitHub[$i]',
        Name_Trello = '$Name_Trello[$i]'") or die(mysqli_error($connect));
    }
    echo "
    <script>

    alert('Data Berhasil Disimpan'); 
    location.href='../view.php';
    
    </script>";
}
?>