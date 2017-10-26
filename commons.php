<?php
function printcsv($file) {
    echo "<table style='border:10px solid #19b7ff'><tr>\n
<th>Name</th>\n
<th>Last</th>\n
<th>Email</th>\n
<th>ID #</th>\n
</tr>";

    $row = 1;
    if (($handle = fopen($file, "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $num = count($data);
            echo "<p> $num fields in line $row: <br /></p>\n";
            $row++;

            echo "<tr>";
            for ($c = 0; $c < $num; $c++) {
                echo "<td>" . $data[$c] . "</td>";
            }
            echo "</tr>";
        }
        fclose($handle);
    }
    echo "</table>";
}