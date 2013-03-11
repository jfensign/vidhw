
</section>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-39185059-1'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

<script type="text/javascript">

(function($){
 $.fn.extend({ 
  accordion: function(options) {
   var defaults = {
    tabs: {
     css: {
      default: {
        "backgroundColor":"#444",
        "color":"#FFF",
        "borderRadius":"5px",
        "cursor": "pointer"
      },
      hover: {
       "backgroundColor":"#444",
       "color":"#FFF"
      },
      active: {
       "backgroundColor":"#e8e8e8",
       "color":"#444"
      }
     }
    }
   }, 
   options = $.extend(defaults, options)
   return this.each(function() {
    var o = options;
    var obj = $(this);                
    var items = $("li", obj);
    items.children(".accordion_tab").css(defaults.tabs.css.default)
    items.click(function() {
     items.children(".accordion_content").not($(this).children(".accordion_content")).hide()
     items.children(".accordion_tab").not($(this).children(".accordion_tab")).css(defaults.tabs.css.default)
     $(this).children(".accordion_tab").css(defaults.tabs.css.active)

     if(!$(this).children(".accordion_content").is(":visible"))
      $(this).children(".accordion_content").fadeIn("slow")
     else
      $(this).children(".accordion_content").fadeOut("slow")
    })
   })
  }
 })
})(jQuery)

$(function() {
 $("#about_accordion").accordion()
})
</script>

    </body>
</html>
