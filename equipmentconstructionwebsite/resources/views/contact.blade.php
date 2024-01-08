<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="content-language" content="en,de,fr,Arb" />

    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blue Tringle</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   
    
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="javescrupt" href="{{ asset('js/Search_event_lag.js') }}">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


  
  </head>
  <body>
<div class="container">
    <!-- logo begin -->
    <div id="logo" >
      <a href="#">
          <img class="right" src="{{ asset('images/LOGO.svg') }}" alt="yy">
      </a>
    </div>
  <!-- logo close -->

  
</div>

<div class="container">
  
</div>

<div class="container">
  
</div>

<div class="container">
  
</div>
  <div class="gradient-bg">
    <svg xmlns="http://www.w3.org/2000/svg">
      <defs>
        <filter id="goo">
          <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
          <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -8" result="goo" />
          <feBlend in="SourceGraphic" in2="goo" />
        </filter>
      </defs>
    </svg>
    <div class="gradients-container">
     <div class="g1"></div>
      <div class="g2"></div>
      <div class="g3"></div>
      <div class="g4"></div> 
      <div class="g3"></div>
     
    </div>
  </div>




  
<script>
      document.addEventListener('DOMContentLoaded', () => {
          const interBubble = document.querySelector('.interactive');
          let curX = 0;
          let curY = 0;
          let tgX = 0;
          let tgY = 0;
      
          function move() {
              curX += (tgX - curX) / 20;
              curY += (tgY - curY) / 20;
              interBubble.style.transform = `translate(${Math.round(curX)}px, ${Math.round(curY)}px)`;
              requestAnimationFrame(move);
          }
      
          window.addEventListener('mousemove', (event) => {
              tgX = event.clientX;
              tgY = event.clientY;
          });
      
          move();
      });  
</script>

  
  </body>
</html>
