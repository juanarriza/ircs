<!-- FOOTER -->
            <footer>
                <div class="footer-bottom">
                    <div class="footer-linck">
                        <a href="#inicio" class="scroll-to-link">Inicio</a>
                        <a href="#quienes-somos" class="scroll-to-link">Quienes somos</a>
                        <li><a href="#video-institucional" class="scroll-to-link">Video</a></li>
                        <a href="#por-que-ircs" class="scroll-to-link">Por qué IRCS?</a>
                       
                        <a href="#servicios-ircs" class="scroll-to-link">Servicios</a>
                        <a href="#galeria-ircs" class="scroll-to-link">Galeria</a>
                        <a href="#contacto-ircs" class="scroll-to-link">Contacto</a>
                    </div>
                    <div class="media-icon">
                        <a href="https://www.facebook.com/IRCS-Quality-Repairs-2208161502769902/"><img src="<?php echo get_bloginfo('template_directory');?>/img/c-icon.png" alt="IRCS Quality Repairs"/></a>
                    </div>
                    <div class="copy">
                        <span>© 2019 Todos los derechos reservados. IRCS</span>
                    </div>
                </div>
                <div class="back-to-top"><i class="fa fa-chevron-up"></i></div>
            </footer>
            <!-- FOOTER -->
        </div>
    </div>
    <script src="<?php echo get_bloginfo('template_directory');?>/js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/js/idangerous.swiper.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/js/global.js"></script>
	<script src="<?php echo get_bloginfo('template_directory');?>/js/wow.min.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/js/subscription.js"></script>
    <script src="<?php echo get_bloginfo('template_directory');?>/js/isotope.pkgd.min.js"></script>
	<script>
		$(function(){
		$(window).load(function(){
		  var $container = $('.sorting-container').isotope({
		  itemSelector: '.sorting-item',
		  masonry: {
		  columnWidth: '.grid-sizer'
		      }
			});
		$('.sorting-menu a').click(function() {
		if($(this).hasClass('active')) return false;
		$(this).parent().find('.active').removeClass('active');
		$(this).addClass('active');
		var filterValue = $(this).attr('data-filter');

		  $container.isotope({ filter: filterValue });
								});
						});
				});
		</script>
        <!-- CHAT-->
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5c8fac6ec37db86fcfce75fb/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
    <!-- END CHAT -->
</body>
</html>