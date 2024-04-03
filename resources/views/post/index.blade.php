<table>
    <thead>
        <tr>
            <th>Sl</th>
            <th>Name</th>
            <th>Description</th>

        </tr>
    </thead>
    <tbody>
        @if ($posts)
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->description }}</td>

                </tr>
            @endforeach
        @endif
    </tbody>
</table>
