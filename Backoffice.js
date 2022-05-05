let inputIdentifiant = document.getElementById("IdentifiantInput");
let feedbackIdentifiant = document.getElementById("IdentifiantFeedback");

inputIdentifiant.addEventListener("input", function() {
    console.log("event ok");
    inputIdentifiant.classList.remove("is-invalid");
    feedbackIdentifiant.innerHTML = "";
})


let inputMdp = document.getElementById("mdpInput");
let feedbackMdp = document.getElementById("mdpFeedback");

inputMdp.addEventListener("input", function() {
    console.log("event ok");
    inputMdp.classList.remove("is-invalid");
    feedbackMdp.innerHTML = "";
})


let inputMdpconf = document.getElementById("mdpconfInput");
let feedbackMdpconf = document.getElementById("mdpconfFeedback");

inputMdpconf.addEventListener("input", function() {
    console.log("event ok");
    inputMdpconf.classList.remove("is-invalid");
    feedbackMdpconf.innerHTML = "";
})