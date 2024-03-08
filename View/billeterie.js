function plus(){
    var prix= parseInt(document.getElementById("prix").innerHTML)
    var prix2= parseInt(document.getElementById("prix2").innerHTML)
    var qte= parseInt(document.getElementById("qte").innerHTML)+1
    document.getElementById("prix").innerHTML=qte*prix2
    document.getElementById("qte").innerHTML=qte


}
function minus(){
    var qte= parseInt(document.getElementById("qte").innerHTML)
    if(qte>0){
        var prix= parseInt(document.getElementById("prix").innerHTML)
        var prix2= parseInt(document.getElementById("prix2").innerHTML)
        var qte= parseInt(document.getElementById("qte").innerHTML)-1
       
        document.getElementById("qte").innerHTML=qte
        document.getElementById("prix").innerHTML=prix2*qte
    }
  

}
