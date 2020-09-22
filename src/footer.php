<div class="contact-us my-xlg" id="contact-us">

  <h2 class="display-inline-block mt-sm color-grey-6">Interested in a quote?</h2>
  <a href="http://funnel.madmarketinggroup.com.au/contact"><button class="btn-primary btn-form btn-mad pull-right bg-mad-grad btn-text-animate" btn-text="Get In Touch!"><span>Get In Touch!</span></button></a>
  <div class="details-section color-grey-4 mt-lg">
    <div class="row">
      <div class="col-lg-4">
        <p class="text-left font-highlight">Address: 4/39 Union Rd North Albury</p>
        <meta-data title="Test"></meta-data>
      </div>
      <div class="col-lg-4">
        <p class="text-center font-highlight">Email: hi@madmarketinggroup.com.au</p>
      </div>
      <div class="col-lg-4">
        <p class="text-right font-highlight">Number: 0447 600 898</p>
      </div>
    </div>
  </div>
</div>

<script src="scripts/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script src="scripts/owl.carousel.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(".owl-carousel").owlCarousel();
    $(".owl-carousel-photo").owlCarousel();
    $(".owl-photo-gallery").owlCarousel();
  });

  $('.owl-carousel').owlCarousel({
    items: 1,
    merge: true,
    dots: false,
    loop: true,
    margin: 10,
    video: true,
    lazyLoad: true,
    autoplay: true,
    autoplayTimeout: 3000,
    dotsContainer: '.dots',
    dotsContainer: '.dots',
    autoplayHoverPause: true,
    responsive:{
      480:{
        items: 1
      },
      600:{
        items: 2
      }
    }
  })

  Vue.component('meta-data', {
    props: ['title', 'description', 'keywords'],
    template: `
    <div>
      <title>Mad Marketing - {{ title }}</title>
      <meta name="description" v-bind:content="description">
      <meta name="keywords" v-bind:content="keywords">
      <meta name="author" content="Mad Marketing Website Development">
      <meta property="og:type" content="website">
      <meta property="og:title" v-bind:content="title">
      <meta property="og:image" content="https://i.imgur.com/qiKH9Fp.jpg">
      <meta property="og:description" v-bind:content="description">
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" v-bind:content="title">
      <meta name="twitter:image" content="https://i.imgur.com/qiKH9Fp.jpg">
      <meta itemprop="name" v-bind:content="title">
      <meta itemprop="description" v-bind:content="description">
      <meta itemprop="image" content="https://i.imgur.com/qiKH9Fp.jpg">
    </div>
    `
  })

  new Vue({ el: '#seo-manager' })
</script>
