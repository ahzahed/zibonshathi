<!--Male Featured Profiles part start -->
<section id="maleFeatured">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="head text-center">
          <h2><span style="color: #3084ca;">Male</span> Featured</h2>
        </div>
      </div>
    </div>
    <div class="row team-row">
    @foreach ($maleFeatured as $maleFeatured)
      <div class="col-lg-3 team-wrap">
        <div class="team-member text-center">
          <div class="team-img">
            <img src="{{ $maleFeatured->avatar }}" alt="team1" class="img-fluid w-100" />
            <div class="overlay">
              <div class="team-details text-center">
                <div class="socials mt-20">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
          <h6 class="team-title">{{ $maleFeatured->name }}</h6>
          <p class="designation pb-0 mb-0">{{ $maleFeatured->age }}, {{ $maleFeatured->height }}</p>
          <p class="designation">{{ $maleFeatured->occupation }}</p>
          <a
            href="#"
            class="btn p-1"
            style="
              background-color: #3084ca;
              margin-top: -24px;
              color: white;
            "
            >View Profile</a
          >
        </div>
      </div>
      @endforeach

      {{-- <div class="col-lg-3 team-wrap">
        <div class="team-member text-center">
          <div class="team-img">
            <img src="{{ asset('Frontend/images/team1.jpeg')}}" alt="team1" class="img-fluid w-100" />
            <div class="overlay">
              <div class="team-details text-center">
                <div class="socials mt-20">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
          <h6 class="team-title">Amir Hamza</h6>
          <p class="designation pb-0 mb-0">20 Years, 5ft 6in</p>
          <p class="designation">Student</p>
          <a
            href="#"
            class="btn p-1"
            style="
              background-color: #3084ca;
              margin-top: -24px;
              color: white;
            "
            >View Profile</a
          >
        </div>
      </div>
      <div class="col-lg-3 team-wrap">
        <div class="team-member text-center">
          <div class="team-img">
            <img src="{{ asset('Frontend/images/team2.jpeg')}}" alt="team1" class="img-fluid w-100" />
            <div class="overlay">
              <div class="team-details text-center">
                <div class="socials mt-20">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
          <h6 class="team-title">Amir Hamza</h6>
          <p class="designation pb-0 mb-0">20 Years, 5ft 6in</p>
          <p class="designation">Student</p>
          <a
            href="#"
            class="btn p-1"
            style="
              background-color: #3084ca;
              margin-top: -24px;
              color: white;
            "
            >View Profile</a
          >
        </div>
      </div>
      <div class="col-lg-3 team-wrap">
        <div class="team-member text-center">
          <div class="team-img">
            <img src="{{ asset('Frontend/images/team3.jpeg')}}" alt="team1" class="img-fluid w-100" />
            <div class="overlay">
              <div class="team-details text-center">
                <div class="socials mt-20">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
          <h6 class="team-title">Amir Hamza</h6>
          <p class="designation pb-0 mb-0">20 Years, 5ft 6in</p>
          <p class="designation">Student</p>
          <a
            href="#"
            class="btn p-1"
            style="
              background-color: #3084ca;
              margin-top: -24px;
              color: white;
            "
            >View Profile</a
          >
        </div>
      </div>
      <div class="col-lg-3 team-wrap">
        <div class="team-member text-center">
          <div class="team-img">
            <img src="{{ asset('Frontend/images/test1.png')}}" alt="team1" class="img-fluid w-100" />
            <div class="overlay">
              <div class="team-details text-center">
                <div class="socials mt-20">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-google-plus-g"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
          <h6 class="team-title">Amir Hamza</h6>
          <p class="designation pb-0 mb-0">20 Years, 5ft 6in</p>
          <p class="designation">Student</p>
          <a
            href="#"
            class="btn p-1"
            style="
              background-color: #3084ca;
              margin-top: -24px;
              color: white;
            "
            >View Profile</a
          >
        </div>
      </div> --}}
    </div>
  </div>
</section>
<!--Male Featured part end -->

