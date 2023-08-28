@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show"
  class="position-fixed top-0 start-50 translate-middle-x bg-laravel text-white px-5 py-3">
  <p class="m-0">
    {{ session('message') }}
  </p>
</div>
@endif
