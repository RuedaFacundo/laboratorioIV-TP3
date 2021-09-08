<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <?php
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $Adress = $_POST["Adress"];
    ?>

    <table border="1">
        <tr>
            <td><?php echo "First Name";?></td>
            <td><?php echo "Last Name";?></td>
            <td><?php echo "Adress";?></td>
        </tr>
        <tr>
            <td><?php echo $firstName;?></td>
            <td><?php echo $lastName;?></td>
            <td><?php echo $Adress;?></td>
        </tr>
    </table>
</body>
</html>