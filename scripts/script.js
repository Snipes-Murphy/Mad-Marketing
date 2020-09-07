window.onscroll = function() {
  if ( window.pageYOffset > 50 ) {
    $(document).find("#navbar").addClass("navbar-active");
  } else {
    $(document).find("#navbar").removeClass("navbar-active");
  }
}

var countDownDate = [];
var dayMsg = [];

for (i = 12; i < 25; i++) {
  window.countDownDate[i] = new Date("Dec " + i + ", 2019 00:00:00").getTime();
}

countdownSeq( 12,
  `On the 12th day of Christmas Mad Marketing gave to me! A full day shoot for me.
  <br><br>
  Get a full day shoot for $750 and save $550!`,
  'https://www.facebook.com/marketingmadgroup/'
)

countdownSeq( 13,
  `On the 13th day of Christmas Mad Marketing gave to me! A halaf day shoot for me.
  <br><br>
  Get a half day shoot for $350 and save $150!`,
  'https://www.facebook.com/marketingmadgroup/'
)

countdownSeq( 14,
  `On the 14th day of Christmas Mad Marketing gave to me!
  <br><br>
  Get a photo shoot for `,
  'https://www.facebook.com/marketingmadgroup/'
)


function countdownSeq(i, msg, url) {
  var x = setInterval(function() {
    $.ajax({
      type: 'GET',
      cache: false,
      url: location.href,
      complete: function (req, textStatus) {
        var dateString = req.getResponseHeader('Date');
        if (dateString.indexOf('GMT') === -1) {
          dateString += ' GMT';
        }
        now = new Date(dateString).getTime();

        distance = countDownDate[i] - now;

        console.log("inside" + now, distance)

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        $('#day'+i).html(hours + "hr " + minutes + "m " + seconds + "s");

        // Finished
        if (distance < 0) {
          clearInterval(x);

          dayModal('#day'+i, msg, url)
        } else if (days > 0) {
          if (i < 25) {
            $('#day'+i).html('<img src="img/icons/present.png" alt="Free Servers">');
          } else {
            $('#day'+i).html('<img src="img/icons/santa.png" alt="Free Servers">');
          }
        }
      }
    });
  }, 1000);
}

function dayModal(day, message, href) {
  $(day).html(`<div class="modal-wrapper time-reached">
    <button class="btn-primary btn-link" id="btn-modal">Redeem Voucher</button>

    <div class="overlay" id="overlay"></div>
    <div class="modal" id="modal">
      <div class="modal-header">
        <h1 class="title">Advent Calendar Redeem 🎅</h1>
        <button class="close-btn" id="close-btn"><i data-feather="x" class="f-icon f-small f-stroke-3"></i></button>
      </div>
      <div class="modal-content">
        <p>
          `+message+`
        </p>
      </div>
      <div class="modal-options">
        <a class="btn-success" href="`+href+`">Message Us!</a>
        <button class="btn-link btn-secondary" id="close-modal">Close</button>
      </div>
    </div>
  </div>`);
}
