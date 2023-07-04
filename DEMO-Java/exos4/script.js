function TableMultiplication(){
var table = "";

for(var i=1;i<=10;i++){
   var result=3*i;
    table += "3 x "+ i +" = "+ result +" <br>";
}
    
    document.getElementById("table").innerHTML = table;
 }
