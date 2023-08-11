var Alert = new CustomAlert();

function CustonAlert(){
    this.render = function(){
        //Show Modal
    let popUpbox = document.getElementById("popUpbox");
    popUpbox.style.display = "block";
    document.getElementById('closeModal').innerHTML = '<a href="index.html"><button type="button" a href>¡Si quiero!</button></a> ';
    }

    this.ok= function(){
        document.getElementById('popUpbox').atyle.display = "none";
        document.getElementById('popUpOverlay').style.display="none";
    }


}