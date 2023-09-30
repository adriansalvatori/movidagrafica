<div class="modal has-background-black hero is-fullheight" data-newsletter>
    <div class="hero-body">
        <div style="position: absolute; right: 10vh; top: 10vh;">
            <a href="#" class="cerrar-modal button is-down is-light is-inverted" style=" border-radius: 50%; height: 80px; width: 80px;  transition: 1s;">
                <svg class="has-text-white" style="" xmlns="http://www.w3.org/2000/svg" width="35" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                    <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </a>
        </div>
        <div class="container is-fluid">
            <div class="columns level">
                <div class="column is-12 is-paddingless is-12-mobile">
                    <div class="column is-paddingless">
                        <div class="form has-margin-top-5-mobile is-relative" style="margin-top: -11vh;">
                            <div class="campo-name is-full-width">
                                <div class="control has-icons-left">
                                    <label class="label label-name has-text-white title is-1" for="name">Name</label>
                                    <input id="vi_name" class="title name is-1 input" type="text" name="name" placeholder="Name" value="">

                                    <div class="is-full-width is-flex justify-flex-end has-padding-right-15">
                                        <button class="button is-next is-inverse has-margin-top-20 hover-estrella">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                                <circle cx="13" cy="13" r="12" stroke="white" stroke-width="2"/>
                                            </svg>
                                            <svg class="svg-estrella" xmlns="http://www.w3.org/2000/svg" width="26" height="12" viewBox="0 0 55 55" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0314 0.00439453C28.7282 14.5804 40.4221 26.2743 54.998 26.9713V27.0373C40.422 27.7342 28.7281 39.4283 28.0314 54.0044H27.9654C27.2687 39.4281 15.5744 27.7338 0.998047 27.0372V26.9713C15.5743 26.2747 27.2686 14.5806 27.9654 0.00439453H28.0314Z" fill="white"/>
                                            </svg>
                                            <span class="has-margin-left-15">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- campo email --}}
                            <div class="campo-email is-full-width">
                                <div class="control has-icons-left">
                                    <label class="label label-email has-text-white title is-1" for="name">Email</label>
                                    <input id="vi_email" class="title email is-1 input" type="email" name="email" placeholder="Email" value="">
                                    
                                    <div class="is-full-width is-flex justify-flex-end has-padding-right-15">
                                        <button class="button is-previous is-inverse has-margin-top-20 hover-estrella has-margin-left-45-desktop">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                                <circle cx="13" cy="13" r="12" stroke="white" stroke-width="2"/>
                                            </svg>
                                            <svg class="svg-estrella" xmlns="http://www.w3.org/2000/svg" width="26" height="12" viewBox="0 0 55 55" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0314 0.00439453C28.7282 14.5804 40.4221 26.2743 54.998 26.9713V27.0373C40.422 27.7342 28.7281 39.4283 28.0314 54.0044H27.9654C27.2687 39.4281 15.5744 27.7338 0.998047 27.0372V26.9713C15.5743 26.2747 27.2686 14.5806 27.9654 0.00439453H28.0314Z" fill="white"/>
                                            </svg>
                                            <span class="has-margin-left-15">Previous</span>
                                        </button>
                                        <button class="button is-next-enviar is-inverse has-margin-top-20 hover-estrella has-margin-left-45-desktop">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                                <circle cx="13" cy="13" r="12" stroke="white" stroke-width="2"/>
                                            </svg>
                                            <svg class="svg-estrella" xmlns="http://www.w3.org/2000/svg" width="26" height="12" viewBox="0 0 55 55" fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0314 0.00439453C28.7282 14.5804 40.4221 26.2743 54.998 26.9713V27.0373C40.422 27.7342 28.7281 39.4283 28.0314 54.0044H27.9654C27.2687 39.4281 15.5744 27.7338 0.998047 27.0372V26.9713C15.5743 26.2747 27.2686 14.5806 27.9654 0.00439453H28.0314Z" fill="white"/>
                                            </svg>
                                            <span class="has-margin-left-15">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <form id="newsletterForm" class="has-text-white formularie is-full-width"> 
                                {{-- campo nombre --}}
                                <div class="field ">
                                    {{-- <label class="label has-text-white" for="name">Name</label> --}}
                                    <div class="control has-icons-left">
                                        <input id="name" style="background: transparent;" class="has-padding-left-20 has-height-100-desktop has-text-white input is-1 is-borderless is-name is-paddingless title" type="text" name="name" placeholder="Name" value="">
                                        <p class="is-flex align-center" style="opacity:0; margin-top: -25px; position: absolute; pointer-events: none;">
                                            <span class="has-margin-right-10">
                                                <i data-feather="arrow-up"></i>
                                            </span>
                                            Campo obligatorio!
                                        </p>
                                    </div>
                                </div>
                                
                                {{-- campo email --}}
                                <div class="field ">
                                    {{-- <label class="label has-text-white" for="email">Email</label> --}}
                                    <div class="control has-icons-left">
                                        <input id="email" style="background: transparent;" class="has-padding-left-20 has-height-100-desktop has-text-white input is-1 is-borderless is-name is-paddingless title" type="email" name="email" placeholder="Email" value="">
                                        <p class="is-flex align-center" style="opacity:0; margin-top: -25px; position: absolute; pointer-events: none;">
                                            <span class="has-margin-right-10">
                                                <i data-feather="arrow-up"></i>
                                            </span>
                                            Campo obligatorio!
                                        </p>
                                    </div>
                                </div>
                            
                                {{-- action --}}
                                <input type="hidden" name="action" value="procesar_formulario">
                            
                            
                                <div class="field is-grouped _boton-group has-margin-top-30">
                                    {{-- btn registrar --}}
                                    <button  type="submit" class="button btnSubmit is-inverse has-margin-top-20 hover-estrella">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                            <circle cx="13" cy="13" r="12" stroke="white" stroke-width="2"/>
                                        </svg>
                                        <svg class="svg-estrella" xmlns="http://www.w3.org/2000/svg" width="26" height="12" viewBox="0 0 55 55" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0314 0.00439453C28.7282 14.5804 40.4221 26.2743 54.998 26.9713V27.0373C40.422 27.7342 28.7281 39.4283 28.0314 54.0044H27.9654C27.2687 39.4281 15.5744 27.7338 0.998047 27.0372V26.9713C15.5743 26.2747 27.2686 14.5806 27.9654 0.00439453H28.0314Z" fill="white"/>
                                        </svg>
                                        <span class="has-margin-left-15">Register</span>
                                    </button>
                                    {{-- btn cancelar registro --}}
                                    <button class="button is-cancelar is-inverse has-margin-top-20 hover-estrella has-margin-left-45-desktop">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                            <circle cx="13" cy="13" r="12" stroke="white" stroke-width="2"/>
                                        </svg>
                                        <svg class="svg-estrella" xmlns="http://www.w3.org/2000/svg" width="26" height="12" viewBox="0 0 55 55" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0314 0.00439453C28.7282 14.5804 40.4221 26.2743 54.998 26.9713V27.0373C40.422 27.7342 28.7281 39.4283 28.0314 54.0044H27.9654C27.2687 39.4281 15.5744 27.7338 0.998047 27.0372V26.9713C15.5743 26.2747 27.2686 14.5806 27.9654 0.00439453H28.0314Z" fill="white"/>
                                        </svg>
                                        <span class="has-margin-left-15">Cancel</span>
                                    </button>
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    /* Animacion de load */
    .icon-loader{
        animation: rotar360 3s infinite linear;
        transform-box: fill-box;
        transform-origin: center;
    }
    @keyframes rotar360 {
        0% {
        transform: rotate(0deg)
        }
        100% {
        transform: rotate(360deg);
        }
    }
    form#newsletterForm.is-close .field {
        opacity: 0;
        height: 0 !important;
        margin: 0 !important;
    }
    .modal{
        opacity: 0;
        pointer-events: none;
        transition: 0.7s;
    }
    .campo-name,
    .campo-email{
        position: absolute;
        transition: 0.4s;
        pointer-events: none;
    }
    .campo-email,
    ._boton-group,
    .modal{
        opacity: 0;
        transition: 0.4s;
        pointer-events: none;
    }
    .campo-name.is-active,
    .campo-email.is-active,
    ._boton-group.is-active{
        pointer-events: all !important;
        opacity: 1;
    }
    .name.input.is-remove,
    .campo-email.is-active.is-remove,
    .is-remove{
        opacity: 0 !important;
    }
    .formularie{
        transition: 0.4s;
        opacity: 0;
        position: absolute;
        pointer-events: none;
    }
    .modal-abierta,
    .formularie.is-goud{
        opacity: 1 !important;
        pointer-events: all !important;
    }
    .has-campos-requerido p{
        opacity: 1 !important;
    }
</style>