<script>
  if(!window.sessionStorage.getItem('preloader')){
      let html = `
        <div class="preloader">
          <div class="logo is-flex-tablet is-block-mobile is-active">
            <div class="texto-preloader is-flex align-items-center has-margin-bottom-30-mobile justify-center-mobile has-margin-right-50-tablet">click/hold</div>
            <div class="svg-fijo has-max-height-350-mobile" style="width: 400px; height: 400px; border-radius: 50% !important; overflow: hidden !important; position: relative;" xmlns="http://www.w3.org/2000/svg" width="443" height="443" viewBox="0 0 443 443" fill="none">
              

              <div style="" class="rotar-jupiter-loader preloader-bubble is-overlay" data-inertia data-inertia-speed="-4">
                <video data-behavior="overlay" autoplay loop muted src="@asset('images/movidagrafica-gradient-video.mp4')">
                </video>
              </div>

              
            </div>
            <div class="texto-preloader is-flex align-items-center has-margin-left-50-tablet has-margin-top-30-mobile justify-center-mobile">to continue</div>
          </div>
        </div>`;
        let newPreloader = document.createElement('div');
            newPreloader.innerHTML = html;
        document.body.prepend(newPreloader);
    }
</script>

<style>
.circle-circulo{
  transition: .7s;
  transform-box: fill-box;
  transform-origin: center;
  transform: scale(1);
}
.circle-circulo.is-active {
  transform: scale(0.5);
}
.preloader {
  position: fixed;
  z-index: 999;
  transition: ease-out 0.4s;
  height: 100vh;
  width: 100vw;
  display: flex;
  align-items: center;
  justify-content: center;
  background: white;
  
}
.preloader.is-grab{
  cursor: grab;
}
.preloader.is-grab.is-grabbing{
  cursor: grabbing !important;
}


  /* Animacion de load */
  .rotar-jupiter-loader{
    
      animation: rotar360-jupiter 10s linear;
      transform-box: fill-box;
      transform-origin: center;
  }
  @keyframes rotar360-jupiter {
      0% {
        transform: rotate(-125deg);
      }
      100% {
        transform: rotate(235deg);
      }
  }
  .is-active .rotar-jupiter-loader{
      animation: rotar360-jupiter 10s infinite linear !important;
      transform-box: fill-box;
      transform-origin: center;
  }
  
  .preloader.is-off {
    pointer-events: none;
    opacity: 0;
  }
  .texto-preloader{
    transition: 0.7s;
    opacity: 0;
  }
  .texto-preloader.is-go{
    opacity: 1 !important;
  }
  .svg-fijo{
    transition: 1.8s
  }
  .svg-fijo.scale-1{
    transform: scale(0.8);
  }
  .svg-fijo.scale-1.scale-2{
    transform: scale(5) !important;
  }
  .svg-fijo-intro{
    transition: 1s;
  }
  .svg-fijo-intro.scale-1{
    transform: translate(0px, -1.3%) scale(0.8);
  }
  .svg-fijo-intro.scale-1.scale-2{
    transform: translate(0px, 0%) scale(1) !important;
  }
 
  .svg-estrella{
    transition: 1s;
    position: absolute; 
    left: 48.2%;
    top: 42.45%;
  }
  .svg-estrella.scale-1{
    transform: scale(0.8);
  }
  .svg-estrella.scale-1.scale-2{
    transform: scale(1) !important;
  }
</style>
