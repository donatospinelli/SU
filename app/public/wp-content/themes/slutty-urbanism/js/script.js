let cards = document.querySelectorAll(".card");

for (let card of cards) {
  card.onmousemove = function (e) {
    let x = e.clientX - card.offsetLeft;
    let y = e.clientY - (card.offsetTop - window.pageYOffset);
    card.style.setProperty("--x", x + "px");
    card.style.setProperty("--y", y + "px");
  };
}

