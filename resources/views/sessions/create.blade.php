<x-page-template bodyClass='bg-gray-200'>

    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <x-auth.navbars.navs.guest p='' btn='bg-gradient-primary' textColor='text-white' svgColor='white'>
        </x-auth.navbars.navs.guest>
    </nav>
    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://images.unsplash.com/photo-1448375240586-882707db888b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1650&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-5">
                <div class="row signin-margin">
                    <div class="col-lg-4 col-md-8 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-warning shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Iniciar Sesión</h4>
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <p class="motivational-text" style="font-size: 15px; font-weight:400; color: white; text-shadow: 0px 0px 0px #000;">"Siempre hay una oportunidad para marcar la diferencia."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row px-xl-5 px-sm-4 px-3">
                                <div class="mt-2 position-relative text-center">
                                    <!-- Reemplaza el bloque de texto con tu logo -->
                                    <img src="{{ asset('assets/img/logo-ct.png') }}" alt="Logo" width="65" height="50">
                                </div>
                            </div>
                            
                    



                            <div class="row px-xl-5 px-sm-4 px-3">
                                <div class="mt-2 position-relative text-center">
                                    <p
                                        class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">
                                        Respuesta Inmediata
                                    </p>
                                </div>
                            </div>



                            <div class="card-body">
                                <form role="form" method="POST" action="{{ route('login') }}" class="text-start">
                                    @csrf
                                    @if (Session::has('status'))
                                    <div class="alert alert-success alert-dismissible text-white" role="alert">
                                        <span class="text-sm">{{ Session::get('status') }}</span>
                                        <button type="button" class="btn-close text-lg py-3 opacity-10"
                                            data-bs-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif

                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Correo electrónico</label>
                                        <input type="email" class="form-control" name='email'
                                            value=''>
                                    </div>
                                    @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror

                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" name='password' value=''>
                                    </div>
                                    @error('password')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="form-check form-switch d-flex align-items-center my-3">
                                        <input class="form-check-input" type="checkbox" id="rememberMe">
                                        <label class="form-check-label mb-0 ms-2" for="rememberMe">Guardar mi usuario</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Iniciar Sesión</button>
                                    </div>
                                   
                                    <p class="mt-4 text-sm text-center">
                                        ¿No tienes una cuenta?
                                        <a href="{{ route('register') }}"
                                            class="text-dark text-primary text-gradient font-weight-bold">Crear cuenta</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-auth.footers.guest.basic-footer textColor='text-white'></x-auth.footers.guest.basic-footer>
        </div>
    </main>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/jquery-3.6.0.min.js"></script>
    <script>
        $(function () {
    
            function checkForInput(element) {
    
                const $label = $(element).parent();
    
                if ($(element).val().length > 0) {
                    $label.addClass('is-filled');
                } else {
                    $label.removeClass('is-filled');
                }
            }
            var input = $(".input-group input");
            input.focusin(function () {
                $(this).parent().addClass("focused is-focused");
            });

            $('input').each(function () {
                checkForInput(this);
            });

            $('input').on('change keyup', function () {
                checkForInput(this);
            });
    
            input.focusout(function () {
                $(this).parent().removeClass("focused is-focused");
            });
        });
    
    </script>
    
    @endpush
</x-page-template>
