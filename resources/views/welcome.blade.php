<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> The Kitchener Waterloo Area Linux Conference Website</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="/css/palette.css">
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

</head>

<body>
    <!-- hero-content   -->
    <section class="hero flex flex-center-center">
        <div class="hero-content text-center">
            <h1 class="hero-lead"> Kitchener Waterloo Linux Fest 2017 </h1>
            <h2 class="hero-sub-text"> A Linux/Open Source Conference For The Rest Of Us</h2>
            <a href="#register" class="hero-btn rounded"> Register </a>
        </div>
    </section>

    <!-- about section -->
    <section class="about marketing-section">
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> About Linux Fest 2017 </h2>
                        <p class="body-copy">
                        A conference that is run to celebrate open source and all things *nix. 
                        Open source is something to be celebrated lets get together and have a party!
                        The conference will be run on January 28th 2016 at 200 Bathurst Drive, Waterloo Ontario.
                       </p>
                        <a href="#register" class="btn large-top rounded"> Register </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- speakers -->
    <section class="speakers marketing-section">
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> Speakers </h2>
                    </div>
                </div>

                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> Coming Soon.... </h2>
                    </div>
                </div>
                <!-- <div class="row"> -->
                <!--     <div class="col-25"> -->
                <!--         <div class="speaker-card text-center"> -->
                <!--             <img src="https://pbs.twimg.com/profile_images/541811449845137408/ebWKKWxx.jpeg" alt="" /> -->
                <!--             <h2 class="speaker-name"> Evan You </h2> -->
                <!--             <h3 class="speaker-title"> Developer </h3> -->
                <!--         </div> -->
                <!--     </div> -->
               <!-- </div> -->

            </div>
    </section>


    <section class="location marketing-section">
        <div class="container">
            <div class="row">
                <div class="col-100">
                    <div class="text-center">
                        <h2 class="section-lead"> Location </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-100">
                    <div class="map-container">
                        <div class="map-overlay"></div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2893.5150431768416!2d-80.53097868450679!3d43.51245137912638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882bf3cccbdadb2d%3A0xc8a38493085b25dc!2s200+Bathurst+Dr%2C+Waterloo%2C+ON+N2V+2L7!5e0!3m2!1sen!2sca!4v1470427175974"
                            class="map"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact marketing-section">

        <a name="register">

        <div class="container">
            <div class="row">
              <div class="col-100">
                <div class="text-center">
                  <h2 class="section-lead"> Register </h2>
                </div>
              </div>
            </div>

            <div class="row">
                <div class="col-100">
                    <form method="post" action="{{ url('/rsvp') }}">
                        <div class="form-group">
                            <label for=""> Name: </label>
                            <input name="full_name" type="text" placeholder="Enter Your Name...">
                        </div>

                        <div class="form-group">
                            <label for=""> Email: </label>
                            <input name="email" type="email" placeholder="Enter Your Email...">
                        </div>

                        <div class="form-group">
                          <button class="btn rounded submit-btn"> Submit </button>
                        </div>

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </form>
                </div>
            </div>
        </div>

    </section>

    <script>
        $('.map-overlay').on('click', function() {
            $(this).css('display', 'none');

        })

        $(window).on('scroll', function() {
            $('.map-overlay').css('display', 'block');
        })
    </script>
</body>

</html>j
