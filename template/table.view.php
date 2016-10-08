<?php require_once "partials/header.view.php";?>
<?php
echo "<table class='table'>";
for($tr = 1; $tr <= $rows; $tr++) {
    echo "<tr>";
    for($td = 1; $td <= $cols; $td++){
        if($td == 1 or $tr == 1){
            echo "<td style='background-color: $color'>". $tr * $td ."</td>";
        }else{
            echo "<td>". $tr * $td ."</td>";
        }
    }
    echo "</tr>";
}
echo '</table>';
?>

<form action="/table-for-student" method="post">
    <input type="text" name="rows">
    <input type="text" name="cols">
    <button type="submit">click</button>
</form>
<?php require_once "partials/bottom.view.php";?>