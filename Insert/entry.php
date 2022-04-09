<h2>Tambah Data Produk</h2>

<form method="post" action="save.php">
    <table>
        <tr bgcolor="#eee">
            <th>NRP</th>
            <th>Name</th>
            <th>Gmail</th>
            <th>No_Telp</th>
            <th>Mail_PENS</th>
            <th>Name_GitHub</th>
            <th>Name_Trello</th>

            <?php
            $amount = $_POST['amount'];

            for ($i = 1; $i <= $amount; $i++) {
                echo "<tr>
                            <td><input type='text' name='NRP[]' size='7'></td>
                            <td><input type='text' name='Name[]' size='25'></td>
                            <td><input type='text' name='Gmail[]' size='29'></td>
                            <td><input type='text' name='No_Telp[]' size='10'></td>
                            <td><input type='text' name='Mail_PENS[]' size='33'></td>
                            <td><input type='text' name='Name_GitHub[]' size='11'></td>
                            <td><input type='text' name='Name_Trello[]' size='13'></td>       
                </tr>";
            }
            ?>
        </tr>
    </table>

    <input type="hidden" name="amount" value="<?php echo $amount; ?>">
    <input type="submit" name="save" value="Save">
    <input type="button" value="Back" onclick="location.href='input.php';">

</form>