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

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="javescrupt" href="{{ asset('js/Search_event_lag.js') }}">
   
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
                <li class="menu-item"><a href="{{ route('welcome') }}"  class="menu-link"style=" margin-right: 15px;">الرئسية</a></li>
                <li class="menu-item"><a href="{{ route('about-us') }}"  class="menu-link">من نحن</a></li>
                <li class="menu-item menu-dropdown">
                   <a class="menu-link" href="{{ route('Brands') }}" >الوكالات<i class="bx bx-chevron-right"></i></a>
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
  <div >
    <div class="card-image" style="border: 1.2px solid rgba(255, 255, 255, 0.281);"> <img class="left  direction: ltr" src="{{ asset('images/Layer_1.png') }}" alt="yy"></div>
  </div>
  <div  class="Zano" >
 
               <div  dir="rtl"> 
               
                <h1>تطبيق اللوظايف</h1>

                <!-- Laravel Blade Form -->
                <form method="POST" action="{{ route('career.submit') }}">
                    @csrf
            
                    <label for="full_name">الاسم كامل:</label>
                    <input type="text" id="full_name" name="full_name" required><br><br>
            
                    <label for="email">الايميل:</label>
                    <input type="email" id="email" name="أيميل" required><br><br>
            
                    <label for="phone">رقم الهاتف:</label>
                    <input type="text" id="phone" name="phone" required><br><br>
            
                    <label for="resume">تحميل ال CV:</label>
                    <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required><br><br>
            
                    <label for="cover_letter">رسالة التوظيف:</label><br>
                    <textarea id="cover_letter" name="cover_letter" rows="4" cols="50" required></textarea><br><br>
            
                    <input type="submit" value="Submit">
                </form>
               
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
   <div class="Zano">
 
     <section dir="rtl">  
                     <div  class="card-top">
                                    <div class="card" >
                                       <img src="{{ asset('images/HD-DEVELON.svg') }}" alt="yy">
                                       <p>
                                          شركة اتش دي هيونداي انفراكور (شركة دوسان سابقا) هي شركة عالمية رائدة في مجال هندسة وتصنيع وتسويق معدات البناء المدمجة والثقيلة تم تصميم معدات ديفلون القوية للمساعدة في التغلب على أكبر التحديات التي تواجهك من خلال تقديم مكونات المساعد وتقنيات حديثة
                                       </p>
                                       <br/> <br/> <br/> <br/>
                                      
                                       <button class="my-button">تعرف على المزيد</button>
                                    </div>
                                    <hr class="my-vertical-line">   
                                    <div class="card" >
                                       <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy">
                                       <p > 
                                          تقود شركة بوبكات الصناعة في تصميم وتصنيع وتسويق وتوزيع المعدات المدمجة للبناء والتأجير والمناظر الطبيعية والزراعة وصيانة الأراضي والطرقات والمرافق والصناعة والتعدين نسعى جاهدين لتمكين عملائنا من القيام وظائفهم بشكل أكثر كفاءة وفعالية

                                       </p>
                                       <br/> <br/> <br/> <br/>
                                       
                                       <button class="my-button">تعرف على المزيد</button>
                                    </div>
                                    <hr class="my-vertical-line">
                                    <div class="card">
                                       <img src="{{ asset('images/Babcat_Mach_hand.svg') }}" alt="yy">
                                       <p>والأكثر صعوبة بفضل التصميم الفائق وأحدث التقنيات
                                          تطلب العمل الشاق أكثر المعدات موثوقية. توفر دوسان للطاقة المحمولة المعدات المتينة والمثبتة التي تحتاجها للتعامل بثقة مع المهام الأكبر والأكثر صعوبة بفضل التصميم الفائق وأحدث التقنيات

                                       </p>
                                       <br/> <br/> <br/> <br/>
                                       
                                       <button class="my-button">تعرف على المزيد</button>
                                    </div>

                                 
                              </div>
                                    <br/> <br/> 
                                    
                              <div class="card-top">
                                       <div class="card" >
                                          <img src="{{ asset('images/HD-DEVELON.svg') }}" alt="yy">
                                          <p>
                                             شركة اتش دي هيونداي انفراكور (شركة دوسان سابقا) هي شركة عالمية رائدة في مجال هندسة وتصنيع وتسويق معدات البناء المدمجة والثقيلة تم تصميم معدات ديفلون القوية للمساعدة في التغلب على أكبر التحديات التي تواجهك من خلال تقديم مكونات المساعد وتقنيات حديثة
                                          </p>
                                          <br/> <br/> <br/> <br/>
                                         
                                          <button class="my-button">تعرف على المزيد</button>
                                       </div>
                                       <hr class="my-vertical-line">   
                                       <div class="card" >
                                          <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy">
                                          <p > 
                                             تقود شركة بوبكات الصناعة في تصميم وتصنيع وتسويق وتوزيع المعدات المدمجة للبناء والتأجير والمناظر الطبيعية والزراعة وصيانة الأراضي والطرقات والمرافق والصناعة والتعدين نسعى جاهدين لتمكين عملائنا من القيام وظائفهم بشكل أكثر كفاءة وفعالية
                  
                                          </p>
                                         
                                          <br/> <br/> <br/> <br/>
                                          <button class="my-button">تعرف على المزيد</button>
                                       </div>
                                       <hr class="my-vertical-line">
                                       <div class="card">
                                          <img src="{{ asset('images/Babcat_Mach_hand.svg') }}" alt="yy">
                                          <p>والأكثر صعوبة بفضل التصميم الفائق وأحدث التقنيات
                                             تطلب العمل الشاق أكثر المعدات موثوقية. توفر دوسان للطاقة المحمولة المعدات المتينة والمثبتة التي تحتاجها للتعامل بثقة مع المهام الأكبر والأكثر صعوبة بفضل التصميم الفائق وأحدث التقنيات
                  
                                          </p>
                                          <br/> <br/> <br/> <br/>
                                         
                                          <button class="my-button">تعرف على المزيد</button>
                                       </div>
                                  </div>
                                    
                           

                  </section>
               
    </div>  
    <br/>
<div class="Zano" >
   <div class="title-line">
      <h1 class="title right"> 
         &#9664; أخر الأخبار
      </h1>
      <div class="line right">  </div>
      
    </div>

   </div>
   <div class="event-container" class="spacer" dir="rtl">
      <div class="event">
        <img src="{{ asset('images/manager.jpg') }}" alt="صورة الحدث">
        <div class="event-details">
          <h3>رافعات دوسان</h3>
          <p>
            أبجد هوز حطي كلمن سعفص قرشت ثخذ ضظغ. يجمع شصى زكر طظف ضعغ سلمن بخت. قدر سمعن صعغ ضفظ عشغ غظف ثمق. كلمن سعفص قرشت ثخذ ضظغ يجمع شصى زكر طظف ضعغ سلمن بخت. قدر سمعن صعغ ضفظ عشغ غظف ثمق
         </p>
          <a href="#" class="more-link"> تعرف على المزيد</a>
        </div>
      </div>
      <hr class="my-vertical-line1">
      <div class="event">
        <img  src="{{ asset('images/manager.jpg') }}" alt="صورة الحدث">
        <div class="event-details">
          <h3>عنوان الحدث</h3>
          <p>

            أبجد هوز حطي كلمن سعفص قرشت ثخذ ضظغ. يجمع شصى زكر طظف ضعغ سلمن بخت. قدر سمعن صعغ ضفظ عشغ غظف ثمق. كلمن سعفص قرشت ثخذ ضظغ يجمع شصى زكر طظف ضعغ سلمن بخت. قدر سمعن صعغ ضفظ عشغ غظف ثمق

          </p>
          <a href="#" class="more-link"> تعرف على المزيد</a>
        </div>
      </div>
      @section('content')
    <h1>Contact Us</h1>
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <!-- Form fields (name, email, message, etc.) -->
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <!-- Other form fields -->

        <button type="submit">Submit</button>
    </form>
    @endsection
    </div>
    <div class="Zano">
      <div class="title-line">
         <h1 class="title right"> 
            &#9664; تواصل معنــا
         </h1>
         <div class="line right"> 
         </div>
         
       </div>
       <section id="contact" class="contact">
         <div class="section-title" data-aos="fade-up">
            <h2>تواصـــل </h2>
            <p> شركــة بلواترنجل للمعدات الثقيل</p>
          </div>
          
      <div  data-aos="fade-up"   dir="rtl" data-aos-delay="100">

         <div class="row gy-4">
 
          
           <div class="right-item">
             <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
               <div class="row gy-4">
 
                 <div class="col-md-6">
                   <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                 </div>
 
                 <div class="col-md-6 ">
                   <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                 </div>
 
                 <div class="col-md-12">
                   <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                 </div>
 
                 <div class="col-md-12">
                   <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                 </div>
 
                 <div class="col-md-12 text-center">
                   <div class="loading">Loading</div>
                   <div class="error-message"></div>
                   <div class="sent-message">Your message has been sent. Thank you!</div>
 
                   <button type="submit">Send Message</button>
                 </div>
 
               </div>
             </form>
           </div><!-- End Contact Form -->
 
         </div>
 
       </div>
 
       </section>
  <div>


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

     <link rel="javescrupt" href="{{ asset('js/wow.min.js') }}">
     <script src="assets/vendor/php-email-form/validate.js"></script>
     <script src="assets/vendor/aos/aos.js"></script>
  </body>
</html>
