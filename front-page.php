<?php get_header() ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="https://www.google.com/recaptcha/api.js?render=6Lfp-OIoAAAAALPnQsY50Jis34bOjDRpEC-xY8Ci"></script>
 <script>
        // Function to load reCAPTCHA and initialize the grecaptcha object
        function loadRecaptcha() {
            grecaptcha.ready(function () {
                $('#generateBtn').on('click', function () {
                    // Get the description value from the input field
                    var description = $('#description').val();

                    // Call reCAPTCHA to get the response token
                    grecaptcha.execute('6Lfp-OIoAAAAALPnQsY50Jis34bOjDRpEC-xY8Ci', { action: 'submit' }).then(function (token) {
                        // Prepare the request headers and body
                        var headers = {
                            'captcha-response': token,
                            'Content-Type': 'application/json'
                        };

                        var body = {
                            description: description,
                            length: 'short',
                            style: 'modern'
                        };

                        // Make a POST request to the API endpoint using jQuery
                        $.ajax({
                            url: 'https://devfe.10web.io/api/ai_mini_products/business_name_generator',
                            type: 'POST',
                            headers: headers,
                            dataType: 'json',
                            data: JSON.stringify(body),
                            success: function (data) {
                                // Handle the API response
                                displayGeneratedNames(data);
                            },
                            error: function (error) {
                                console.error('Error:', error);
                            }
                        });
                    });
                });
            });
        }

        // Function to display generated business names as list items
        function displayGeneratedNames(names) {
            var businessNamesList = $('#businessNames');
            businessNamesList.empty(); // Clear the list

            
            // Show the output section
            $('#output-section').show();
        }

        // Load reCAPTCHA when the window is fully loaded
        $(document).ready(loadRecaptcha);
    </script>

    <div id="input-section">
        <label for="description">Enter Description:</label>
        <input type="text" id="description">
        <button id="generateBtn">Generate Your Website</button>
    </div>

    <div id="output-section" style="display: none;">
        <h2>Generated Business Names:</h2>
        <ul id="businessNames"></ul>
    </div>


