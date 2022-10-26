<x-master>
    <x-slot:title>
        Change Role
    </x-slot>

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Change Role</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('users.index') }}">
                <button type="button" class="btn btn-sm btn-outline-primary">
                    <span data-feather="list"></span>
                    List
                </button>
            </a>
        </div>
    </div>

    <x-forms.errors />

    <form action="{{ route('users.update_role', $user->id) }}" method="post">
        @csrf
        @method('patch')

        <x-forms.select name="role_id" label="Role" :options="$roles" :selected="old('role_id', $user->role_id)" required/>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</x-master>