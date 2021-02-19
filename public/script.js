function bigger(elem){
    elem.style.fontSize = "50px" ; 
}
function smaller(elem){
    elem.style.fontSize = "40px"
}
function load(){
    fadeIm()

}
function fadeIm(){
    $("img").fadeOut(1000 , function(){
        $("img").fadeIn(1000);
    })
}