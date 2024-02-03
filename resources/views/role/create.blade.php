<!-- Display the role creation form -->
<form action="{{ route('roles.store') }}" method="post">
    @csrf
    <label for="name">Role Name:</label>
    <input type="text" name="role_name" id="role_name" required>
    <br>
    <button type="submit">Create Role</button>
</form>
