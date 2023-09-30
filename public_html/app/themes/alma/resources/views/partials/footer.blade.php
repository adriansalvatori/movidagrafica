<style>
  .preloader.is-close {
    pointer-events: none !important;
    opacity: 0 !important;
  }
</style>

<footer class="is-relative hero is-dark is-medium">
  <div class="hero-body">
    <div class="container is-fullhd has-padding-20-mobile">
      <div class="_header-footer columns align-items-center is-centered mx-auto has-margin-bottom-60 has-padding-bottom-60 has-margin-left-auto has-margin-right-auto">

        <a href="#" class="is-flex is-align-items-center column is-2 p-0" data-gravity data-cursor-stick>
          <img src="{!!get_field('logo_movidagrafica', 'options')!!}" alt="MG_Company">
        </a>
        <div class="is-flex is-align-items-center column is-3 is-paddingless has-margin-top-20-mobile is-offset-1 has-text-centered has-text-left-touch">
          <a class="button abrir-modal is-inverse has-margin-top-5 hover-estrella-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
              <circle cx="13" cy="13" r="12" stroke="white" stroke-width="2"/>
            </svg>
            <svg class="svg-estrella" xmlns="http://www.w3.org/2000/svg" width="26" height="12" viewBox="0 0 55 55" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0314 0.00439453C28.7282 14.5804 40.4221 26.2743 54.998 26.9713V27.0373C40.422 27.7342 28.7281 39.4283 28.0314 54.0044H27.9654C27.2687 39.4281 15.5744 27.7338 0.998047 27.0372V26.9713C15.5743 26.2747 27.2686 14.5806 27.9654 0.00439453H28.0314Z" fill="white"/>
            </svg>
            <span class="has-margin-left-15">Subscribe to our newsletter</span>
          </a> 
        </div>

        <div class="is-flex is-align-items-center column is-2 is-offset-1 hast-text-light has-text-centered has-text-left-touch">
          @set($terms_and_conditions, get_field('terms_and_conditions', 'options'))
          <a href="{{$terms_and_conditions['url']}}" class="" data-gravity data-cursor-text="Terms and Conditions">
            {{$terms_and_conditions['title']}}
          </a>
        </div>
        <div class="is-flex is-align-items-center column is-2 hast-text-light has-text-centered has-text-left-touch">
           @set($privacy_policy, get_field('privacy_policy', 'options'))
          <a href="{{$privacy_policy['url']}}" class="" data-gravity data-cursor-text="Privacy Policy">
            {{$privacy_policy['title']}}
          </a>
        </div>
        <div class="is-flex is-align-items-center column is-1 hast-text-light has-text-centered has-text-left-touch">
          <span href="" class="" data-gravity>
            {!!get_field('year', 'options')!!}
          </span>
        </div>
      </div>
  
      
      <div class="columns is-multiline is-centered has-margin-left-60 has-margin-right-60">
        @fields('premios', 'options')
        <a href="" class="column is-6 is-2-widescreen _premios p-0">
          <img src="@sub('premio')" class="is-block m-auto" alt="guru"> 
        </a>
        @endfields
      </div>
    </div>
  </div>
</footer>

<script>
  let pre = document.querySelector('.preloader')
    if(pre){
        pre.classList.add('is-close')
        window.sessionStorage.setItem('preloader', 'ok')
    }
</script>