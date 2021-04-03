
<table>
    <?php
while($row=MSF($result)){
    ?>
    <tr>
        <td>
            <?=$row['name']?>
        </td>
        <td>
            <?=$row['value']?>
        <td>
    </tr>
    <?php
}
?>
</table>
