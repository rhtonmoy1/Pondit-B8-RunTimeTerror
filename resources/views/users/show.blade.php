<x-master>
    <x-slot:title>
        User Details
    </x-slot:title>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">User Details</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            
            <a href="{{ route('users.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <h1>Name: {{ $user->name }}</h1>
    <p>Email: {{ $user->email }} </p>
    <p>Mobile No: {{ $user->profile?->mobile_no }} </p>
    <p>Present Address: {{ $user->profile?->present_address }} </p>

</x-master>