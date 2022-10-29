<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Sport Catalog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
   <?php 
   $customer_name = "Big Store";
   $catalog_num = "1";
   $updates = true;
   $last_update = "22/11/2022";
   $store_rating = rand(1, 5);

   function store_rating_txt($rating) {
    switch ($rating) {
        case 1:
        case 2: 
            echo "poor rating";
            break;
        case 3:
        case 4:
            echo "room for improvement";
            break;
        case 5: 
            echo "awesome";
            break;
        default:
            echo "out of range";
            break;
    } 
   }
   ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">The Sport Catalog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav> 
    
    <h5>
       

        <span class="badge bg-info text-dark">
            <?php echo "$store_rating"; 
            echo ($store_rating === 1) ? ' Star' : ' Stars';
            ?>

        </span>
        
        <?= store_rating_txt($store_rating)?>

        <?php 
        $i =1; 
        while ($i<=5) {
            echo "<li> Item # $i</li>";
            $i++;
        }
        
        ?>
    </h5>



   <p>
    <?php 
    echo $customer_name;
    ?>
   </p>

   <ul>
    <li><?php echo $catalog_num ?></li>
    <li><?php echo $updates ?></li>
    <li><?php echo $last_update ?></li>
   </ul>

   <p>
    <?php 
    echo date('d/m/y');
    ?>
   </p>

</body>
</html>