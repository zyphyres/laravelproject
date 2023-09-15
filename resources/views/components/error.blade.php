@if(session()->has('Error'))
<div x-data="{show : true}" x-show="show" x-init="setTimeout(()=>show = false, 5000)" class="card text-white position-fixed bottom-0 end-0 mb-3 z-4 bg-danger shadow alert-dismissible show fade" role="alert">
    <div class="card-body">
        <p class="m-0">Error!</p>
        <p class="text-white small m-0">{{ session('Error') }}</p>
    </div>
</div>
@endif