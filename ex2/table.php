<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex2: Fill HTML Table</title>
</head>


<body>
    <?php
    $myJson = '{
    "Italian Menu": {
        "first_plate": "Bruschetta",
        "second_plate": "Lasagna",
        "dessert": "Tiramisu"
    },
    "French Menu": {
        "first_plate": "French Onion Soup",
        "second_plate": "Coq au Vin",
        "dessert": "Crème Brûlée"
    },
    "Japanese Menu": {
        "first_plate": "Miso Soup",
        "second_plate": "Sushi",
        "dessert": "Mochi"
    },
    "Mexican Menu": {
        "first_plate": "Guacamole",
        "second_plate": "Tacos al Pastor",
        "dessert": "Churros"
    },
    "Indian Menu": {
        "first_plate": "Samosa",
        "second_plate": "Butter Chicken",
        "dessert": "Gulab Jamun"
    }
    }';

    $menu = json_decode($myJson, true);
    foreach ($menu as $menu_name => $menu_plates) {
        echo "<div class='menu'>";
        echo "<h2>$menu_name</h2>";
        foreach ($menu_plates as $plate => $item) {
            echo "<p> ".$plate.": ".$item."</p>";
        }
        echo "</div>";
    }

    ?>

</body>

</html>