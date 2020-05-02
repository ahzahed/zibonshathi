<!--Male Featured Profiles part start -->
<section class="femaleFeatured">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="head text-center">
          <h2 style="border-bottom: 3px solid #f35c00;">Female Featured</h2>
        </div>
      </div>
    </div>

    <div class="row team-row">
        @foreach ($maleFeatured as $maleFeatured)
      <div class="col-lg-3 team-wrap">
        <div class="team-member text-center">
          <div class="team-img">
            <img
            src="{{ $maleFeatured->avatar }}"
              alt="team1"
              class="img-fluid w-100"
            />
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
            href="./zibonshathi-frontpage/pages/userProfile.html"
            class="btn p-1"
            style="margin-top: -24px; color: white;"
            >View Profile</a
          >
        </div>
      </div>
      @endforeach
    </div>
    <div class="col-lg-12 pt-5 text-center">
      <a
        href="../zibonshathi-frontpage/pages/allMale.html"
        class="btn w-25 viewAll"
        >View All</a
      >
    </div>
  </div>
</section>
<!--Male Featured part end -->






