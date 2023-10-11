  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s"
      style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
      <div class="container py-5">
          <div class="text-center">
              <h6 class="text-secondary text-uppercase">Testimonial</h6>
              <h1 class="mb-0">Our Clients Say!</h1>
          </div>
          <div class="owl-carousel testimonial-carousel wow fadeInUp owl-loaded owl-drag" data-wow-delay="0.1s"
              style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">

              <div class="owl-stage-outer">
                  <div class="owl-stage"
                      style="transition: all 0s ease 0s; width: 4240px; transform: translate3d(-848px, 0px, 0px);">
                      <div class="owl-item" style="width: 424px;">


                          @foreach ($Testimonial as $item)
                              <div class="testimonial-item p-4 my-5">
                                  <div class="testimonial-item p-4 my-5">
                                      <i
                                          class="fa fa-quote-right fa-3x text-light position-absolute top-0 end-0 mt-n3 me-4"></i>
                                      <div class="d-flex align-items-end mb-4">
                                          <img class="img-fluid flex-shrink-0" src="{{ $item->img }}"
                                              style="width: 80px; height: 80px;">
                                          <div class="ms-4">
                                              <h5 class="mb-1"> {{ $item->fname . ' ' . $item->lname }}
                                              </h5>
                                          </div>
                                      </div>
                                      <p class="mb-0"> {{ $item->message }}.</p>
                                  </div>

                              </div>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <script>
      $(document).ready(function() {
          $(".testimonial-carousel").owlCarousel({
              loop: true, // Enable loop mode
              margin: 20, // Adjust margin as needed
              nav: false, // Display navigation arrows (if needed)
              dots: true, // Display pagination dots
              items: 1, // Number of items to display at a time
              autoplay: true, // Enable autoplay
              autoplayTimeout: 5000, // Autoplay interval in milliseconds
              autoplayHoverPause: true // Pause autoplay on hover
          });
      });
  </script>
