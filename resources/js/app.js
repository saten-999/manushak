require('./bootstrap');


var i=0;
localStorage.setItem("i", i);


window.sel = function (is_correct,id,k) {
    
    if(is_correct){
        $("#opt"+k+ id+"").css('color','green')
        i = localStorage.getItem("i");
        ++i;
        localStorage.setItem("i", i);
    }else{
        $("#opt"+k+id+"").css('color','red')
    }

    $("input[name=opt"+k+"]").prop('disabled', true)
    console.log(i)
    
}


window.finish = function () {
    
    i = localStorage.getItem("i");
    if(i>1){
        window.location.href = "/certificate"
    }
    
}
