<?= $this->include('partial/header') ?>

<section class="parallax" style=" background-image: url('assets/images/G/G350/banner-Final-G350-4-2048x924.jpg'); position: relative;">
    <h2 style="position: absolute;BOTTOM: 0%;left: 50%;transform: translate(-50%, -50%);color: white;font-size: 1.0rem;font-weight: 500;text-align: center;text-shadow: 0 2px 6px rgba(0,0,0,0.5);">
        SCROLL <i class="fa-solid fa-computer-mouse"></i>
    </h2>

</section>

<nav class="nav" id="nav">
    <div class="wrap">
        <a class="brand" href="#home">
            <img src="assets/images/logo-circle.png" alt="Lambretta Logo Symbol" class="logo-img">

            <img src="assets/images/lam-logo-black.png" alt="Lambretta Wordmark" class="wordmark-img">
        </a>
        <button class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </button>

        <div class="links">
            <a href="#series">Series <span><i class="fa-solid fa-book-open"></i></span> </a>

            <a href="#models">Models <span><i class="fa-solid fa-motorcycle"></i> </span> </a>
            <a href="#specs">Specs <span><i class="fa-solid fa-screwdriver-wrench"></i></span></a>
            <a href="#gallery-g">Gallery <span><i class="fa-solid fa-image"></i></span> </a>
            <a href="#cta">Book a Test Ride <span><i class="fa-solid fa-road"></i></span> </a>
        </div>
    </div>
</nav>


<!-- HERO with VXG switcher -->
<header class="hero" id="home">
    <div class="hero-inner">
        <div>
            <div class="kicker" data-parallax data-speed="0.1">VXG SERIES</div>
            <h1 class="title" data-parallax data-speed="0.1" style="color:#fff;">
                V · X · G — <span style="color:#D50000DB;">Iconic</span> <span style="color:#D50000DB;">Lambretta.</span>
            </h1>

            <p class="subtitle" data-parallax data-speed="0.17">
                Three attitudes, one soul. Switch between V, X, and G to preview the vibe—colors, stripe, and motion adapt instantly.
            </p>
            <div class="cta-row">
                <a href="#series" class="btn">Pick Your Series</a>
                <a href="#models" class="btn ghost">See It In Action</a>
            </div>
        </div>
        <div class="scooter-card" aria-hidden="true">
            <div class="badge"><span id="seriesLabel">Series V</span></div>
            <div class="switcher" role="group" aria-label="Model series">
                <button class="pill" data-series="V" aria-pressed="true">V</button>
                <button class="pill" data-series="X" aria-pressed="false">X</button>
                <button class="pill" data-series="G" aria-pressed="false">G</button>
            </div>
            <div class="stripe" data-parallax data-speed="-0.0001"></div>
            <div class="layer gloss" data-parallax data-speed="-0.01"></div>

            <!-- ✅ HERE is where we load the image -->
            <div class="scooter" data-parallax data-speed="0.03">
                <a id="scooterLink" href="#gallery-v">
                    <img id="scooterImage" src="assets/images/lambretta.jpg" alt="Lambretta Series V">
                </a>
            </div>
        </div>
    </div>

    <div class="scroll-indicator" style="position:absolute;left:50%;bottom:22px;transform:translateX(-50%);color:#8b8d92;font-weight:600;font-size:.8rem;display:flex;flex-direction:column;align-items:center;gap:.25rem">
        <div class="mouse" style="width:18px;height:28px;border:2px solid #9aa0a6;border-radius:12px;position:relative"></div>
        <span>Scroll</span>
    </div>
</header>

<!-- <section class="parallax" style="background-image: url('assets/images/X/X300 Special/SPECIAL DESIGN.jpg');"></section> -->


<!-- SERIES CARDS -->
<section id="series" class="series-section">
    <div class="wrap">
        <h2 class="section-title">Choose Your Series</h2>
        <p class="muted">Tap a card to switch the hero preview. All sections use subtle parallax for depth.</p>
        <div class="series-grid" style="margin-top:18px">

            <div class="series-card series-v" data-parallax data-speed="0.05" data-switch="V">
                <img src="assets/images/v/FULL LED LIGHTING SYSTEM.jpg" alt="Lambretta Series V" />
                <span>Series V</span>
            </div>

            <div class="series-card series-x" data-parallax data-speed="0.08" data-switch="X">
                <img src="assets/images/x/X300 Special/FULL LED LIGHTING1.jpg" alt="Lambretta Series X" />
                <span>Series X</span>
            </div>

            <div class="series-card series-g" data-parallax data-speed="0.12" data-switch="G">
                <img src="assets/images/g/G350II/REMASTER COLORS STYLE.jpg" alt="Lambretta Series G" />
                <span>Series G</span>
            </div>

        </div>
    </div>
</section>


<!-- MODELS -->
<section id="models">
    <div class="wrap">
        <h2 class="section-title">Featured Models <span class="section-sub">(click your model)</span></h2>
        <p class="muted">Each model fuses Lambretta heritage with modern performance.</p>
        <div class="grid" style="margin-top:22px">

            <!-- Example card -->
            <article class="card" data-parallax data-speed="0.08">
                <a href="<?= base_url('models/v125') ?>" class="img-link">
                    <div class="img">
                        <img src="assets/images/v/Grotta Blue.png" alt="Lambretta V125 Special" />
                        <span class="flag">V</span>
                    </div>
                </a>
                <div class="body">
                    <h4>V125 Special</h4>
                    <div class="meta"><span>124.7cc</span> • <span>CBS</span> • <span>LED DRL</span></div>
                    <div class="cta"><span class="chip">Blue / White</span></div>
                </div>
            </article>

            <!-- Repeat other cards the same way -->
            <article class="card" data-parallax data-speed="0.04">
                <a href="<?= base_url('models/x200') ?>" class="img-link">
                    <div class="img">
                        <img src="assets/images/x/X300 Special/White Latte Black.png" alt="Lambretta X200 Special" />
                        <span class="flag" style="background:var(--black)">X</span>
                    </div>
                </a>
                <div class="body">
                    <h4>X200 Special</h4>
                    <div class="meta"><span>169cc</span> • <span>ABS</span> • <span>Liquid-cooled</span></div>
                    <div class="cta"><span class="chip">Latte / Premium</span></div>
                </div>
            </article>

            <article class="card" data-parallax data-speed="0.02">
                <a href="<?= base_url('models/g350') ?>" class="img-link">
                    <div class="img">
                        <img src="assets/images/g/G350II/lambretta-G350-series2-red-1536x1052.png" alt="Lambretta G350 Absolute" />
                        <span class="flag" style="background:linear-gradient(90deg,var(--red),#ff3b2f)">G</span>
                    </div>
                </a>
                <div class="body">
                    <h4>G350 Absolute</h4>
                    <div class="meta"><span>330cc</span> • <span>Dual ABS</span> • <span>Full metal body</span></div>
                    <div class="cta"><span class="chip">Red / White</span></div>
                </div>
            </article>
        </div>
    </div>
</section>


<br>
<br>

<br>


<section class="parallax" style="background-image: url('assets/images/G/G350II/2-Model-P03_P_LamG350_HIRES-2048x1295.jpg');"></section>


<section id="heritageCarousel" class="carousel slide carousel-fade band heritage" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active"
            style="background: url('/assets/images/G/G350/Banner-G350-2-2048x709.jpg') center/cover no-repeat;">
            <div class="wrap">
                <div data-parallax data-speed="0.08">
                    <h3>Born in Milano. Built for Today.</h3>
                    <p>From cobblestones to city boulevards—Lambretta carries the spirit of urban freedom.</p>
                </div>
                <div>
                    <div class="panelish"
                        style="background:transparent; color:#0f1113; padding:18px; min-height:40vh;"
                        data-parallax data-speed="-0.06">
                        <strong style="color:var(--red)">Did you know?</strong> The name comes from the Lambro river in Milan.
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item"
            style="background: url('/assets/images/X/X300/X300-series-banner-2048x858.jpg') center/cover no-repeat;">
        </div>

        <div class="carousel-item"
            style="background: url('/assets/images/X/X300SR Monochrome/X300SR-Monochrome-Banner1-2048x1203.jpg') center/cover no-repeat;">
            <div class="wrap">
                <div data-parallax data-speed="0.08">
                    <h3>Heritage Meets Innovation</h3>
                    <p>Crafted with passion, engineered for performance.</p>
                </div>
                <div>
                    <div class="panelish"
                        style="background:transparent; color:#0f1113; padding:18px; min-height:40vh;"
                        data-parallax data-speed="-0.06">
                        <strong style="color:var(--red)">Tip:</strong> Every Lambretta is built with modular customization in mind.
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heritageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heritageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</section>


<!-- SPECS -->
<section id="specs" class="specs">
    <div class="wrap">
        <h2 class="section-title">Core Specifications</h2>
        <p class="muted">Performance tuned for city agility and weekend escapes.</p>
        <div class="specs-grid" style="margin-top:18px">
            <div class="spec" data-parallax data-speed="0.04">
                <h5>Braking</h5>
                <p>Front & rear disc, ABS/CBS options for confident stops.</p>
            </div>
            <div class="spec" data-parallax data-speed="0.02">
                <h5>Metal Body</h5>
                <p>Aluminum & steel panels for durability with authentic feel.</p>
            </div>
            <div class="spec" data-parallax data-speed="0.01">
                <h5>LED Vision</h5>
                <p>Full LED with DRL for visibility and that signature glare.</p>
            </div>
        </div>
    </div>
</section>


<!-- PARALLAX BAND: Black -->

<section class="band black"
    style="background:url('/assets/images/X/X300SR Monochrome/X300SR-Monochrome-Banner3-2048x1203.jpg') center/cover no-repeat; 
           min-height:90vh; display:flex; align-items:center;">

    <div class="wrap" data-parallax data-speed="0.2">
        <h3>Power that Glides</h3>
        <p>Responsive acceleration, stable handling, and tuned suspension.</p>
    </div>
</section>

<!-- <section class="parallax" style="background-image: url('assets/images/X/X300 Special/SPECIAL BADGE1.jpg');"></section> -->

<!-- GALLERY -->
<!-- G SERIES GALLERY -->
<section id="gallery-g" class="gallery">
    <div class="wrap">
        <h2 class="section-title">Series G Gallery</h2>
        <p class="muted">Premium details of the G350</p>

        <div class="grid-gallery">
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/g/G350/G350-final-shot-side-right-2048x1366.jpg" alt="G image 1" class="gallery-img" data-series="g">
                </div>
                <p class="caption">Classic Lambretta logo in bold styling.</p>
            </div>
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/g/G350/Black.jpg" alt="G image 2" class="gallery-img" data-series="g">
                </div>
                <p class="caption">Modern LED rear light with signature design.</p>
            </div>
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/g/G350/Red.jpg" alt="G image 3" class="gallery-img" data-series="g">
                </div>
                <p class="caption">Refined handlebar style with chrome finish.</p>
            </div>

        </div>
        <p class="muted">Premium details of the G350II </p>

        <div class="grid-gallery">
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/g/G350II/lambretta-G350-series2-red-1536x1052.png" alt="G image 4" class="gallery-img" data-series="g">
                </div>
                <p class="caption">Advanced ABS braking with double arm-link system.</p>
            </div>
        </div>
    </div>
</section>
<section class="parallax" style="background-image: url('assets/images/G/G350/banner-Final-G350-4-2048x924.jpg');"></section>

<!-- X SERIES GALLERY -->
<section id="gallery-x" class="gallery">
    <div class="wrap">
        <h2 class="section-title">Series X Gallery</h2>
        <p class="muted">Sporty and bold aesthetics of the X200</p>

        <div class="grid-gallery">
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/x/X200/Cloudy Blue.png" alt="X image 1" class="gallery-img" data-series="x">
                </div>
                <p class="caption">Aggressive front stance with sporty lines.</p>
            </div>
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/x/X200/Gemma White.png" alt="X image 2" class="gallery-img" data-series="x">
                </div>
                <p class="caption">Streamlined side profile for dynamic style.</p>
            </div>
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/x/X200/Salmon Pink.png" alt="X image 3" class="gallery-img" data-series="x">
                </div>
                <p class="caption">Compact rear with modern tail lamp design.</p>
            </div>
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/x/X200/Limoncello Yellow.png" alt="X image 4" class="gallery-img" data-series="x">
                </div>
                <p class="caption">Sport-inspired handlebar for agile control.</p>
            </div>
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/x/X200/Scuro Grey.png" alt="X image 5" class="gallery-img" data-series="x">
                </div>
                <p class="caption">Durable alloy wheels with superior grip.</p>
            </div>
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/x/X200/Super Black.png" alt="X image 6" class="gallery-img" data-series="x">
                </div>
                <p class="caption">Ergonomic seat designed for comfort.</p>
            </div>
        </div>
    </div>
</section>
<section class="parallax" style="background-image: url('assets/images/X/X300 Special/Lambretta-X300-Special-2-Product-1-2048x1365.jpg');"></section>

<!-- V SERIES GALLERY -->
<section id="gallery-v" class="gallery">
    <div class="wrap">
        <h2 class="section-title">Series V Gallery</h2>
        <p class="muted">Classic but modern design of the V125.</p>

        <div class="grid-gallery">
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/v/Siciliano Yellow.png" alt="V image 1" class="gallery-img" data-series="v">
                </div>
                <p class="caption">Timeless front design with retro appeal.</p>
            </div>
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/v/Intenso Black.png" alt="V image 2" class="gallery-img" data-series="v">
                </div>
                <p class="caption">Elegant side profile with heritage cues.</p>
            </div>
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/v/Perla White.png" alt="V image 3" class="gallery-img" data-series="v">
                </div>
                <p class="caption">Minimalist rear keeping it vintage.</p>
            </div>
            <div class="tile">
                <div class="image-box">
                    <img src="assets/images/v/Grotta Blue.png" alt="V image 4" class="gallery-img" data-series="v">

                </div>
                <p class="caption">Classic-styled handlebar with modern touch.</p>
            </div>
        </div>
    </div>
</section>


<section class="parallax" style="background-image: url('assets/images/V/FULL LED LIGHTING SYSTEM.jpg');"></section>

<section id="branches" class="branches">
    <div class="wrap">
        <h2 class="section-title">Our Dealer/Branches</h2>
        <div class="branch-grid">

            <!-- Branch 1 -->
            <div class="branch-card">
                <h3>Ropali Classics - Ortigas</h3>
                <p><i class="fas fa-phone"></i> +63 912 345 6789</p>
                <p><i class="fas fa-map-marker-alt"></i> MBC CLASSICROPALI PLAZA JM ESCRIVA DRIVE BRGY SAN ANTONIO PASIG CITY 1605 </p>
            </div>

            <!-- Branch 2 -->
            <div class="branch-card">
                <h3>Ropali Classics - Naga Cebu</h3>
                <p><i class="fas fa-phone"></i> +63 987 654 3210</p>
                <p><i class="fas fa-map-marker-alt"></i> MBC NAGA CLASSICSZONE 1 ANR BUSINESS CENTER </p>
            </div>

            <!-- Branch 3 -->
            <div class="branch-card">
                <h3>Ropali Classics - Pampanga </h3>
                <p><i class="fas fa-phone"></i> +63 955 112 3344</p>
                <p><i class="fas fa-map-marker-alt"></i> MBC ANGELES CLASSICSG/F 7&8 NEPO CENTER </p>
            </div>

        </div>
    </div>
</section>



<!-- <section style="height: 1000px; padding: 40px; background-image: url('assets/images/v/Intenso Black.png'); 
background-size: cover; background-position: center;background-repeat: no-repeat;"> 

</section> -->


<!-- CTA -->
<!-- <section id="cta" class="cta-banner pearl">
    <div class="wrap">
        <div class="cta-content">
            <h3>Ready to ride?</h3>
            <p>Book a test ride or request a quote. We'll get back within 24 hours.</p>
            <div class="cta-actions">
                <a href="#" class="btn">Book a Test Ride</a>
                <a href="#" class="btn ghost">Request a Quote</a>
            </div>
        </div>

        <form class="cta-form" onsubmit="event.preventDefault(); alert('Thanks! We\'ll reach out.');">
            <h4>Quick Contact</h4>
            <input required placeholder="Full name" />
            <input required type="tel" placeholder="Mobile Number" />
            <select required>
                <option value="" disabled selected>Interested in</option>
                <option>V125 Special</option>
                <option>X200 Special</option>
                <option>G350 Absolute</option>
            </select>
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
</section>
 -->

<section id="cta" class="cta-banner pearl">
    <div class="wrap">
        <div class="cta-content">
            <h3>Ready to ride?</h3>
            <p>Book a test ride or request a quote. We'll get back within 24 hours.</p>
            <div class="cta-actions">
                <a href="#" class="btn">Book a Test Ride</a>
                <a href="#" class="btn ghost">Request a Quote</a>
            </div>
        </div>

        <form class="cta-form" id="addInquireModal">
            <h4>Quick Contact</h4>

            <input id="addFirstName" data-mandatory="1" required placeholder="First name" />

            <input id="addMobile" data-mandatory="1" type="tel" required placeholder="Mobile Number" />

            <select id="viewModel" data-mandatory="1" class="chosen-select" required>
                <option value="" disabled selected>Interested in</option>
            </select>

            <button class="btn" type="submit">Submit</button>
        </form>

    </div>
</section>





<button id="scrollTopBtn" title="Go to top">
    <i class="fas fa-arrow-up"></i>
</button>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox" aria-hidden="true" style="position:fixed;inset:0;display:none;align-items:center;justify-content:center;background:rgba(0,0,0,.6);backdrop-filter:blur(2px);z-index:100">
    <div class="frame" style="width:min(1000px,92vw);height:min(70vh,620px);background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,.5);position:relative">
        <button class="close" aria-label="Close" onclick="toggleLightbox(false)" style="position:absolute;top:8px;right:8px;background:#000;color:#fff;border:none;border-radius:10px;padding:.5rem .7rem;font-weight:800;cursor:pointer">✕</button>
        <div class="art" style="width:100%;height:100%;background: radial-gradient(1600px 800px at 30% -10%, rgba(225,6,0,.15), transparent 45%), linear-gradient(180deg, #fff, #eceef3);"></div>
    </div>
</div>


<!-- Global Modal -->
<div id="imgModal" class="modal">
    <span class="modal-close">&times;</span>
    <img class="modal-content" id="modalImg" alt="">
    <div id="caption"></div>

</div>

<!-- 
<div id="modal-g" class="modal">
    <span class="modal-close">&times;</span>
    <div class="modal-wrapper">
        <div class="modal-thumbs">
            <img src="assets/images/g/G350/G350-final-shot-side-right-2048x1366.jpg" class="thumb active">
            <img src="assets/images/g/G350/Black.jpg" class="thumb">
            <img src="assets/images/g/G350/Red.jpg" class="thumb">
            <img src="assets/images/g/G350II/lambretta-G350-series2-red-1536x1052.png" class="thumb">
        </div>
        <div class="modal-preview">
            <img id="modalMainImgG" src="">
            <div id="captionG"></div>
        </div>
    </div>
</div>

<div id="modal-x" class="modal">
    <span class="modal-close">&times;</span>
    <div class="modal-wrapper">
        <div class="modal-thumbs">
            <img src="assets/images/x/X200/Cloudy Blue.png" class="thumb active">
            <img src="assets/images/x/X200/Gemma White.png" class="thumb">
            <img src="assets/images/x/X200/Salmon Pink.png" class="thumb">
            <img src="assets/images/x/X200/Limoncello Yellow.png" class="thumb">

            <img src="assets/images/x/X200/Scuro Grey.png" class="thumb active">
            <img src="assets/images/x/X200/Super Black.png" class="thumb">

        </div>
        <div class="modal-preview">
            <img id="modalMainImgX" src="">
            <div id="captionX"></div>
        </div>
    </div>
</div>

<div id="modal-v" class="modal">
    <span class="modal-close">&times;</span>
    <div class="modal-wrapper">
        <div class="modal-thumbs">
            <img src="assets/images/v/Siciliano Yellow.png" class="thumb active">
            <img src="assets/images/v/Intenso Black.png" class="thumb">
            <img src="assets/images/v/Perla White.png" class="thumb">
            <img src="assets/images/v/Grotta Blue.png" class="thumb">

        </div>
        <div class="modal-preview">
            <img id="modalMainImgV" src="">
            <div id="captionV"></div>
        </div>
    </div>
</div>  -->

<div class="social-fixed">
    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
    <a href="#"><i class="fa-brands fa-instagram"></i></a>
    <a href="#"><i class="fa-brands fa-youtube"></i></a>
    <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
</div>


<script>
    function baseUrl(uri = '') {
        return "<?= base_url() ?>" + uri;
    }

    // async function saveInquiry(e) {
    //     e.preventDefault();

    //     const firstName = $('#addFirstName').val().trim();
    //     const mobile = $('#addMobile').val().trim();
    //     const modelId = $('#viewModel').val();
    //     const modelText = $('#viewModel option:selected').text();

    //     // 🔹 Basic validation with SweetAlert2
    //     if (!firstName) {
    //         return Swal.fire({
    //             icon: 'error',
    //             title: 'Missing Field',
    //             text: 'Please enter your first name.',
    //             confirmButtonColor: '#dc2626'
    //         });
    //     }

    //     if (firstName.length < 2) {
    //         return Swal.fire({
    //             icon: 'error',
    //             title: 'Invalid Name',
    //             text: 'First name must be at least 2 characters long.',
    //             confirmButtonColor: '#dc2626'
    //         });
    //     }

    //     const mobilePattern = /^(09|\+639)\d{9}$/;
    //     if (!mobile) {
    //         return Swal.fire({
    //             icon: 'error',
    //             title: 'Missing Field',
    //             text: 'Please enter your mobile number.',
    //             confirmButtonColor: '#dc2626'
    //         });
    //     }

    //     if (!mobilePattern.test(mobile)) {
    //         return Swal.fire({
    //             icon: 'error',
    //             title: 'Invalid Mobile Number',
    //             text: 'Please enter a valid Philippine mobile number (e.g., 09171234567 or +639171234567).',
    //             confirmButtonColor: '#dc2626'
    //         });
    //     }

    //     if (!modelId) {
    //         return Swal.fire({
    //             icon: 'error',
    //             title: 'Missing Selection',
    //             text: 'Please select a model before submitting.',
    //             confirmButtonColor: '#dc2626'
    //         });
    //     }

    //     const data = {
    //         firstName,
    //         mobile,
    //         modelId,
    //         model: modelText
    //     };

    //     try {
    //         const response = await $.ajax({
    //             url: baseUrl() + 'Home/saveInquiry',
    //             type: "POST",
    //             data: data,
    //             dataType: "JSON",
    //         });

    //         if (response.status === 200) {
    //             Swal.fire({
    //                 icon: 'success',
    //                 title: 'Inquiry Saved!',
    //                 text: response.message,
    //                 timer: 2500,
    //                 showConfirmButton: false
    //             });

    //             $('#addInquireModal')[0].reset();
    //             $('#addInquireModal input, #addInquireModal select').removeClass('valid-field error-field');

    //             setTimeout(() => {
    //                 if (typeof $.fn.DataTable !== 'undefined' && $('#inquireTable').length > 0) {
    //                     $('#inquireTable').DataTable().ajax.reload();
    //                 }
    //             }, 1500);
    //         } else {
    //             Swal.fire({
    //                 icon: 'error',
    //                 title: 'Error',
    //                 text: response.message,
    //                 confirmButtonColor: '#dc2626'
    //             });
    //         }

    //     } catch (e) {
    //         console.error('An error occurred:', e);
    //         Swal.fire({
    //             icon: 'error',
    //             title: 'Server Error',
    //             text: 'Something went wrong while saving your inquiry. Please try again later.',
    //             confirmButtonColor: '#dc2626'
    //         });
    //     }
    // }
    //  function message(msg, type = 'info') {
    //     Swal.fire({
    //         text: msg,
    //         icon: type,
    //         timer: 3000,
    //         timerProgressBar: true,
    //         toast: true,
    //         position: 'top-center',
    //         showConfirmButton: false
    //     });
    // }


    async function saveInquiry(e) {
        e.preventDefault();

        const fields = {
            firstName: $('#addFirstName').val().trim(),
            mobile: $('#addMobile').val().trim(),
            modelId: $('#viewModel').val(),
            model: $('#viewModel option:selected').text()
        };

        const mobilePattern = /^(09|\+639)\d{9}$/;
        const errors = [
            !fields.firstName && "Please enter your first name.",
            fields.firstName && fields.firstName.length < 2 && "First name must be at least 2 characters long.",
            !fields.mobile && "Please enter your mobile number.",
            fields.mobile && !mobilePattern.test(fields.mobile) && "Please enter a valid Philippine mobile number (e.g., 09171234567 or +639171234567).",
            !fields.modelId && "Please select a model before submitting."
        ].filter(Boolean);

        if (errors.length) {
            return Swal.fire({
                icon: 'error',
                title: 'Validation Error',
                text: errors[0],
                confirmButtonColor: '#dc2626'
            });
        }

        try {
            const response = await $.ajax({
                url: baseUrl() + 'Home/saveInquiry',
                type: "POST",
                data: fields,
                dataType: "JSON"
            });

            const isSuccess = response.status === 200;
            Swal.fire({
                icon: isSuccess ? 'success' : 'error',
                title: isSuccess ? 'Inquiry Saved!' : 'Error',
                text: response.message,
                timer: isSuccess ? 2500 : null,
                showConfirmButton: !isSuccess,
                confirmButtonColor: '#dc2626'
            });

            if (isSuccess) {
                $('#addInquireModal')[0].reset();
                $('#addInquireModal input, #addInquireModal select').removeClass('valid-field error-field');

                setTimeout(() => {
                    if ($.fn.DataTable?.isDataTable('#inquireTable')) {
                        $('#inquireTable').DataTable().ajax.reload();
                    }
                }, 1500);
            }
        } catch (e) {
            console.error('An error occurred:', e);
            Swal.fire({
                icon: 'error',
                title: 'Server Error',
                text: 'Something went wrong while saving your inquiry. Please try again later.',
                confirmButtonColor: '#dc2626'
            });
        }
    }



    $(document).ready(function() {
        getModel();

        $('#addInquireModal').on('submit', saveInquiry);
    });

    const getModel = async () => {
        try {
            const response = await $.ajax({
                url: baseUrl() + 'Home/getModel',
                type: "POST",
                dataType: "JSON"
            });

            if (response.status === 200) {
                populateViewModel(response.data);
            } else {
                console.log(response.message || 'Failed to get Model data.');
            }
        } catch (e) {
            console.error('An error occurred.', e);
        }
    };

    function populateViewModel(data) {
        const model = $('#viewModel');
        model.empty();

        if (!data || data.length === 0) {
            model.append('<option disabled>No data available</option>');
        } else {
            model.append('<option selected disabled>Select a Model</option>');
            data.forEach(row => {
                model.append(`<option value="${row.stockId}">${row.name} - ${row.code}</option>`);
            });
        }
        model.trigger("chosen:updated");

    }



    const modal = document.getElementById("imgModal");
    const modalImg = document.getElementById("modalImg");
    const closeBtn = document.querySelector(".modal-close");
    const socialFixed = document.querySelector(".social-fixed");

    document.querySelectorAll(".grid-gallery img").forEach(img => {
        img.addEventListener("click", () => {
            modal.style.display = "flex";
            modalImg.src = img.src;
            modalImg.alt = img.alt;
            document.body.style.overflow = "hidden";
            if (socialFixed) socialFixed.style.display = "none";
        });
    });

    closeBtn.addEventListener("click", () => {
        modal.style.display = "none";
        document.body.style.overflow = "";
        if (socialFixed) socialFixed.style.display = "flex";
    });

    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
            document.body.style.overflow = "";
            if (socialFixed) socialFixed.style.display = "flex";
        }
    });

    // document.addEventListener("DOMContentLoaded", function() {
    //     const images = document.querySelectorAll(".gallery-img");
    //     const socialBar = document.querySelector(".social-fixed");
    //     images.forEach(img => {
    //         img.addEventListener("click", function() {
    //             const series = img.dataset.series; // g, x, or v
    //             const modal = document.getElementById(`modal-${series}`);
    //             const mainImg = modal.querySelector(".modal-preview img");
    //             const caption = modal.querySelector("div[id^='caption']");
    //             const closeModal = modal.querySelector(".modal-close");

    //             mainImg.src = img.src;
    //             caption.textContent = img.parentElement.nextElementSibling?.textContent || "";

    //             modal.style.display = "flex";
    //             document.body.style.overflow = "hidden";

    //             if (socialBar) {
    //                 socialBar.style.display = "none";
    //             }

    //             closeModal.addEventListener("click", () => {
    //                 modal.style.display = "none";
    //                 document.body.style.overflow = "auto";
    //                 if (socialBar) {
    //                     socialBar.style.display = "flex";
    //                 }
    //             });

    //             modal.addEventListener("click", (e) => {
    //                 if (e.target === modal) {
    //                     modal.style.display = "none";
    //                     document.body.style.overflow = "auto";
    //                     if (socialBar) {
    //                         socialBar.style.display = "flex";
    //                     }
    //                 }
    //             });
    //             const thumbs = modal.querySelectorAll(".thumb");
    //             thumbs.forEach((thumb) => {
    //                 thumb.addEventListener("click", () => {
    //                     mainImg.src = thumb.src;
    //                     thumbs.forEach(t => t.classList.remove("active"));
    //                     thumb.classList.add("active");
    //                 });
    //             });
    //         });
    //     });
    // });


    document.querySelectorAll('.series-card').forEach(card => {
        card.addEventListener('click', () => {
            const target = document.getElementById('gallery');
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });


    const nav = document.getElementById('nav');
    const onScroll = () => nav.classList.toggle('shrink', window.scrollY > 16);
    document.addEventListener('scroll', onScroll, {
        passive: true
    });
    onScroll();

    // Parallax engine
    const parallaxItems = [...document.querySelectorAll('[data-parallax]')].map(el => ({
        el,
        speed: parseFloat(el.getAttribute('data-speed') || '0.1')
    }));
    let ticking = false;

    function parallaxLoop() {
        const y = window.scrollY;
        const isMobile = window.innerWidth <= 640; // phones

        parallaxItems.forEach(({
            el,
            speed
        }) => {
            if (isMobile) {
                el.style.transform = "none"; // disable parallax
            } else {
                el.style.transform = `translate3d(0, ${Math.round(y * speed)}px, 0)`;
            }
        });

        ticking = false;
    }

    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(parallaxLoop);
            ticking = true;
        }
    }, {
        passive: true
    });
    parallaxLoop();

    // Series Switcher logic (V/X/G)
    const body = document.body;
    const seriesLabel = document.getElementById('seriesLabel');
    body.setAttribute('data-model', 'V');
    document.querySelectorAll('.switcher .pill').forEach(btn => {
        btn.addEventListener('click', () => switchSeries(btn.dataset.series, btn));
    });
    document.querySelectorAll('[data-switch]').forEach(card => card.addEventListener('click', () => switchSeries(card.dataset.switch)));

    function switchSeries(s, pressedBtn) {
        body.setAttribute('data-model', s);
        seriesLabel.textContent = `Series ${s}`;

        // Update dynamic stripe per series
        if (s === 'V') document.documentElement.style.setProperty('--stripe', 'linear-gradient(90deg, var(--blue) 0 38%, var(--white) 38% 62%, var(--black) 62% 100%)');
        if (s === 'X') document.documentElement.style.setProperty('--stripe', 'linear-gradient(90deg, var(--black) 0 100%, var(--white) 45% 70%, var(--red) 70% 100%)');
        if (s === 'G') document.documentElement.style.setProperty('--stripe', 'linear-gradient(90deg, var(--white) 0 38%, var(--red) 35% 70%, var(--black) 70% 100%)');

        // Update image based on series
        const scooterImage = document.getElementById('scooterImage');
        if (s === 'V') scooterImage.src = "assets/images/v/Grotta Blue.png";
        if (s === 'X') scooterImage.src = "assets/images/x/X300 Special/Super Black.png";
        if (s === 'G') scooterImage.src = "assets/images/g/G350II/lambretta-G350-series2-red-1536x1052.png";

        const scooterLink = document.getElementById('scooterLink');

        if (s === 'V') {
            scooterImage.src = "assets/images/v/Grotta Blue.png";
            scooterLink.href = "#gallery-v";
        }
        if (s === 'X') {
            scooterImage.src = "assets/images/x/X300 Special/Super Black.png";
            scooterLink.href = "#gallery-x";
        }
        if (s === 'G') {
            scooterImage.src = "assets/images/g/G350II/lambretta-G350-series2-red-1536x1052.png";
            scooterLink.href = "#gallery-g";
        }
        // Toggle pressed state in hero pills
        document.querySelectorAll('.switcher .pill').forEach(b => b.setAttribute('aria-pressed', String(b === pressedBtn)));

        // Micro animation nudge
        const scooter = document.querySelector('.scooter');
        scooter.animate([{
                transform: 'translate3d(0,0,0) rotate(-6deg)'
            },
            {
                transform: 'translate3d(0,-6px,0) rotate(-4deg)'
            },
            {
                transform: 'translate3d(0,0,0) rotate(-6deg)'
            }
        ], {
            duration: 420,
            easing: 'ease-out'
        });

        // Smooth scroll to hero preview when choosing from series cards
        if (pressedBtn === undefined) {
            window.scrollTo({
                top: document.getElementById('home').offsetTop - 60,
                behavior: 'smooth'
            });
        }

        // Smooth scroll when clicking the scooter image link
        document.getElementById('scooterLink').addEventListener('click', function(e) {
            e.preventDefault(); // prevent instant jump

            const targetId = this.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            if (targetSection) {
                targetSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    }

    const hero = document.querySelector('.hero');
    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    hero.classList.add('loaded');
                    observer.unobserve(hero); // only animate once
                }
            });
        }, {
            threshold: 0.3
        }
    );

    observer.observe(hero);



    // Lightbox
    const lb = document.getElementById('lightbox');

    function toggleLightbox(show) {
        lb.style.display = show ? 'flex' : 'none';
    }
    document.querySelectorAll('[data-lightbox]').forEach(tile => tile.addEventListener('click', () => toggleLightbox(true)));
    lb.addEventListener('click', e => {
        if (e.target === lb) toggleLightbox(false);
    });

    // Animate specs section when visible
    const specs = document.querySelector('.specs');
    const specsObserver = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    specs.classList.add('loaded');
                    specsObserver.unobserve(specs); // only animate once
                }
            });
        }, {
            threshold: 0.3
        }
    );

    specsObserver.observe(specs);

    // Apply scroll animation to all gallery sections
    document.querySelectorAll('.gallery').forEach(gallery => {
        const galleryObserver = new IntersectionObserver(
            entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        gallery.classList.add('loaded');
                        galleryObserver.unobserve(gallery); // animate once
                    }
                });
            }, {
                threshold: 0.2
            }
        );
        galleryObserver.observe(gallery);
    });


    const scrollTopBtn = document.getElementById("scrollTopBtn");

    window.onscroll = function() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            scrollTopBtn.style.display = "block";
        } else {
            scrollTopBtn.style.display = "none";

        }
    };

    scrollTopBtn.addEventListener("click", () => {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });


    const menuToggle = document.getElementById("menuToggle");
    const navLinks = document.querySelector(".nav .links");

    menuToggle.addEventListener("click", () => {
        navLinks.classList.toggle("show");
    });

    document.addEventListener("scroll", () => {
        const scrollY = window.scrollY;

        document.querySelectorAll("[data-parallax]").forEach(el => {
            // Skip backgrounds
            if (el.classList.contains("hero") ||
                el.classList.contains("gallery") ||
                el.classList.contains("cta-banner")) {
                return;
            }

            const speed = parseFloat(el.dataset.speed) || 0;
            el.style.transform = `translateY(${scrollY * speed}px)`;
        });
    });
</script>

<?= $this->include('partial/footer') ?>