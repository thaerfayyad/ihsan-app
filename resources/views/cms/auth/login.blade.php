<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
	{{-- <base href="../../../../"> --}}
	<meta charset="utf-8" />
	<title> Login </title>
	<meta name="description" content="Login page example" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	{{-- <link rel="canonical" href="https://keenthemes.com/metronic" /> --}}
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Custom Styles(used by this page)-->
	<link href="{{asset('cms/assets/css/pages/login/classic/login-4.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Page Custom Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="{{asset('cms/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('cms/assets/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('cms/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<link href="{{asset('cms/assets/css/themes/layout/header/base/light.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('cms/assets/css/themes/layout/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('cms/assets/css/themes/layout/brand/dark.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('cms/assets/css/themes/layout/aside/dark.css')}}" rel="stylesheet" type="text/css" />
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
	class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="login login-4 login-signin-on d-flex flex-row-fluid" id="kt_login">
			<div class="d-flex flex-center flex-row-fluid bgi-size-cover bgi-position-top bgi-no-repeat"
				style="background-image: url({{asset('cms/assets/media/bg/bg-3.jpg')}});">
				<div class="login-form text-center p-7 position-relative overflow-hidden">
					<!--begin::Login Header-->
					<div class="d-flex flex-center mb-15">
						<a href="#">
							{{-- <img src="{{asset('assets/media/logos/logo-letter-13.png')}}" class="max-h-75px" alt="" /> --}}
						</a>
					</div>
					<!--end::Login Header-->
					<!--begin::Login Sign in form-->
					<div class="login-signin">
						<div class="mb-20">
							<h3>Sign In To Admin</h3>
							<div class="text-muted font-weight-bold">Enter your details to login to your account:</div>
						</div>
						<form class="form" id="kt_login_signin_form">
							<div class="form-group mb-5">
								<input class="form-control h-auto form-control-solid py-4 px-8" type="text"
									placeholder="Email" id="email" name="username" autocomplete="off" />
							</div>
							<div class="form-group mb-5">
								<input class="form-control h-auto form-control-solid py-4 px-8" type="password"
									placeholder="Password" id="password" name="password" />
							</div>
							<div class="form-group d-flex flex-wrap justify-content-between align-items-center">
								<div class="checkbox-inline">
									<label class="checkbox m-0 text-muted">
										<input type="checkbox" id="remember" name="remember" />
										<span></span>Remember me</label>
								</div>
								<a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forget
									Password ?</a>
							</div>
							{{-- <button id="kt_login_signin_submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Sign In</button> --}}
							<button class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4"
								onclick="login()">Sign
								In</button>
						</form>

						{{--  <div class="mt-10">
							<span class="opacity-70 mr-4">You have been invited?</span>
							<a href="javascript:;" id="kt_login_signup"
								class="text-muted text-hover-primary font-weight-bold">Start Now!</a>
						</div>  --}}

					</div>
					<!--end::Login Sign in form-->
					<!--begin::Login Sign up form-->

					{{--  <div class="login-signup">
						<div class="mb-20">
							<h3>Store Registration</h3>
							<div class="text-muted font-weight-bold">Enter your details to activate your store account
							</div>
						</div>
						<form class="form">
							<div class="row">
								<div class="form-group mb-5 col-lg-6">
									<input class="form-control h-auto form-control-solid py-4 px-8" type="text"
										placeholder="Your name" id="name" />
								</div>
								<div class="form-group mb-5 col-lg-6">
									<input class="form-control h-auto form-control-solid py-4 px-8" type="text"
										placeholder="Store name" id="store_name" />
								</div>
							</div>
							<div class="form-group mb-5">
								<input class="form-control h-auto form-control-solid py-4 px-8" type="text"
									placeholder="Email" id="store_email" name="email" autocomplete="off" />
							</div>
							<div class="form-group mb-5">
								<input class="form-control h-auto form-control-solid py-4 px-8" type="tel"
									placeholder="Mobile" id="mobile" name="mobile" autocomplete="off" />
							</div>
							<div class="form-group mb-5">
								<input class="form-control h-auto form-control-solid py-4 px-8" type="text"
									placeholder="Address" id="address" name="address" autocomplete="off" />
							</div>

							<div class="form-group mb-5">
								<input class="form-control h-auto form-control-solid py-4 px-8" type="password"
									placeholder="Password" name="password" id="store_password" />
							</div>
							<div class="form-group mb-5">
								<input class="form-control h-auto form-control-solid py-4 px-8" type="password"
									placeholder="Invitation Code" maxlength="4" id="invitation_code"
									name="invitation_code" />
							</div>
							<div class="form-group mb-5 text-left">
								<div class="checkbox-inline">
									<label class="checkbox m-0">
										<input type="checkbox" name="agree" />
										<span></span>I Agree the
										<a href="#" class="font-weight-bold ml-1">terms and conditions</a>.</label>
								</div>
								<div class="form-text text-muted text-center"></div>
							</div>
							<div class="form-group d-flex flex-wrap flex-center mt-10">
								<button type="button" onclick="performStoreRegister()"
									class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Sign Up</button>
								<button id="kt_login_signup_cancel"
									class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
							</div>
						</form>
					</div>  --}}

					<!--end::Login Sign up form-->
					<!--begin::Login forgot password form-->
					<div class="login-forgot">
						<div class="mb-20">
							<h3>Forgotten Password ?</h3>
							<div class="text-muted font-weight-bold">Enter your email to reset your password</div>
						</div>
						<form class="form">
							<div class="form-group mb-10">
								<input class="form-control form-control-solid h-auto py-4 px-8" type="text"
									placeholder="Email" id="reset_email" name="email" autocomplete="off" />
							</div>
							<div class="form-group d-flex flex-wrap flex-center mt-10">
								<button type="button" onclick="performForgotPassword()"
									class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Request</button>
								<button id="kt_login_forgot_cancel"
									class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel</button>
							</div>
						</form>
					</div>
					<!--end::Login forgot password form-->
				</div>
			</div>
		</div>
		<!--end::Login-->
	</div>
	<!--end::Main-->
	{{-- <script>
		var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
	</script> --}}
	<!--begin::Global Config(global config for global JS scripts)-->
	<script>
		var KTAppSettings = { " breakpoints": { "sm" : 576, "md" : 768, "lg" : 992, "xl" : 1200, "xxl" : 1400 }, "colors" :
								{ "theme" : { "base" : { "white" : "#ffffff" , "primary" : "#3699FF" , "secondary"
								: "#E5EAEE" , "success" : "#1BC5BD" , "info" : "#8950FC" , "warning" : "#FFA800"
								, "danger" : "#F64E60" , "light" : "#E4E6EF" , "dark" : "#181C32" }, "light" : { "white"
								: "#ffffff" , "primary" : "#E1F0FF" , "secondary" : "#EBEDF3" , "success" : "#C9F7F5"
								, "info" : "#EEE5FF" , "warning" : "#FFF4DE" , "danger" : "#FFE2E5" , "light"
								: "#F3F6F9" , "dark" : "#D6D6E0" }, "inverse" : { "white" : "#ffffff" , "primary"
								: "#ffffff" , "secondary" : "#3F4254" , "success" : "#ffffff" , "info" : "#ffffff"
								, "warning" : "#ffffff" , "danger" : "#ffffff" , "light" : "#464E5F" , "dark"
								: "#ffffff" } }, "gray" : { "gray-100" : "#F3F6F9" , "gray-200" : "#EBEDF3" , "gray-300"
								: "#E4E6EF" , "gray-400" : "#D1D3E0" , "gray-500" : "#B5B5C3" , "gray-600" : "#7E8299"
								, "gray-700" : "#5E6278" , "gray-800" : "#3F4254" , "gray-900" : "#181C32" }
								}, "font-family" : "Poppins" };
	</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="{{asset('cms/assets/plugins/global/plugins.bundle.js')}}"></script>
	<script src="{{asset('cms/assets/plugins/custom/prismjs/prismjs.bundle.js')}}"></script>
	<script src="{{asset('cms/assets/js/scripts.bundle.js')}}"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="{{asset('cms/assets/js/pages/custom/login/login-general.js?n=1')}}"></script>
	<!--end::Page Scripts-->

	<script src="{{asset('cms/assets/js/pages/features/miscellaneous/toastr.js')}}">
	</script>
	<script src="{{asset('js/axios.js')}}"></script>

	<script>
		function login(){
	      axios.post('/dashboard/login', {
	        email: document.getElementById('email').value,
	        password: document.getElementById('password').value,
	        remember_me: document.getElementById('remember').checked,

	      }).then(function (response) {
	          window.location.href = '/dashboard';
	      })
	        .catch(function (error) {
	          toastr.error(error.response.data.message)
	      });
	    }
	</script>

	{{--  <script>
		function performStoreRegister(){
			axios.post('/cms/store/register', {
	        	name: document.getElementById('name').value,
				store_name: document.getElementById('store_name').value,
				email: document.getElementById('store_email').value,
				mobile: document.getElementById('mobile').value,
				address: document.getElementById('address').value,
				city_id: document.getElementById('city_id').value,
				password: document.getElementById('store_password').value,
				invitation_code: document.getElementById('invitation_code').value,
	      }).then(function (response) {
	          window.location.href = '/cms/admin';
	      })
	        .catch(function (error) {
	          toastr.error(error.response.data.message)
	      });
		}
	</script>  --}}

	<script>
		function performForgotPassword(){
			axios.post('/forgot-password', {

				email: document.getElementById('reset_email').value,
		    }).then(function (response) {
		        toastr.success(response.data.message)
		    }).catch(function (error) {
		        toastr.error(error.response.data.message)
		    });
		}
	</script>
</body>
<!--end::Body-->

</html>
