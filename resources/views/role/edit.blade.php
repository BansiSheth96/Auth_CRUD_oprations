<!-- Display the role editing form -->
<form action="{{ route('roles.update', $role->id) }}" method="post">
    @csrf
    @method('PATCH')
    <label for="name">Role Name:</label>
    <input type="text" name="role_name" id="role_name" value="{{ $role->role_name }}" required>
    <br>
    <button type="submit">Update Role</button>
</form>
