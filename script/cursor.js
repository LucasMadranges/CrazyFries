const cursor = document.querySelector(".cursor");

cursor.addEventListener("click", (e) => {
  cursor.setAttribute(
    "style",
    "top:" + (e.pageY - 20) + "px; left:" + (e.pageX - 20) + "px;"
  );
});

// NE FONCTIONNE PAS
