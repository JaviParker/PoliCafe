<?php

function getDescription($con, $nombre)
{
    $sentence = "SELECT descripción FROM producto WHERE nombre = '$nombre'";
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_all($query);

    return $data[0][0];
}

function getPrecio($con, $nombre)
{
    $sentence = "SELECT precio FROM producto WHERE nombre = '$nombre'";
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_assoc($query);

    return $data['precio'];
}

function getCategoria($con, $nombre)
{
    $sentence = "SELECT categoria FROM producto WHERE nombre = '$nombre'";
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_assoc($query);

    return $data['categoria'];
}

function getProductsCount($con, $categoria){
    $sentence = "SELECT nombre FROM producto WHERE categoria = '$categoria'";
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_all($query);

    $count = sizeof($data);

    return $count;
}

function getAllNames($con){
    $sentence = "SELECT nombre FROM producto";
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_all($query);
    $count = sizeof($data);
    
    return $data;
}

function getAllCategories($con){
    $sentence = "SELECT DISTINCT categoria FROM producto";
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_all($query);
    
    return $data;
}

function getAllNamesByCategory($con, $categoria){
    $sentence = "SELECT nombre FROM producto WHERE categoria = '$categoria'";
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_all($query);
    $count = sizeof($data);
    
    return $data;   
}

function getAllDataByCategory($con, $categoria){
    $sentence = "SELECT * FROM producto WHERE categoria='$categoria'";
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_all($query);

    return $data;
}

function getAllDataOfProduct($con){
    $sentence = "SELECT * FROM producto";
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_all($query);

    return $data;
}

function getAmount($con, $nombre){
    $sentence = "SELECT cantidad FROM productos_pedidos WHERE nombre = '$nombre'";
    $query = mysqli_query($con, $sentence);

    if($data = mysqli_fetch_array($query)){
        return $data[0];
    }else{
        return null;
    }
}
function setAmount($con, $nombre, $amount){
    $sentence = "UPDATE productos_pedidos SET cantidad = '$amount' WHERE nombre = '$nombre'";
    $query = mysqli_query($con, $sentence);
}

function deleteProduct($con, $nombre){
    $sentence = "DELETE FROM productos_pedidos WHERE nombre = '$nombre'";
    $query = mysqli_query($con, $sentence);
}

function addToCart($con, $data){
    $name = $data[0];
    $price = $data[1];
    $count = $data[2];
    $user = $data[3];
    $pedido_id = $data[4]; 
    if(getAmount($con, $name)){
        $count = intval(getAmount($con, $name) + 1);
        setAmount($con, $name, $count);
    }else{
    $sentence = "INSERT INTO productos_pedidos(nombre,cantidad,precio, estatus, id_cliente, id_pedido) VALUES ('$name','$count','$price','0','$user','$pedido_id')";
    mysqli_query($con, $sentence);        
    }

}

function ProductInTable($con, $name){
    $sentence = "SELECT * FROM productos_pedidos WHERE nombre ='$name'";
    $product = getDataOfProduct($con, $name);
    $exist = false;
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_all($query);

    if(mysqli_query($con, $sentence)){
        $exist = true;
    }
    
    return $exist;
}

function getDataOfProduct($con,$name){
    $sentence = "SELECT * FROM producto WHERE nombre ='$name'";
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_all($query);
    
    return $data;
}

function getCart($con, $id_pedido){
    $sentence = "SELECT nombre,cantidad,precio FROM productos_pedidos WHERE id_pedido='$id_pedido'";
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_all($query);

    return $data;
}
function getCountOfCartProducts($con, $id_pedido){
    $sentence = "SELECT nombre,cantidad,precio FROM productos_pedidos WHERE id_pedido='$id_pedido'";
    $query = mysqli_query($con, $sentence);
    $data = mysqli_fetch_all($query);

    $count = sizeof($data);

    return $count;
}

function addPedido($con, $id_cliente){
    $sentence = "INSERT INTO pedido(id_cliente) VALUES ('$id_cliente')";
    $query = mysqli_query($con, $sentence);
}

function setCart($con){
    $data = getCart($con, 1);
    $p_count = getCountOfCartProducts($con, 1);
    

    for($i = 0;$i<$p_count;$i+=1){
        $name = $data[$i][0];
        $count = $data[$i][1];
        $price = $data[$i][2];
        $new_name = str_replace(" ","_",$name);
        $strAdd = "modifyCount('".$new_name."','add')";
        $strSubs = "modifyCount('".$new_name."','subs')";
        $strVerify = "verifyCount('".$new_name."')";
        echo "
    <div class='div_carro' id='".$new_name."'>
        <div class='contador' align='center'>
            <span onclick=".$strAdd." id='".$new_name."-add'><b>+</b></span>
            <p contenteditable='false' id='".$new_name."-count' onchange=".$strVerify.">".$count."</p>
            <span onclick=".$strSubs." id='".$new_name."-subs'><b>-</b></span>
        </div>
        
        <div id='divizion'>
            <img src='assets/images/".$new_name.".jpg' id='icono'>
            <a href='#'>".$name."<br> <p class='por'>x".$count."ㅤㅤㅤㅤㅤㅤㅤ$".$price."</p>  </a>
        </div>
    </div>        
        ";  
    }
}
?>