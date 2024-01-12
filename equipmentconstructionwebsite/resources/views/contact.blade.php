<!DOCTYPE html>
<html>
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

   
    
    <link rel="stylesheet" href="{{ asset('css/styles3.css') }}">
  
   
  </head>
  <body >
<div class="container">
  

       <a href="#">
           <img class="logo" src="{{ asset('images/LOGO.svg') }}" alt="yy">
        </a>
<nav>
  <ul class="sidebar">
    <li class="hide-sidebar"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" style="fill: white;"height="24" viewBox="0 -960 960 960" width="24"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
    <li><a href="{{ route('welcome') }}"  class="menu-link"style=" margin-right: 15px;">الرئسية</a></a></li>
    <li><a href="#">الوظايف</a></li>
    <li><a href="#">من نحن </a></li>
    <li><a href="#">تواصل معنا</a></li>
    <li><a href="#">الوكالات</a></li>
   
    <li class="hideOnScreen"><a href="#">الرئيسهنن</a></li>
  </ul>
  <ul>
    <li ><a href="#">iiiالرئيسه</a></li>
    <li class="hideOnMobile list_item"><a href="#">الوظايف</a></li>
    <li class="hideOnMobile list_item"><a href="#">من نحن </a></li>
    <li class="hideOnMobile list_item"><a href="#">تواصل معنا</a></li>
    <li class="hideOnMobile list_item"><a href="#">الوكالات</a></li>
    
    <li class="hideOnMobile list_item">

      <span><a href=" {{route('Brands')}}" class="nav-link"> الوكالmات</a><i class="bx bx-chevron-right"></i></span>
       <div class="subnav megnav">
       
         <a href="{{route('Develon')}}"  class="subnav-link"> <img src="{{ asset('images/HD-DEVELON.svg') }}" alt="yy"></a>
         <a href="{{route('Bobcat')}}"  class="subnav-link"> <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy"></a>
         <a href="{{route('Bomag')}}"  class="subnav-link"> <img src="{{ asset('images/Bomag.svg') }}" alt="yy"></a>
         <a href="{{route('Kubota')}}"  class="subnav-link"> <img src="{{ asset('images/E-FARMTRAC.svg') }}" alt="yy"></a>
         <a href="{{route('Copaz')}}" class="subnav-link"> <img src="{{ asset('images/copaz.svg') }}" alt="yy"></a>
         <a href="{{route('KCP')}}"  class="subnav-link"> <img src="{{ asset('images/Bobcat_one_tough_animal_Black.svg') }}" alt="yy"></a>
        
       </div>
    </li>
    <li class="hideOnMobile"><a href="{{ route('welcome') }}"  style=" margin-right: 15px;">الرئيسه</a></li>
    <li  class="show-sidebar menu-botton  "><a href="#"><svg xmlns="http://www.w3.org/2000/svg"  style="fill: white;" height="24" viewBox="0 -960 960 960" width="24" style="color:white"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>

  </ul>
</nav>

<div class="Zano1">
  <img src="{{ asset('images/Layer_1.png') }}" alt="yy">
</div>

        <div class="containerZA">
          <!-- First column with 1fr -->
          <div> <p >
            <h2> &#9664; من نحن ؟ </h2>
            شركة بلو ترانجل للتجارة المحدودة عضو في مجموعة شركات عبد الله الرباعي التي تتخصص في عدة مجالات مختلفة
            مثل المقاولات والزراعة وأيضًا التجارة العامة تأسست الشركة في عام 2015 بشكل رسمي في الجمهورية اليمنية
            وتمكنت من بناء خبرة قوية وجيدة خلال السنوات منذ تأسيس شركة بلوتراتجل للتجارة المحدودة تخصصت الشركة في
            معدات البناء وآلات الحفر وأيضًا في مجال الطاقة، المعدات الزراعية معدات الرفع وأيضًا معدات واللات خاصة
            وقد أنشأت الشركة شبكة قوية جدًا وموثوق بها داخل وخارج اليمن مع العملاء والموردين قامت الشركة بتوسيع محفظة
            منتجاتها لتصبح موزعًا حصريًا لأكبر العلامات التجارية مثل شركة ديفلون الكورية (معدات دوسان الثقيلة سابقًا)
            ، شركة بوبكات التشيكية معدات البناء والحفر الخفيفة والمتوسطة) شركة بوماج الألمانية (معدات الأسفلت الثقيلة
            والخفيفة ، شركة فارم ترك من اسكرت كابوتا الهندية (حراثات زراعية خفيفة ومتوسطة شركة كوباز الكورية (معدات
            صيانة الطرقات وغيرها من العلامات التجارية الرائدة في المجال.
         </p></div>
          <div><img  src="{{ asset('images/BLUE_T.svg') }}" alt="yy"></div>
        
        </div>
       
        {{-- ----- --}}
        <!-- logo begin -->
        <div class="outer">
          <div class="outerLeft">
            <div class="inner innerLeft">
              <!-- Content of the left inner div -->
    
              <img  src="{{ asset('images/BLUE_T.svg') }}" alt="yy">
           
            </div>
            
          </div>
          <div class="outerRight">
            <div class="inner innerRight">
              <!-- Content of the right inner div -->
              <h2> &#9664; من نحن ؟ </h2>
              <p >
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

        {{-- ----- --}}
        <div class="outer">
          <div class="outerLeft">
            <div class="inner innerLeft">
              <!-- Content of the left inner div -->
              <img  src="{{ asset('images/BLUE_T.svg') }}" alt="yy">
              <h2>Left Content</h2>
              <p>This is the left side content.</p>
            </div>
          </div>
         
          <div class="outerRight">
           
            <div class="inner innerRight">
             
              <!-- Content of the right inner div -->
              <img  src="{{ asset('images/BLUE_T.svg') }}" alt="yy">
              <h2>Right Content</h2>
              <p>This is the right side content.</p>
            </div>
          </div>
          
          <div class="outerLeft">
            <div class="inner innerLeft">
              <!-- Content of the left inner div -->
              <img  src="{{ asset('images/BLUE_T.svg') }}" alt="yy">
              <h2>Left Content</h2>
              <p>This is the left side content.</p>
            </div>
          </div>
        </div>

 
	<div class="row">
			<h1>contact us</h1>
	</div>
	<div class="row">
			<h4 style="text-align:center">We'd love to hear from you!</h4>
	</div>
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" required />
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" required />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" required />
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="btn-lrg submit-btn">Send Message</div>
			</div>
	</div>

  <div >
    <div class="item item-1">1</div>
     <div class="item item-2">2</div>
     <div class="item item-3">3</div>
     <div class="item item-4">4</div> 
     <div class="item item-5">5</div>
    
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
    document.addEventListener('DOMContentLoaded', function () {
      const showSidebarButton = document.querySelector('.show-sidebar');
      const hideSidebarButton = document.querySelector('.hide-sidebar');
      const sidebar = document.querySelector('.sidebar');
  
      showSidebarButton.addEventListener('click', function () {
        sidebar.style.display = 'flex';
      });
  
      hideSidebarButton.addEventListener('click', function () {
        sidebar.style.display = 'none';
      });
    });
    function toggleBlurEffect() {
        var blurContainer = document.getElementById('blur-container');
        blurContainer.classList.toggle('blur-effect');
      }
  </script>
   
  
  </body>
</html>
