// Elements
const envelope = document.getElementById("envelope-container");
const messageImg = document.getElementById("message-img-container");
const letter = document.getElementById("letter-container");
const yess = document.getElementById("yes-container");
const confirm = document.getElementById("confirm-container");
const message = document.getElementById("message-container");
const noBtn = document.querySelector(".no-btn");
const yesBtn = document.querySelector(".btn[alt='Yes']");

const letterTitle = document.getElementById("letter-title"); // Letter screen title
const catImg = document.getElementById("letter-cat");
const buttons = document.getElementById("letter-buttons");
const finalText = document.getElementById("final-text");

// Cache the letter-window elements
const messageLetterWindow = document.querySelector("#message-container .letter-window");
const letterLetterWindow = document.querySelector("#letter-container .letter-window");
const yesWindow = document.querySelector("#yes-container .letter-window");
const confirmWindow = document.querySelector("#confirm-container .letter-window");

// ------------------ Envelope Click ------------------
envelope.addEventListener("click", () => {
    envelope.style.display = "none";
    message.style.display = "flex";

    // Animate message screen window
    setTimeout(() => {
        messageLetterWindow.classList.add("open");
    }, 50);
});

// ------------------ Message Image Click ------------------
messageImg.addEventListener("click", () => {
    message.style.display = "none";
    letter.style.display = "flex";

    // Animate letter screen window
    setTimeout(() => {
        letterLetterWindow.classList.add("open");
    }, 50);
});
// ------------------ Yes Image Click ------------------
yesBtn.addEventListener("click", () => {
    letter.style.display = "none";
    yess.style.display = "flex";

    // Animate letter screen window
    setTimeout(() => {
        yesWindow.classList.add("open");
    }, 50);
});
// ------------------ NO Button Dodging ------------------
noBtn.addEventListener("mouseover", () => {
    const minDistance = 150;
    const maxDistance = 250; // randomize a bit

    const distance = Math.random() * (maxDistance - minDistance) + minDistance;
    const angle = Math.random() * Math.PI * 2;

    const moveX = Math.cos(angle) * distance;
    const moveY = Math.sin(angle) * distance;

    noBtn.style.transition = "transform 0.3s ease";
    noBtn.style.transform = `translate(${moveX}px, ${moveY}px)`;
});

// ------------------ YES Button Click ------------------
yesBtn.addEventListener("click", () => {
    letterTitle.textContent = "Yippeeee!"; // update correct title
    catImg.src = "cat_dance.gif";

    letterLetterWindow.classList.add("final"); // animate final state

    buttons.style.display = "none"; // hide buttons
    finalText.style.display = "block"; // show final text
});

const submitBtn = document.getElementById("submit-answer");
const userAnswer = document.getElementById("mia-answer");

const popup = document.getElementById("feedback-popup");
const popupText = document.getElementById("popup-text");
const popupButton = document.getElementById("popup-button");

const miaContainer = document.getElementById("mia-container");
const miaWindow = document.querySelector("#mia-container .letter-window");

const correctAnswers = ["mia", "mohan"];

submitBtn.addEventListener("click", () => {
    const answer = userAnswer.value.trim().toLowerCase();

    if (correctAnswers.includes(answer)) {

        popupText.textContent = "Correct! MWAAH😘😘";
        popupText.style.color = "green";

        popupButton.textContent = "One More!";

        popupButton.onclick = () => {
            yess.style.display = "none";
            confirm.style.display = "flex";

            popup.classList.remove("show");
            userAnswer.value = "";

            setTimeout(() => {
                confirmWindow.classList.add("open");
            }, 50);
        };

    } else {

        popupText.textContent = "Don't Lie! GRR";
        popupText.style.color = "red";

        popupButton.textContent = "OK";

        popupButton.onclick = () => {
            popup.classList.remove("show");
            userAnswer.value = "";
        };
    }

    popup.classList.add("show");
});

const ignBtn = document.getElementById("submit-ign");
const ignAnswer = document.getElementById("ign-answer");

const ignPopup = document.getElementById("ign-popup");
const ignText = document.getElementById("ign-text");
const ignButton = document.getElementById("ign-button");

const answerIgn = ["legendaryninja28"];

ignBtn.addEventListener("click", () => {
    const answers = ignAnswer.value.trim().toLowerCase();

    if (answerIgn.includes(answers)) {

        ignText.textContent = "Correct! MWAAH😘😘";
        ignText.style.color = "green";

        ignButton.textContent = "Next";

        ignButton.onclick = () => {
            confirm.style.display = "none";
            miaContainer.style.display = "flex";

            ignPopup.classList.remove("show");
            ignAnswer.value = "";

            setTimeout(() => {
                miaWindow.classList.add("open");
            }, 50);
        };

    } else {

        ignText.textContent = "Rat, try again! GRR";
        ignText.style.color = "red";

        ignButton.textContent = "OK";

        ignButton.onclick = () => {
            ignPopup.classList.remove("show");
            ignAnswer.value = "";
        };
    }

    ignPopup.classList.add("show");
});


// Backgroud Audio
const music = document.getElementById("bgMusic");

  function startMusic() {
    music.volume = 0.7; // 30% volume
    music.play();
    document.removeEventListener("click", startMusic);
  }

  document.addEventListener("click", startMusic);

//   Envelope sounds
const envelopeSound = document.getElementById("envelopeSound");

envelope.addEventListener("click", function () {
    envelopeSound.currentTime = 0;
    envelopeSound.play();
  
    setTimeout(() => {
      envelopeSound.pause();
      envelopeSound.currentTime = 0; // reset
    }, 2000); // 1500ms = 1.5 seconds
  });

//   Envelope sounds
const furinaSound = document.getElementById("furinaSound");
const furinaImg = document.getElementById("message-img-container");

furinaImg.addEventListener("click", function () {
    furinaSound.currentTime = 0;
    furinaSound.play();
  });

// Logic to make YES btn to grow

// let yesScale = 1;

// yesBtn.style.position = "relative"
// yesBtn.style.transformOrigin = "center center";
// yesBtn.style.transition = "transform 0.3s ease";

// noBtn.addEventListener("click", () => {
//     yesScale += 2;

//     if (yesBtn.style.position !== "fixed") {
//         yesBtn.style.position = "fixed";
//         yesBtn.style.top = "50%";
//         yesBtn.style.left = "50%";
//         yesBtn.style.transform = `translate(-50%, -50%) scale(${yesScale})`;
//     }else{
//         yesBtn.style.transform = `translate(-50%, -50%) scale(${yesScale})`;
//     }
// });

// YES is clicked
