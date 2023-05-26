
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		td{
			width: 100px;
			text-align: center;
		}

        h2{
            font-family : cursive;
        }
	</style>
</head>
<body>

<style>
    *{
        background-color: #FEE140;
background-image: linear-gradient(90deg, #FEE140 0%, #FA709A 100%);


    }
    table{
        background-color: blue;

    }
    table, th, td {
  border: 1px solid;
}
    </style>

    <h2> result : <h2>
<?php
    if (isset($_POST["rows"]) && isset($_POST["columns"])) {
        $rows = intval($_POST["rows"]);
        $columns = intval($_POST["columns"]);

        if (($rows >= 3 && $rows <= 12) && ($columns >= 3 && $columns <= 12)) {
            echo '<div>
            <table>';
            
            for ($row = 1; $row <= $rows; $row++) {
                print '<tr>';
                for ($col = 1; $col <= $columns; $col++) {
                    $product = $row * $col;
                    echo "<td>$product</td>\n";
                }
                echo '</tr>';
            }
            echo '</table>
            </div>';
        } else
            echo '<h2>Sorry! The input of rows & columns must be between 3 and 12<h2>';
    }
    ?>

</body>
</html>
