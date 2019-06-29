@extends('layouts.app')

@section('content')

    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">{{ __('Register') }}</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-row">
                        <div class="name">{{ __('Name') }}</div>
                        <div class="value">
                            <div class="input-group">                                
                                    <input id="name" class="input--style-5 @error('name') is-invalid @enderror"
                                        type="text" value="{{ old('name') }}" name="name" required
                                        autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>                            
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">{{ __('User Passport ID') }}</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" name="user_passport_id"
                                    value="{{ old('user_passport_id') }}" required autocomplete="user_passport_id">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">{{ __('Birthdate')}}</div>
                        <div class="value">
                            <div class="input-group">
                            <input class="input--style-5" type="date" name="birthdate" value="{{old('birthdate')}}" required autocomplete="birthdate">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">{{ __('E-Mail Address') }}</div>
                        <div class="value">
                            <div class="input-group">
                                <input id="email" type="email"
                                    class="input--style-5  @error('email') is-invalid @enderror" type="email"
                                    name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-row m-b-55">
                        <div class="name">Phone</div>
                        <div class="value">
                            <div class="row row-refine">
                                <div class="col-3">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="area_code">
                                        <label class="label--desc">Area Code</label>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <div class="input-group-desc">
                                        <input class="input--style-5" type="text" name="phone">
                                        <label class="label--desc">Phone Number</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Subject</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="subject">
                                        <option disabled="disabled" selected="selected">Choose option</option>
                                        <option>Subject 1</option>
                                        <option>Subject 2</option>
                                        <option>Subject 3</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">{{ __('Password') }}</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5 @error('password') is-invalid @enderror" id="password"
                                    type="password" value="{{ old('user_passport_id') }}" name="password" required
                                    autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">{{ __('Confirm Password') }}</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5 @error('password') is-invalid @enderror"
                                    id="password-confirm" type="password" name="password_confirmation" required
                                    autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn--radius-2 btn--red" type="submit"> {{ __('Register') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<!-- Jquery JS-->
<script src="{{asset('vendor2/jquery/jquery.min.js')}}"></script>
<!-- Vendor JS-->
<script src="{{asset('vendor2/select2/select2.min.js')}}"></script>
<script src="{{asset('vendor2/datepicker/moment.min.js')}}"></script>
<script src="{{asset('vendor2/datepicker/daterangepicker.js')}}"></script>

<!-- Main JS-->
<script src="js/global.js"></script>
@endsection