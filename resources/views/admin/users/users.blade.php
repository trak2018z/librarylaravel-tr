<table class="table table-hover">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Created</th>
        <th>Updated</th>
        <th colspan="2">Actions</th>
        
    </tr>
    @foreach($data['users'] as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
        <td>{{ $user->updated_at }}</td>
        <td><a class="btn btn-info" href="{{route('users.edit',$user)}}">Edit</a></td>
        <td>
            {!! Form::model($user, ['route' => ['users.delete', $user], 'method' => 'DELETE']) !!}
            <button class="btn btn-danger">Delete</button>
            {!! Form::close() !!}    
        </td>
        </tr>
    @endforeach
</table>
{{$data['users']->links()}}
