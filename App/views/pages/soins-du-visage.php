<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soins du visage</title>
</head>
<body>

    <header>
        
    </header>

    <h1>Le soins du visages</h1>

    <img src="" alt="">

    <div>Un diagnostic personnalisé, des protocoles de soins précis et ciblés selon votre type de peau, un élixir végétale pour les peaux normales, séches, déshydratées, grasses et asphyxiques.</div>

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