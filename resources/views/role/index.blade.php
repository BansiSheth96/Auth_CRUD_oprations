<!-- Display the list of roles -->
@foreach ($roles as $role)
    {{ $role->role_name }}<br>
    <!-- Add links to edit and delete actions as needed -->
@endforeach
