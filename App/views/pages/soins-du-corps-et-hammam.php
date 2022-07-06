<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soins du corps et Hammam</title>
</head>
<body>

    <header>
        
    </header>

    <h1>Le soin du corps et Hammam</h1>

    <img src="" alt="">

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