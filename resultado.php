<?php
include("csv.php")

?>
<html>

<head>
    <meta charset="utf8">
</head>

<body>
    <table border="1">
        <tr>
        <td>Nome </td>
        <td>Telefone</td>
        <td>Idade</td>
        </tr>
        <?php while($dado = $con->fetch_array()){?>
        <tr>
        <td><?php echo $dado["Nome"];?></td>
        <td><?php echo $dado["Telefone"];?></td>
        <td><?php echo $dado["Idade"];?></td>
        </tr>
        <?php }?>
    </table>
</body>

</html>