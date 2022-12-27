    @include('frontend_partials.frontend_header')
    <!--header-->
	@include('frontend_partials.frontend_main_header')
    <!--/header-->

    <!--slider-->
	@include('frontend_partials.frontend_slider')
    <!--/slider-->

	@include('frontend_partials.frontend_sidebar')

				<div class="col-sm-9 padding-right">
                    @yield('content')
				</div>
			</div>
		</div>
	</section>

    @include('frontend_partials.frontend_footer')
