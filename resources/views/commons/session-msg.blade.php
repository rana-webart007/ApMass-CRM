@if(Session::has('success'))
<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
@endif

@if(Session::has('danger'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('danger') }}</p>
@endif

@if(Session::has('warning'))
<p class="alert {{ Session::get('alert-class', 'alert-warning') }}">{{ Session::get('warning') }}</p>
@endif

@if(Session::has('info'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('info') }}</p>
@endif