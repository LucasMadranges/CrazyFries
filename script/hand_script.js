const btnHand = document.getElementById("btn_hand");

const btnContact = document.getElementById("contact");
const btnRetour = document.getElementById("barre-info");
const btnMail = document.getElementById("mail");
const btnAppli = document.getElementById("appli");
const btnCuisto = document.getElementById("cuisto");
const btnBryan = document.getElementById("bryan");
const btnMaxime = document.getElementById("maxime");
const btnAppli2 = document.getElementById("appli-2");
const btnAppli3 = document.getElementById("appli-3");
const btnAppli4 = document.getElementById("appli-4");
const btnAppli5 = document.getElementById("appli-5");
const btnAppli6 = document.getElementById("appli-6");

const menuTel = document.getElementById("tel-accueil");
const menuContact = document.getElementById("tel-contact");

const btnAppel = document.getElementById("appel");
const btnCancel = document.getElementById("cancel");

const textContactCuisto = document.getElementById("text_contact_cuisto");
const textContactBryan = document.getElementById("text_contact_bryan");
const textContactMaxime = document.getElementById("text_contact_maxime");

const bgContactCuisto = document.getElementById("bg_contact_cuisto");
const bgContactBryan = document.getElementById("bg_contact_bryan");
const bgContactMaxime = document.getElementById("bg_contact_maxime");

const soundPhone = document.querySelector("#phone_song");
const soundNonMario = document.querySelector("#mario_non_song");

btnContact.addEventListener("click", HideMenu);
btnRetour.addEventListener("click", HideContact);
btnAppli.addEventListener("click", NonSound);
btnAppli2.addEventListener("click", NonSound);
btnAppli3.addEventListener("click", NonSound);
btnAppli4.addEventListener("click", NonSound);
btnAppli5.addEventListener("click", NonSound);
btnAppli6.addEventListener("click", NonSound);
btnMail.addEventListener("click", NonSound);

btnCuisto.addEventListener("click", ContactCuisto);
btnBryan.addEventListener("click", ContactBryan);
btnMaxime.addEventListener("click", ContactMaxime);

function HideMenu() {
  menuTel.style.display = "none";
  menuContact.style.display = "inline-block";
  soundPhone.play();
}

function HideContact() {
  menuContact.style.display = "none";
  menuTel.style.display = "inline-block";
  soundPhone.play();
}

function NonSound() {
  soundNonMario.play();
}

function ContactCuisto() {
  btnAppel.style.display = "inline-block";
  btnCancel.style.display = "inline-block";
  bgContactBryan.classList.remove("bg_contact_active");
  textContactBryan.classList.remove("text_contact_active");
  bgContactCuisto.classList.add("bg_contact_active");
  textContactCuisto.classList.add("text_contact_active");
  bgContactMaxime.classList.remove("bg_contact_active");
  textContactMaxime.classList.remove("text_contact_active");
  soundPhone.play();
}

function ContactBryan() {
  btnAppel.style.display = "none";
  btnCancel.style.display = "none";
  bgContactBryan.classList.add("bg_contact_active");
  textContactBryan.classList.add("text_contact_active");
  bgContactCuisto.classList.remove("bg_contact_active");
  textContactCuisto.classList.remove("text_contact_active");
  bgContactMaxime.classList.remove("bg_contact_active");
  textContactMaxime.classList.remove("text_contact_active");
  soundPhone.play();
}

function ContactMaxime() {
  btnAppel.style.display = "none";
  btnCancel.style.display = "none";
  bgContactBryan.classList.remove("bg_contact_active");
  textContactBryan.classList.remove("text_contact_active");
  bgContactCuisto.classList.remove("bg_contact_active");
  textContactCuisto.classList.remove("text_contact_active");
  bgContactMaxime.classList.add("bg_contact_active");
  textContactMaxime.classList.add("text_contact_active");
  soundPhone.play();
}
