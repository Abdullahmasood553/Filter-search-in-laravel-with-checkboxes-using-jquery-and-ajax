
<script src="js/jquery-3.4.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

 
 


<script> 
Headerfix = document.getElementById("topHeader");

var myScrollFunc = function () {
    var y = window.scrollY;
    if (y >= 250) {
        topHeader.className = "topheader n-hiden"
    } else {
        topHeader.className = "topheader n-show"
    }
};

window.addEventListener("scroll", myScrollFunc);
	
document.querySelector( "#nav-toggle" )
  .addEventListener( "click", function() {
    this.classList.toggle( "active" );
  });
	
	
	$(document).ready(function () {
$('.navbar-dark .dmenu, .top_nav .dmenu').hover(function () {
        $(this).find('.sm-menu').first().stop(true, true).slideDown(180);
    }, function () {
        $(this).find('.sm-menu').first().stop(true, true).slideUp(100)
    });
});
	
	
     $(document).ready(function () {
 
            $('#f-close, .overlay').on('click', function () {
                $('#cart-list-right').removeClass('active');
                $('.overlay').removeClass('active');
				$('body').toggleClass('no-scroll')
            });

            $('#user_reg').on('click', function () {
                $('#cart-list-right').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
				$('body').toggleClass('no-scroll')		
            });
			
			
			
			
			$('#pf-close, .overlay').on('click', function () {
                $('#p-filter-right').removeClass('active');
                $('.overlay').removeClass('active');
				$('body').toggleClass('no-scroll')
            });

            $('#p-filter').on('click', function () {
                $('#p-filter-right').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
				$('body').toggleClass('no-scroll')		
            });
			
			$('#f-close, .overlay').on('click', function () {
                $('#user_form').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#user_log').on('click', function () {
                $('#user_form').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
			
        });
	
	 $('.form-control').on('focus blur', function (e) {
        $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
	}).trigger('blur');
	
function ID_search(){document.getElementById("ID_search").style.display = "block"}function closeSearch() {document.getElementById("ID_search").style.display = "none"}

	
 

 
	
	
</script>  
