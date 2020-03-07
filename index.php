
<?php 
require('nav.php');
?>


<style> 

.containerhome {
  position: relative;
  width: 100%;
}

.containerhome img {
  width: 100%;
  height: auto;
}

.containerhome .btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:white;
  color: black;
  font-size: 25px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 10px;
}



</style>



<div class="containerhome ">  
<img src="images/banner.png" width="100%"  height="100%">  

<a href="portefolio.php"> <button type="button" class="btn btn-light"><b> VISIT MY PORTFOLIO NOW</b></button></a>

</div>









   
   




<?php
require('footer.php');
?>
