<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/assets/images/login-images/benue-logo.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    {{-- <link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet" /> --}}
    {{-- <script src="{{ asset('backend/assets/js/pace.min.js') }}"></script> --}}
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
   
    {{-- recaptcha Script --}}
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <title>Benue State Civil Service Commission</title>
</head>

<body class="">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-cover">
            <div class="">
                <div class="row g-0">

                    <div
                        class="col-12 col-xl-7 col-xxl-8 auth-cover-left align-items-center justify-content-center d-none d-xl-flex">

                        <div class="card shadow-none bg-transparent shadow-none rounded-0 mb-0">
                            <div class="card-body">
                                <img src="{{ asset('backend/assets/images/login-images/benue-logo.png') }}"
                                    width="400" alt="" />
                            </div>
                        </div>

                    </div>

                    <div class="col-12 col-xl-5 col-xxl-4 auth-cover-right align-items-center justify-content-center">
                        <div class="card rounded-0 m-3 shadow-none bg-transparent mb-0">
                            <div class="card-body p-sm-5">
                                <div class="">
                                    <div class="mb-3 text-center">
                                        <img src="{{ asset('backend/assets/images/login-images/benue-logo.png') }}"
                                            width="60" alt="">
                                    </div>
                                    <div class="text-center mb-4">
                                        <h5 class="">Benue State Civil Service Commission </h5>
                                        {{-- <p class="mb-0">Benue State Civil Service Application</p> --}}
                                        <p class="mb-0" style="color: blue">Please Sign into your account</p>
                                    </div>
                                    <div class="form-body">

                                        <form class="row g-3" method="POST" action="{{ route('login') }}">
                                            @csrf


                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Email / Employee No</label>
                                                <input type="text" id="login" name="login"
                                                    class="form-control @error('login') is-invalid @enderror"
                                                    id="login" placeholder="Use Your Email or Employee No">
                                                @error('login')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                    
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" name="password" id="password"
                                                        class="form-control border-end-0 @error('password') is-invalid @enderror"
                                                        placeholder="Enter Password"> <a href="javascript:;"
                                                        class="input-group-text bg-transparent"><i
                                                            class="bx bx-hide"></i></a>
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexSwitchCheckChecked">
                                                    <label class="form-check-label"
                                                        for="flexSwitchCheckChecked">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-end"> <a href="{{ route('password.request') }}">Forgot Password ?</a>
                                            </div>
                                            
                                             {{-- {!! NoCaptcha::display() !!}  --}}
                                        <div class="g-recaptcha" data-sitekey="6LdWMVUrAAAAAKjvTH4nZ2G3yvuEU_50jR-wRFQB"></div>
                                        @error('g-recaptcha-response')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                          

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                    <div class="login-separater text-center mb-5"> <span>
                                            <marquee> Benue State Civil Service Application </marquee>
                                        </span>
                                        <hr>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>

{{-- <script>
    function onSubmit(token) {
      document.getElementById("demo-form").submit();
    }
  </script> --}}
    {!! NoCaptcha::renderJs() !!}
</body>
</html>
