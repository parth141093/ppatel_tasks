<?php
$title = "Javascript Event and form validation";
include "header.php"
?>
<h2>A simole button to display date</h2>

<button onclick="this.innerHTML = Date()"> click to know date </button>
<h2>make a button and a place holder as paragraph for he date </h2>
<button onclick="getElementById('p1').innerHTML = Date()"> click to know date </button>
<p id="p1"> </p>

<h2>Change the Background color</h2>
<Form>
<input type="color" id="background" onchange="changeColor()">
</form>
<h2>Change the font color</h2>
<Form>
<input type="color" id="fcolor" onchange="changefColor()">
</form>

<h2>On Mouse Over & On Mouse Out</h2>
<span onmouseover="this.style.color='blue';
this.style.backgroundColor='yellow';
this.style.fontsize = '2em';"

onmouseout="this.style.color='red';
this.style.backgroundColor='white';
this.style.fontsize = '1.1em';"> Some text </span>

<?php
include "footer.php"
?>