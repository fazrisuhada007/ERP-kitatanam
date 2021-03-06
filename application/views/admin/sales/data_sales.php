	<!-- Data tabel -->
	   
<header id="m_header" class="m-grid__item m-header " m-minimize="minimize" m-minimize-mobile="minimize" m-minimize-offset="10" m-minimize-mobile-offset="10">
<div class="m-header__top">
<div class="m-container m-container--fluid m-container--full-height m-page__container">
<div class="m-stack m-stack--ver m-stack--desktop">

<!-- begin::Brand -->
<div class="m-stack__item m-brand m-stack__item--left">
<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
<div class="m-stack__item m-stack__item--middle m-brand__logo">
	<a href="index.html" class="m-brand__logo-wrapper">
		<img alt="" src="<?php echo base_url() ?>assets/demo/demo10/media/img/logo/logo1.png" class="m-brand__logo-desktop" />
		<img alt="" src="<?php echo base_url() ?>assets/demo/demo10/media/img/logo/logo_mini1.png" class="m-brand__logo-mobile" />
	</a>
</div>
<div class="m-stack__item m-stack__item--middle m-brand__tools">

	<!-- begin::Quick Actions-->
	<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
		<!-- <a href="#" class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
			<span>Dashboard</span>
		</a> -->
		<div class="m-dropdown__wrapper">
			<span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
			<div class="m-dropdown__inner">
			</div>
		</div>
	</div>

	<!-- end::Quick Actions-->

	<!-- begin::Responsive Header Menu Toggler-->
	<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
		<span></span>
	</a>

	<!-- end::Responsive Header Menu Toggler-->

	<!-- begin::Topbar Toggler-->
	<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
		<i class="flaticon-more"></i>
	</a>

	<!--end::Topbar Toggler-->
</div>
</div>
</div>

<!-- end::Brand -->

<!-- begin::Topbar -->
<div class="m-stack__item m-stack__item--right m-header-head" id="m_header_nav">
<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
<div class="m-stack__item m-topbar__nav-wrapper">
	<ul class="m-topbar__nav m-nav m-nav--inline">
		<li class="m-nav__item m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
			<a href="#" class="m-nav__link m-dropdown__toggle">
				<span class="m-topbar__userpic">
					<img src="<?php echo base_url() ?>assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt="" />
				</span>
				<span class="m-nav__link-icon m-topbar__usericon  m--hide">
					<span class="m-nav__link-icon-wrapper"><i class="flaticon-user-ok"></i></span>
				</span>
				<span class="m-topbar__username m--hide"><?php echo $this->session->userdata('nama') ?></span>
			</a>
			<div class="m-dropdown__wrapper">
				<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
				<div class="m-dropdown__inner">
					<div class="m-dropdown__header m--align-center">
						<div class="m-card-user m-card-user--skin-light">
							<div class="m-card-user__pic">
								<img src="<?php echo base_url() ?>assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
							</div>
							<div class="m-card-user__details">
								<span class="m-card-user__name m--font-weight-500"><?php echo $this->session->userdata('nama')?></span>
								<a href="" class="m-card-user__email m--font-weight-300 m-link"><?php echo $this->session->userdata('email') ?></a>
							</div>
						</div>
					</div>
					<div class="m-dropdown__body">
						<div class="m-dropdown__content">
							<ul class="m-nav m-nav--skin-light">
								<li class="m-nav__section m--hide">
									<span class="m-nav__section-text">Section</span>
								</li>

								<li class="m-nav__item">
									<a href="<?=base_url('admin/profil') ?>" class="m-nav__link">
										<i class="m-nav__link-icon flaticon-profile-1"></i>
										<span class="m-nav__link-title">
											<span class="m-nav__link-wrap">
												<span class="m-nav__link-text">
												My Profile
											    </span>
											</span>
										</span>
									</a>
								</li>
								
								<li class="m-nav__separator m-nav__separator--fit">
								</li>
								<li class="m-nav__item">
									<a href="<?php echo base_url('login/logout') ?>" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</li>
	</ul>
</div>
</div>
</div>

<!-- end::Topbar -->
</div>
</div>
</div>
<div class="m-header__bottom">
<div class="m-container m-container--fluid m-container--full-height m-page__container">
<div class="m-stack m-stack--ver m-stack--desktop">

<!-- begin::Horizontal Menu -->
<div class="m-stack__item m-stack__item--fluid m-header-menu-wrapper">
<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">

<!-- Dashboard -->
<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
	<li class="m-menu__item m-menu__item--submenu m-menu__item--submenu m-menu__item--tabs" m-menu-submenu-toggle="tab" aria-haspopup="true">
		<a href="<?=base_url('admin/dashboard') ?>" class="m-menu__link" title="">
			<span class="m-menu__link-text">Dashboard</span>
			<i class="m-menu__hor-arrow la la-angle-down"></i>
			<i class="m-menu__ver-arrow la la-angle-right"></i>
		</a>
	<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
		<span class="m-menu__arrow m-menu__arrow--adjust"></span>
<ul class="m-menu__subnav">
<li class="m-menu__item  m-menu__item--actions">
<div class="">
	<button class="btn btn-accent m-btn--pill">
		<span>
			<span><?php echo date('l, d-m-Y'); ?></span>
		</span>
	</button>
</div>
</li>
		</ul>
	</div>
</li>

<!-- Sales -->
	<li class="m-menu__item m-menu__item--active  m-menu__item--active-tab  m-menu__item--submenu m-menu__item--submenu m-menu__item--tabs" m-menu-submenu-toggle="tab" aria-haspopup="true"><a href="<?=base_url('admin/sales') ?>" class="m-menu__link" title=""><span class="m-menu__link-text">Sales</span><i
			 class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
		<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
			<ul class="m-menu__subnav">
				<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="<?=base_url('admin/sales') ?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-line-graph"></i><span class="m-menu__link-text">Dashboard</span></a></li>	
				<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="<?= base_url('admin/sales/data_sales') ?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">Data Sales</span></a></li>
				<!-- <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="<?= base_url('admin/sales/data_sales') ?>" class="m-menu__link "><i class="m-menu__link-icon flaticon-notes"></i><span class="m-menu__link-text">Laporan</span></a></li> -->
				<!-- <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="builder.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-alarm-1"></i><span class="m-menu__link-text">Invoices</span></a></li> -->
				<li class="m-menu__item  m-menu__item--actions">
<div class="">
	<button class="btn btn-accent m-btn--pill">
		<span>
			<span><?php echo date('l, d-m-Y'); ?></span>
		</span>
	</button>
</div>
</li>
			</ul>
		</div>
	</li>

<!-- Crm -->
<li class="m-menu__item m-menu__item--submenu m-menu__item--submenu m-menu__item--tabs" m-menu-submenu-toggle="tab" aria-haspopup="true">
	<a href="<?=base_url('crm/dashboard') ?>" class="m-menu__link" title="Customer Relationship Management">
		<span class="m-menu__link-text">CRM</span>
		<i class="m-menu__hor-arrow la la-angle-down"></i>
		<i class="m-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
		<span class="m-menu__arrow m-menu__arrow--adjust"></span>
			<ul class="m-menu__subnav">		
 <div class="">
	<button class="btn btn-accent m-btn--pill">
		<span>
			<span><?php echo date('l, d-m-Y'); ?></span>
		</span>
	</button>
</div>
</li>
		</ul>
	</div>
</li>

<!-- Inventory -->
<li class="m-menu__item m-menu__item--submenu m-menu__item--submenu m-menu__item--tabs" m-menu-submenu-toggle="tab" aria-haspopup="true">
	<a href="<?=base_url('') ?>" class="m-menu__link" title="Customer Relationship Management">
		<span class="m-menu__link-text">INVENTORY</span>
		<i class="m-menu__hor-arrow la la-angle-down"></i>
		<i class="m-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
		<span class="m-menu__arrow m-menu__arrow--adjust"></span>
			<ul class="m-menu__subnav">		
 <div class="">
	<button class="btn btn-accent m-btn--pill">
		<span>
			<span><?php echo date('l, d-m-Y'); ?></span>
		</span>
	</button>
</div>
</li>
		</ul>
	</div>
</li>

<!-- Akuntansi -->
<li class="m-menu__item m-menu__item--submenu m-menu__item--submenu m-menu__item--tabs" m-menu-submenu-toggle="tab" aria-haspopup="true">
	<a href="<?=base_url('') ?>" class="m-menu__link" title="Customer Relationship Management">
		<span class="m-menu__link-text">AKUNTANSI</span>
		<i class="m-menu__hor-arrow la la-angle-down"></i>
		<i class="m-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
		<span class="m-menu__arrow m-menu__arrow--adjust"></span>
			<ul class="m-menu__subnav">		
 <div class="">
	<button class="btn btn-accent m-btn--pill">
		<span>
			<span><?php echo date('l, d-m-Y'); ?></span>
		</span>
	</button>
</div>
</li>
		</ul>
	</div>
</li>

<!-- Sim -->
<li class="m-menu__item m-menu__item--submenu m-menu__item--submenu m-menu__item--tabs" m-menu-submenu-toggle="tab" aria-haspopup="true">
	<a href="<?=base_url('') ?>" class="m-menu__link" title="Sistem Informasi Manajemen">
		<span class="m-menu__link-text">SIM</span>
		<i class="m-menu__hor-arrow la la-angle-down"></i>
		<i class="m-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
		<span class="m-menu__arrow m-menu__arrow--adjust"></span>
			<ul class="m-menu__subnav">		
 <div class="">
	<button class="btn btn-accent m-btn--pill">
		<span>
			<span><?php echo date('l, d-m-Y'); ?></span>
		</span>
	</button>
</div>
</li>
		</ul>
	</div>
</li>

<!-- Logistik -->
<li class="m-menu__item m-menu__item--submenu m-menu__item--submenu m-menu__item--tabs" m-menu-submenu-toggle="tab" aria-haspopup="true">
	<a href="<?=base_url('') ?>" class="m-menu__link" title="">
		<span class="m-menu__link-text">LOGISTIK</span>
		<i class="m-menu__hor-arrow la la-angle-down"></i>
		<i class="m-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
		<span class="m-menu__arrow m-menu__arrow--adjust"></span>
			<ul class="m-menu__subnav">		
 <div class="">
	<button class="btn btn-accent m-btn--pill">
		<span>
			<span><?php echo date('l, d-m-Y'); ?></span>
		</span>
	</button>
</div>
</li>
		</ul>
	</div>
</li>

<!-- Produksi -->
<li class="m-menu__item m-menu__item--submenu m-menu__item--submenu m-menu__item--tabs" m-menu-submenu-toggle="tab" aria-haspopup="true">
	<a href="<?=base_url('') ?>" class="m-menu__link" title="">
		<span class="m-menu__link-text">PRODUKSI</span>
		<i class="m-menu__hor-arrow la la-angle-down"></i>
		<i class="m-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
		<span class="m-menu__arrow m-menu__arrow--adjust"></span>
			<ul class="m-menu__subnav">		
 <div class="">
	<button class="btn btn-accent m-btn--pill">
		<span>
			<span><?php echo date('l, d-m-Y'); ?></span>
		</span>
	</button>
</div>
</li>
		</ul>
	</div>
</li>

<!-- end::Horizontal Menu -->
</div>
</div>
</div>
</header>
<!-- end::Header -->
	
<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
<div class="m-grid__item m-grid__item--fluid m-wrapper">

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
<div class="d-flex align-items-center">
<div class="mr-auto">
<h3 class="m-subheader__title m-subheader__title--separator">Sales</h3>
<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
<li class="m-nav__item m-nav__item--home">
<a href="#" class="m-nav__link m-nav__link--icon">
<i class="m-nav__link-icon flaticon-clipboard"></i>&nbsp;
<span class="m-nav__link-text"><?php echo $title ?></span>
</a>
</li>
</ul>
</div>
</div>
</div>

<!-- Perintah menampilkan sweet alert -->
<div class="flash" data-flash="<?= $this->session->flashdata('sukses');?>">
</div>

<!-- Data Tabel -->
<div class="m-content">
<div class="m-portlet m-portlet--mobile">
<div class="m-portlet__head">
	<div class="m-portlet__head-caption">
		<div class="m-portlet__head-title">
			<h3 class="m-portlet__head-text">
				<a href="<?= base_url('admin/sales/tambah') ?>" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--air">
					<span>
						<i class="la la-plus"></i>
						<span>Tambah Sales</span>
					</span>
				</a>
			</h3>
		</div>
	</div>
</div>
<div class="m-portlet__body">

<!--begin: Datatable -->
<table class="table table-striped- table-bordered table-hover table-checkable display" id="tabel">
	<thead>
		<tr class="text-center">
			<th>No</th>
			<th>Nama Sales</th>
			<th>Nomor Telpon</th>
			<th>Alamat Email</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach ($sales as $sales) { ?>
		<tr class="text-center">
			<td><?php echo $no++ ?></td>
			<td><?php echo $sales->nama_sales ?></td>
			<td><?php echo $sales->telp ?></td>
			<td><?php echo $sales->email ?></td>
			<td>
				<a href="<?php echo base_url('admin/sales/edit/'.$sales->id_sales)?>" class="btn btn-primary btn-sm m-btn  m-btn m-btn--icon">
					<span>
						<i class="la la-edit"></i>
						<span>Edit</span>
					</span>
				</a>
				<a href="<?php echo base_url('admin/sales/delete/'.$sales->id_sales)?>" class="tombol-hapus btn btn-danger btn-sm m-btn  m-btn m-btn--icon">
					<span>
						<i class="la la-trash"></i>
						<span>Hapus</span>
					</span>
				</a>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>

</div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->
</div>
</div>
</div>
<!-- end::Body -->
