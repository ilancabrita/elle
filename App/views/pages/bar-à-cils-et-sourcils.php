<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar à cils et sourcils</title>
</head>
<body>

    <header>
        
    </header>

    <h1>Le bar à cils et sourcils</h1>

    <img src="" alt="">

    <div>Extension de cils : La dernière tendances beauté, il s'agit d'une méthode innovantes pour rallonger et épaissir vos propoes cils sur une base semi-permanente.</div>

    <table>
        <thead>
            <tr>
                <th>Service</th>
                <th>Prix</th>
            </tr>
        </thead>

        <tbody>

            <?php 
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) :
            ?>

            <tr>
                <td>
                    <?php echo 
                    htmlspecialchars($row['service']);
                    ?>
                </td>

                <td>
                    <?php echo 
                    htmlspecialchars($row['prix']);
                    ?>
                </td>
            </tr>
            
            <?php 
            endwhile;
            ?>

        </tbody>
    </table>

    <footer>

    </footer>

</body>
</html>