
<h1>Users</h1>

<table>
    <thead>
        <tr>
            <th>User</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
