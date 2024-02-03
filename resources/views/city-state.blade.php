
<html>
<head>
    <title>City-State Dropdown</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <label for="state">State:</label>
    <select id="states_name" name="states_name">
        <option value="">Select State</option>
    </select>

    <label for="city">City:</label>
    <select id="cities_name" name="cities_name" disabled>
        <option value="">Select City</option>
    </select>

    <script>
        $(document).ready(function () {
            // Populate states dropdown
            $.get('/get-states', function (data) {
                $.each(data, function (index, state) {
                    $('#states_name').append('<option value="' + state.id + '">' + state.states_name + '</option>');
                });
            });

            // Handle state selection
            $('#states_name').change(function () {
                var stateId = $(this).val();
                if (stateId) {
                    // Enable city dropdown
                    $('#cities_name').prop('disabled', false);

                    // Populate cities dropdown based on selected state
                    $.get('/get-cities/' + stateId, function (data) {
                        $('#cities_name').empty();
                        $('#cities_name').append('<option value="">Select City</option>');
                        $.each(data, function (index, city) {
                            $('#cities_name').append('<option value="' + city.id + '">' + city.cities_name + '</option>');
                        });
                    });
                } else {
                    // Disable city dropdown if no state is selected
                    $('#cities_name').prop('disabled', true);
                    $('#cities_name').empty();
                    $('#cities_name').append('<option value="">Select City</option>');
                }
            });
        });
    </script>
</body>
</html>
