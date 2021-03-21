

<html>
<head>
<script>
function showEmployee(str) {
    if (str== "") {
        document.getElementById("txtHint").innerHTML= "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp= new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange= function() {
            if (this.readyState== 4 && this.status== 200) {
                document.getElementById("txtHint").innerHTML= this.responseText;
            }
        };
        xmlhttp.open("GET","getEmployee.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>
<?php
 echo '<div style="border: 2px solid #000000;">';
//$title ='Welcome';
 echo nl2br("\n");
include "Header.php";
echo nl2br("\n");
echo '</div>';
?>
<?php
echo '<div style="border: 2px solid #000000;">';
echo nl2br("\n");
include "Menu.php";
echo nl2br("\n");
echo '</div>';
?>
<?php 
echo '<br><br>';
echo '<div style ="text-align:center;">';
?>
<?php echo '<div style ="text-align:center;">';?>
<form>
<select name="users" onchange="showEmployee(this.value)">
<option value="">Select a person:</option>
<option value="1">wertgh qwert</option>
<option value="2">Abhi Patel</option>
<option value="3">Carray Minati</option>
<option value="4">Piewdie Pie</option>
</select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
<?php echo '</div>';
echo '<br><br>';?>
<?php
echo '<div style="border: 2px solid #000000;">';
echo nl2br("\n");
include "Footer.php";
echo nl2br("\n");
echo '</div>';
?>
</body>
</html>






