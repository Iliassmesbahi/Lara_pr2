@props(['ilias'])
<div>

    <table class="table container">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ilias as $ilia)
            <tr>
                <td>{{ $ilia['id'] }}</td>
                <td>{{ $ilia['prenom'] }}</td>
                <td>{{ $ilia['nom'] }}</td>
                <td>{{ $ilia['handle'] }}</td>
                <td>
                    <a href="{{route('view', $ilia['id'])}}" class="btn btn-info">View</a>
                    <a href="{{ route('edit.post', $ilia->id) }}" class="btn btn-primary">Edit</a>
                    <form style="display: inline;" action="{{route('delete',$ilia['id'])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>