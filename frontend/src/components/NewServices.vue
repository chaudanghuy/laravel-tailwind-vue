<template>
<!--? Popular Directory Start -->
<div class="popular-directorya-area section-padding40 border-bottom fix">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Section Tittle -->
        <div class="section-tittle text-center mb-20">
          <h2>New Directory</h2>
          <p>Let's uncover the best places to eat, drink, and shop nearest to you.</p>
        </div>
      </div>
    </div>
    <div class="directory-active">
      <!-- Single -->
      <div class="properties pb-20">
        <div class="properties__card">
          <div class="properties__img overlay1">
            <a href="#"><img src="/src/assets/img/gallery/newDirectory1.png" alt=""></a>
            <div class="img-text">
              <span>$</span>
              <span>Closed</span>
            </div>
            <div class="icon">
              <img src="/src/assets/img/gallery/categori_icon1.png" alt="">
            </div>
          </div>
          <div class="properties__caption">
            <h3><a href="#">Urban areas</a></h3>
            <p>Let's uncover the best places to eat, drink</p>
          </div>
          <div class="properties__footer d-flex justify-content-between align-items-center">
            <div class="restaurant-name">
              <img src="/src/assets/img/gallery/restaurant-icon.png" alt="">
              <h3>Food & Restaurant</h3>
            </div>
            <div class="heart">
              <img src="/src/assets/img/gallery/heart1.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Single -->
      <div class="properties pb-20">
        <div class="properties__card">
          <div class="properties__img overlay1">
            <a href="#"><img src="/src/assets/img/gallery/newDirectory2.png" alt=""></a>
            <div class="img-text">
              <span>$</span>
              <span>Closed</span>
            </div>
            <div class="icon">
              <img src="/src/assets/img/gallery/categori_icon1.png" alt="">
            </div>
          </div>
          <div class="properties__caption">
            <h3><a href="#">Urban areas</a></h3>
            <p>Let's uncover the best places to eat, drink</p>
          </div>
          <div class="properties__footer d-flex justify-content-between align-items-center">
            <div class="restaurant-name">
              <img src="/src/assets/img/gallery/restaurant-icon.png" alt="">
              <h3>Food & Restaurant</h3>
            </div>
            <div class="heart">
              <img src="/src/assets/img/gallery/heart1.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Single -->
      <div class="properties pb-20">
        <div class="properties__card">
          <div class="properties__img overlay1">
            <a href="#"><img src="/src/assets/img/gallery/newDirectory3.png" alt=""></a>
            <div class="img-text">
              <span>$</span>
              <span>Closed</span>
            </div>
            <div class="icon">
              <img src="/src/assets/img/gallery/categori_icon1.png" alt="">
            </div>
          </div>
          <div class="properties__caption">
            <h3><a href="#">Urban areas</a></h3>
            <p>Let's uncover the best places to eat, drink</p>
          </div>
          <div class="properties__footer d-flex justify-content-between align-items-center">
            <div class="restaurant-name">
              <img src="/src/assets/img/gallery/restaurant-icon.png" alt="">
              <h3>Food & Restaurant</h3>
            </div>
            <div class="heart">
              <img src="/src/assets/img/gallery/heart1.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- Single -->
      <div class="properties pb-20">
        <div class="properties__card">
          <div class="properties__img overlay1">
            <a href="#"><img src="/src/assets/img/gallery/properties1.png" alt=""></a>
            <div class="img-text">
              <span>$</span>
              <span>Closed</span>
            </div>
            <div class="icon">
              <img src="/src/assets/img/gallery/categori_icon1.png" alt="">
            </div>
          </div>
          <div class="properties__caption">
            <h3><a href="#">Urban areas</a></h3>
            <p>Let's uncover the best places to eat, drink</p>
          </div>
          <div class="properties__footer d-flex justify-content-between align-items-center">
            <div class="restaurant-name">
              <img src="/src/assets/img/gallery/restaurant-icon.png" alt="">
              <h3>Food & Restaurant</h3>
            </div>
            <div class="heart">
              <img src="/src/assets/img/gallery/heart1.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Popular Directory End -->
</template>

<script>
export default {
  mounted() {
    $('.directory-active').slick({
      dots: false,
      infinite: true,
      autoplay: true,
      speed: 400,
      arrows: true,
      prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [{
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false
          }
        },
      ]
    });
  },
}
</script>
