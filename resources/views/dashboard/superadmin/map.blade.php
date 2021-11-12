<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Admin</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('admin1')}}/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('admin1')}}/css/style.css">
    
</head>

<body>
 
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img  width="800px"  src="{{asset('admin1')}}/images/bg-09.jpg" alt="">

                </div>
                <div class="signup-form">

                    <form class="register-form" id="register-form" action="{{route('superadmin.registerAdmin')}}" method="POST">
                        @if (Session::get('Success'))
                            <div class="alert alert-danger">
                                 {{ Session::get('Success') }}
                        @endif
                        @if (Session::get('Fail'))
                            <div class="alert alert-danger">
                                 {{ Session::get('Fail') }}
                        @endif

                        @csrf
                        <h2>Admin Registration Form</h2>
                        
                        
                        
                        
                        <div class="form-group">
                            <div class='form-row'>
                                <div class="form-group">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name :') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username :') }}</label>

                                    <div class="col-md-6">
                                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="national_id" class="col-md-4 col-form-label text-md-right">{{ __('National ID :') }}</label>

                                <div class="col-md-6">
                                    <input id="national_id" type="text" class="form-control @error('national_id') is-invalid @enderror" name="national_id" value="{{ old('national_id') }}" required autocomplete="national_id" autofocus>

                                    @error('national_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone :') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-radio">
                                <label for="gender" class="radio-label">Gender :</label>
                                <div class="form-radio-item">
                                    <input type="radio" name="gender" value="male" id="male" checked>
                                    <label for="male">Male</label>
                                    <span class="check"></span>
                                </div>
                                <div class="form-radio-item">
                                    <input type="radio" name="gender" value="Female" id="female">
                                    <label for="female">Female</label>
                                    <span class="check"></span>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="division"> Division :</label>
                                    <div class="form-select">
                                        <select name="division" id="division">
                                            <option value=""></option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Rajshahi">Rajshahi</option>
                                            <option value="Barisal">Barisal</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Chattogram">Chattogram</option>
                                            <option value="Rangpur">Rangpur</option>
                                            <option value="Mymensingh">Mymensingh</option>
                                        </select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city">City :</label>
                                    <div class="form-group">
                                        <input type="text" name="city" id="city" required />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="about_us">What do you know about us? :</label>
                                <input type="text" name="about_us" id="about_us">
                            </div>
                            <div class="form-group">
                                <label for="date_of_birth">Date of Birth :</label>
                                <input type="date" name="birth_date" id="date_of_birth" required />
                            </div>
                            <div class="form-submit">
                                
                                <input type="reset" value="Reset All" class="submit" name="reset" id="reset" />
                                <button type="submit" class="submit" name="submit" id="submit">
                                    Register
                                </button>
                                

                            </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="{{asset('admin1')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('admin1')}}/js/main.js"></script>
</body>

</html>