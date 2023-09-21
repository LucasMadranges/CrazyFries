const roueUne = document.getElementById("roueune");
const roueDeux = document.getElementById("rouedeux");
const foodTruck = document.getElementsByClassName("food_truck");
const cuisto = document.getElementById("vache");
const engineSong = document.querySelector("#engine_song");
const marioSong = document.querySelector("#mario_song");
const btnCamion = document.getElementById("btn_camion");

btnCamion.addEventListener("click", anime_camion);

//fonction pour démarrer l'animation du camion

function anime_camion() {
  anime({
    targets: foodTruck,
    translateX: "1600px",
    duration: 3000,
    delay: 1000,
    easing: "easeOutExpo",
  });

  engineSong.volume = "0.5";
  engineSong.play();
  function volume_minus() {
    engineSong.volume = "0.1";
  }
  setTimeout(volume_minus, 2000);

  // rotation des roues
  anime({
    targets: roueUne,
    rotate: "5turn",
    duration: 3000,
    delay: 1000,
    easing: "easeOutExpo",
  });

  anime({
    targets: roueDeux,
    rotate: "5turn",
    duration: 3000,
    delay: 1000,
    easing: "easeOutExpo",
  });

  // animation pour le cuisto

  anime({
    targets: cuisto,
    duration: 1500,
    delay: 3000,
    opacity: 1,
    easing: "easeOutExpo",
  });

  anime({
    targets: cuisto,
    rotate: "1turn",
    duration: 1500,
    delay: 4500,
    easing: "easeOutExpo",
  });

  function mario_song() {
    marioSong.play();
  }

  setTimeout(mario_song, 3000);
  setTimeout(HideOffBullText, 6000);
}
