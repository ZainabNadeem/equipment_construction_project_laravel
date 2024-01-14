<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Develon</title>
  <style>
    /* Paste your CSS code here */
    /* ... */
  </style>
   <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
   <link rel="javescrupt" href="{{ asset('js/Search_event_lag.js') }}">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

</head>
<body>

    <div class="container">
       
       <!-- partial:index.partial.html -->
<div class="page-wrapper">
  <div class="nav-wrapper">
   <div class="grad-bar"></div>
   <nav class="navbar">
     <img src="https://upload.wikimedia.org/wikipedia/en/thumb/c/c8/Bluestar_%28bus_company%29_logo.svg/1280px-Bluestar_%28bus_company%29_logo.svg.png" alt="Company Logo">
     <div class="menu-toggle" id="mobile-menu">
       <span class="bar"></span>
       <span class="bar"></span>
       <span class="bar"></span>
     </div>
     <ul class="nav no-search">
       <li class="nav-item"><a href="#">الرئسية</a></li>
       <li class="nav-item"><a href="#">About</a></li>
       <li class="nav-item"><a href="#">Work</a></li>
       <li class="nav-item"><a href="#">Careers</a></li>
       <li class="nav-item"><a href="#">Contact Us</a></li>
       <i class="fas fa-search" id="search-icon"></i>
       <input class="search-input" type="text" placeholder="Search..">
     </ul>
   </nav>
   </div>
   <section class="headline">
     <h1>Responsive Navigation</h1>
     <p>Using CSS grid and flexbox to easily build navbars!</p>
   </section>
   <section class="features">
     <div class="feature-container">
       <img src="https://cdn-images-1.medium.com/max/2000/1*HFAEJvVOq4AwFuBivNu_OQ.png" alt="Flexbox Feature">
       <h2>Flexbox Featured</h2>
       <p>This pen contains use of flexbox for the headline and feature section! We use it in our mobile navbar and show the power of mixing css grid and flexbox.</p>
     </div>
     <div class="feature-container">
       <img src="https://blog.webix.com/wp-content/uploads/2017/06/20170621-CSS-Grid-Layout-710x355-tiny.png" alt="Flexbox Feature">
       <h2>CSS Grid Navigation</h2>
       <p>While flexbox is used for the the mobile navbar, CSS grid is used for the desktop navbar showing many ways we can use both.</p>
     </div>
     <div class="feature-container">
       <img src="https://www.graycelltech.com/wp-content/uploads/2015/06/GCT-HTML5.jpg" alt="Flexbox Feature">
       <h2>Basic HTML5</h2>
       <p>This pen contains basic html to setup the page to display the responsive navbar.</p>
     </div>
   </section>
 </div>
 <div >
   <main class="grid">
     <article>
       <img src="https://vangogh.teespring.com/v3/image/-OpCH5guL7iRy6xu4D7E7xWz9K8/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>Police Unit K-9</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 13 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/police-unit-k-9?cid=2759&page=1&pid=46&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/EzMTyEjKh-lwGS0DEHSCd31VwRE/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>If you call one dog</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 9 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/new-if-you-call-one-dog-you-in?cid=2753&page=1&pid=46&sid=front&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/bK43tppPNyqAOvmwmpzkMQxbvCo/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>Husky</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 19 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/husky-2945?cid=2752&page=1&pid=46&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/8KXofRZsEIbiARS5hTN7XbGl-0Y/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>Life is too short</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 12 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/new-life-is-too-short-to-just?cid=2739&page=1&pid=46&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/j7DemEbwCEV6GAmDyjZUhvqmC6s/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>Beware of dog</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 20 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/beware-of-dog-4503?cid=2756&page=1&pid=46&sid=front&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/913eK8V6wtGK4SkxJSTJDin2yCI/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>Did Someone Say Walk ?</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 8 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/new-did-someone-say-walk?cid=2753&page=1&pid=46&sid=front&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/JacE4rqPe8_g1OHuhxkse4oHCSk/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>The world is my canvas</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 12 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/the-world-is-my-canvas-2019?cid=2744&page=1&pid=46&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/NyIVcQ8H1ZddoIJ4GaRpkbXEF_0/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>I Love My Dog</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 13 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/i-love-my-dog-7671?cid=2739&page=1&pid=46&sid=front&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/tC0GMw6YP_eMTf0-3mXw0TZ_V18/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>My therapist has paws</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 14 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/new-my-therapist-has-paws-and?cid=103391&page=1&pid=46&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/isOCz7gsi6pnXvgAu1rSgjC9aJs/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>Daisy the flower dog</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 14 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/daisy-the-flower-dog?tsmac=store&tsmic=dog-lover-graphic-design&pid=2&cid=6046&sid=front"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/Lh1U0IhMnRta1M3VfHBGfc_4SvM/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>Golden retriever</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 8 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/golden-retriever-4834?page=1&pid=46&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/hY4yzpmqVedVrPihwhIMBQnx-OE/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>Puppy dog logo</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 11 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/puppy-dog-september-2019?page=1&pid=46&tsmac=store&tsmic=dog-lover-graphic-design&cid=2740"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/a2AcclBxW3cRoi6RdquKrdZOWak/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>We must speak</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 12 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/we-must-speak-for-those-who-ca?cid=103391&page=1&pid=46&sid=front&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/_MJgqBh4RhQ3CYirnSLIkzMOej0/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>Mother of dogs</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 1 color is 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/mother-of-dogs-september-2019?page=1&pid=46&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
     <article>
       <img src="https://vangogh.teespring.com/v3/image/hyQnctk92EA1iu0rq3YkSWVN3Gw/480/560.jpg" alt="tshirt photo">
       <div class="text">
         <h3>Did I Do That?</h3>
         <p>by <a href="https://teespring.com/stores/dog-lover-graphic-design">Dog Lover Graphic Design</a></p>
         <p>Material: 4.3 oz., 8 colors are 100% combed ringspun cotton. Machine Wash Cold, Tumble Dry Low. Sizing offered: XS - 3XL</p>
         <a href="https://teespring.com/fr/new-did-i-do-that?cid=101361&page=1&pid=46&tsmac=store&tsmic=dog-lover-graphic-design"
            class="btn btn-primary btn-block">Add to cart</a>
       </div>
     </article>
   </main>
 </div>
 <!-- partial -->
  
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
<!-- Add jQuery library -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Wrap your JavaScript code inside a document ready function -->
<script type="text/javascript">
    $(document).ready(function() {
        $("#search-icon").click(function() {
            $(".nav").toggleClass("search");
            $(".nav").toggleClass("no-search");
            $(".search-input").toggleClass("search-active");
        });

        $('.menu-toggle').click(function() {
            $(".nav").toggleClass("mobile-nav");
            $(this).toggleClass("is-active");
        });
    });
</script>


</body>
</html>
