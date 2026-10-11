<section class="hogwarts-hero min-vh-100 d-flex align-items-center justify-content-center py-5">
    <div class="hero-content container py-4 my-auto">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card text-gold glass-card" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <img src="img/logoH.png" alt="Hogwarts Logo" class="img-fluid mb-4 hogwarts-logo">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2 text-uppercase">Platform 9¾</h2>
                            <p class="text-danger mb-4">Only wizards and witches may enter.</p>

                            <form id="loginForm">
                                <div data-mdb-input-init class="form-outline form-white mb-4 position-relative">
                                    <input type="text" id="typeEmailX" class="form-control form-control-lg pe-5" name="username"/>
                                    <label class="form-label" for="typeEmailX">Username</label>
                                    <i class="bi bi-envelope right-icon"></i>
                                </div>

                                <div data-mdb-input-init class="form-outline form-white mb-4 position-relative">
                                    <input type="password" id="typePasswordX" class="form-control form-control-lg pe-5" name="password" />
                                    <label class="form-label" for="typePasswordX">Password</label>
                                    <i class="bi bi-eye right-icon" id="togglePassword" style="cursor: pointer; pointer-events: auto;"></i>
                                </div> 

                                <p class="small mb-4 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                                
                                <p id="errorMsg" style="color: #ff6b6b; display: none; font-size: 14px; margin-bottom: 15px;">Muggle detected! Invalid username or password.</p>

                                
                                <button type="submit" class="btn btn-outline-light btn-lg px-5">Login</button>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>
                            </form>
                        </div>

                        <div>
                            <p class="mb-0">Not a Wizard Yet? <a href="signup.php" class="text-white-50 fw-bold">Sign Up</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>