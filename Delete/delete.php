<h2>Data Mahasiswa</h2>

<form method="post">
    <table border="1" style="border-collapse:collapse">
        <tr bgcolor="#eee">
            <th>NRP</th>
            <th>Name</th>
            <th>Gmail</th>
            <th>No_Telp</th>
            <th>Mail_PENS</th>
            <th>Name_GitHub</th>
            <th>Name_Trello</th>
            <th>Select</th>
        </tr>

        <?php
        include "../connect.php";

        $takeData = mysqli_query($connect, "select * from 21_d4_it_a ORDER BY NRP") or die(mysqli_error($connect));
        while($views = mysqli_fetch_array($takeData)) {
            echo "
            <tr>
                <td align='center'>$views[NRP]</td>
                <td>$views[Name]</td>
                <td>$views[Gmail]</td>
                <td>$views[No_Telp]</td>
                <td>$views[Mail_PENS]</td>
                <td>$views[Name_GitHub]</td>
                <td>$views[Name_Trello]</td>
                <td align='center' ><input type='checkbox' name='NRP[]' value='$views[NRP]'/></td>
            </tr>";
        }
        ?> 
    </table>

    <input type="submit" name="proses" value="Delete" style="margin: top 5px">
</form>

<?php
if(isset($_POST['proses'])) {

    $NRP = $_POST['NRP'];
    $amount = count($NRP);

    while($amount > 0) {
        $amount--;
        mysqli_query($connect, "delete from 21_d4_it_a where NRP = '$NRP[$amount]'")
        or die(mysqli_error($connect));
    }
echo "<script>
    alert('Data Berhasil Dihapus');
    location.href='../view.php';
</script>";
}
?>