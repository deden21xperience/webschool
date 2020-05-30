
// var elems = document.querySelectorAll('.sidenav,.slider,.scrollspy');
document.addEventListener('DOMContentLoaded', function () {
  var slider = document.querySelectorAll('.slider');
  var instances2 = M.Slider.init(slider, {
    indicators: false,
    height: 500
  });
  var prevBtn = document.getElementById('prev');
  prevBtn.addEventListener('click', function () {
    var l = M.Slider.getInstance(slider[0]);
    l.prev();
  })
  var nextBtn = document.getElementById('next');
  nextBtn.addEventListener('click', function () {
    var l = M.Slider.getInstance(slider[0]);
    l.next();
  })
  var pauseBtn = document.getElementById('pause');
  pauseBtn.addEventListener('click', function () {
    var l = M.Slider.getInstance(slider[0]);
    l.pause();
  })




  // // =================tes=======================
  // var scrollspy = document.querySelectorAll('.scrollspy');
  // var instances3 = M.ScrollSpy.init(scrollspy, {
  //   scrollOffset: 60
  // });
  // var floatBtn = document.querySelectorAll('.fixed-action-btn');
  // var instances4 = M.FloatingActionButton.init(floatBtn, {
  //   direction: 'left',
  //   hoverEnabled: false
  // });
  // var materialboxed = document.querySelectorAll('.materialboxed');
  // var instances5 = M.Materialbox.init(materialboxed, {
  //   onOpenEnd: function () {

  //   }

  // });
  var dropdown = document.querySelectorAll('.dropdown-trigger');
  var instances = M.Dropdown.init(dropdown);

  var collapsible = document.querySelectorAll('.collapsible');
  var instances = M.Collapsible.init(collapsible);


});

// console.log(tesbtn)
/*

      // document.addEventListener('DOMContentLoaded', function() {
    //   });

    document.addEventListener("DOMContentLoaded", function () {
      var lazyloadImages;

      if ("IntersectionObserver" in window) {
        lazyloadImages = document.querySelectorAll(".lazy");
        var imageObserver = new IntersectionObserver(function (entries, observer) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              var image = entry.target;
              image.src = image.dataset.src;
              image.classList.remove("lazy");
              imageObserver.unobserve(image);
            }
          });
        });

        lazyloadImages.forEach(function (image) {
          imageObserver.observe(image);
        });
      } else {
        var lazyloadThrottleTimeout;
        lazyloadImages = document.querySelectorAll(".lazy");

        function lazyload() {
          if (lazyloadThrottleTimeout) {
            clearTimeout(lazyloadThrottleTimeout);
          }

          lazyloadThrottleTimeout = setTimeout(function () {
            var scrollTop = window.pageYOffset;
            lazyloadImages.forEach(function (img) {
              if (img.offsetTop < (window.innerHeight + scrollTop)) { img.src = img.dataset.src; img.classList.remove('lazy'); }
            }); if
              (lazyloadImages.length == 0) {
              document.removeEventListener("scroll", lazyload); window.removeEventListener("resize",
                lazyload); window.removeEventListener("orientationChange", lazyload);
            }
          }, 20);
        } document.addEventListener("scroll",
          lazyload); window.addEventListener("resize", lazyload); window.addEventListener("orientationChange", lazyload);
      }
    }) */

//   <!--Lazy image loading
// https://css-tricks.com/the-complete-guide-to-lazy-loading-images/

// 
//
document.addEventListener("DOMContentLoaded", function () {
  var lazyloadImages;

  if ("IntersectionObserver" in window) {
    lazyloadImages = document.querySelectorAll(".lazy");
    var imageObserver = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var image = entry.target;
          image.src = image.dataset.src;
          image.classList.remove("lazy");
          imageObserver.unobserve(image);
        }
      });
    });

    lazyloadImages.forEach(function (image) {
      imageObserver.observe(image);
    });
  } else {
    var lazyloadThrottleTimeout;
    lazyloadImages = document.querySelectorAll(".lazy");

    function lazyload() {
      if (lazyloadThrottleTimeout) {
        clearTimeout(lazyloadThrottleTimeout);
      }

      lazyloadThrottleTimeout = setTimeout(function () {
        var scrollTop = window.pageYOffset;
        lazyloadImages.forEach(function (img) {
          if (img.offsetTop < (window.innerHeight + scrollTop)) { img.src = img.dataset.src; img.classList.remove('lazy'); }
        }); if
          (lazyloadImages.length == 0) {
          document.removeEventListener("scroll", lazyload); window.removeEventListener("resize",
            lazyload); window.removeEventListener("orientationChange", lazyload);
        }
      }, 20);
    } document.addEventListener("scroll",
      lazyload); window.addEventListener("resize", lazyload); window.addEventListener("orientationChange", lazyload);
  }
})