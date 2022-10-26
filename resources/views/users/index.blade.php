<x-master>
    <x-slot:title>
        User List
        </x-slot>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Users</h1>
        </div>

        <x-forms.message />
        <table class="table">
            <thead>
                <tr>
                    <th>SL#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

               @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->profile?->mobile_no }}</td>
                    <td>{{ $user->role?->name }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route('users.show', $user->id) }}">Show</a>
                        @can('change-role')
                        <a class="btn btn-sm btn-warning" href="{{ route('users.change_role', $user->id) }}">Change Role</a>
                        @endcan
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

        {{ $users->links() }}

</x-master>