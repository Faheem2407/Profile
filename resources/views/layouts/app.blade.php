<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.meta')
    @include('layouts.partials.style')
</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader">
                @yield('content')    
            </div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    @include('layouts.partials.navbar')
	
    @include('layouts.partials.banner_slider')

    @include('layouts.partials.about')
	
    @include('layouts.partials.services')
	
    @include('layouts.partials.portfolio')
	
    @include('layouts.partials.testimonial')
	
    @include('layouts.partials.blog')

    @include('layouts.partials.contact_form')

    @include('layouts.partials.footer')

    @include('layouts.partials.scroll_to_top')

    @include('layouts.partials.script')
</body>
</html>