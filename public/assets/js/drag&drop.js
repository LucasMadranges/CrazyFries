let iteration = 0;
let arrayEl = [];

$("#pain").each((i, e)=>{
    arrayEl = Array.from(e.children);
});

arrayEl.forEach(el => {
        if(el.id != choice.pain){
            $(el).replaceWith("");
        }
});

$("#viande").each((i, e)=>{
    arrayEl = Array.from(e.children);
});

arrayEl.forEach(el => {
    if(el.id != choice.viande){
        $(el).replaceWith("");
    }
});

$("#sauce").each((i, e)=>{
    arrayEl = Array.from(e.children);
});

arrayEl.forEach(el => {
    if(el.id != choice.sauce){
        $(el).replaceWith("");
    }
});

$("#frites").each((i, e)=>{
    arrayEl = Array.from(e.children);
});

arrayEl.forEach(el => {
    if(el.id != choice.frites){
        $(el).replaceWith("");
    }
});

$("#boisson").each((i, e)=>{
    arrayEl = Array.from(e.children);
});

arrayEl.forEach(el => {
    if(el.id != choice.boisson){
        $(el).replaceWith("");
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


$(".draggable").draggable(({
    drag: function( event, ui ) {
        event.target.style.transform = "translate("+ui.position.left+"px, "+ui.position.top+"px)";
    }
  }));



$("#planche").after(`<div id="div-planche"></div>`)

$("#div-planche").width($("#planche-zone")[0].getBoundingClientRect().width);
$("#div-planche").height($("#planche-zone")[0].getBoundingClientRect().height);
$("#div-planche")[0].style.position = "absolute";
$("#div-planche")[0].style.zIndex = "12000";
$("#div-planche").offset($("#planche").offset());

$("#div-planche").droppable({
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