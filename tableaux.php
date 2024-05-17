<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>COde php</h1>
     <?php 
        $tab = ["modou", "demb", "pathe", "awa", 14];

        $person = [
            "prenom" =>  "Arleth",
            "nom" => "Faye",
            "age" => 23
        ];

        echo $person["prenom"]."<br>";

        $tab[] = "alioune";

        array_unshift($tab, "saliou");
        array_pop($tab);
        array_shift($tab);

        echo $tab[0];

        echo "<br> taille: ".count($tab);
        echo "<br> dernier element: ".$tab[count($tab) - 1];

        if (in_array("demba", $tab)) {
            echo "<br> mot trouvé";
        }else{
            echo "<br>mot introuvable";
        }

    ?>
     <h1>COde javascript</h1>
     <script>
        let tab = ["modou", "demba", "pathe", "awa", 14];
        tab.push("moussa");
        tab.unshift("fred");
        tab.pop();
        tab.shift();

        document.write(`${tab[0]}`);
        document.write(`<br>taille: ${tab.length}`);
        document.write(`<br>dernier element: ${tab[tab.length - 1]}`);
     </script>
</body>
</html>