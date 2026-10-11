    <!-- MDBootstrap JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.1.0/mdb.umd.min.js"></script>
    <script>
     $("#togglePassword").click(function() {
    
        let passwordInput = $("#typePasswordX");
        
      
        if (passwordInput.attr("type") === "password") {
            passwordInput.attr("type", "text");
     
            $(this).removeClass("bi-eye").addClass("bi-eye-slash");
        } else {
            passwordInput.attr("type", "password");
   
            $(this).removeClass("bi-eye-slash").addClass("bi-eye");
        }
    });
    </script>
    <script>
    $(document).ready(function() {

        const dummyAccount = {
            username: "Harry",
            password: "@Potter2005"
        };


        let failedAttempts = 0;
        const maxAttempts = 5;

        $("#loginForm").validate({
            errorPlacement: function(error, element) {
                error.addClass("d-block mt-1 mb-3 text-warning"); 
                error.insertAfter(element.parent()); 
            },
            highlight: function(element) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            },
            onkeyup: function(element, event) {
                $(element).removeClass("is-invalid");
                $(element).parent().next(".text-warning").hide();
            },
            
            rules: {
                username: { required: true },
                password: { required: true }
            },
            messages: {
                username: { required: "Please enter your username" },
                password: { required: "Please enter your password" }
            },

            errorElement: 'div',
            errorClass: 'text-danger mt-1 small text-start', 

            submitHandler: function(form) {
                var enteredUsername = $("#typeEmailX").val();
                var enteredPassword = $("#typePasswordX").val();

                if (enteredUsername === dummyAccount.username && enteredPassword === dummyAccount.password) {

                    failedAttempts = 0; 
                    window.location.href = "index.html";
                } else {

                    failedAttempts++; 
                    

                    if (failedAttempts >= maxAttempts) {
                        $("#errorMsg").text("Too many failed attempts. Login disabled.").show();
                        $("#typePasswordX").val("");
                        $("button[type='submit']").prop("disabled", true); 
                    } else {
                        let attemptsLeft = maxAttempts - failedAttempts;
                        $("#errorMsg").text("Muggle detected! Invalid credentials. " + attemptsLeft + " attempts remaining.").show();
                        $("#typePasswordX").val(""); 
                    }
                }
            }
        });

        $("input").keypress(function() {
            if (failedAttempts < maxAttempts) {
                $("#errorMsg").hide();
            }
        });
    });
    </script>