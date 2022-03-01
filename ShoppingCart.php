<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/main.css">
    <script src="js/total.js"></script>
</head>
<body>
    <h1>Your Shopping Cart</h1>
    <?php 
        $itemArray = [ // stores the ids for the different microwaves
            "oldSchool",
            "normal",
            "smart"
        ];

        $microwaveNames = [ //Different names of the microwaves to echo later
            "Old School",
            "Normal",
            "Smart"
        ];
        //loops through the item array to see how many microwaves the user wanted to purchase
        for ($i = 0; $i < 3; $i++) {
            if (isset($_POST[$itemArray[$i]])) {
                if ($_POST[$itemArray[$i]] > 0) { //if user wants one or more item
                    $oldSchoolValue = $_POST[$itemArray[$i]];
                    echo(
                        "<p>
                            $microwaveNames[$i] Microwaves: 
                            <span id='$itemArray[$i]'>$oldSchoolValue</span>
                        </p>"
                    );
                } else { // if user didnt want the item or put a negative number
                    echo("<span id='$itemArray[$i]' style='display: none;'>0</span>");
                }
            }
        }
    ?>
    <div id="orderTotalDiv">
        <button id="orderTotal">Click here for Order Total</button>
    </div>
</body>
</html>
