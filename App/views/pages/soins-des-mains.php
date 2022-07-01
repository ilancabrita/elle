<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soins des mains</title>
</head>
<body>

    <header>
        
    </header>

    <div>Le soin des mains</div>

    <img src="" alt="">

    <div>Découvrez les bienfaits du soin des mains.</div>
    <div>Petites innovations de mobilité, nos mains effectuent plusieurs fois par jour des millliers de geste d'une grande diversité.</div>
    <div>Mais, la répétitions dans compter de centaines de nos mouvements met mal nos doigts.</div>

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