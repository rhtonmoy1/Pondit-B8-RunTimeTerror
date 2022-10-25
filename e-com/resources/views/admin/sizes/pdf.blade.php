
<table border="1">
    <thead>
        <tr>
            <th>SL#</th>
            <th>Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $category->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>