<h2>Data Mahasiswa</h2>

<form>
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
        include "connect.php";

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
            </tr>";
        }
        ?>
    </table>
    <input type="button" value="Menu" onclick="location.href='index.php'">
</form>