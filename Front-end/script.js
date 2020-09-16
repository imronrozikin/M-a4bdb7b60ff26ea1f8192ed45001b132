function jam(){
    var date = new Date();
    var h = date.getHours(); 
    var m = date.getMinutes(); 
    var s = date.getSeconds(); 
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s;
    document.getElementById("jamdigital").innerText = time;
    document.getElementById("jamdigital").textContent = time;
    
    setTimeout(jam, 1000);
    
}
 
jam();

$(document).ready(function(){
    $("#hello").click(function(){
        var xhr = new XMLHttpRequest();
        var url = "../Back-end/getSession.php";
        xhr.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                if (this.responseText == 'logout') {
                    window.location='../Front-end/login.html';
                }else{
                    document.getElementById("status").innerHTML = this.responseText;
                }
            }
        };
        xhr.open("GET", url, true);
        xhr.send();
    });
});