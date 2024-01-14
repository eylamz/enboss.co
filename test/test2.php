<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>

    .testPage {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-color: var(--white-300);
      z-index: 10;
      overflow: hidden;
      transition: background-color .3s ease-in-out;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .testMessage { 
      flex-direction: column;
      align-items: center;
      background-color: var(--white-400);
      box-shadow: var(--img-shadow);
      padding: 25px 30px;
      border-radius: 18px;
      width: 80%;
      max-width: 400px;
      min-width: 200px;
      margin: 0 10px;
      font-family: 'Poppins', sans-serif;
      text-align: center;
      animation: alert-fade-in 0.5s ease-in-out 2s; /* Fade-in animation */
    }

    
    @keyframes alert-fade-in {
    0% {
      transform:scale(0.25);
      opacity: 0.25; 
    }
    50% {
      transform: scale(1.15);
      }
    100% { 
      transform: scale(1);
      opacity: 1;
    }
  }
    
#clearLocalStorageButton {
      font-size: 1rem;
      font-weight:500 ;
      margin-top: 10px;
      padding: 7px 20px;
      background-color: var(--blue-600);
      color: var(--white-400);
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: all .15s ease-in-out;
    }
  </style>
  
  <body>
      <!-- Header Section -->
  <?php include('../view/en/english-header.php'); ?>
  
  <div class="testPage">
  <div class="testMessage">
    <button id="clearLocalStorageButton">Clear messageCount</button>
  </div>
  <script>
    window.onload = function () {
      document.getElementById('clearLocalStorageButton').addEventListener('click', function() {
        // Get the current count from localStorage
        let messageCount = localStorage.getItem('messageCount') || 0;

        // Show the remaining message count
        alert(`Local Storage has been cleared. Remaining message count: ${messageCount}`);
        
        // Clear entire localStorage
        localStorage.clear();
      });
    }
  </script>
</div>


</div>
</body>
</html>



