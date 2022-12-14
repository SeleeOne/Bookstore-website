<?php
for ($i = 0; $i < $num; $i++) {
    mysqli_data_seek($result, $i);
    $row = mysqli_fetch_row($result);

    echo '<option value="'.$row[1].'">'. $row[1] .' - '. $row[2] .'</option>';
}
?>
