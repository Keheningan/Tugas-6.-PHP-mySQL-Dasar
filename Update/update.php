<h2>Update Data Produk</h2>

<form method="post" action="save.php">
    <table border="1" style="border-collapse:collapse">
        <tr bgcolor="#eee">
            <th>NRP</th>
            <th>Name</th>
            <th>Gmail</th>
            <th>No_Telp</th>
            <th>Mail_PENS</th>
            <th>Name_GitHub</th>
            <th>Name_Trello</th>
        </tr>

        <?php
        include "../connect.php";

        $NRP = $_POST['NRP'];
        $NRP_2 = $_POST['NRP'];
        $amount = count($NRP);

        for($i=0; $i<$amount; $i++){
            $takeData = mysqli_query($connect, "select * from 21_d4_it_a where NRP = '$NRP[$i]'") or die(mysqli_error($connect));
            while($views = mysqli_fetch_array($takeData)) {
                echo "
                <tr>
                    <input type='hidden' name='NRP_2[]' value='$NRP_2[$i]'>

                    <td><input type='text' name='NRP[]' value='$views[NRP]'></td>
                    <td><input type='text' name='Name[]' value='$views[Name]'></td>
                    <td><input type='text' name='Gmail[]' value='$views[Gmail]'></td>
                    <td><input type='text' name='No_Telp[]' value='$views[No_Telp]'></td>
                    <td><input type='text' name='Mail_PENS[]' value='$views[Mail_PENS]'></td>
                    <td><input type='text' name='Name_GitHub[]' value='$views[Name_GitHub]'></td>
                    <td><input type='text' name='Name_Trello[]' value='$views[Name_Trello]'></td>
                </tr>";
            }
        }
        ?>
    </table>

    <input type="hidden" name="amount" value="<?php echo $amount; ?>">

    <input type="submit" name="save" value="Save" style="margin: top 5px">
    <input type="button" value="Cancel" onclick="location.href='view.php'" style="margin: top 5px">
</form>