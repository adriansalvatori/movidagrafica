<section class="is-relative p-0">

  @include('components.bubble')
  <section class="hero is-fullheight is-relative has-text-dark">
    <div class="hero-body">
      <div class="for-overlay" data-cursor="-overlay" data-cursor-video="@asset('images/new-video.mp4')" data-cursor-icon="@asset('images/play-icon.svg')" ></div>
      <div class="container is-fluid">
        <div class="logo-movidagrafica has-margin-top-100 columns" data-inertia data-inertia-reveal data-inertia-delay="300">
          <img class="column is-9" src="@asset('/images/movidagrafica-logo-dark.svg')" alt="Movidagráfica™">
        </div>
        <div class="columns has-margin-top-100">
          <div class="has-padding-10">
            <div class="buttons">
              <div class="is-flex is-align-items-center is-paddingless has-text-centered has-text-left-touch">
                <a class="button is-inverse has-margin-top-5 hover-estrella-dark is-size-7 is-size-6-fullhd over-overlay">
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                    <circle cx="13" cy="13" r="12" stroke="black" stroke-width="2"/>
                  </svg>
                  <svg class="svg-estrella" xmlns="http://www.w3.org/2000/svg" width="26" height="12" viewBox="0 0 55 55" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0314 0.00439453C28.7282 14.5804 40.4221 26.2743 54.998 26.9713V27.0373C40.422 27.7342 28.7281 39.4283 28.0314 54.0044H27.9654C27.2687 39.4281 15.5744 27.7338 0.998047 27.0372V26.9713C15.5743 26.2747 27.2686 14.5806 27.9654 0.00439453H28.0314Z" fill="black"/>
                  </svg>
                  <span class="has-text-dark has-margin-left-15">About the agency</span>
                </a> 
              </div>
              <div class="is-flex is-align-items-center is-paddingless has-text-centered has-text-left-touch has-margin-left-30">
                <a class="button is-inverse has-margin-top-5 hover-estrella-dark is-size-7 is-size-6-fullhd over-overlay">
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                    <circle cx="13" cy="13" r="12" stroke="black" stroke-width="2"/>
                  </svg>
                  <svg class="svg-estrella" xmlns="http://www.w3.org/2000/svg" width="26" height="12" viewBox="0 0 55 55" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0314 0.00439453C28.7282 14.5804 40.4221 26.2743 54.998 26.9713V27.0373C40.422 27.7342 28.7281 39.4283 28.0314 54.0044H27.9654C27.2687 39.4281 15.5744 27.7338 0.998047 27.0372V26.9713C15.5743 26.2747 27.2686 14.5806 27.9654 0.00439453H28.0314Z" fill="black"/>
                  </svg>
                  <span class="has-text-dark has-margin-left-15">Get in touch</span>
                </a> 
              </div>
            </div>
          </div>
          <div class="column is-3 is-offset-3-fullhd is-offset-2" data-inertia data-inertia-reveal data-inertia-delay="1000">
            <p class=" is-size-7 is-size-6-fullhd">
              We propel pioneering brands towards expansion by mapping out their cosmic potential and crafting a compelling brand story, paired with a genuine digital identity.
            </p>
          </div>
          <div class="column is-1 is-offset-1 over-overlay is-hidden-touch" data-gravity>
            <div class="radio-button is-arrow-down" data-inertia data-inertia-reveal data-inertia-delay="1200">
              <a href="#second-section"data-inertia data-inertia-to>
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="84" height="84" viewBox="0 0 24 24" fill="none" stroke="#040507" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="8 12 12 16 16 12"></polyline>
                    <line x1="12" y1="8" x2="12" y2="16"></line>
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- THE AGENCY --}}

  <section id="second-section" class="hero is-fullheight is-light has-text-dark">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="pre-title has-margin-bottom-50" data-inertia data-inertia-reveal>The Agency</div>
        <h1 class="title has-text-dark has-margin-bottom-50 is-1 has-text-weight-medium is-size-3 is-size-1-desktop" data-inertia data-inertia-reveal data-inertia-delay="300">
          We chart a course for <b>Strategic Planning, Brand Experience, User Experience and Technology Implementation</b> aimed at achieving a safe and stable return on investment.
        </h1>
        <div class="buttons is-centered" data-inertia data-inertia-reveal data-inertia-delay="500">
          <a href="#" class="button is-rounded is-dark has-text-danger" data-gravity>
            See what we do
          </a>
        </div>
      </div>
    </div>
    @include('components.horizontal-move')
  </section>
</section>