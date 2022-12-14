<?php
for ($i = 0; $i < $num; $i++) {
    echo '<tr>';

    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_row($result);

    for ($j = 1; $j <= 4; $j++) {
        echo '<td>' . $row[$j] . '</td>';
    }
    echo '</tr>';
}
?>
