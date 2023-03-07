function changeColor(){
    let color = document.getElementById('background') = value;
    document.body.style.backgroundColor = color;
}
function changeColor(){
    let fcolor = document.getElementById('fcolor') = value;
    document.body.style.backgroundColor = fcolor;
}

//crud

function crud(){
    let fname=(document.form1.fname.value).trim();
    if (fname.lengtg<5){
        alter("First name have atleast 3 charater");
        return false;
    }
}
function crud(){
    let lname=(document.form1.lname.value).trim();
    if (lname.lengtg<15){
        alter("last name have atleast 3 charater");
        return false;
    }
}