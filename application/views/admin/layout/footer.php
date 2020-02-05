<!-- begin::Footer -->
			<footer class="m-grid__item m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-footer__wrapper">
						<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
							<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
								<span class="m-footer__copyright">
									2020 &copy; <a href="https://keenthemes.com" class="m-link">Kitatanam</a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->

		<!-- begin::Quick Sidebar -->
		<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
			<div class="m-quick-sidebar__content m--hide">
				<span id="m_quick_sidebar_close" class="m-quick-sidebar__close"><i class="la la-close"></i></span>
			</div>
		</div>
		<!-- end::Quick Sidebar -->

		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->

		<!--begin::Global Theme Bundle -->
		<script src="<?php echo base_url() ?>assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?php echo base_url() ?>assets/demo/demo10/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="<?php echo base_url() ?>assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="<?php echo base_url() ?>assets/app/js/dashboard.js" type="text/javascript"></script>
		<!--end::Page Scripts -->

		<!-- begin::Page Loader -->
		<script>
			$(window).on('load', function() {
				$('body').removeClass('m-page--loading');
			});
		</script>
		<!-- end::Page Loader -->

	<!-- Data Tabel -->
	<script src="<?php echo base_url() ?>assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
	<script src="<?php echo base_url() ?>assets/demo/default/custom/crud/datatables/basic/headers.js" type="text/javascript"></script>

   <script>
		$(document).ready(function() {
		$('#tabel').DataTable();
		} );
	 </script>
		
	</body>

	<!-- Sweet Alert -->
	<script src="<?php echo base_url() ?>assets/assets/demo/default/custom/components/base/sweetalert2.js" type="text/javascript"></script>

	<script>
		alert();
          function alert(){
          let flash = $('.flash').data('flash');
          if (!jQuery.isEmptyObject(flash)) {
              Swal.fire(
			  'Good Job!',
			  'You clicked the button!',
			  'success'
			  )
          }
        }
        //Memanggil function sweetalert hapus
        $('.tombol-hapus').on('click',function(hapus){
          hapus.preventDefault();
          let href = $(this).attr('href')
          Swal.fire(
            'Hapus data ini?',
            'Data yang dihapus tidak bisa dikembalikan!',
            'warning',
          ).then((result) => {
            if (result.value) {
              window.location.href = href
            }
          })
        })
	</script>
	<!-- end::Body -->
</html>