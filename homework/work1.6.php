<?php
$cols = 10;
$rows = 10;
?>
<style>
    table { border: 1px; }
    td { padding: 5px; text-align: center; }
</style>

<table>
    <?php
    for ($tr = 1; $tr <= $rows; $tr++) {

        echo '<tr>';

        for ($td = 1; $td <= $cols; $td++) {
            $res = $tr * $td;

            echo '<td>';
            if ($tr % 2 == 0 and $td % 2 == 0) {
                echo "($res)";
            } elseif ($tr % 2 !== 0 and $td % 2 !== 0) {
                echo "[$res]";
            } else {
                echo $res;
            }
            echo '</td>';
        }

        echo '</tr>';
    }
    ?>
</table>