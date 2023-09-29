<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
	<!--begin::Page-->
	<div class="page d-flex flex-row flex-column-fluid">
		<!--begin::Wrapper-->
		<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

			<?php include CPTMPL . 'layout/_header.php'; ?>

			<!--begin::Content wrapper-->
			<div class="d-flex flex-column-fluid">

				<?php include CPTMPL . 'layout/aside/_base.php'; ?>

				<!--begin::Container-->
				<div class="d-flex flex-column flex-column-fluid container-fluid">
					<!--begin::Post-->
					<div class="content flex-column-fluid" id="kt_content">

						<?php include CPTMPL . 'layout/_main.php'; ?>

					</div>
					<!--end::Post-->

					<?php include CPTMPL . 'layout/_footer.php'; ?>

				</div>
				<!--end::Container-->
			</div>
			<!--end::Content wrapper-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!--end::Root-->
<!--begin::Drawers-->

<?php include CPTMPL . 'partials/drawers/_activity-drawer.php'; ?>


<!--end::Drawers-->
<!--end::Main-->