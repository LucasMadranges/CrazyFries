const bullText = document.getElementById("bull_text");
const animalCrossingSong = document.getElementById("animal_crossing_song");

const btnDiscussion1 = document.getElementById("btn_discussion_1");
const btnDiscussion3 = document.getElementById("btn_discussion_3");

const ketchupSong = document.getElementById("ketchup_song");

function HideOffBullText() {
  bullText.style.display = "inline-block";
  animalCrossingSong.play();

  typewriterConfig = [
    "Bonjour ! <br> Merci d avoir appelé <br> Crazy Fries ! <br> Vous souhaitez prendre un <br> dessert,  une boisson ou un <br> menu complet ? <br> On a de tout ! <br> Et pour pas chère en plus !",
    true,
  ];
  typewriter();

  btnDiscussion1.style.display = "inline-block";
  btnDiscussion3.style.display = "inline-block";
}

btnDiscussion3.addEventListener("click", HideOffAll);

function HideOffAll() {
  btnDiscussion1.style.display = "none";
  btnDiscussion3.style.display = "none";
  bullText.style.display = "none";

  ketchupSong.play();
}
