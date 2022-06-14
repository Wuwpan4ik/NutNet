<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
        </x-slot>
        <x-auth-validation-errors class="mb-4" :errors="$errors"></x-auth-validation-errors>
        <section class="pb-4">

                <section class="p-5 w-100">
                    <div class="row">
                        <div class="col-12">
                            <div class="card text-black">
                                <div class="card-body p-md-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                            <p class="text-center h1 fw-bold mb-5 mt-4">Sign up</p>

                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf
                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input id="name" type="text" name="name" required autofocus class="form-control">
                                                        <label class="form-label" for="name" style="margin-left: 0px;">Your Name</label>
                                                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 71.2px;"></div><div class="form-notch-trailing"></div></div></div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="email" id="email" name="email" required class="form-control">
                                                        <label class="form-label" for="email" style="margin-left: 0px;">Your Email</label>
                                                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 69.6px;"></div><div class="form-notch-trailing"></div></div></div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                                                        <label class="form-label" for="password">Password</label>
                                                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 64px;"></div><div class="form-notch-trailing"></div></div></div>
                                                </div>

                                                <div class="d-flex flex-row align-items-center mb-4">
                                                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                    <div class="form-outline flex-fill mb-0">
                                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                                                        <label class="form-label" for="password_confirmation" style="margin-left: 0px;">Repeat your password</label>
                                                        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 136px;"></div><div class="form-notch-trailing"></div></div></div>
                                                </div>

                                                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                    <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                                </div>

                                            </form>

                                        </div>
                                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        </section>
    </x-auth-card>
</x-guest-layout>
