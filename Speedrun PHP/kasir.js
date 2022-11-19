const Popup = document.querySelector(".popup")
const close = document.querySelector(".close")
const showKembalian = document.querySelector("btn-primary dark-blue")

const kembalian = document.querySelector(".kembalian")

const showPopup = () => {
    Popup.style.display = "grid"
    close.style.display = "block"
}

const closePopup = () => {
    Popup.style.display = "none"
    close.style.display = "none"
    Popup.style.opaicty = "0"
}

showKembalian.addEventListener("click", function() {
    kembalian.style.display = "grid"
})