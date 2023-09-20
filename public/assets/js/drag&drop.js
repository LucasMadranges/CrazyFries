let iteration = 0;

$(".pain").each((i, e)=>{
    if(e.id != choice.pain){
        $(e).replaceWith("");
    }
});

$("#" + choice.pain).addClass("draggable");
$("#" + choice.viande).addClass("draggable");
$("#" + choice.sauce).addClass("draggable");

if(choice.frites != "aucune"){
    $("#" + choice.frites).addClass("draggable");
}
if(choice.boisson != "aucune"){
    $("#" + choice.boisson).addClass("draggable");
}

$(".draggable").draggable();

$("#div-planche").after(`<div id="div-planche-zone"></div>`)

$("#div-planche-zone").width($("#planche-zone")[0].getBoundingClientRect().width);
$("#div-planche-zone").height($("#planche-zone")[0].getBoundingClientRect().height);
$("#div-planche-zone")[0].style.position = "absolute";
$("#div-planche-zone")[0].style.zIndex = "12000";
$("#div-planche-zone").offset($("#planche-zone").offset());

$("#div-planche-zone").droppable({
    drop: function( event, ui ) {
        drop(event, ui);
    }
})

function drop(e, ui) {
    let target = e.target;
    let draggable = ui.draggable[0];
    iteration++;    
    check(draggable);
}

function check(draggable){
    $(".draggable").draggable('disable');
    if(choice.pain.includes(draggable.id)){
        $("#" + choice.pain).removeClass("draggable");
        $("#" + choice.pain)[0].style.cursor = "unset";
    }
    if(choice.viande.includes(draggable.id)){
        $("#" + choice.viande).removeClass("draggable");
        $("#" + choice.viande)[0].style.cursor = "unset";
    }
    if(choice.sauce.includes(draggable.id)){
        $("#" + choice.sauce).removeClass("draggable");
        $("#" + choice.sauce)[0].style.cursor = "unset";
    }
    if(choice.frites.includes(draggable.id)){
        $("#" + choice.frites).removeClass("draggable");
        $("#" + choice.frites)[0].style.cursor = "unset";
    }
    if(choice.boisson.includes(draggable.id)){
        $("#" + choice.boisson).removeClass("draggable");
        $("#" + choice.boisson)[0].style.cursor = "unset";
    }
    $(".draggable").draggable('enable');
};

/* 
Au drop, on veut faire une recherche de l'élément "drop", si c'est un pain, une boisson, frites etc.
*/