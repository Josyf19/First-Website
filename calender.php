<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Title of the document</title>
</head>

<body>


<?php
    $dayofweek = date('w');
    
    switch ($dayofweek) {
          case 1: 
            echo "It is Monday!"; 
            break;
            case 2: 
                echo "It is Tuesday!";
                break;
                case 3: 
                    echo "It is Wednesda!";
                    break;
                    case 4: 
                        echo "It is Thursday!"; 
                        break;
                        case 5: 
                            echo "It is Friday!"; 
                            break;
                            case 6: 
                                echo "It is Saturday!" ;
                                break;
                                case 7: 
                                    echo "It is Sunday!" ;
                                    break;
              
           
    }
?>

</body>


</html>