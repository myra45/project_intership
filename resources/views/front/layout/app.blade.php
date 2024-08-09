<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--  
    Document Title
    =============================================
    -->
    <title>Manajemen Ekstrakulikuler</title>
    <!--  
    Favicons
    =============================================
    -->
   @include('front.layout.favicon')

    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta
      name="msapplication-TileImage"
      content="assets/images/favicons/favicon-1.jpg"
    />
    <meta name="theme-color" content="#ffffff" />
    <!--  
    Stylesheets
    =============================================
    
    -->
    <!-- stylesheets-->
   @include('front.layout.style')

  </head>
  <body data-spy="scroll" data-target=".onpage-navigation" data-offset="60">
    <main>
      <div class="page-loader">
        <div class="loader">Loading...</div>
      </div>
      
     @include('front.layout.navbar')

      @yield('main_content')
        <section class="about-section" style="padding-top: 8rem;" id="about">
          <div class="container">
            <div class="row">
              <div class="col-md-6" style="padding: 0px;">
                <img
                  src="assets/images/favicons/Kegiatan-Eskul.jpg"
                  alt="Ekstrakulikuler image"
                  class="about-img"
                />
              </div>
              <div class="col-md-6" style="margin-top: 8rem;">
                <h2 class="module-title    align-left">Apa Itu Ekstrakulikuler?</h2>
                <div class="module-subtitle font-serif align-left">
                 "Kegiatan ekstrakurikuler merupakan kegiatan diluar kurikulum pokok yang dilakukan disekolah untuk mengembangkan aspek non-akademik siswa" &mdash; Prof. Dr. Haryanto, M.Pd.,
                </div>
                <p style="margin-top: -5rem;">
                 <span style="font-size: medium;">Beberapa manfaat ekstrakulikuler antara lain:</span>
                </p>
                
                   <div class="col-md-4">
                <div class="features-item">
                  <div class="features-icon">
                    <span><img width="50" height="50" src="https://img.icons8.com/ios/50/design--v1.png" alt="design--v1"/></span>
                  </div>
                  <h3 class="features-title" >
                    Development
                  </h3>
                  <span class=" " style="font-size: 1.4rem;"><div>Meningkatkan keahlian dan minat siswa diluar kurikulum akademik</div></span>
                </div>
                
            </div>
                   <div class="col-md-4">
                <div class="features-item">
                  <div class="features-icon">
                    <span><img width="50" height="50" src="https://img.icons8.com/ios/50/development-skill.png" alt="development-skill"/></span>
                  </div>
                  <h3 class="features-title   ">
                    Improve your skills
                  </h3>
                  <span class=" " style="font-size: 1.4rem;"><div>Anak dapat mengasah soft skill dan  hard skill mereka</div></span>
                </div>
                
            </div>

             <div class="col-md-4 ">
                <div class="features-item">
                  <div class="features-icon">
                    <span><img width="50" height="50" src="https://img.icons8.com/ios/50/welfare.png" alt="welfare"/></span>
                  </div>
                  <h3 class="features-title   ">Productivity</h3>
                  <span class=" " style="font-size: 1.4rem;"><div>Memberi ruang untuk anak-anak agar dapat menjadi pribadi yang aktif dan produktif</div></span>
                </div>
                
            </div>
          </div>
        </div>
        </section>
        <section class="module">
          <h2 class="module-title    ">Beberapa Ekskul di SMK BBC</h2>
          <div class="container">
            <div class="row multi-columns-row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon">
                    <span><img width="50" height="50" src="https://img.icons8.com/ios/50/mosque.png" alt="mosque"/></span>
                  </div>
                  <h3 class="features-title">DKM</h3>
                  <span class=" " style="font-size: 1.4rem;"><div>Dewan Kemakmuran Masjid merupakan badan atau organisasi yang bertugas mengelola, menjaga, dan memajukan masjid dalam berbagai aspek.</div></span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon">
                    <span><img width="50" height="50" src="https://img.icons8.com/ios/50/open-book--v1.png" alt="open-book--v1"/></span>
                  </div>
                  <h3 class="features-title   ">
                    WJLRC
                  </h3>
                  <span class=" " style="font-size: 1.4rem;"><div>(West Java Leader's Reading Challenge) adalah sebuah inisiatif yang bertujuan meningkatkan kemampuan literasi dan minat baca siswa di Provinsi Jawa Barat.</div></span>
                </div>   
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon">
                    <span><img width="50" height="50" src="https://img.icons8.com/ios/50/poplar.png" alt="poplar"/></span>
                  </div>
                  <h3 class="features-title   ">
                    KEPAL
                  </h3>
                  <span class=" " style="font-size: 1.4rem;"><div>Kelompok Pecinta Alam adalah sebuah organisasi yang didedikasikan supaya dapat menghargai, memahami, memperbaiki, dan melindungi keanekaragaman hayati serta lingkungan alam.</div></span>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="features-item">
                  <div class="features-icon">
                    <span><img width="50" height="50" src="https://img.icons8.com/ios/50/angklung.png" alt="angklung"/></span>
                  </div>
                  <h3 class="features-title   ">KESENIAN</h3>
                  <span class=" " style="font-size: 1.4rem;"><div>Ekstrakurikuler kesenian di SMK di fokuskan untuk bisa mengembangkan potensi, bakat, dan minat siswa bidang seni.</div></span>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="module pt-0 pb-0" id="news">
          <div class="row position-relative m-0">
            <div class="gambar-badag"> <div
              class="col-xs-12 col-md-6 side-image isi-gambar"
              data-background="assets/images/section-14.jpg"
            ></div>
          </div>
           
          <h2 class="module-title" style="margin: 0 ;">Berita</h2>
        <section class="module">
          <div class="container">
            <div class="row multi-columns-row post-columns">
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post">
                  <div class="" style="overflow: hidden;">
                    <div class="post-thumbnail gambar-badag">
                      <a>
                        <img  class="" src="assets/images/Berita-1.jpg" alt="Blog-post Thumbnail"/>
                      </a>
                    </div>
                  </div>
                  <div class="post-header   ">
                    <h2 class="post-title"><a href="#">Mengikuti Perlombaan</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">SMK BBC</a>&nbsp;| 23 November | 3 Comments
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post">
                  <div class="" style="overflow: hidden; transition: all 10s;"></div>
                  <div class="post-thumbnail gambar-badag"><a><img src="assets/images/Berita-2.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header   ">
                    <h2 class="post-title"><a href="#">Sholat Dhuha Bersama</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">SMK BBC</a>&nbsp;| 11 November | 4 Comments
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="post">
                 <div class="" style="overflow: hidden; transition: all 10s;"></div>
                  <div class="post-thumbnail gambar-badag"><a><img src="assets/images/Berita-3.jpg" alt="Blog-post Thumbnail"/></a></div>
                  <div class="post-header   ">
                    <h2 class="post-title"><a href="#">Taman Baca</a></h2>
                    <div class="post-meta">By&nbsp;<a href="#">SMK BBC</a>&nbsp;| 5 November | 15 Comments
                    </div>
                  </div>
                  <div class="post-entry">
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                  </div>
                  <div class="post-more"><a class="more-link" href="#">Read more</a></div>
                </div>
              </div>
            </section>

           <h2 class="module-title    ">Testimonial</h2>      
        <hr class="divider-w" />
        <section
          class="module bg-dark-60 pt-0 pb-0 parallax-bg testimonial"
          data-background="assets/images/testimonial_bg.jpg"
        >
          <div class="testimonials-slider pt-140 pb-140">
            <ul class="slides">
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon">
                        <span class="icon-quote"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text   ">
                        I am alone, and feel the charm of existence in this
                        spot, which was created for the bliss of souls like
                        mine.
                      </blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption   ">
                          <div class="testimonial-title">Jack Woods</div>
                          <div class="testimonial-descr">
                            SomeCompany INC, CEO
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon">
                        <span class="icon-quote"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text   ">
                        I should be incapable of drawing a single stroke at the
                        present moment; and yet I feel that I never was a
                        greater artist than now.
                      </blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption   ">
                          <div class="testimonial-title">Jim Stone</div>
                          <div class="testimonial-descr">
                            SomeCompany INC, CEO
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="module-icon">
                        <span class="icon-quote"></span>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <blockquote class="testimonial-text   ">
                        I am so happy, my dear friend, so absorbed in the
                        exquisite sense of mere tranquil existence, that I
                        neglect my talents.
                      </blockquote>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-sm-offset-4">
                      <div class="testimonial-author">
                        <div class="testimonial-caption   ">
                          <div class="testimonial-title">Adele Snow</div>
                          <div class="testimonial-descr">
                            SomeCompany INC, CEO
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section class="module" id="contact">
          <div class="container">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title   ">Contact us</h2>
                <div class="module-subtitle font-serif"></div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <form
                  id="contactForm"
                  role="form"
                  method="post"
                  action="php/contact.php"
                >
                  <div class="form-group">
                    <label class="sr-only" for="name">Name</label>
                    <input
                      class="form-control"
                      type="text"
                      id="name"
                      name="name"
                      placeholder="Your Name*"
                      required="required"
                      data-validation-required-message="Please enter your name."
                    />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <label class="sr-only" for="email">Email</label>
                    <input
                      class="form-control"
                      type="email"
                      id="email"
                      name="email"
                      placeholder="Your Email*"
                      required="required"
                      data-validation-required-message="Please enter your email address."
                    />
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <textarea
                      class="form-control"
                      rows="7"
                      id="message"
                      name="message"
                      placeholder="Your Message*"
                      required="required"
                      data-validation-required-message="Please enter your message."
                    ></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="text-center">
                    <button
                      class="btn btn-block btn-round btn-c cd btn-custom"
                      id="cfsubmit"
                      type="submit"
                    >
                      Submit
                    </button>
                  </div>
                </form>
                <div
                  class="ajax-response   "
                  id="contactFormResponse"
                ></div>
              </div>
            </div>
          </div>
        </section>

      @include('front.layout.footer')

      </div>
      <div class="scroll-up">
        <a href="#totop"><i class="fa fa-angle-double-up"></i></a>
      </div>
    </main>
    <!--  
    JavaScripts
    =============================================
    -->
   @include('front.layout.script')
   
  </body>
</html>
