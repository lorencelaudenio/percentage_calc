<title>Percentage</title>
<center>
<?php include("nav.php");?>
<script>
function get_part(){
var percent = Number(document.getElementById("percent").value);
var whole = Number(document.getElementById("whole").value);
var part = (percent.toFixed(2)/100) * whole.toFixed(2);
document.getElementById("part").value = part.toFixed(2) ;
}

function get_percent(){
var whole2 = Number(document.getElementById("whole2").value);
var part2 = Number(document.getElementById("part2").value);
var percent2 = (part2.toFixed(2)/whole2.toFixed(2)) * 100;
document.getElementById("percent2").value = percent2.toFixed(2) ;
}

</script>

<br>Part?<br>
Whole:<input type="text" id="whole" onChange="get_part()"><br>
Percent: <input type="text" id="percent" onChange="get_part()"><br>
Part:<input type="text" id="part"><br>
<hr>
Percent?<br>
Whole:<input type="text" id="whole2" onChange="get_percent()"><br>
Part: <input type="text" id="part2" onChange="get_percent()"><br>
Percent:<input type="text" id="percent2"><br>

<?php include("footer.php");?>
</center>