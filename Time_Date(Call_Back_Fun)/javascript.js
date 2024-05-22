function getTime(){

    const d = new Date();
    document.getElementById("i1").innerHTML = d;
    
    
    document.getElementById("i2").innerHTML = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    /*const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
         document.getElementById("i2").innerHTML = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds(); //this.responseText;
    }
    xhttp.open("GET", "http://localhost/../Time.php");
    xhttp.send();*/

}



setInterval(getTime, 1000);