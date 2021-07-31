function mascara_num(){
    var num = document.getElementById('num') 
    if(num.value.length == 1 ){
     num.value ="("+ num.value}
     if(num.value.length == 3 ) {
     num.value += ") "}
     if(num.value.length == 10 ) {
     num.value += "-"
    }
}
