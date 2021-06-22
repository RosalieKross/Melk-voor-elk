<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Melk voor elk</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--Scroll reveal CDN-->
    
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Francois+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
</head>
<body>
   
     <!--Header ends here-->
    
    <!-- Hero starts-->
          <section class="hero" id="hero"> <!--id is voor het knopje in de footer om hem omhoog te brengen naar de hero-->
              <div  class="container">
                <div class="textbox">
                    <h3>Melk is goed voor elk..... maar is dat wel zo?</h3>    
                  <h1>Bereken wat voor impact jouw wekelijks 
melk gebruik op het milieu heeft ! </h1>
                    
                 <div class="forum">
            
                     
            
            
        
                <form method="POST"> 
         
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p> <?php } ?>
                    <div class="saldo-grid">
                        <div class="custom-select">
                    <select name="id">
                         <option selected disabled>Hoeveel liter melk drink je per week</option>
                         <option value="1">1 liter melk</option>
                         <option value="2">2 liter melk</option>
                         <option value="3">3 liter melk</option>
                         <option value="4">4 liter melk</option>
                         <option value="5">5 liter melk</option>
                     </select>
                        </div>

                     <div class="saldo-grid-item item-two">
                 <button class="btn" type="submit" name="search" onclick="myFunction(), myFunctionTwo()">Bereken</button>
                        </div>
                 
                    
                    </div>                                                       
         
                        </form>
              <!--end form-->
        </div>   
                 
                    
              </div>
                  
                    
                  
                  
                  </div>
            
                  
            
              </section>
          
         <!--Hero ends here-->
    
    <?php
session_start();
include "loginDatabaseIxD4.php";


if(isset($_POST['search']))
{
    $id = $_POST['id'];
    
    $query = "SELECT * FROM `koedata` where id='$id' ";
    $query_run = mysqli_query($conn,$query);
    
    while($row = mysqli_fetch_array($query_run))
    {
        ?>
    
    <div class="amountMilk">
                     <h3> Om <?php echo $row ['id']; ?> liter melk te produceren is er het volgende nodig:
                    </h3>
        <div class="plantbutton">
                <button class="btn green" onclick="myFunction(), myFunctionTwo()">Plantaardige variant</button>
            </div>
        </div>
     
        
    
    <section class="datacontent" id="myDIV">
    
    <div class="datablock">
        
        <div class="blockOne"> 
            <div class="express">
            <h2><?php echo $row ['waterAmount']; ?></h2>
            <h4><?php echo $row ['weetjeWater']; ?></h4>
        <div class="imageOne">
            <img alt="Image" style="height: 100px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['imageWater']); ?>" />
            </div>
                </div>
        <div class="cowimage">
            <img src="Koetjes-02.png" style="width: 200px;">
            </div>
            <div class="hide">Say what?!</div>
            
        </div>
        
        
        <div class="blockTwo">
            <div class="express">
            <h2><?php echo $row ['energieamount']; ?></h2>
            <h4><?php echo $row ['weetjeEnergie']; ?></h4>
            <div class="imageTwo">
            <img alt="Image" style="height: 100px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['imageEnergie']); ?>" />
            </div>
                </div>
            <div class="cowimage">
            <img src="Koetjes-03.png" style="width: 200px;">
            </div>
           <div class="hideTwo">I'm shocked!</div>
                
        </div>
        
        <div class="blockThree">
            <div class="express">
            <h2><?php echo $row ['co2']; ?></h2>
            <h4><?php echo $row ['weetjeCo2']; ?></h4>
            <div class="imageThree">
            <img alt="Image" style="height: 100px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['imageCo2']); ?>" />
            </div>
                </div>
            <div class="cowimage"><img src="Koetjes-02.png" style="width: 200px;"></div>
            <div class="hide">Oh wow!</div>
            
        </div>
        
        <div class="blockfour">
            <div class="express">
            <h2><?php echo $row ['grondAmount']; ?></h2>
            <h4><?php echo $row ['weetjeGrond']; ?></h4>
            <div class="imageFour">
            <img alt="Image" style="height: 100px;" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" />
            </div>
                </div>
            <div class="cowimage">
                <img src="Koetjes-03.png" style="width: 200px;">
            </div>
            <div class="hideTwo">No way!</div>
            
        </div>
        
        
        </div>
    
    
    </section>
    
    
    <section class="datacontent hidethis" id="myDIVTwo" style="display:none">
    
    <div class="datablock">
        
        <div class="blockOne"> 
            <div class="express">
            <h2><?php echo $row ['waterAmount']; ?></h2>
            <h4><?php echo $row ['riceMilkWater']; ?></h4>
            <h4><?php echo $row ['soyMilkWater']; ?></h4>
            <h4><?php echo $row ['oatMilkWater']; ?></h4>
            <h4><?php echo $row ['almondMilkWater']; ?></h4>
        
                </div>
        <div class="cowimage">
            <img src="Koetjes-02.png" style="width: 200px;">
            </div>
            <div class="hide">Say what?!</div>
            
        </div>
        
        
        <div class="blockThree">
            <div class="express">
            <h2><?php echo $row ['co2']; ?></h2>
            <h4><?php echo $row ['riceMilk']; ?></h4>
            <h4><?php echo $row ['Oatmilk']; ?></h4>
            <h4><?php echo $row ['AlmondMilk']; ?></h4>
            <h4><?php echo $row ['soyMilk']; ?></h4>
           
                </div>
            <div class="cowimage"><img src="Koetjes-02.png" style="width: 200px;"></div>
            <div class="hide">Oh wow!</div>
            
        </div>
        
        <div class="blockfour">
            <div class="express">
            <h2><?php echo $row ['grondAmount']; ?></h2>
            <h4><?php echo $row ['riceMilkGrond']; ?></h4>
            <h4><?php echo $row ['oatMilkGrond']; ?></h4>
            <h4><?php echo $row ['almondMilkGrond']; ?></h4>
            <h4><?php echo $row ['soyMilkGrond']; ?></h4>
            
                </div>
            <div class="cowimage">
                <img src="Koetjes-03.png" style="width: 200px;">
            </div>
            <div class="hideTwo">No way!</div>
            
        </div>
        
        
        </div>
    
    
    </section>
              
            
            
            <?php

    }
}
?>
    
    
    
        
<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);

    
/*Button hide show:*/    
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function myFunctionTwo() {
  var x = document.getElementById("myDIVTwo");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}   
    
</script>



</body>
</html>
