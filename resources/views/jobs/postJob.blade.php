<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Freelancer | Post Jobs</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('js/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/one-page-wonder.css') }}" rel="stylesheet">
    <link href="{{ asset('css/postJobs.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Student Freelancer</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#">Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Log In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/jobs/view')}}">View jobs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/jobs/post')}}">Post a job</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <div class="container-contact100">
        <div class="wrap-contact100">
          <form method = "post" action = "{{url('/jobs/post')}}" class="contact100-form validate-form">
            {!! csrf_field() !!}
            <span class="contact100-form-title masthead-subheading">
              Post a Job
            </span>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
              <span class="label-input100">Job Title</span>
              <input class="input100" type="text" name="name" placeholder="Enter job title">
            </div>

            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
              <span class="label-input100">Work Span</span>
              <input class="input100" type="date" name="date" placeholder="Enter work span">
            </div>

            <div class="wrap-input100">
              <span class="label-input100">Skills Needed</span>
              <input class="input100" type="text" name="jobs" placeholder="e.g. Photoshop, html...">
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Message is required">
              <span class="label-input100">Job description</span>
              <textarea class="input100" name="message" placeholder="Enter job description"></textarea>
            </div>

            <div class="container-contact100-form-btn">
              <div class="wrap-contact100-form-btn">
                <div class="contact100-form-bgbtn"></div>
                <button class="contact100-form-btn">
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>

    <span class="contact100-more">
        Call us on +001 345 6178
    </span>
  </div>

    
    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Student Freelancer 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>

  </body>

</html>
