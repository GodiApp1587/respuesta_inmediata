<x-page-template bodyClass=''>
    <!-- Navbar -->
    <nav
        class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <x-auth.navbars.navs.guest p='' btn='btn-success' textColor='text-white' svgColor='white'>
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
                        <div class="card z-index-0">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-warning shadow-success border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Crear Cuenta</h4>
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <p class="motivational-text" style="font-size: 15px; font-weight:400; color: white; text-shadow: 0px 0px 0px #000;">"Siempre hay una oportunidad para marcar la diferencia."</p>
                                        </div>
                                        
                                        
                                    </div>
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
                                <form role="form" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="input-group input-group-dynamic">
                                        <label class="form-label">Nombre completo</label>
                                        <input type="text" name='name' class="form-control" aria-label="Name" value='{{ old('name') }}'>
                                    </div>
                                    @error('name')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror

                                    <div class="input-group input-group-dynamic mt-3">
                                        <label class="form-label">Correo electronico @respuestainmediatatlx</label>
                                        <input type="email" name='email' class="form-control" aria-label="Email" value='{{ old('email') }}'>
                                    </div>
                                    @error('email')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <label for='select-role' class="mt-3">Seleccionar Rol</label>
                                    <div class="input-group input-group-dynamic mb-3">
                                        <select class="form-select p-2" id='select-role' name='role_id'>
                                            <option value="">-</option>
                                            @foreach ($roles as $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('role_id')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror

                                    <div class="input-group input-group-dynamic mt-3">
                                        <label class="form-label">Contraseña proporcionada por el Gerente</label>
                                        <input type="password" name='password' class="form-control"
                                            aria-label="Password">
                                    </div>
                                    @error('password')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="form-check text-start mt-3">
                                        <input class="form-check-input bg-dark border-dark" type="checkbox" value=""
                                            id="flexCheckDefault" checked>
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Acepto los <a href="javascript:;"
                                                class="text-dark font-weight-bolder">Terminos y Condiciones de @Respuesta Inmediata Tlx</a>
                                        </label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-dark w-100 my-4 my-2">Crear
                                            Cuenta</button>
                                    </div>
                                    <p class="text-sm mt-3 mb-0">¿Tienes una cuenta?
                                        <a href="{{ route('login') }}" class="text-dark font-weight-bolder">Iniciar Sesion
                                        </a></p>
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
