<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Voice Search</title>
  <style>
    body {
      margin: 0;
      background-color: #000;
      color: white;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: flex-start;
      height: 100vh;
      position: relative;
      overflow: hidden;
      padding-top: 80px;
    }

    .top-bar {
      position: absolute;
      top: 20px;
      display: flex;
      gap: 10px;
      align-items: center;
      justify-content: center;
    }

    .toggle-buttons {
      display: flex;
      background-color: #222;
      border-radius: 30px;
      overflow: hidden;
    }

    .toggle-buttons button {
      padding: 10px 20px;
      background: none;
      border: none;
      color: white;
      cursor: pointer;
      font-weight: bold;
    }

    .toggle-buttons button.active {
      background-color: white;
      color: black;
      border-radius: 20px;
    }

    .status {
      margin-top: 40px;
      font-size: 24px;
    }

    .hint {
      margin-top: 20px;
      font-size: 16px;
      color: gray;
      text-align: center;
    }

    .hint strong {
      display: block;
      margin-top: 5px;
      color: white;
    }

    .mic-container {
      margin-top: 50px;
      position: relative;
      width: 120px;
      height: 120px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .mic-circle {
      width: 100px;
      height: 100px;
      background-color: red;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 0 20px rgba(255, 0, 0, 0.6);
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    .mic-circle:active {
      transform: scale(0.95);
    }

    .mic-icon {
      width: 40px;
      height: 40px;
      filter: invert(1);
    }

    .face-outline {
      position: absolute;
      right: -50px;
      bottom: -40px;
      width: 100px;
      height: 100px;
      opacity: 0.2;
    }

    .transcript {
      margin-top: 20px;
      font-size: 14px;
      color: #ccc;
      max-width: 90%;
      text-align: center;
    }
  </style>
</head>
<body>

  <div class="top-bar">
    <div class="toggle-buttons">
      <button class="active">Voice</button>
      <button>Song</button>
    </div>
  </div>

  <div class="status" id="status">Listening...</div>

  <div class="hint">
    Try saying<br>
    <strong>"Play workout music"</strong>
  </div>

  <div class="mic-container">
    <div class="mic-circle" onclick="startRecognition()">
      <img src="https://img.icons8.com/ios-filled/50/ffffff/microphone.png" class="mic-icon" alt="Mic"/>
    </div>
    
  </div>

  <div class="transcript" id="transcript">Say something...</div>

  <script>
    const transcriptDiv = document.getElementById('transcript');
    const statusDiv = document.getElementById('status');

    function startRecognition() {
      if (!('webkitSpeechRecognition' in window)) {
        alert("Speech recognition not supported in this browser.");
        return;
      }

      const recognition = new webkitSpeechRecognition();
      recognition.continuous = false;
      recognition.interimResults = false;
      recognition.lang = 'en-US';

      recognition.onstart = function() {
        statusDiv.textContent = "Listening...";
        transcriptDiv.textContent = "";
      };

      recognition.onresult = function(event) {
        const transcript = event.results[0][0].transcript;
        transcriptDiv.textContent = `You said: "${transcript}"`;
        statusDiv.textContent = "Tap to speak again";
      };

      recognition.onerror = function(event) {
        statusDiv.textContent = "Error occurred. Try again.";
      };

      recognition.onend = function() {
        statusDiv.textContent = "Tap to speak again";
      };

      recognition.start();
    }
  </script>

</body>
</html>
