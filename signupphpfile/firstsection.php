    <section class="hogwarts-hero min-vh-100 d-flex align-items-center justify-content-center py-5">
        <div class="hero-content container py-4 my-auto">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card text-gold glass-card" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            
                            <img src="img/logoH.png" alt="Hogwarts Logo" class="img-fluid mb-4 hogwarts-logo">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Hogwarts Registration</h2>
                                <p class="text-danger mb-4">Ready to become a Wizard?</p>

                                <form id="signupForm">
                                <div data-mdb-input-init class="form-outline form-white mb-4 position-relative">
                                    <input type="text" id="typeUsernameX" class="form-control form-control-lg pe-5" name="username" />
                                    <label class="form-label" for="typeUsernameX">Username</label>
                                    <i class="bi bi-person-circle right-icon"></i>
                                </div>

                                <div data-mdb-input-init class="form-outline form-white mb-4 position-relative">
                                    <input type="email" id="typeEmailX" class="form-control form-control-lg pe-5" name="email" />
                                    <label class="form-label" for="typeEmailX">Email</label>
                                    <i class="bi bi-envelope right-icon"></i>
                                </div>

                                <div data-mdb-input-init class="form-outline form-white mb-4 position-relative" >
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg pe-5" name="password"/>
                                    <label class="form-label" for="typePasswordX">Password</label>
                                    <i class="bi bi-lock right-icon"></i>
                                </div>

                                <div data-mdb-input-init class="form-outline form-white mb-4 position-relative">
                                    <input type="password" id="typeConfirmPasswordX" class="form-control form-control-lg pe-5" name="confirmpassword" />
                                    <label class="form-label" for="typeConfirmPasswordX">Confirm Password</label>
                                    <i class="bi bi-eye right-icon" id="toggleConfirmPassword" style="cursor: pointer; pointer-events: auto;"></i>

                                </div>

                                <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5 mt-4" type="submit">Register</button> </form>

                                <div class="d-flex justify-content-center text-center mt-5 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>

                            </div>

                            <div>
                                <p class="mb-0">Already a Wizard? <a href="login.php" class="text-white-50 fw-bold">Log In</a></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
