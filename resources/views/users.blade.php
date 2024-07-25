<div>
    <!-- Heading for the Users UI -->
    <h1>Users UI</h1>

    <!-- Table displaying user information -->
    <table border="1">
        <!-- Table header row -->
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
        </tr>

        <!-- Loop through each user in the $users array -->
        @foreach ($users as $user)
        <tr>
            <!-- Display user details -->
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
        </tr>
        @endforeach
    </table>
</div>
