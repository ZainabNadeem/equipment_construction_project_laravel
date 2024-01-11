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
   
  </head>
  <body >
<div class="container">
       
        <!-- logo begin -->
           <div id="logo" >
            <a href="#">
                <img class="right" src="{{ asset('images/LOGO.svg') }}" alt="yy">
            </a>
          </div>
        <!-- logo close -->
      <div class="Zano1">  
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
                         <a href="{{route('Develon')}}" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_213_D-5_S_07a661affb.png') }}" alt="yy">
                            <span class="submenu-title">أسم المنتج</span>
                         </a>
                      </div>
                      <div class="submenu-inner">
                         <a href="{{route('Bobcat')}}" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_174_AP-5_S_d6c5327211 (1).png') }}" alt="yy">
                            <span class="submenu-title">أسم المنتج</span>
                         </a>
                      </div>
                      <div class="submenu-inner">
                         <a href="{{route('Bomag')}}" class="submenu-link">
                           <img src="{{ asset('images/csm_BW_213_D-5_S_07a661affb.png') }}" alt="yy">
                            <span class="submenu-title">أسم المنتج</span>
                         </a>
                      </div>
                      <div class="submenu-inner">
                         <a href="{{route('Kubota')}}" class="submenu-link">
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
 
               <div > 
               
                        <div class="zai">
                                 <div class="Zano-lefts" >
                                 <!-- Content of the left div -->
                                 <h1>           &nbsp;</h1>
                                 <img  src="{{ asset('images/BLUE_T.svg') }}" alt="yy">
                                 </div>
                                 <div  class="right">
                                    <!-- Content of the right div -->
                                 <h2  style="direction: rtl; ">  &#9664; من نحن ؟ </h2>  
                               
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
    </div>
</div>

 <div class="Zano">
      <div class="title-line">
         <h1 class="title right"> 
            &#9664; تواصل معنــا
         </h1>
         <div class="line right"> </div>
      </div>

      <div  class="Zano" >
 
        <div > 
                 <div style="display: flex; justify-content: space-between; font-family: 'Cairo';">
                          <div  class="left ;size:auto;"style="display: flex; justify-content: center; align-items: center;">
                            <div dir="ltr">
                              <div >
                                <div >
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15394.818710016818!2d44.2102585!3d15.2838927!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1603c51d66f2bccd%3A0x673489109e5bee!2sBlue%20Triangle%20Trading%20Limited!5e0!3m2!1sen!2s!4v1704610984949!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div style="text-align: justify; " class=" right ;size:auto; direction: rtl;" dir="rtl">
                                 
                                    <section id="contact" class="contact">
                                      <form action="forms/contact.php" method="post" class="php-email-form">
                                        <div >
                          
                                          <div >
                                            <input type="text" name="name" class="form-floating" placeholder="الاسم الاول" required >
                                            <input type="text" class="p" name="subject" placeholder=" اللقب" required>
                                          </div>
                                          <div >
                                            <input type="text" name="name" class="form-floating" placeholder="رقم التلفون" required >
                                            <input type="text" class="p" name="subject" placeholder=" الموضوع" required>
                                          </div>
                                          
                                          <div >
                                            <input type="email" class="form-floating" name="email" placeholder="الايميل" required>
                                          </div>
                          
                                          <div >
                                           
                                          </div>
                          
                                          <div >
                                            <textarea class="form-control" name="message" rows="6" placeholder="الرساله" required></textarea>
                                          </div>
                          
                                          <div>
                                            <div class="loading">Loading</div>
                                            <div class="error-message"></div>
                                            <div class="sent-message"> </div>
                          
                                           
                                              <button type="submit"class="my-button">أرســال</button>
                                          </div>
                          
                                        </div>
                                      </form>
                                     </section>  
                                    
                          </div>
                 </div>
                
        </div>
      
</div>

</div>
  <div class="zano1">
   <footer class="Zano" dir="rtl">
 <br>
 

      <div class="footer-col">
      <a href="#">
        <img class="right" src="{{ asset('images/LOGO2.svg') }}" alt="yy">
      </a>
    </div>
      <div class="row">
        <div class="footer-col">
          <h4>الروابــط المهمة</h4>
          <ul>
            <li><a href="#">من نحن</a></li>
            <li><a href="#">الوكالات</a></li>
            <li><a href="#">أخر الاخبار</a></li>
            <li><a href="#">الوظايف</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>الوكالات</h4>
          <ul>
            <li><a href="#">Develon</a></li>
            <li><a href="#">Bobcat</a></li>
            <li><a href="#">Bomag</a></li>
            <li><a href="#">Kubata</a></li>
            <li><a href="#">Copaz</a></li>
            <li><a href="#">KCP</a></li>
          </ul>
        </div>
      
       
        <div class="footer-col">
          <h4>تواصلو معنا </h4>
          <ul>
            <li><a href="#">
            اوقات الدوام :
            <br> 
            من السبت الى الاربعاء الساعة 8:30AM الى الساعة 1:00PM
            من السبت الى الاربعاء الساعة 4:00PM الى الساعة 8:00PM
            <br> 
            يوم الخميس من الساعة 8:30AM الى 1:00PM  
            </a></li>
            <li><a href="#">التلفونات</a></li>
            <li><a href="#">الموقع</a></li> 
          
            <li>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </li>
        </ul>
        </div>
        <div class="footer-col">
          <h4>الاشتراك</h4>
          <form action="#" method="post">
              <input type="email" name="email" placeholder="بريدك الإلكتروني" required>
              <button  type="submit">الاشتراك</button>
          </form>
      
        </div>
      </div>
  
  </footer>
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
