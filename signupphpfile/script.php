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
    $("#toggleConfirmPassword").click(function() {
        let confirmInput = $("#typeConfirmPasswordX");
        if (confirmInput.attr("type") === "password") {
            confirmInput.attr("type", "text");
            $(this).removeClass("bi-eye").addClass("bi-eye-slash");
        } else {
            confirmInput.attr("type", "password");
            $(this).removeClass("bi-eye-slash").addClass("bi-eye");
        }
    });
    </script>


    <script>
        $(document).ready(function() {

            
            $.validator.addMethod("complexPassword", function(value, element) {
                return this.optional(element) || /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/.test(value);
            }, "Password must contain at least one uppercase letter, one lowercase letter, and one number.");
            $.validator.addMethod("noSpace", function(value, element) { 
                return value.indexOf(" ") < 0 && value != ""; 
            }, "Spaces are not allowed.");
            
            $("#signupForm").validate({

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
                    username: {
                        required: true,
                        minlength: 3,
                        maxlength: 10,
                        noSpace:true

                    },
                    email: {
                        required: true,
                        email: true,
                        noSpace:true
                    },
                    password: {
                        required: true,
                        minlength: 8,
                        complexPassword: true,
                        noSpace:true
                    },
                    confirmpassword: { 
                        required: true,
                        equalTo: "#typePasswordX"
                    }
                }, 
                
                messages: {
                    username: {
                        required: "Please enter your username"
                        
                    },
                    email:{
                        required:"Please enter email",
                        email:"invalid email format: example@email.com"

                    },
                    password: {
                        required: "Please enter your password"
                        
                    },
                    confirmpassword:{
                        required:"enter your password again",
                        equalTo:"Password doesnt match"


                    }
                },

                submitHandler: function(form) {
                    window.location.href = "login.php";
                }
            });
        });
    </script>