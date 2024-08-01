    <!-- <nav id="sidebar" class="">

        <div class="container-fluid" style="padding: 30px;">

            <hr style="border: 0; height: 1px; background-color: #939393; margin: 20px 0 65px 0;">

            <ul class="nav flex-column">
                <li class="nav-item">
                    <button class="btn btn-nav" type="button" onclick="window.location.href='{{ url('/login') }}'">
                        Courses
                    </button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-nav" type="button" onclick="window.location.href='{{ url('/lessons') }}'">
                        Lessons
                    </button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-nav" type="button" onclick="window.location.href='{{ url('/progress') }}'">
                        Progress
                    </button>
                </li>
            </ul>

        </div>
    </nav> -->


    <!-- <nav id="sidebar" class="">
        <div class="container-fluid" style="padding: 30px;">
            <hr style="border: 0; height: 1px; background-color: #939393; margin: 20px 0 65px 0;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="btn btn-nav" href="{{ url('/login') }}">
                        Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-nav" href="{{ url('/lessons') }}">
                        Lessons
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-nav" href="{{ url('/progress') }}">
                        Progress
                    </a>
                </li>
            </ul>
        </div>
    </nav> -->


    <nav id="sidebar">
        <div class="container-fluid" style="padding: 30px;">

            <hr style="border: 0; height: 1px; background-color: #939393; margin: 20px 0 65px 0;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="btn btn-nav" href="{{ url('/login') }}">
                        <i class="fas fa-book btn-icon"></i>
                        <span class="btn-text">Courses</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-nav" href="{{ url('/lessons') }}">
                        <i class="fas fa-chalkboard-teacher btn-icon"></i>
                        <span class="btn-text">Lessons</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-nav" href="{{ url('/progress') }}">
                        <i class="fas fa-tachometer-alt btn-icon"></i>
                        <span class="btn-text">Progress</span>
                    </a>
                </li>







            </ul>
        </div>
    </nav>