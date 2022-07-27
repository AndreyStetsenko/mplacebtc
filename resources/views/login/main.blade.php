@extends('site.layout.base')

@section('head')
    <title>Login - Rubick - Tailwind HTML Admin Template</title>
@endsection

@section('content')
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    
    <section class="full-height relative no-top no-bottom vertical-center" data-bgimage="url(images/background/6.jpg) top" data-stellar-background-ratio=".5">
        <div class="overlay-gradient t50">
            <div class="center-y relative">
                <div class="container">
                    <div class="row align-items-center">
                        
                        <div class="col-lg-4 offset-lg-4 wow fadeIn bg-color" data-wow-delay=".5s">
                            <div class="box-rounded padding40">
                                <h3 class="mb10">Sign In</h3>
                                <p>Login using an existing account or create a new account <a href="">here<span></span></a>.</p>
                                <form id='login-form' class="form-border">

                                    <div class="field-set">
                                        <input type='text' name='email' id='email' class="form-control" placeholder="username">
                                    </div>
                                    
                                     <div class="field-set">
                                        <input type='password' name='password' id='password' class="form-control" placeholder="password">
                                    </div>
                                    
                                    <div class="field-set">
                                        <input type='button' id='btn-login' value='Submit' class="btn btn-main btn-fullwidth color-2">
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    
                                    <div class="spacer-single"></div>

                                <!-- social icons close -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>		
    
</div>
@endsection

@section('script')
    <script>
        (function () {
            async function login() {
                // Reset state
                // $('#login-form').find('.login__input').removeClass('border-danger')
                // $('#login-form').find('.login__input-error').html('')

                // Post form
                let email = $('#email').val()
                let password = $('#password').val()

                // Loading state
                $('#btn-login').html('<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>')

                // await helper.delay(1500)

                $.ajax({
                    type: 'post',
                    url: `login`,
                    headers: {
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                    },
                    data: {
                        email: email,
                        password: password
                    },
                    success: function() {
                        location.href = '/'
                    }
                });

                // axios.post(`login`, {
                //     email: email,
                //     password: password
                // }).then(res => {
                //     location.href = '/'
                // }).catch(err => {
                //     $('#btn-login').html('Login')
                //     if (err.response.data.message != 'Wrong email or password.') {
                //         for (const [key, val] of Object.entries(err.response.data.errors)) {
                //             $(`#${key}`).addClass('border-danger')
                //             $(`#error-${key}`).html(val)
                //         }
                //     } else {
                //         $(`#password`).addClass('border-danger')
                //         $(`#error-password`).html(err.response.data.message)
                //     }
                // })
            }

            $('#login-form').on('keyup', function(e) {
                e.preventDefault();

                if (e.keyCode === 13) {
                    login()
                }
            })

            $('#btn-login').on('click', function() {
                login()
            })
        })()
    </script>

@endsection
