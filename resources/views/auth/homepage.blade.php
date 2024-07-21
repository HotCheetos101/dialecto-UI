@extends('layouts.layout')

@section('title', 'Home Page')

@section('content')

<!-- <span>This is login page</span> -->

<div class="container-fluid landing-page">


    <div class="row w-100">

        <div class="col-md-6 left-side">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="img-fluid">
        </div>

        <div class="col-md-6 right-side">




            <form class="login-form">
                <h4>Login</h4>

                <div class="form-group">

                    <input type="text" class="form-control" id="username" name="username" required placeholder="Username">

                </div>

                <div class="form-group">

                    <input type="password" class="form-control" id="password" name="password" required placeholder="Password">

                </div>

                <button type="submit" class="btn btn-login btn-block">Login</button>

                <!-- <label for="forgetPassword" class="w-100 text-center forget-password ">Forget password?</label> -->
                <a href="/forget-password" class="w-100 text-center forget-password">Forget password?</a>
                <hr>

                <!-- <button type="submit" class="btn btn-login btn-block">Create new account</button> -->
                <button type="button" class="btn btn-login btn-block" id="registerButton">Create new account</button>


            </form>

        </div>
    </div>
</div>


<!-- Register Modal -->
<div class="modal-overlay" id="registerModal">
    <div class="modal-content">
        <h4>Register</h4>
        <!-- Add your register form here -->
        <form>

            <!-- personal details  -->
            <div class="row">
                <div class="col-md-5 pr-0">
                    <div class="form-group">
                        <input type="text" class="form-control " placeholder="First name">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Last name">
                    </div>
                </div>
            </div>



            <div class="form-group">
                <input type="email" class="form-control" placeholder="Enter email">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Confirm password">
            </div>

            <!-- birthdate  -->

            <!-- <div class="row">

                <div class="col-md-4 pr-0">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Month">
                    </div>
                </div>

                <div class="col-md-4 pr-0">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Day">
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Year">
                    </div>
                </div>

            </div> -->

            <div class="row">
                <div class="col-md-4 pr-0">
                    <div class="form-group">
                        <label for="month">Month</label>
                        <select id="month" class="form-control">
                            <option value="">Select Month</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4 pr-0">
                    <div class="form-group">
                        <label for="day">Day</label>
                        <select id="day" class="form-control">
                            <option value="">Select Day</option>
                            <!-- Options for days, assuming a maximum of 31 days -->
                            <!-- You might want to dynamically generate these options based on the selected month -->
                            @for ($i = 1; $i <= 31; $i++) <option value="{{ sprintf('%02d', $i) }}">{{ $i }}</option>
                                @endfor
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="year">Year</label>
                        <select id="year" class="form-control">
                            <option value="">Select Year</option>
                            <!-- Options for years -->
                            @for ($i = date('Y'); $i >= 1900; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
            </div>

            <!-- gender  -->

            <div class="row">
                <div class="col-md-5 pr-0">
                    <div class="form-group">
                        <input type="text" class="form-control " placeholder="Male">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Female">
                    </div>
                </div>
            </div>









            <button type="submit" class="btn btn-register">Register</button>
            <button type="button" class="btn btn-secondary" id="closeModal">Close</button>
        </form>
    </div>
</div>

<script>
    // JavaScript to handle modal display
    document.getElementById('registerButton').addEventListener('click', function() {
        document.querySelector('.landing-page').classList.add('blurred');
        document.getElementById('registerModal').style.display = 'block';
    });

    document.getElementById('closeModal').addEventListener('click', function() {
        document.querySelector('.landing-page').classList.remove('blurred');
        document.getElementById('registerModal').style.display = 'none';
    });
</script>




@endsection