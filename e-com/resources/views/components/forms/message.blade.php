@if(session('message'))
<p class="text-success">
    {{ session('message') }}
</p>
@endif