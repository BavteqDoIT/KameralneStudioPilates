<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title> {{ config('app.name') }} </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{csrf_token()}}">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
		<link rel="icon" href="{{ asset('images/favicon.png') }}">
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<header id="header">
                                @include('layout.header')
							</header>

							<!-- Banner -->
								<section id="banner">
                                    @yield('content')
								</section>
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">
							<!-- Search - Wyszukiwarka
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section> -->

                            <!-- Login -->
								<section id="login">
                                    @include('layout.log')
								</section>

							<!-- Nav -->
								@include('layout.nav')

							<!-- Section -->
								<section id="quickContact">
									@include('layout.quickContact')
								</section>

							<!-- Footer -->
								<footer id="footer">
                                    @include('layout.footer')
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->

            <script src="{{ asset('js/jquery.min.js') }}"></script>
			<script src="{{ asset('js/browser.min.js') }}"></script>
			<script src="{{ asset('js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('js/util.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript">
                @yield('javascript')
            </script>

	</body>
</html>
