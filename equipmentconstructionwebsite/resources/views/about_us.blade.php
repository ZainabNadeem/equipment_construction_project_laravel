<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <style>
    /* Paste your CSS code here */
    /* ... */
  </style>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="javescrupt" href="{{ asset('js/Search_event_lag.js') }}">
   
   <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
   
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
      <div class="Zano1" onmouseover="applyBlurEffect()" onmouseout="removeBlurEffect()" >  
        <section class="navbar">
          <span class="overlay"></span>
          <div class="menu" id="menu">
             <div class="menu-header">
                <span class="menu-arrow"><i class="bx bx-chevron-left"></i></span>
                <span class="menu-title"></span>
             </div>
             <ul class="menu-inner">
                <li class="menu-item"><a  href="{{ route('welcome') }}"  class="menu-link" style=" margin-right: 10px;">الرئسية</a></li>
                <li class="menu-item"><a href="{{ route('about-us') }}"  class="menu-link">من نحن</a></li>
                <li class="menu-item menu-dropdown">
                  <span><a href=" {{route('Brands')}}" class="menu-link"> الوكالات</a><i class="bx bx-chevron-right"></i></span>
                  <div class="submenu megamenu megamenu-column-4">
                  
                    <a href="{{route('Develon')}}"  class="submenu-link"> <img src="{{ asset('images/HD-DEVELON.svg') }}" alt="yy"></a>
                    <a href="{{route('Bobcat')}}"  class="submenu-link"> <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy"></a>
                    <a href="{{route('Bomag')}}"  class="submenu-link"> <img src="{{ asset('images/Bomag.svg') }}" alt="yy"></a>
                    <a href="{{route('Kubota')}}"  class="submenu-link"> <img src="{{ asset('images/E-FARMTRAC.svg') }}" alt="yy"></a>
                    <a href="{{route('Copaz')}}" class="submenu-link"> <img src="{{ asset('images/copaz.svg') }}" alt="yy"></a>
                    <a href="{{route('KCP')}}"  class="submenu-link"> <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy"></a>
                   <!--- <a href="#" class="submenu-link"> <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy"></a>
                     ---><div class="submenu-inner">
                        
                     </div>
                   </div>
                </li>
                <li class="menu-item menu-dropdown">
                   <span class="menu-link">المعرض<i class="bx bx-chevron-right"></i></span>
                   <div class="submenu megamenu megamenu-column-4">
                      <div class="submenu-inner"> 
                         <a href="#" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_213_D-5_S_07a661affb.png') }}" alt="yy">
                            <span class="submenu-title">Product Name</span>
                         </a>
                      </div>
                      <div class="submenu-inner">
                         <a href="#" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_174_AP-5_S_d6c5327211 (1).png') }}" alt="yy">
                            <span class="submenu-title">Product Name</span>
                         </a>
                      </div>
                      <div class="submenu-inner">
                         <a href="#" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_213_D-5_S_07a661affb.png') }}" alt="yy">
                            <span class="submenu-title">Product Name</span>
                         </a>
                      </div>
                      <div class="submenu-inner">
                         <a href="#" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_213_D-5_S_07a661affb.png') }}" alt="yy">
                            <span class="submenu-title">Product Name</span>
                         </a>
                      </div>
                   </div>
                </li>
                <li class="menu-item menu-dropdown">
                   <span class="menu-link">الوظائف <i class="bx bx-chevron-right"></i></span>
                </li>
                <li class="menu-item"><a  href="{{  route('contact.submit') }}"  class="menu-link_last">تواصل معنا </a></li>
             </ul>
          </div>
          <div class="section">
            <div class="left">
              <div class="boxdiv">
                <form action="/saction_page.php">
                  <input type="text" placeholder="البحـــــث عن" name="p">
                  <span class="icon"> <i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
            <div class="left">
              <div class="boxdiv">
               <form action="/language_page.php">
                  <div class="language-dropdown">
                     <button class="dropdown-button">اختر اللغة</button>
                     <ul class="dropdown-menu">
                       <li class="dropdown-item">العربية</li>
                       <li class="dropdown-item">English</li>
                       <li class="dropdown-item">Français</li>
                       <!-- أضف المزيد من العناصر حسب الحاجة -->
                     </ul>
                   </div>
                <span class="icon">  <i class="fa fa-globe" ></i></span>
               </form>
              </div>
            </div>
          </div>
         
       </section>
  </div>

</div>
  <div class="gradient-bg">
    <svg>
      <!-- SVG Definitions for filters -->
    </svg>
    <div class="gradients-container">
      <div class="g1"></div>
      <div class="g2"></div>
      <div class="g3"></div>
      <div class="g4"></div>
      <div class="g5"></div>
      <div class="interactive"></div>
    </div>
  </div>


</body>
</html>
