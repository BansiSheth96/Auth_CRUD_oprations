
@foreach($users as $e_user)

	{{ $e_user->first_name }}<br> 
	{{ $e_user->last_name }}<br> 
	{{ $e_user->user_email }}<br> 
	{{ $e_user->contact_no }}<br> 
	{{ $e_user->post_code }}<br> 
	{{ $e_user->file_upload }}<br> 
	{{ $e_user->hobbies }}<br> 
	{{ $e_user->gender }}<br> 
	{{ $e_user->role }}<br> 

@endforeach