<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soins des pieds</title>
</head>
<body>
    
    <header>

    </header>

    <div>Le soin des pieds</div>

    <img src="" alt="">

    <div>Suiviez les techniques et les astuces de Elle Embellit pour prendre soin de vos pieds.</div>
    <div>Comment se faire une pédicure pour avoir de jolis pieds ?</div>
    <div>Découvrez les produits t les conseils de votre esthéticienne à domicile pour avoir de beaux pieds.</div>

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