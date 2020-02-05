<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
<div class="m-grid__item m-grid__item--fluid m-wrapper">

<!-- BEGIN: Subheader -->
<div class="m-subheader ">
<div class="d-flex align-items-center">
<div class="mr-auto">
<h3 class="m-subheader__title m-subheader__title--separator">Dashboard</h3>
<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
<li class="m-nav__item m-nav__item--home">
<a href="#" class="m-nav__link m-nav__link--icon">
<i class="m-nav__link-icon la la-home"></i>
</a>
</li>
<li class="m-nav__separator">-</li>
<li class="m-nav__item">
<a href="" class="m-nav__link">
<span class="m-nav__link-text">Dashboard</span>
</a>
</li>
<li class="m-nav__separator">-</li>
<li class="m-nav__item">
<a href="" class="m-nav__link">
<span class="m-nav__link-text">Reports</span>
</a>
</li>
</ul>
</div>
<div>
<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
<span class="m-subheader__daterange-label">
<span class="m-subheader__daterange-title"></span>
<span class="m-subheader__daterange-date m--font-brand"></span>
</span>
<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
<i class="la la-angle-down"></i>
</a>
</span>
</div>
</div>
</div>

<!-- END: Subheader -->
<div class="m-content">

<!--Begin::Section-->
<div class="row">
<div class="col-xl-12">

<!-- Tampilan sebelah kiri -->
<div class="m-content">
<div class="row">
<div class="col-xl-3 col-lg-4">
<div class="m-portlet m-portlet--full-height   m-portlet--rounded">
<div class="m-portlet__body">
<div class="m-card-profile">
<div class="m-card-profile__pic">
<div class="m-card-profile__pic-wrapper">
<img src="<?php echo base_url() ?>assets/app/media/img/users/user4.jpg" alt="" />
</div>
</div>
<div class="m-card-profile__details">
<span class="m-card-profile__name"><?php echo $this->session->userdata('username'); ?></span>
<a href="" class="m-card-profile__email m-link"><?php echo $this->session->userdata('email'); ?></a>
</div>
</div>
</div>
</div>
</div>

<!-- Tampilan sebelah kanan -->
<div class="col-xl-9 col-lg-8">
<div class="m-portlet m-portlet--full-height m-portlet--tabs   m-portlet--rounded">
<div class="m-portlet__head">
<div class="m-portlet__head-tools">
<ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
<li class="nav-item m-tabs__item">
<a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
<i class="flaticon-share m--hide"></i>
Update Profile
</a>
</li>
<li class="nav-item m-tabs__item">
<a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_3" role="tab">
Settings
</a>
</li>
</ul>
</div>
<div class="m-portlet__head-tools">
<ul class="m-portlet__nav">
<li class="m-portlet__nav-item m-portlet__nav-item--last">
<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
<a class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
<i class="la la-gear"></i>
</a>
<div class="m-dropdown__wrapper">
<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
</div>
</div>
</li>
</ul>
</div>
</div>
<div class="tab-content">
<div class="tab-pane active" id="m_user_profile_tab_1">
<form class="m-form m-form--fit m-form--label-align-right">
<div class="m-portlet__body">
<div class="form-group m-form__group m--margin-top-10 m--hide">
<div class="alert m-alert m-alert--default" role="alert">
The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
</div>
</div>

<!-- Form Update Profil -->
<div class="form-group m-form__group row">
<label for="example-text-input" class="col-2 col-form-label">Nama Lengkap</label>
<div class="col-7">
<input class="form-control m-input" type="text" value="<?php echo $this->session->userdata('nama'); ?>">
</div>
</div>

<div class="form-group m-form__group row">
<label for="example-text-input" class="col-2 col-form-label">Username</label>
<div class="col-7">
<input class="form-control m-input" type="text" value="<?php echo $this->session->userdata('username'); ?>">
</div>
</div>

<div class="form-group m-form__group row">
<label for="example-text-input" class="col-2 col-form-label">Alamat Email</label>
<div class="col-7">
<input class="form-control m-input" type="text" value="<?php echo $this->session->userdata('email'); ?>">
</div>
</div>

<div class="form-group m-form__group row">
<label for="example-text-input" class="col-2 col-form-label">Nomor Telepon</label>
<div class="col-7">
<input class="form-control m-input" type="text" value="<?php echo $this->session->userdata('telp'); ?>">
</div>
</div>

<div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>

<div class="col-7">
<button type="reset" class="btn btn-accent m-btn m-btn--air m-btn--custom">Save changes</button>&nbsp;&nbsp;
<button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">Cancel</button>

</div>
</div>
</div>
</form>
</div>
<div class="tab-pane " id="m_user_profile_tab_2">
</div>
<div class="tab-pane " id="m_user_profile_tab_3">
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- end::Body -->
