<!--Formato de cards-->
<?php
include('models/producto.php');
include('control/conexion.php');

$categorias = getAllCategories($con);

for($x = 0; $x < sizeof($categorias);$x+=1){
    echo "<h5 class='titles'>".$categorias[$x][0]."</h5>";
    $number = getProductsCount($con,$categorias[$x][0]);
    $names = getAllNamesByCategory($con,$categorias[$x][0]);
    $products = getAllDataByCategory($con, $categorias[$x][0]);
    for($i=0; $i <$number; $i+=1){
        $name_tmp = $names[$i][0];
        $name = str_replace(" ","_",$name_tmp);
        echo "
            <div class='col' id='".$name."' onmouseover=modalUpdate('".strval($name)."')>
                <div class='col-sm- card' style='width: 12rem;' align='center' data-bs-toggle='modal' data-bs-target='#exampleModal'>
                    <img src='./assets/images/".$name.".jpg' class='card-img-left' alt='...'>
                    <div class='card-body'>
                        <h5 class='card-title'>".$names[$i][0]."</h5>
                    </div>
                </div>
            </div>
            <p id='".$name."-description' hidden>".$products[$i][2]."</p>
            <p id='".$name."-price' hidden>".$products[$i][3]."</p>
        ";
    }    
 // <p id='".$names[$i][0]."-description' hidden>".$description."</p>
//  <p id='".$names[$i][0]."-price' hidden>".$description."</p>
 // <p id='".$names[$i][0]."-description' hidden>".$description."</p>
}
?> 