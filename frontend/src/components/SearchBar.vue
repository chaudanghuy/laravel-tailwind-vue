<template>
<!--? Hero Area Start-->
<div class="slider-area hero-bg1 hero-overly">
  <div class="single-slider hero-overly  slider-height1 d-flex align-items-center">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-10">
          <!-- Hero Caption -->
          <div class="hero__caption pt-100">
            <h1>Explore Australia</h1>
            <p>Let's uncover the best places to eat, drink, and shop nearest to you.</p>
          </div>
          <!--Hero form -->
          <form action="#" class="search-box mb-100">
            <div class="input-form">
              <input type="text" placeholder="What are you finding?">
            </div>
            <div class="select-form">
              <div class="select-itms">
                <select name="select" id="select1">
                  <option value="">In where?</option>
                  <option value="">Catagories One</option>
                  <option value="">Catagories Two</option>
                  <option value="">Catagories Three</option>
                  <option value="">Catagories Four</option>
                </select>
              </div>
            </div>
            <div class="search-form">
              <a href="#"><i class="ti-search"></i> Search</a>
            </div>
          </form>
          <!-- hero category1 img -->
          <div class="category-img text-center">
            <a href="listing.html"> <img src="/src/assets/img/gallery/hero_category1.png" alt=""></a>
            <a href="listing.html"> <img src="/src/assets/img/gallery/hero_category2.png" alt=""></a>
            <a href="listing.html"> <img src="/src/assets/img/gallery/hero_category3.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Hero Area End-->
</template>

<script>
export default {
  mounted() {
    $('#select1').niceSelect();
  },
}
</script>