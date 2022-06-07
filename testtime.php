<center>
<h1>
<span id="m"></span>
<span>:</span>
<span id="s"></span>
Time left in wich you can modify the order
</h1>
<br>
</center>
<script>
var s=60;
var m=4;

var time= setInterval(function() {timer()}, 1000);
function timer(){
s--;
if(s==-1){
m--;
s=59;
if(m==-1){
m=0;
s=0;
clearInterval(time);
alert("The time is up");
}
}
document.getElementById("m").innerHTML = m;
document.getElementById("s").innerHTML = s;
}

</script>