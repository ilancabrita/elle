<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wserviceth=device-wserviceth, initial-scale=1.0">
    <title>Épilation</title>
</head>
<body>

    <header>
        
    </header>

    <h1>L'épilation</h1>

    <img src="" alt="">

    <div>L'épilation dans notre institut est un moyen d'obtenir une épilation professionnelle.</div>

    <div>Il est possible de choisir un forfait</div>

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

    <p>Les forfaits</p>

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