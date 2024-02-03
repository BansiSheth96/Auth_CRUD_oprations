<!-- Display the registration form -->
<form id="userForm" action="{{ route('e_users.store') }}" method="post">
    @csrf
    <label for="name">FirstName:</label>
    <input type="text" name="first_name" id="first_name" required>
    <br>

    <label for="name">LastName:</label>
    <input type="text" name="last_name" id="last_name" required>
    <br>

    <label for="email">Email:</label>
    <input type="email" name="user_email" id="user_email" required>
    <br>

    <label for="number">ContactNo:</label>
    <input type="number" name="contact_no" id="contact_no" required>
    <br>

    <label for="number">PostCode:</label>
    <input type="number" name="postcode" id="postcode" required>
    <br>

    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" name="confirm_pswd" id="confirm_pswd" required>
    <br>

    <label for="file">FileUpload:</label>
    <input type="file" name="file_upload" id="file_upload" required multiple>
    <br>

    <label for="hobbies">Hobbies:</label>
    <input type="checkbox" name="hobbies[]" value="Reading"> Reading
    <input type="checkbox" name="hobbies[]" value="Gaming"> Gaming
    <input type="checkbox" name="hobbies[]" value="Traveling"> Traveling
    <br>

    <label for="gender">Gender:</label>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <br>

    <label for="role">Role:</label>
        <select id="role" name="role[]" multiple>
            <option>---Select Role---</option>
            <option value="Admin">Admin</option>
            <option value="User">User</option>
        </select>
    <br>

    <button type="submit">Register</button>
</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script>
    $(document).ready(function () {
        // Validate the user registration form using jQuery Validation
        $("#userForm").validate({
            rules: {
                first_name: {
                    required: true,
                    maxlength: 255,
                },
                last_name: {
                    required: true,
                    maxlength: 255,
                },
                user_email: {
                    required: true,
                    email: true,
                    maxlength: 255,
                },
                contact_no: {
                    required: true,
                    minlength: 12,
                },
                postcode: {
                    required: true,
                    minlength: 7,
                },
                confirm_pswd: {
                    required: true,
                    equalTo: "#password",
                },
                file_upload: {
                    required: true,
                },
                hobbies: {
                    required: true,
                },
                gender: {
                    required: true,
                },
                role: {
                    required: true,
                },
            },
            messages: {
                confirm_pswd: {
                    equalTo: "Passwords do not match",
                },
            },
        });
    });
</script>