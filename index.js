var Form1 = document.getElementById("form1");
var Form2 = document.getElementById("form2");

var studentBtn = document.getElementById("intoStudentForm");

studentBtn.onclick = function(){
    Form1.style.left="-450px";
    Form2.style.left="20px";
}


function hideShowDiv(){
    let div=document.getElementById("botWrapper");
    div.style.visibility="visible";
  
  }