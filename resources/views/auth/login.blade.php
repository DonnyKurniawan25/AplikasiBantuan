<link rel="stylesheet" href="{{ asset('style1.css') }}" type="text/css" >
<link rel="stylesheet" type="text/css" href="{{ asset('sweetalert/sweetalert2.css')}}">
<script type="text/javascript" src="{{ asset('sweetalert/sweetalert2.js') }}"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="login-box">
                            <h1>Login</h1>
                            <div class="textbox">
                                <i class="fas fa-user"></i>
                                <input placeholder="Username" id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                                @error('email')
                                <script>

                                    Swal.fire({
                                        position: 'center',
                                        type: 'warning',
                                        title: 'Email Atau Password Salah',
                                        showConfirmButton: false,
                                        timer: 2000
                                    })

                                </script>
                                @enderror
                            </div>

                            <div class="textbox">
                                <i class="fas fa-lock"></i>
                                <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>Password Salah</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

