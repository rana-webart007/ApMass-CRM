<style>
  #session-msges{
    position: absolute; 
    bottom: 75%; 
    left: 77%;
  }
</style>

@if(Session::has('success'))
 <p class="alert {{ Session::get('alert-class', 'alert-success') }}" id="session-msges">{{ Session::get('success') }}</p>
@endif

@if(Session::has('danger'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}" id="session-msges">{{ Session::get('danger') }}</p>
@endif

@if(Session::has('warning'))
<p class="alert {{ Session::get('alert-class', 'alert-warning') }}" id="session-msges">{{ Session::get('warning') }}</p>
@endif

@if(Session::has('info'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}" id="session-msges">{{ Session::get('info') }}</p>
@endif

@if(Session::has('errors'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}" id="session-msges">Something went Wrong</p>
@endif