<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Product</title>
  <link rel='stylesheet' href='https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'><link rel="stylesheet" href="./style.css">
<style>
  /* 12columns.css | Created by Katherine Kato | Released under the MIT license */
/* GitHub: https://kathykato.github.io/12columns/ */
@import url("https://fonts.googleapis.com/css?family=Pontano+Sans");
.container {
  margin: auto;
  padding: 0 1rem;
  max-width: 71.25rem;
  width: 100%;
}

.grid {
  display: flex;
  flex-direction: column;
  flex-flow: row wrap;
}
.grid > [class*=column-] {
  display: block;
}

.first {
  order: -1;
}

.last {
  order: 12;
}

.align-top {
  align-items: start;
}

.align-center {
  align-items: center;
}

.align-bottom {
  align-items: end;
}

.column-xs-1 {
  flex-basis: 8.3333333333%;
  max-width: 8.3333333333%;
}

.column-xs-2 {
  flex-basis: 16.6666666667%;
  max-width: 16.6666666667%;
}

.column-xs-3 {
  flex-basis: 25%;
  max-width: 25%;
}

.column-xs-4 {
  flex-basis: 33.3333333333%;
  max-width: 33.3333333333%;
}

.column-xs-5 {
  flex-basis: 41.6666666667%;
  max-width: 41.6666666667%;
}

.column-xs-6 {
  flex-basis: 50%;
  max-width: 50%;
}

.column-xs-7 {
  flex-basis: 58.3333333333%;
  max-width: 58.3333333333%;
}

.column-xs-8 {
  flex-basis: 66.6666666667%;
  max-width: 66.6666666667%;
}

.column-xs-9 {
  flex-basis: 75%;
  max-width: 75%;
}

.column-xs-10 {
  flex-basis: 83.3333333333%;
  max-width: 83.3333333333%;
}

.column-xs-11 {
  flex-basis: 91.6666666667%;
  max-width: 91.6666666667%;
}

.column-xs-12 {
  flex-basis: 100%;
  max-width: 100%;
}

@media (min-width: 48rem) {
  .column-sm-1 {
    flex-basis: 8.3333333333%;
    max-width: 8.3333333333%;
  }

  .column-sm-2 {
    flex-basis: 16.6666666667%;
    max-width: 16.6666666667%;
  }

  .column-sm-3 {
    flex-basis: 25%;
    max-width: 25%;
  }

  .column-sm-4 {
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-sm-5 {
    flex-basis: 41.6666666667%;
    max-width: 41.6666666667%;
  }

  .column-sm-6 {
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-sm-7 {
    flex-basis: 58.3333333333%;
    max-width: 58.3333333333%;
  }

  .column-sm-8 {
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }

  .column-sm-9 {
    flex-basis: 75%;
    max-width: 75%;
  }

  .column-sm-10 {
    flex-basis: 83.3333333333%;
    max-width: 83.3333333333%;
  }

  .column-sm-11 {
    flex-basis: 91.6666666667%;
    max-width: 91.6666666667%;
  }

  .column-sm-12 {
    flex-basis: 100%;
    max-width: 100%;
  }
}
@media (min-width: 62rem) {
  .column-md-1 {
    flex-basis: 8.3333333333%;
    max-width: 8.3333333333%;
  }

  .column-md-2 {
    flex-basis: 16.6666666667%;
    max-width: 16.6666666667%;
  }

  .column-md-3 {
    flex-basis: 25%;
    max-width: 25%;
  }

  .column-md-4 {
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-md-5 {
    flex-basis: 41.6666666667%;
    max-width: 41.6666666667%;
  }

  .column-md-6 {
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-md-7 {
    flex-basis: 58.3333333333%;
    max-width: 58.3333333333%;
  }

  .column-md-8 {
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }

  .column-md-9 {
    flex-basis: 75%;
    max-width: 75%;
  }

  .column-md-10 {
    flex-basis: 83.3333333333%;
    max-width: 83.3333333333%;
  }

  .column-md-11 {
    flex-basis: 91.6666666667%;
    max-width: 91.6666666667%;
  }

  .column-md-12 {
    flex-basis: 100%;
    max-width: 100%;
  }
}
@media (min-width: 75rem) {
  .column-lg-1 {
    flex-basis: 8.3333333333%;
    max-width: 8.3333333333%;
  }

  .column-lg-2 {
    flex-basis: 16.6666666667%;
    max-width: 16.6666666667%;
  }

  .column-lg-3 {
    flex-basis: 25%;
    max-width: 25%;
  }

  .column-lg-4 {
    flex-basis: 33.3333333333%;
    max-width: 33.3333333333%;
  }

  .column-lg-5 {
    flex-basis: 41.6666666667%;
    max-width: 41.6666666667%;
  }

  .column-lg-6 {
    flex-basis: 50%;
    max-width: 50%;
  }

  .column-lg-7 {
    flex-basis: 58.3333333333%;
    max-width: 58.3333333333%;
  }

  .column-lg-8 {
    flex-basis: 66.6666666667%;
    max-width: 66.6666666667%;
  }

  .column-lg-9 {
    flex-basis: 75%;
    max-width: 75%;
  }

  .column-lg-10 {
    flex-basis: 83.3333333333%;
    max-width: 83.3333333333%;
  }

  .column-lg-11 {
    flex-basis: 91.6666666667%;
    max-width: 91.6666666667%;
  }

  .column-lg-12 {
    flex-basis: 100%;
    max-width: 100%;
  }
}
@supports (display: grid) {
  .grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: auto;
  }
  .grid > [class*=column-] {
    margin: 0;
    max-width: 100%;
  }

  .column-xs-1 {
    grid-column-start: span 1;
    grid-column-end: span 1;
  }

  .column-xs-2 {
    grid-column-start: span 2;
    grid-column-end: span 2;
  }

  .column-xs-3 {
    grid-column-start: span 3;
    grid-column-end: span 3;
  }

  .column-xs-4 {
    grid-column-start: span 4;
    grid-column-end: span 4;
  }

  .column-xs-5 {
    grid-column-start: span 5;
    grid-column-end: span 5;
  }

  .column-xs-6 {
    grid-column-start: span 6;
    grid-column-end: span 6;
  }

  .column-xs-7 {
    grid-column-start: span 7;
    grid-column-end: span 7;
  }

  .column-xs-8 {
    grid-column-start: span 8;
    grid-column-end: span 8;
  }

  .column-xs-9 {
    grid-column-start: span 9;
    grid-column-end: span 9;
  }

  .column-xs-10 {
    grid-column-start: span 10;
    grid-column-end: span 10;
  }

  .column-xs-11 {
    grid-column-start: span 11;
    grid-column-end: span 11;
  }

  .column-xs-12 {
    grid-column-start: span 12;
    grid-column-end: span 12;
  }

  @media (min-width: 48rem) {
    .column-sm-1 {
      grid-column-start: span 1;
      grid-column-end: span 1;
    }

    .column-sm-2 {
      grid-column-start: span 2;
      grid-column-end: span 2;
    }

    .column-sm-3 {
      grid-column-start: span 3;
      grid-column-end: span 3;
    }

    .column-sm-4 {
      grid-column-start: span 4;
      grid-column-end: span 4;
    }

    .column-sm-5 {
      grid-column-start: span 5;
      grid-column-end: span 5;
    }

    .column-sm-6 {
      grid-column-start: span 6;
      grid-column-end: span 6;
    }

    .column-sm-7 {
      grid-column-start: span 7;
      grid-column-end: span 7;
    }

    .column-sm-8 {
      grid-column-start: span 8;
      grid-column-end: span 8;
    }

    .column-sm-9 {
      grid-column-start: span 9;
      grid-column-end: span 9;
    }

    .column-sm-10 {
      grid-column-start: span 10;
      grid-column-end: span 10;
    }

    .column-sm-11 {
      grid-column-start: span 11;
      grid-column-end: span 11;
    }

    .column-sm-12 {
      grid-column-start: span 12;
      grid-column-end: span 12;
    }
  }
  @media (min-width: 62rem) {
    .column-md-1 {
      grid-column-start: span 1;
      grid-column-end: span 1;
    }

    .column-md-2 {
      grid-column-start: span 2;
      grid-column-end: span 2;
    }

    .column-md-3 {
      grid-column-start: span 3;
      grid-column-end: span 3;
    }

    .column-md-4 {
      grid-column-start: span 4;
      grid-column-end: span 4;
    }

    .column-md-5 {
      grid-column-start: span 5;
      grid-column-end: span 5;
    }

    .column-md-6 {
      grid-column-start: span 6;
      grid-column-end: span 6;
    }

    .column-md-7 {
      grid-column-start: span 7;
      grid-column-end: span 7;
    }

    .column-md-8 {
      grid-column-start: span 8;
      grid-column-end: span 8;
    }

    .column-md-9 {
      grid-column-start: span 9;
      grid-column-end: span 9;
    }

    .column-md-10 {
      grid-column-start: span 10;
      grid-column-end: span 10;
    }

    .column-md-11 {
      grid-column-start: span 11;
      grid-column-end: span 11;
    }

    .column-md-12 {
      grid-column-start: span 12;
      grid-column-end: span 12;
    }
  }
  @media (min-width: 75rem) {
    .column-lg-1 {
      grid-column-start: span 1;
      grid-column-end: span 1;
    }

    .column-lg-2 {
      grid-column-start: span 2;
      grid-column-end: span 2;
    }

    .column-lg-3 {
      grid-column-start: span 3;
      grid-column-end: span 3;
    }

    .column-lg-4 {
      grid-column-start: span 4;
      grid-column-end: span 4;
    }

    .column-lg-5 {
      grid-column-start: span 5;
      grid-column-end: span 5;
    }

    .column-lg-6 {
      grid-column-start: span 6;
      grid-column-end: span 6;
    }

    .column-lg-7 {
      grid-column-start: span 7;
      grid-column-end: span 7;
    }

    .column-lg-8 {
      grid-column-start: span 8;
      grid-column-end: span 8;
    }

    .column-lg-9 {
      grid-column-start: span 9;
      grid-column-end: span 9;
    }

    .column-lg-10 {
      grid-column-start: span 10;
      grid-column-end: span 10;
    }

    .column-lg-11 {
      grid-column-start: span 11;
      grid-column-end: span 11;
    }

    .column-lg-12 {
      grid-column-start: span 12;
      grid-column-end: span 12;
    }
  }
}
* {
  box-sizing: border-box;
}
*::before, *::after {
  box-sizing: border-box;
}

body {
  font-family: "Pontano Sans", sans-serif;
  font-size: 1.125rem;
  line-height: 1.5;
  margin: 0;
  padding: 0;
  color: #888;
  background: #fff;
  text-rendering: optimizeLegibility;
}

ul {
  padding: 0;
  margin: 0;
  list-style: none;
}
ul li {
  margin: 0 1.75rem 0 0;
}

a {
  color: #888;
  text-decoration: none;
  transition: all 0.2s ease;
}
a:hover {
  color: #333;
}
a.active {
  color: #333;
}

h1, h2, h3, h4 {
  color: #333;
  font-weight: normal;
  margin: 1.75rem 0 1rem 0;
}

h1 {
  font-size: 2.5rem;
}

h2 {
  font-size: 2.125rem;
  margin: 0;
}

h3 {
  font-size: 2rem;
}

h4 {
  font-size: 1.5rem;
  margin: 1rem 0 0.5rem 0;
}

section {
  display: block;
}

img {
  max-width: 100%;
  height: auto;
  -o-object-fit: cover;
     object-fit: cover;
}

nav {
  display: block;
}
nav li {
  font-size: 1.125rem;
  margin: 0;
}

.flex-nav ul {
  position: absolute;
  z-index: 1;
  list-style: none;
  margin: 0;
  padding: 0;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  display: none;
  width: 100%;
  left: 0;
  padding: 1rem;
  background: #fff;
  text-align: center;
}
.flex-nav ul.active {
  display: flex;
}
.flex-nav ul li {
  margin: 0.5rem 0;
}

.toggle-nav {
  display: flex;
  justify-content: flex-end;
  font-size: 1.125rem;
  line-height: 1.7;
  margin: 1rem 0;
}
.toggle-nav i {
  font-size: 1.5rem;
  line-height: 1.4;
  margin: 0 0 0 0.5rem;
}

#highlight {
  color: #333;
  font-size: 1.125rem;
  text-transform: uppercase;
}

.price {
  margin: 0;
}

.breadcrumb-list {
  display: flex;
  flex-wrap: wrap;
  padding: 0;
  margin: 1rem 0 0 0;
  list-style: none;
}
.breadcrumb-list li {
  font-size: 0.85rem;
  letter-spacing: 0.125rem;
  text-transform: uppercase;
}

.breadcrumb-item.active {
  color: #333;
}
.breadcrumb-item + .breadcrumb-item::before {
  content: "/";
  display: inline-block;
  padding: 0 0.5rem;
  color: #d5d5d5;
}

.description {
  border-top: 0.0625rem solid #e3dddd;
  margin: 2rem 0;
  padding: 1rem 0 0 0;
}

.add-to-cart {
  position: relative;
  display: inline-block;
  background: #3e3e3f;
  color: #fff;
  border: none;
  border-radius: 0;
  padding: 1.25rem 2.5rem;
  font-size: 1rem;
  text-transform: uppercase;
  cursor: pointer;
  transform: translateZ(0);
  transition: color 0.3s ease;
  letter-spacing: 0.0625rem;
}
.add-to-cart:hover::before {
  transform: scaleX(1);
}
.add-to-cart::before {
  position: absolute;
  content: "";
  z-index: -1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #565657;
  transform: scaleX(0);
  transform-origin: 0 50%;
  transition: transform 0.3s ease-out;
}

.container {
  margin: auto;
  padding: 0 1rem;
  max-width: 75rem;
  width: 100%;
}

.grid > [class*=column-] {
  padding: 1rem;
}
.grid.menu, .grid.product {
  border-bottom: 0.0625rem solid #e3dddd;
}
.grid.menu > [class*=column-] {
  padding: 0.5rem 1rem 0.5rem 1rem;
}
.grid.product {
  padding: 0 0 1.5rem 0;
}
.grid.second-nav > [class*=column-] {
  padding: 0.5rem 1rem;
}

footer {
  padding: 1rem 0;
  text-align: center;
}

.product-image {
  display: none;
}

.image-list li {
  margin: 0;
}

@media (min-width: 62rem) {
  .product-image img, .image-list img {
    width: 100%;
  }

  .product-image {
    display: block;
  }
  .product-image img {
    height: 52vh;
  }
  .product-image img.active {
    display: block;
    margin: 0 0 0.75rem 0;
  }

  .image-list {
    display: flex;
    overflow: hidden;
  }
  .image-list li {
    margin: 0 0.75rem 0 0;
    flex-basis: 100%;
  }
  .image-list li:nth-child(3) {
    margin: 0;
  }
  .image-list img {
    height: 10rem;
    width: 100%;
    transition: opacity 0.3s ease;
    cursor: pointer;
  }
  .image-list img:hover {
    opacity: 0.7;
  }

  nav ul {
    justify-content: flex-end;
  }

  .toggle-nav {
    display: none;
  }

  .flex-nav {
    display: block;
  }
  .flex-nav ul {
    display: flex;
    flex-direction: row;
    position: relative;
    justify-content: flex-end;
  }
  .flex-nav ul li {
    font-size: 1.125rem;
    margin: 0 1.5rem 0 0;
  }
  .flex-nav ul li:nth-child(4) {
    margin: 0;
  }
}
@-webkit-keyframes fadeImg {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes fadeImg {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<nav class="flex-nav">
  <div class="container">
    <div class="grid menu">
      <div class="column-xs-8 column-md-6">
        <p id="highlight">ShopShop</p>
      </div>
      <div class="column-xs-4 column-md-6">
        <a href="#" class="toggle-nav">Menu <i class="ion-navicon-round"></i></a>
        <ul>
          <li class="nav-item"><a href="#">Products</a></li>
          <li class="nav-item"><a href="#">About</a></li>
          <li class="nav-item"><a href="#">My Account</a></li>
          <li class="nav-item"><a href="#">Cart (0)</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<main>
  <div class="container">
    <div class="grid second-nav">
      <div class="column-xs-12">
        <nav>
          <ol class="breadcrumb-list">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Household Plants</a></li>
            <li class="breadcrumb-item active">Bonsai</li>
          </ol>
        </nav>
      </div>
    </div>
    <div class="grid product">
      <div class="column-xs-12 column-md-7">
        <div class="product-gallery">
          <div class="product-image">
            <img class="active" src="https://source.unsplash.com/W1yjvf5idqA">
          </div>
          <ul class="image-list">
            <li class="image-item"><img src="https://source.unsplash.com/W1yjvf5idqA"></li>
            <li class="image-item"><img src="https://source.unsplash.com/VgbUxvW3gS4"></li>
            <li class="image-item"><img src="https://source.unsplash.com/5WbYFH0kf_8"></li>
          </ul>
        </div>
      </div>
      <div class="column-xs-12 column-md-5">
        <h1>Bonsai</h1>
        <h2>$19.99</h2>
        <div class="description">
          <p>The purposes of bonsai are primarily contemplation for the viewer, and the pleasant exercise of effort and ingenuity for the grower.</p>
          <p>By contrast with other plant cultivation practices, bonsai is not intended for production of food or for medicine. Instead, bonsai practice focuses on long-term cultivation and shaping of one or more small trees growing in a container.</p>
        </div>
        <button class="add-to-cart">Add To Cart</button>
      </div>
    </div>
    <div class="grid related-products">
      <div class="column-xs-12">
        <h3>You may also like</h3>
      </div>
      <div class="column-xs-12 column-md-4">
        <img src="https://source.unsplash.com/miziNqvJx5M">
        <h4>Succulent</h4>
        <p class="price">$19.99</p>
      </div>
      <div class="column-xs-12 column-md-4">
        <img src="https://source.unsplash.com/2y6s0qKdGZg">
        <h4>Terranium</h4>
        <p class="price">$19.99</p>
      </div>
      <div class="column-xs-12 column-md-4">
        <img src="https://source.unsplash.com/6Rs76hNbIWE">
        <h4>Cactus</h4>
        <p class="price">$19.99</p>
      </div>
    </div>
  </div>
</main>
<footer>
  <div class="grid">
    <div class="column-xs-12">
      <p class="copyright">&copy; Copyright 2018 <a href="https://katherinekato.com" title="Katherine Kato"  target="_blank">Katherine Kato</a></p>
    </div>
  </div>
</footer>
<!-- partial -->
  <script  src="../../public/is/script.js"></script>

</body>
</html>
