<x-layout>

    <div class="container py-md-5 ">
        <div class="row align-items-center">
            <div class="col-lg-5 py-3 py-md-5">
                <h1 class="display-3">Find your favourite doctors</h1>
                <p class="lead text-muted">Enjoy the perks.</p>
            </div>
            <div class="col-lg-4 pl-lg-5 pb-3 py-lg-5">
                <form action="{{route('user.register')}}" method="POST" id="registration-form">
                    @csrf
                    <div class="d-flex flex-row ">
                        <div class="form-group me-5">
                            <label for="first_name-register" class="text-muted mb-1 "><small>First Name</small></label>
                            <input name="first_name" id="first_name-register" class="form-control" type="text" placeholder="First Name" />
                            @error('first_name')
                            <p class="m=0 small alert alert-danger shadow-sm">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="last_name-register" class="text-muted mb-1"><small>Last Name</small></label>
                            <input name="last_name" id="last_name-register" class="form-control" type="text" placeholder="Last Name" />
                            @error('last_name')
                            <p class="m=0 small alert alert-danger shadow-sm">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone-register" class="text-muted mb-1"><small>Phone Number</small></label>
                        <input name="phone_number" id="phone-register" class="form-control" type="text" placeholder="0111111112" />
                        @error('phone_number')
                        <p class="m=0 small alert alert-danger shadow-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="address" class="text-muted mb-1"><small>Address</small></label>
                        <input name="address" id="address" class="form-control" type="text" placeholder="11 House Street, NSW" />
                        @error('address')
                        <p class="m=0 small alert alert-danger shadow-sm">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group mt-3 ">
                        <span class="text-muted">Gender</span>

                        <div class="form-check form-check-inline ms-2">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                            <label class="form-check-label" for="inlineRadio1"><small>Male</small></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value= "Female">
                            <label class="form-check-label" for="inlineRadio2"><small>Female</small></label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="Non-Binary">
                            <label class="form-check-label" for="inlineRadio3"><small>Non-Binary</small></label>
                        </div>
                        @error('gender')
                        <p class="m=0 small alert alert-danger shadow-sm">{{$message}}</p>
                        @enderror
                    </div>


                    <!-- <div class="form-group">
                        <label for="username-register" class="text-muted mb-1"><small>Username</small></label>
                        <input value="{{old('username')}}" name="username" id="username-register" class="form-control"
                            type="text" placeholder="Pick a username" autocomplete="off" />
{{--                        @error('username')--}}
                    {{--                        <p class="m=0 small alert alert-danger shadiw-sm">{{$message}}</p>--}}
                    {{--                        @enderror--}}
                    </div> -->

                    <div class="form-group">
                        <label for="email-register" class="text-muted mb-1"><small>Email</small></label>
                        <input  name="email" id="email-register" class="form-control" type="text" placeholder="you@example.com" autocomplete="off" />
                        @error('email')
                        <p class="m=0 small alert alert-danger shadow-sm">{{$message}}</p>
                        @enderror

                    </div>

                    <div class="form-group">
                        <label for="password-register" class="text-muted mb-1"><small>Password</small></label>
                        <input name="password" id="password-register" class="form-control" type="password" placeholder="Create a password" />
                        @error('password')
                        <p class="m=0 small alert alert-danger shadow-sm">{{$message}}</p>
                        @enderror
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label for="password-register-confirm" class="text-muted mb-1"><small>Confirm--}}
{{--                                Password</small></label>--}}
{{--                        <input name="password_confirmation" id="password-register-confirm" class="form-control" type="password" placeholder="Confirm password" />--}}
{{--                        --}}{{--                        @error('password_confirmation')--}}
{{--                        --}}{{--                        <p class="m=0 small alert alert-danger shadiw-sm">{{$message}}</p>--}}
{{--                        --}}{{--                        @enderror--}}
{{--                    </div>--}}


                    <button type="submit" class="py-3 mt-4 btn btn-lg btn-success btn-block">Sign up for OurApp</button>
                </form>
            </div>
        </div>
    </div>



</x-layout>
