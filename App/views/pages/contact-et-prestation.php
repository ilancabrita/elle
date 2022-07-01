<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>

    <header>
        
    </header>

    <h1>Contact</h1>

    <div>TOUT NOS COMPETENCES DE BEAUTE SONT SUR ELLE EMBELLIT 95</div>
    <div>Soins du visage 100% naturels, peaux atones, peaux matures, peaux jeunes, asphyxiées, sensibles et déshydratées. Soins du corps 100% naturels : anti-stress, relaxantant, amincissant et tonifiant. Maquillage de mariée ou de soirée. Teinture de cils et de sourcils. Manicure et beauté des pieds. Des forfaits de soins et d'abonement vous permettent de bénéficier de terifs avantageux pour moduler vote bien-être en toute détente dés aujourd'hui !</div>

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