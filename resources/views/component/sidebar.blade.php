    <nav id="sidebar" class="">

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
    </nav>