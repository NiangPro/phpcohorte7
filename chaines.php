<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- codes php  -->
    <?php 
        $chaine = "  Ma chaine de caracteres  ";

        $chaine = trim($chaine);
        $chaine = strrev($chaine);
        // $chaine = str_replace($chaine,"M", "B");
        echo "Taille:".strlen($chaine)."<br>";
        echo "Caractere:".$chaine[0]."<br>";
        echo strtoupper($chaine)."<br>";
        echo strtolower($chaine)."<br>";

        echo str_word_count($chaine);

        $age = 17;

        if ($age >= 18) {
            echo "majeur";
        }else{
            echo "mineur";
        }

    ?>
    <!-- codes javascript  -->
    <script>
        let chaine = "  Ma chaine de caracteres  ";

        let age = 20;
        

        chaine = chaine.trim();
        chaine = chaine.replaceAll("e", "o");
        document.write(`taille: ${chaine.length}<br>`)
        document.write(`caractere: ${chaine[0]}<br>`)
        document.write(`${chaine.toLowerCase()}<br>`)

        if (age >= 18) {
            document.write("Majeur");
        }else{
            document.write("mineur");
        }
    </script>
</body>
</html>