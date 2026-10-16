<?php 
/* Template Name: contact page template*/

get_header();
?>
<article>

    <?php get_template_part('page-banners'); ?>


    <!-- =========================================================
         CONTACT SECTION
    ========================================================= -->
    <section class="ct-section">
        <div class="container">

            <div class="ct-head">
                <span class="ct-eyebrow">Contact Us</span>
                <h2 class="ct-title">We'd Love To <em>Hear From You</em></h2>
                <p class="ct-sub">
                    Send us a message or reach out through any of the
                    channels below — we'll get back to you as soon as possible.
                </p>
            </div>

            <div class="ct-grid">

                <!-- Contact Form -->
                <div class="ct-form-card">
                    <h3>Send Us a Message</h3>
                    <p>Fill in the form below and our team will reach out to you shortly.</p>

                    <form class="ct-form" onsubmit="event.preventDefault();">
                        <div class="ct-form-row">
                            <div class="ct-field">
                                <label for="ctName">Your Name</label>
                                <input id="ctName" type="text" placeholder="Full name" required>
                            </div>
                            <div class="ct-field">
                                <label for="ctPhone">Phone</label>
                                <input id="ctPhone" type="tel" placeholder="+91 00000 00000" required>
                            </div>
                        </div>

                        <div class="ct-field">
                            <label for="ctEmail">Email Address</label>
                            <input id="ctEmail" type="email" placeholder="you@example.com" required>
                        </div>

                        <div class="ct-field">
                            <label for="ctSubject">Subject</label>
                            <input id="ctSubject" type="text" placeholder="What is this about?">
                        </div>

                        <div class="ct-field">
                            <label for="ctMessage">Message</label>
                            <textarea id="ctMessage" placeholder="Type your message here..." required></textarea>
                        </div>

                        <button class="ct-submit" type="submit">
                            Send Message <i class="bi bi-send-fill"></i>
                        </button>
                    </form>
                </div>

                <!-- Info Column -->
                <div class="ct-info-col">

                    <div class="ct-info-card">
                        <div class="ct-info-icon orange">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="ct-info-body">
                            <span>Visit Us</span>
                            <h4>Our Campus</h4>
                            <p>
                                Shree Mahalingeshwara Temple Campus, Kunjathur,<br>
                                Kunjathur, Manjeshwar – 671323
                            </p>
                        </div>
                    </div>

                    <div class="ct-info-card">
                        <div class="ct-info-icon blue">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="ct-info-body">
                            <span>Call Us</span>
                            <h4>Phone</h4>
                            <p>
                                Ph: <a href="tel:+914998278940">04998 278940</a><br>
                                Mob: <a href="tel:+918921400582">8921400582</a>
                            </p>
                        </div>
                    </div>

                    <div class="ct-info-card">
                        <div class="ct-info-icon green">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="ct-info-body">
                            <span>Email Us</span>
                            <h4>Email Address</h4>
                            <p>
                                <a href="mailto:smvkunjathur@gmail.com">smvkunjathur@gmail.com</a>
                            </p>
                        </div>
                    </div>

                    <div class="ct-info-card">
                        <div class="ct-info-icon purple">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div class="ct-info-body">
                            <span>Office Hours</span>
                            <h4>Working Time</h4>
                            <p>Monday – Saturday<br>9:00 AM – 4:00 PM</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- =========================================================
         MAP SECTION
    ========================================================= -->
    <section class="ct-map">
        <div class="container">
            <div class="ct-map-frame">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3891.443870013705!2d74.8939841741166!3d12.749660919707269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35f60ffae3b47%3A0xb4db953d15a82221!2sShree%20Mahalingeshwara%20Vidyanikethana%2C%20Kunjathur!5e0!3m2!1sen!2sin!4v1790841670721!5m2!1sen!2sin"
                    width="600"
                    height="450"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="strict-origin-when-cross-origin">
                </iframe>
            </div>
        </div>
    </section>

</article>
<?php 
get_footer();
?>