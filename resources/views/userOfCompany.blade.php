<table>
    <tr>
        <td>Name</td>
        <td>Email</td>
    </tr>
    @foreach ($companies as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
        </tr>
    @endforeach
</table>
