{{-- @query([
    'post_type'   => 'product',
    'product_tag' => $tags,
    'product_cat' => $category
]) --}}

<section class="is-relative has-background-dark">
    <div class="carousel" 
        data-inertia data-inertia-speed="2" 
        data-inertia-direction="horizontal" 
        style="--carousel-item-width: 28vw; --carousel-item-mobile-width: 85vw">
        <div class="carousel-wrapper columns is-mobile">
        @query(['post_type' => 'proyectos'])
            @posts()
                <div class="column is-3 carousel-item" data-width="28vw" data-cursor-text="Drag">
                    <div class="carousel-image-container" style="background: url('@thumbnail('full', false)') center center / cover no-repeat;">
                        <div>
                            <img src="@asset('images/bau-logo.png')" alt="" style="height: 2rem"/>
                        </div>
                        <div>
                            <div class="has-text-light is-size-4 has-text-weight-normal has-margin-bottom-30">
                                @excerpt
                            </div>
                            <div class="is-flex is-align-items-center is-paddingless has-margin-top-20-mobile is-offset-1 has-text-centered has-text-left-touch over-overlay">
                                <a class="button is-inverse has-margin-top-5 hover-estrella-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                    <circle cx="13" cy="13" r="12" stroke="white" stroke-width="2"/>
                                    </svg>
                                    <svg class="svg-estrella" xmlns="http://www.w3.org/2000/svg" width="26" height="12" viewBox="0 0 55 55" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0314 0.00439453C28.7282 14.5804 40.4221 26.2743 54.998 26.9713V27.0373C40.422 27.7342 28.7281 39.4283 28.0314 54.0044H27.9654C27.2687 39.4281 15.5744 27.7338 0.998047 27.0372V26.9713C15.5743 26.2747 27.2686 14.5806 27.9654 0.00439453H28.0314Z" fill="white"/>
                                    </svg>
                                    <span class="has-margin-left-15">View featured project</span>
                                </a> 
                            </div>
                            {{-- <a class="planet-button-light is-size-7 is-size-6-fullhd over-overlay is-full-width" href="" data-inertia data-inertia-reveal data-inertia-delay="300">
                                <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
                                <span>View featured project</span>
                            </a> --}}
                        </div>
                    </div>
                </div>
            @endposts
            @posts()
              <div class="column is-3 carousel-item" data-width="28vw" data-cursor-text="Drag">
                    <div class="carousel-image-container" style="background: url('@thumbnail('full', false)') center center / cover no-repeat;">
                        <div>
                            <img src="@asset('images/bau-logo.png')" alt="" style="height: 2rem"/>
                        </div>
                        <div>
                            <div class="has-text-light is-size-4 has-text-weight-normal has-margin-bottom-30">
                                @excerpt
                            </div>
                            <div class="is-flex is-align-items-center is-paddingless has-margin-top-20-mobile is-offset-1 has-text-centered has-text-left-touch over-overlay">
                                <a class="button is-inverse has-margin-top-5 hover-estrella-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                    <circle cx="13" cy="13" r="12" stroke="white" stroke-width="2"/>
                                    </svg>
                                    <svg class="svg-estrella" xmlns="http://www.w3.org/2000/svg" width="26" height="12" viewBox="0 0 55 55" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0314 0.00439453C28.7282 14.5804 40.4221 26.2743 54.998 26.9713V27.0373C40.422 27.7342 28.7281 39.4283 28.0314 54.0044H27.9654C27.2687 39.4281 15.5744 27.7338 0.998047 27.0372V26.9713C15.5743 26.2747 27.2686 14.5806 27.9654 0.00439453H28.0314Z" fill="white"/>
                                    </svg>
                                    <span class="has-margin-left-15">View featured project</span>
                                </a> 
                            </div>
                        </div>
                    </div>
                </div>
            @endposts
            @posts()
              <div class="column is-3 carousel-item" data-width="28vw" data-cursor-text="Drag">
                    <div class="carousel-image-container" style="background: url('@thumbnail('full', false)') center center / cover no-repeat;">
                        <div>
                            <img src="@asset('images/bau-logo.png')" alt="" style="height: 2rem"/>
                        </div>
                        <div>
                            <div class="has-text-light is-size-4 has-text-weight-normal has-margin-bottom-30">
                                @excerpt
                            </div>
                            <div class="is-flex is-align-items-center is-paddingless has-margin-top-20-mobile is-offset-1 has-text-centered has-text-left-touch over-overlay">
                                <a class="button is-inverse has-margin-top-5 hover-estrella-light">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                    <circle cx="13" cy="13" r="12" stroke="white" stroke-width="2"/>
                                    </svg>
                                    <svg class="svg-estrella" xmlns="http://www.w3.org/2000/svg" width="26" height="12" viewBox="0 0 55 55" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0314 0.00439453C28.7282 14.5804 40.4221 26.2743 54.998 26.9713V27.0373C40.422 27.7342 28.7281 39.4283 28.0314 54.0044H27.9654C27.2687 39.4281 15.5744 27.7338 0.998047 27.0372V26.9713C15.5743 26.2747 27.2686 14.5806 27.9654 0.00439453H28.0314Z" fill="white"/>
                                    </svg>
                                    <span class="has-margin-left-15">View featured project</span>
                                </a> 
                            </div>
                            {{-- <a class="planet-button-light is-size-7 is-size-6-fullhd over-overlay is-full-width" href="" data-inertia data-inertia-reveal data-inertia-delay="300">
                                <span class="icon has-margin-right-20"><i data-feather="circle"></i></span>
                                <span>View featured project</span>
                            </a> --}}
                        </div>
                    </div>
                </div>
            @endposts
        </div>
    </div>
</section>

<style>
    .carousel-item {
        height: 90vh;
        width: 500px !important;
    }
    .carousel-image-container {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%; 
        width: 100%;
        padding: 3vw;
        border-radius: 24px
    }
</style>

{{-- @posts()
    <div class="column is-3 carousel-item" data-width="28vw" data-cursor-text="Drag">
        <div class="" style="background: url('@thumbnail('full', false)') center center / contain no-repeat;height: 230px;">
            <h1>@title</h1>
            <p>@excerpt</p>
        </div>
        <a href="@permalink">
        </a>
    </div>
@endposts --}}