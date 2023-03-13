<html>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <form method="get" name ="f" action="file.php">
<div class=container  >
    <div class="row " style="width:full; height:170px ;background-color:grey;">
        <div class ="col sm-4 " >
         <img src=f1.jpg alt=no  style="width:230px ;height:130px;display: block;margin-left: auto;margin-right: auto;"> 
         <p style="text-align:center;"><b>Chicken-FriedRice</b></p>
         <div class=container style="background-color:lightblue;text-align:center; width:180px" w> 
         <button  onclick=decre1() >&#8722 </button><input type=text style="width:50px;" id="n1" value="0" name="v1"><button  onclick=incre1()>&#43</button></div>
    </div>
        <div class ="col sm-4 ">
            <img src=f2.jpg alt=no style="width:230px ;height:130px;display: block;margin-left: auto;margin-right: auto;">
            <p style="text-align:center;"><b>Chicken-Biriyani</b></p>
        <div class=container style="background-color:lightblue;text-align:center; width:180px" w>
         <button  onclick=decre2() >&#8722 </button><input type=text style="width:50px;" id="n2" value="0" name="v2"><button onclick=incre2()>&#43</button></div>

    </div>
        <div class="col sm-4">
            <img src=f3.jpg alt=no  style="width:230px ;height:130px;display: block;margin-left: auto;margin-right: auto; ">
            <p style="text-align:center;"><b>Chicken Noodles</b></p> 
        <div class=container style="background-color:lightblue;text-align:center; width:180px;" w>
         <button   onclick=decre3()>&#8722 </button><input type=text style="width:50px;" id="n3" value="0" name="v3"><button onclick=incre3()>&#43</button></div>
    </div>
</div>
</div>

<script>
//this  function is for id n1;

function incre1(){
  
    var val=document.getElementById("n1").value;
  val++; 
  document.getElementById("n1").value=val;
}
function decre1(){
    
    var val=document.getElementById("n1").value;
    if(val!=0){
  val--; 
  document.getElementById("n1").value=val;
}}
//this  function is for id n2;
function incre2(){
  
  var val=document.getElementById("n2").value;
val++; 
document.getElementById("n2").value=val;
}
function decre2(){
  
  var val=document.getElementById("n2").value;
  if(val!=0){
val--; 
document.getElementById("n2").value=val;
}}
//this  function is for id n3;
function incre3(){
  
  var val=document.getElementById("n3").value;
val++; 
document.getElementById("n3").value=val;
}
function decre3(){
  
  var val=document.getElementById("n3").value;
  if(val!=0){
val--; 
document.getElementById("n3").value=val;
}}
</script>
<input type="submit" value="Submit">
</form>
</body>
</html>