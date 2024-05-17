<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Code php  -->
    <?php 
        $prenom = "Moussa";
        $nom = "Fall";
        $chaine = "24";

        settype($chaine, "integer");

        define("PI", 3.14);

        echo "Prenom:".$prenom."<br>";

        echo "Nom: $nom <br>";

        echo "PI =".PI;
        echo "<br>le type =".gettype($chaine);
    ?>
    <!-- code javascript  -->
    <script>
        let prenom = "Bassirou";
        let nom = "Diop";
        const PI = 3.14;

        let chaine = "34";
        chaine = parseInt(chaine);

        chaine = chaine.toString();

        document.write("Prenom:"+prenom);
        document.write(`<br>Nom: ${nom}`);
        document.write(`<br>PI: ${PI}`);
        document.write(`<br>le type: ${typeof chaine}`);
    </script>
</body>
</html>