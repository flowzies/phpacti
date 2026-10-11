  <!-- About Section -->
  <section id="about" class="hero-about d-flex align-items-center justify-content-center position-relative py-5">
    <audio id="lightningSound" src="audio/lightning-storm-sound-effect.mp3" preload="auto"></audio>

    <div class="hero-content container py-5" style="max-width: 1200px;">

      <div class="row mb-5 text-center">
        <div class="col-12">
          <h2 class="display-4 fw-bold text-gold mb-2">About Harry Potter</h2>
          <p class="fs-5 text-light">The story, the author, and the magic behind the films.</p>
        </div>
      </div>

      <div class="row g-4 justify-content-center align-items-stretch">

        <!-- Story Overview -->
        <div class="col-12 col-md-6 col-lg-6 d-flex">
          <div class="card glass-card p-4 p-xl-5 text-gold shadow-lg w-100 d-flex flex-column justify-content-between" style="border-radius: 1.5rem;">
            <div>
              <div class="d-flex align-items-center mb-3">
                <h3 class="h4 fw-bold text-gold mb-0">What is Harry Potter?</h3>
              </div>
              <hr class="border-warning opacity-25 my-3">
              <p class="fs-6 text-light lh-base mb-3">
                <strong>Harry Potter</strong> is a fantasy franchise created by British author <strong>J.K. Rowling</strong>. It follows the life of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley at Hogwarts School of Witchcraft and Wizardry.
              </p>
              <p class="fs-6 text-white-50 lh-base mb-4">
                The main story arc concerns Harry's struggle against Lord Voldemort, a dark wizard who intends to become immortal and conquer the wizarding world.
              </p>
            </div>

          </div>
        </div>

        <!-- The Author -->
        <div class="col-12 col-md-6 col-lg-6 d-flex">
          <div class="card glass-card p-4 p-xl-5 text-gold shadow-lg w-100 d-flex flex-column justify-content-between" style="border-radius: 1.5rem;">
            <div>
              <div class="d-flex align-items-center mb-3">
                <h3 class="h4 fw-bold text-gold mb-0">J.K. Rowling</h3>
              </div>
              <hr class="border-warning opacity-25 my-3">
              <div class="row g-3 align-items-center mb-3">
                <div class="col-12 col-sm-5 text-center">
                  <div class="ratio ratio-1x1 rounded-4 overflow-hidden shadow border border-warning mx-auto" style="max-width: 150px;">
                    <img src="img/jk.jpg" alt="J.K. Rowling" class="w-100 h-100 object-fit-cover" />
                  </div>
                </div>
                <div class="col-12 col-sm-7">
                  <div class="p-3 rounded-3 border border-warning-subtle bg-black bg-opacity-40 shadow-sm text-start">
                    <p class="small fst-italic text-light mb-2 lh-base">"Words are, in my not-so-humble opinion, our most inexhaustible source of magic."</p>
                    <small class="text-gold fw-bold d-block">— J.K. Rowling</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-auto pt-3 border-top border-warning border-opacity-25">
              <a href="#movies" class="btn btn-lg btn-outline-gold w-100 py-3 rounded-pill fw-bold shadow text-center" onclick="var a = document.getElementById('lightningSound'); if(a){ a.currentTime = 0; a.play().catch(function(){}); }">
                <i class="fas fa-chevron-up me-2"></i> Movie Infos
              </a>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>
