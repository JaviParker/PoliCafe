function openNav() {
    document.getElementById("black-zone").className = "right";
    document.getElementById("mySidenav").style.width = "20%";
    document.getElementById("black-zone").style.width = "80%";
    
  }
  function openNav2() {
    document.getElementById("black-zone").className = "left";
    document.getElementById("mySidenav2").style.width = "40%";
    document.getElementById("black-zone").style.width = "60%";
    
  }
  /* Set the width of the side navigation to 0 */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("black-zone").style.width = "0";
  }
  function closeNav2() {
    document.getElementById("mySidenav2").style.width = "0";
    document.getElementById("black-zone").style.width = "0";
  }

  function closeAll() {
    closeNav();
    closeNav2();
  }

function getModalProductData(){
  let name = document.getElementById("modal-tittle").innerHTML;
  let description = document.getElementById("modal-description").innerHTML;
  let price = document.getElementById("modal-price").innerHTML;
  let count = document.getElementById("modal-cantidad").innerHTML;

  price = price.replace("$","");

  let data = [name,description,price,count];

  return data;
}

function modalUpdate(id){
    var name_tmp = id;
    var e_forDescription = id+"-description";
    var description = document.getElementById(e_forDescription).innerHTML;
    var price = document.getElementById(id+"-price").innerHTML;
    var element_selected = document.getElementById(id);
    var img_route = "./assets/images/"+id+".jpg";
    var name = id.replace(/_/g," ");
    document.getElementById("modal-tittle").innerHTML = name;
    document.getElementById("modal-description").innerHTML = description;
    document.getElementById("modal-price").innerHTML = "$"+price;
    var imagen = document.getElementById("modal-img");
    imagen .setAttribute('src', img_route);
  }

function addToCart(){
  let data = getModalProductData();
  if (!data) {
    alert("Error al añadir");
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("mySidenav2").innerHTML = document.getElementById("mySidenav2").innerHTML + this.responseText;
      }
    };
    xmlhttp.open("GET","../Policafe/ajax/addToCart.php?n="+ data[0] +"&p="+data[2]+" &c="+data[3],true);
    xmlhttp.send();
  }
}

function getCart(){
  let data = getModalProductData();
  if (!data) {
    alert("Error al añadir");
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("cartproducts").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../Policafe/ajax/getCart.php",true);
    xmlhttp.send();
  }
}

function modifyCount(name, operation){
  if (!name) {
    alert("Error");
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById(name+"-count").innerHTML = this.responseText;
        let father = document.getElementById("cartproducts");
        let child = document.getElementById(name);
        let count = document.getElementById(name+"-count").innerHTML;
        if(parseInt(this.responseText)==0){
          father.removeChild(child);
        }
      }
    };
    xmlhttp.open("GET","../Policafe/ajax/getCount.php?n="+name+"&o="+operation,true);
    xmlhttp.send();
  } 
 
}

function verifyCount(name){
  let father = document.getElementById("cartproducts");
  let child = document.getElementById(name);
  let count = document.getElementById(name+"-count").innerHTML;
  alert(name+" "+count)
  if(count <= 0){
    father.removeChild(child);
  }
}

function add(){
  let quantity = parseInt(document.getElementById("modal-cantidad").innerHTML);
  document.getElementById("modal-cantidad").innerHTML = quantity + 1;
}

function subtract(){
  let quantity = parseInt(document.getElementById("modal-cantidad").innerHTML);
  document.getElementById("modal-cantidad").innerHTML = quantity - 1;
} 