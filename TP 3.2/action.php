<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tableStyles.css">
    <title>TP 3.2</title>
</head>
<body>
    <?php
        /* 1er intento para imprimir los checkbox
        if(isset($_POST["submit"])){
            if(!empty($_POST["Interests"])){
                foreach($_POST["Interests"] as $selected){
                    echo $selected."</br>";// Imprime resultados
                }
            }
        }*/
    ?>

    <table>
        <tr><td colspan="2" class="back">Your Basic Info</td></tr> 
        <tr class="backRow">
            <td><?php echo "Name";?></td>
            <td><?php echo $_POST["firstName"];?></td>
        </tr>
        <tr>
            <td><?php echo "Email";?></td>
            <td><?php echo $_POST["email"];?></td>
        </tr>
        <tr class="backRow">
            <td><?php echo "Password";?></td>
            <td><?php echo $_POST["pass"];?></td>
        </tr>
        <tr>
            <td><?php echo "Birth-Day";?></td>
            <td><?php echo $_POST["date"];?></td>
        </tr>
        <tr class="backRow">
            <td><?php echo "Sex";?></td>
            <td>
                <?php 
                    if ($_POST['answer'] == "M"){
                        echo "Male";
                    } else {
                        echo "Female";
                    }
                ?>
            </td>
        </tr>
        <tr><td colspan="2" class="back">Your Profile</td></tr> 
        <tr class="backRow">
            <td><?php echo "About You";?></td>
            <td><?php echo $_POST["text"];?></td>
        </tr>
        <tr>
            <td><?php echo "Role";?></td>
            <td>
                <?php 
                    if ($_POST['role'] == "Front"){
                        echo "Front-End Developer";
                    } else if ($_POST['role'] == "Back"){
                        echo "Back-End Developer";
                    } else if ($_POST['role'] == "QA"){
                        echo "QA";
                    } else if ($_POST['role'] == "UX"){
                        echo "UX";
                    } else if ($_POST['role'] == "UI") {
                        echo "UI";
                    }
                ?>        
            </td>
        </tr>
        <tr class="backRow">
            <td><?php echo "Interests";?></td>
            <td>
                <?php         
                /* Segundo intento de imprimir los checkbox
                    if(!empty($_POST["Interests"])){
                        foreach($_POST["Interests"] as $selected){
                            echo $selected."</br>";
                        } */
                ?>
            </td>
        </tr>
        <tr><td colspan="2"><button onclick="history.go(-1);">Back </button></td></tr> 
    </table>
</body>
</html>