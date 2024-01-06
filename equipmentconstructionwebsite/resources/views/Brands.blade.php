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
                <li class="menu-item"><a href="#" class="menu-link"style=" margin-right: 15px;">الرئسية</a></li>
                <li class="menu-item"><a href="{{ route('about-us') }}"  class="menu-link">من نحن</a></li>
                <li class="menu-item menu-dropdown">
                   <a class="menu-link"href="{{route('Brands')}}">الوكالات<i class="bx bx-chevron-right"></i></a>
                   <div class="submenu megamenu megamenu-column-4">
                     <a href="#" class="submenu-link"> <img src="{{ asset('images/HD-DEVELON.svg') }}" alt="yy"></a>
                     <a href="#" class="submenu-link"> <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy"></a>
                     <a href="#" class="submenu-link"> <img src="{{ asset('images/Bomag.svg') }}" alt="yy"></a>
                     <a href="#" class="submenu-link"> <img src="{{ asset('images/E-FARMTRAC.svg') }}" alt="yy"></a>
                     <a href="#" class="submenu-link"> <img src="{{ asset('images/copaz.svg') }}" alt="yy"></a>
                    <!--- <a href="#" class="submenu-link"> <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy"></a>
                     <a href="#" class="submenu-link"> <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy"></a>
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
                            <span class="submenu-title">أسم المنتج</span>
                         </a>
                      </div>
                      <div class="submenu-inner">
                         <a href="#" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_174_AP-5_S_d6c5327211 (1).png') }}" alt="yy">
                            <span class="submenu-title">أسم المنتج</span>
                         </a>
                      </div>
                      <div class="submenu-inner">
                         <a href="#" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_213_D-5_S_07a661affb.png') }}" alt="yy">
                            <span class="submenu-title">أسم المنتج</span>
                         </a>
                      </div>
                      <div class="submenu-inner">
                         <a href="#" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_213_D-5_S_07a661affb.png') }}" alt="yy">
                            <span class="submenu-title">أسم المنتج</span>
                         </a>
                      </div>
                   </div>
                </li>
                <li class="menu-item menu-dropdown">
                   <a class="menu-link" href="{{route('Career')}}">الوظائف <i class="bx bx-chevron-right"></i></a>
         
                </li>
                <li class="menu-item"><a href="{{  route('contact.submit') }}" class="menu-link_last">تواصل معنا </a></li>
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

 <!-- /* <div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <video width="100%" controls>
                <source src="{{ asset('videos/about_blue.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
       يمكنك إضافة شرائح إضافية هنا إذا كنت تريد عرض مزيد من الفيديوهات 
    </div>
   إضافة الأزرار التي تتحكم في التنقل بين الشرائح 
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>*/-->
  <div >
    <div class="card-image" style="border: 1.2px solid rgba(255, 255, 255, 0.281);"> <img class="left  direction: ltr" src="{{ asset('images/Layer_1.png') }}" alt="yy"></div>
  </div>
  <div  class="Zano" >
 
               <div > 
               
                        <div style="display: flex; justify-content: space-between; font-family: 'Cairo';">
                                 <div  class="left ;size:20%;"style="display: flex; justify-content: center; align-items: center;">
                                 <!-- Content of the left div -->
                                 <h1>           &nbsp;</h1>
                                 <img src="{{ asset('images/BLUE_T.svg') }}" alt="yy">
                                 </div>
                                 <div style="text-align: justify; " class=" right ; size:20%; direction: rtl;">
                                    <!-- Content of the right div -->
                                 <h1  style="direction: rtl;"> <span style='font-size:20 px;direction: rtl;'> &#9664;الوكــالات بلو ترانجل</span></h1>  
                                          <p style="direction: rtl;">
                                             شركة بلو ترانجل للتجارة المحدودة عضو في مجموعة شركات عبد الله الرباعي التي تتخصص في عدة مجالات مختلفة
                                             مثل المقاولات والزراعة وأيضًا التجارة العامة تأسست الشركة في عام 2015 بشكل رسمي في الجمهورية اليمنية
                                             وتمكنت من بناء خبرة قوية وجيدة خلال السنوات منذ تأسيس شركة بلوتراتجل للتجارة المحدودة تخصصت الشركة في
                                             معدات البناء وآلات الحفر وأيضًا في مجال الطاقة، المعدات الزراعية معدات الرفع وأيضًا معدات واللات خاصة
                                             وقد أنشأت الشركة شبكة قوية جدًا وموثوق بها داخل وخارج اليمن مع العملاء والموردين قامت الشركة بتوسيع محفظة
                                             منتجاتها لتصبح موزعًا حصريًا لأكبر العلامات التجارية مثل شركة ديفلون الكورية (معدات دوسان الثقيلة سابقًا)
                                             ، شركة بوبكات التشيكية معدات البناء والحفر الخفيفة والمتوسطة) شركة بوماج الألمانية (معدات الأسفلت الثقيلة
                                             والخفيفة ، شركة فارم ترك من اسكرت كابوتا الهندية (حراثات زراعية خفيفة ومتوسطة شركة كوباز الكورية (معدات
                                             صيانة الطرقات وغيرها من العلامات التجارية الرائدة في المجال.
                                          </p>
                                 </div>
                        </div>
               
               </div>
 
   </div>
  <div class="Zano" >
   <div class="title-line">
   
      <h1 class="title right"> 
         &#9664; الوكــالات
      </h1>
      <div class="line right"></div>
    </div>

   </div>
   <div class="container3">
        
            

    <div class="parent card2">
        <div class="card ">
            <div class="content-box">
                <h1 class="card-title">HD-Develon</h1>
                <p class="card-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Facere sequi illo nam repudiandae tempore quaerat veritatis 
                    doloremque omnis molestias id.
                </p>
                <span class="see-more">See More</span>
            </div>
            <div class="date-box">
              <a href="#" class="submenu-link"> <img src="{{ asset('images/HD-DEVELON.svg') }}" alt="yy"></a>
            </div>
        </div>
    </div>

    <div class="parent card3">
        <div class="card">
            <div class="content-box">
                <h1 class="card-title">Bobcat</h1>
                <p class="card-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sequi illo nam repudiandae tempore quaerat veritatis doloremque omnis molestias id.
                </p>
                <span class="see-more">See More</span>
            </div>
            <div class="date-box">
              <a href="#" class="submenu-link"> <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy"></a>
            </div>
        </div>
    </div>

    <div class="parent card4">
        <div class="card">
            <div class="content-box">
                <h1 class="card-title">Bomag</h1>
                <p class="card-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sequi illo nam repudiandae tempore quaerat veritatis doloremque omnis molestias id.
                </p>
                <span class="see-more">See More</span>
            </div>
            <div class="date-box">
              <a href="#" class="submenu-link"> <img src="{{ asset('images/Bomag.svg') }}" alt="yy"></a>
            </div>
        </div>
        </div>

        <div class="parent card5">
            <div class="card">
                <div class="content-box">
                    <h1 class="card-title">E-FARMTRAC</h1>
                    <p class="card-content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sequi illo nam repudiandae tempore quaerat veritatis doloremque omnis molestias id.
                    </p>
                    <span class="see-more">See More</span>
                </div>
                <div class="date-box">
                  <a href="#" class="submenu-link"> <img src="{{ asset('images/E-FARMTRAC.svg') }}" alt="yy"></a>
                </div>
            </div>
            </div>

            <div class="parent ccard-blue">
                <div class="card">
                    <div class="content-box">
                        <h1 class="card-title">copaz</h1>
                        <p class="card-content">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sequi illo nam repudiandae tempore quaerat veritatis doloremque omnis molestias id.
                        </p>
                        <span class="see-more">See More</span>
                    </div>
                    <div class="date-box">
                      <a href="#" class="submenu-link"> <img src="{{ asset('images/copaz.svg') }}" alt="yy"></a>
                    </div>
                </div>
                </div>
                <div class="parent card-yellow">
                    <div class="card">
                        <div class="content-box">
                            <h1 class="card-title">Card Title</h1>
                            <p class="card-content">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sequi illo nam repudiandae tempore quaerat veritatis doloremque omnis molestias id.
                            </p>
                            <span class="see-more">See More</span>
                        </div>
                        <div class="date-box">
                            <span class="month">JUNE</span>
                            <span class="date">29</span>
                        </div>
                    </div>
                    </div>
                    <div class="parent ccard-blue">
                      <div class="card">
                          <div class="content-box">
                              <h1 class="card-title">Card Title</h1>
                              <p class="card-content">
                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sequi illo nam repudiandae tempore quaerat veritatis doloremque omnis molestias id.
                              </p>
                              <span class="see-more">See More</span>
                          </div>
                          <div class="date-box">
                              <span class="month">JUNE</span>
                              <span class="date">29</span>
                          </div>
                      </div>
                      </div>
                      <div class="parent card-yellow">
                          <div class="card">
                              <div class="content-box">
                                  <h1 class="card-title">Card Title</h1>
                                  <p class="card-content">
                                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere sequi illo nam repudiandae tempore quaerat veritatis doloremque omnis molestias id.
                                  </p>
                                  <span class="see-more">See More</span>
                              </div>
                              <div class="date-box">
                                  <span class="month">JUNE</span>
                                  <span class="date">29</span>
                              </div>
                          </div>
                          </div>
                      
  <div class="container1">
    <div class="card1">
      <div class="face face1">
        <div class="content">
        <i class="fa fa-cogs"></i>
          <h3>Maintenance</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
          <a href="#" type="button">Read More</a>
        </div>
      </div>
   </div>
   
   <div class="card1">
      <div class="face face1">
        <div class="content">
     <i class="fa fa-wrench"></i>               <h3>Request a Quote</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. . Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
          <a href="#" type="button">Read More</a>
        </div>
      </div>
   </div>
   
   
   <div class="card1">
      <div class="face face1">
        <div class="content">
          <i class="fa fa-truck"></i>
           <h3>Equipment</h3>
        </div>
      </div>
      <div class="face face2">
        <div class="content">
          <p> Lorem ipsum dolor sit amet consectetur  Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
          <a href="#" type="button">Read More</a>
        </div>
      </div>
   </div>
   <div class="card1">
    <div class="face face1">
      <div class="content">
        <i class="fas fa-tools"></i>
         <h3>Attachments</h3>
      </div>
    </div>
    <div class="face face2">
      <div class="content">
        <p> Lorem ipsum dolor sit amet consectetur  Officia delectus illum perferendis maiores quia molestias vitae fugiat aspernatur alias corporis?</p>
        <a href="#" type="button">Read More</a>
      </div>
    </div>
    </div>  
 </div>
 

</div>
    <br/>
<div class="Zano" >
   

    

       </div>
   </div>
 </div>
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
   function applyBlurEffect() {
     document.body.classList.add('blur-effect');
   }
   
   function removeBlurEffect() {
     document.body.classList.remove('blur-effect');
   }
 </script>
<script>
    import Swiper from 'swiper';

// تكوين Swiper
const mySwiper = new Swiper('.swiper-container', {
    // إعدادات Swiper الإضافية هنا
    loop: true, // تكرار الشرائح
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

</script>

     <link rel="javescrupt" href="{{ asset('js/wow.min.js') }}">
     <script src="assets/vendor/php-email-form/validate.js"></script>
     <script src="assets/vendor/aos/aos.js"></script>
  </body>
</html>
