const arrayPain = ["burger", "baguette", "aucunP"];
const arrayViande = ["merguez", "fricandelle", "steak", "poulet"];
const arraySauce = ["ketchup", "mayo", "moutarde"];
const arrayFrites = ["petite", "moyenne", "grande", "aucuneF"];
const arrayBoisson = ["soda", "eau", "orange", "aucuneB"];

let commande = {};
let commandes = [];

$(".valid-btn").on("click", verifyChecked);
$(".return-btn").on("click", returnTab);

function verifyChecked(){
    $(".radio-hidden").each((i, e)=>{
        if(e.checked == true){
            nextStep(e.value);
            e.checked = false;
            return;
        }else{}
    });
}

function returnTab(){
    elBefore = $(".active")[0].parentElement.previousElementSibling.children[0];
    $(".active").addClass("disabled");
    $(".active").removeClass("active");
    $(elBefore).removeClass("disabled");
    $(elBefore)[0].click();
    $("#"+commande[$(".active")[0].id.split('-')[0]])[0].parentElement.click();
    $("#"+commande[$(".active")[0].id.split('-')[0]])[0].parentElement.focus();
    commande[$(".active")[0].id.split('-')[0]] = "";
}

$(".zone-menu").each((i, e)=>{
    $(e).on("click", ()=>{
        $(".radio-hidden")[i].checked = true;
    });
})

function nextStep(data){
    if(arrayPain.includes(data)){
        commande.pain = data;
        $(".active").addClass("disabled");
        $(".active").removeClass("active");
        $("#viande-tab").removeClass("disabled");
        $("#viande-tab")[0].click();
        return;
    }
    if (arrayViande.includes(data)) {
        commande.viande = data;
        $(".active").addClass("disabled");
        $(".active").removeClass("active");
        $("#sauce-tab").removeClass("disabled");
        $("#sauce-tab")[0].click();
        return;
    }
    if (arraySauce.includes(data)) {
        commande.sauce = data;
        $(".active").addClass("disabled");
        $(".active").removeClass("active");
        $("#frites-tab").removeClass("disabled");
        $("#frites-tab")[0].click();
        return;
    }
    if (arrayFrites.includes(data)) {
        commande.frites = data;
        $(".active").addClass("disabled");
        $(".active").removeClass("active");
        $("#boisson-tab").removeClass("disabled");
        $("#boisson-tab")[0].click();
        return;
    }
    if (arrayBoisson.includes(data)) {
        commande.boisson = data;
        $("#btn-modal-valid")[0].click();
        return;
    }
}

$("#add-order").on("click", newOrder);
$("#end-order").on("click", (i, e)=>{
    commandes.push(commande);
    commandes = JSON.stringify(commandes);
    $("#hidden-data")[0].value = commandes;
    $("#submit-end-order")[0].click();
});

function newOrder(){
    commandes.push(commande);
    commande = {};
    $("#exit-modal")[0].click();
    $(".active").addClass("disabled");
    $(".active").removeClass("active");
    $("#pain-tab").removeClass("disabled");
    $("#pain-tab")[0].click();
}
