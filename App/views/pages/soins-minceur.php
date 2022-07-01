<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soins minceur</title>
</head>
<body>

    <header>
        
    </header>

    <h1>Le soin minceur</h1>

    <img src="" alt="">

    <table>
        <thead>
            <tr>
                <th>Prestation</th>
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
                    htmlspecialchars($row['id']);
                    ?>
                </td>

                <td>
                    <?php echo 
                    htmlspecialchars($row['name']);
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