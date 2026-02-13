<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="pixel-heart.png" type="image/png">

    <title>Valentine Letter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Aldrich&family=Pixelify+Sans:wght@400..700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <!-- Envelope Screen -->
    <div id="envelope-container">
      <img src="envelope.png" alt="Envelope" id="envelope" />
      <p>Letter for You, Mia ♡</p>
    </div>

    <!-- Message Screen -->
    <div id="message-container">
      <div class="message letter-window">
        <div class="message letter-content">
          <h1 style="margin-top: 17px;" id="letter-titles" class="message-text">My Dear Moody Rat ♡</h1>
    
          <p id="message-text" class="message-text">Hai Mia! I wanted to tell you how much you mean to me this Valentin's Day.
             I love how you always make me <strong>happy and complete my day</strong>.
              I love how you always<strong> make me smile</strong> if I feel sad.
               You are really my <strong>rest, my home, and my happiness MWAH</strong>.
                I always remember our late night talks and I love how your always <strong> yapping and being so sweet</strong>.
                I love it when you are talking about your day or everything, I really enjoy listening to you and It felt good feeling included in your life.
                I remember when you gifted me, you really made me so happy. You gifted me more than what I asked for HAHA I REALLY APPRICIATE IT LOVES!
                Also don't worry when you're being moody hehe, <strong>my moody rat</strong>. You being moody don't change anything, I still love you and I won't leave you because you're the girl I really want hehe.
                Thank you for always being with me Mia <strong>♡</strong> I really love you prescence loves. I love how you always try to understand me and trying to make me happy.
                I love it when we are being <strong>AHEM</strong><i> "Interesting"</i> hehe<strong>♡</strong>.
                 I really appriciate you and I love everything about you Mia. I care so much for you. You are so kind and nice and also <strong>very pretty!</strong> I alawys love you and I will always choose you Mia.
                 <strong> I love you very much Happy Valentine's Day ♡ </strong>
          </p>
          <div id="message-img-container" class="message-img">
            <img src="furina-gif.gif" alt="Furina" class="furina" id="message-furina">
            <p>Click ME!</p>
          </div>
        </div>
      </div>
    </div>
    

    <!-- Letter Screen -->
    <div id="letter-container">
      <div class="letter-window">
        <div class="letter letter-content">
          <h1 id="letter-title">Will you be my Valentine?</h1>

          <img src="cat_heart.gif" class="cat" id="letter-cat" />

          <div class="buttons" id="letter-buttons">
            <img id="yes-img" src="yes.png" class="btn yes-btn" alt="Yes" />

            <div class="no-wrapper">
              <img src="no.png" class="btn no-btn" alt="No" />
            </div>
          </div>
        </div>

        <div class="letter-img" id="mia">

        </div>
      </div>
    </div>

    <!-- Yes Screen -->
     <div id="yes-container">
        <div class="yes letter-window">
          <div class="yes letter-content">
            <h1>YAAAYYY!!</h1>

            <div class="yes-img">
              <img src="cat_dance.gif" alt="cat dance" class="cat-dance">
              <img src="mia/hand-heart.jpg" alt="hand heart" class="hand-heart">
            </div>

            <p id="final-text" class="final-text" style="display: none">
              <strong>Valentine Date:</strong> MLBB at 7pm(When I get home). We will play all night hehe!
            </p>

            <!-- Question Form -->
            <div id="question-form">
              <p style="margin-top: 6px;"><strong>Question:</strong> Who is the prettiest girl?</p>
              <input id="mia-answer" type="text" placeholder="Type your answer here hehe" />
              <button id="submit-answer">Submit</button>
            </div>
          </div>
        </div>

        <!-- Feedback Popup -->
        <div id="feedback-popup">
          <p id="popup-text"></p>
          <button id="popup-button">OK</button>
        </div>
     </div>

    <!-- Confirm Screen -->
     <div id="confirm-container">
        <div class="confirm letter-window">
          <div class="confirm letter-content">
            <h1>YAAAYYY!!</h1>

            <div class="yes-img">
              <img src="cat_dance.gif" alt="cat dance" class="cat-dance">
              <img src="mia/hand-heart.jpg" alt="hand heart" class="hand-heart">
            </div>

            <p id="final-text" class="final-text">
              <strong>Valentine Date:</strong> We play when you get home. We will play all night hehe!
            </p>

            <!-- Question Form -->
            <div id="ign-form">
              <p style="margin-top: 6px;"><strong>Question:</strong> What is my old IGN?</p>
              <input id="ign-answer" type="text" placeholder="Type your answer here hehe" />
              <button id="submit-ign">Submit</button>
            </div>
          </div>
        </div>

        <!-- IGN Popup -->
        <div id="ign-popup">
          <p id="ign-text"></p>
          <button id="ign-button">OK</button>
        </div>
     </div>

     <!-- Mia Screen -->
    <div id="mia-container">
      <div class="mia letter-window">
        <div class="yes letter-content">
          <h1 style="margin-top: 8px; margin-bottom: 0;" id="letter-title">YOU'RE SO GORGEOUS 😍</h1>
          <h1 style="margin: 0;" id="letter-title">LET'S FUCK!! PRETTY PLEASE! 🥺👉👈</h1>

          <div class="letter-img" id="mia">
            <img src="mia/mia1.jpg" alt="pretty mia" class="mia-item">
            <img src="mia/mia2.png" alt="img2" alt="pretty mia" class="mia-item">
            <img src="mia/mia3.png" alt="img3" alt="pretty mia" class="mia-item">
            <img src="mia/Mia_cutie_rawr.png"  alt="pretty mia" class="mia-item">
            <img src="mia/mia4.png" alt="img5" alt="pretty mia" class="mia-item">
            <img src="mia/mia5.jpg" alt="img6" alt="pretty mia" class="mia-item">
          </div>          
        </div>
      </div>
    </div>

    <!-- Background Music -->
    <audio id="bgMusic" loop>
      <source src="audio/romatic_music.mp3" type="audio/mpeg">
    </audio>

    <!-- Envelope Click Sound -->
    <audio id="envelopeSound">
      <source src="audio/envelope-effects.mp3" type="audio/mpeg">
    </audio>

    <!-- Furina Click Sound -->
    <audio id="furinaSound">
      <source src="audio/furina-voice.mp3" type="audio/mpeg">
    </audio>

    <!-- YES Click Sound -->
    <audio id="yesSound">
      <source src="audio/click-yes.mp3" type="audio/mpeg">
    </audio>

    <!-- Normal Click Sound -->
    <audio id="normalSound">
      <source src="audio/normal-click.mp3" type="audio/mpeg">
    </audio>

    <!-- Correct Click Sound -->
    <audio id="correctSound">
      <source src="audio/celeb-click.mp3" type="audio/mpeg">
    </audio>

    <!-- Blank Click Sound -->
    <audio id="blankSound">
      <source src="audio/blank-sounds.mp3" type="audio/mpeg">
    </audio>

    <!-- Wrong Click Sound -->
    <audio id="wrongSound">
      <source src="audio/wrong-sounds.mp3" type="audio/mpeg">
    </audio>


    <script src="script.js"></script>
  </body>
</html>
