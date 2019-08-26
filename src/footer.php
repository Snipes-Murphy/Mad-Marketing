<div class="contact-us my-xlg" id="contact-us">

  <h2 class="display-inline-block mt-sm color-grey-6">Interested in a quote?</h2>
  <a href="mailto:hi@madmarketinggroup.com.au"><button class="btn-primary btn-form btn-mad pull-right bg-mad-grad">Get In Touch!</button></a>
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
        <p class="text-right font-highlight">Number: 04 4760 0898</p>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  Vue.component('meta-data', {
    props: ['title', 'description', 'keywords'],
    template: `
    <title>Mad Marketing - {{ title }}</title>
    <meta name="description" content="{{ description }}">
    <meta name="keywords" content="{{ keywords }}">
    <meta name="author" content="Mad Marketing Website Development">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Mad Marketing - {{ title }}">
    <meta property="og:image" content="https://i.imgur.com/DQjYWm6.png">
    <meta property="og:description" content="{{ description }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Mad Marketing - {{ title }}">
    <meta name="twitter:image" content="https://i.imgur.com/DQjYWm6.png">
    <meta itemprop="name" content="Mad Marketing - {{ title }}">
    <meta itemprop="description" content="{{ description }}">
    <meta itemprop="image" content="https://i.imgur.com/DQjYWm6.png">
    `
  })

  new Vue({ el: '#seo-manager' })
</script>
