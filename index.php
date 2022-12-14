<!-- Include navbar -->
<?php 
    include "includes/header.php";
?>

<body>

    <!-- Include navbar -->
    <?php
        include "includes/navbar.php";
    ?>

    <!-- Custom Owl Carousel START -->
    <div class="owl-carousel owl-theme mt-3">
        <div class="slide slide-1">
            <div class="slide-content">

            </div>
        </div>
        <div class="slide slide-2">
            <div class="slide-content">

            </div>
        </div>
        <div class="slide slide-3">
            <div class="slide-content">

            </div>
        </div>

        <div class="slide slide-4">
            <div class="slide-content">

            </div>
        </div>

        <div class="slide slide-5">
            <div class="slide-content">

            </div>
        </div>

        <div class="slide slide-6">
            <div class="slide-content">

            </div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Custom Javascript -->
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                nav: true,
                dots: true,
                autoplay: true,
                autoplaySpeed: 1000,
                smartSpeed: 1500,
                autoplayHoverPause: true
            });
        });
    </script>

    <!-- Custom Owl Carousel END -->

    <div class="container home-about-us mt-5">

        <h1 class="header" class="mt-5"
            style="font-family: oswald-extralight, oswald, sans-serif; font-weight: 200; color: #E0266A;">
            About Creativewise Entertainment
        </h1>

        <p class="home-about-us__p mt-5">
            Creativewise Entertainment Limited (CWE), the world’s largest independent integrated media services
            powerhouse, employs over 498 professionals in 7 cities across 3 continents and 7 Time zones. We provide
            end-to-end creative services (stereo 3D conversion and animation), technology products & services (Media ERP
            Suite and Cloud-enabled media services), production services (equipment rental) and post-production services
            (Digital Intermediate and picture post) to the Media and Entertainment industry.
        </p>
        <p class="home-about-us__p mt-3">
            Creativewise Entertainment is behind groundbreaking technologies such as View-DTM (stereoscopic 2D to 3D
            conversion), CLEAR™ (Hybrid Cloud technology enabled Media ERP Suite) and Primetime Emmy® award-winning DAX
            Digital Dailies®. Leveraging our Global Digital Pipeline and pioneering WorldSourcing delivery model, we
            partner with content creators at every stage of the process, ensuring creative enablement, workflow
            efficiencies and cost optimization.
        </p>
        <p class="home-about-us__p mt-3">
            Creativewise Entertainment has operations in Abu Dhabi, Bangalore, Cape Town, Chandigarh, Delhi, Goa,
            Hyderabad, Johannesburg, Kolkata, London, Los Angeles, Mumbai, Chennai, Montreal, New York, Toronto and
            Vancouver.
        </p>
        <a href="#">
            <div class="mt-5"
                style="font-family: 'Proxima N W01 Reg'; font-size: 25px; font-weight: 600; background-color: #E0266A; width: max-content; height: auto; color: white;">
                KNOW MORE
            </div>
        </a>

    </div>

    <div class="container text-center home-projects">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <img src="assets/images/Equepment image.png" class="card-img-top" alt="..." style="margin-top: 100px;">
                <div class="card-body">
                    <h5 class="card-title">India's largest and only integrated studio facility and the market leader in
                        cinema equipment rental services.</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <img src="assets/images/Ranveer  D.png" class="card-img-top" alt="..." style="margin-top: 100px;">
                <div class="card-body">
                    <h5 class="card-title">Global leader offering DI/ Color grading and picture post</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <img src="assets/images/Aero costume.png" class="card-img-top" alt="..." style="margin-top: 100px;">
                <div class="card-body">
                    <h5 class="card-title">The world's largest 'Independent' and 'Integrated' creative services
                        provider.
                    </h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <img src="assets/images/technology products and services.png" class="card-img-top" alt="..."
                    style="margin-top: 100px;">
                <div class="card-body">
                    <h5 class="card-title">India's largest and only integrated studio facility and the market leader in
                        cinema equipment rental services. </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="container home-maps">
        <h1 class="header" style="font-family: 'Proxima N W01 Reg'; font-size: 30px; color: #E0266A;">
            Global Location
        </h1>

        <div class="row mb-5">
            <div class="col-lg-4 col-sm-12 mt-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.092340360366!2d72.83081061525708!3d19.14743485469803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16cda2724e6ca377!2zMTnCsDA4JzUwLjgiTiA3MsKwNDknNTguOCJF!5e0!3m2!1sen!2sin!4v1671448427231!5m2!1sen!2sin"
                    width="275" height="275" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-sm-12 mt-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11532275.750064531!2d-116.0210282515217!3d45.11626340427649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x20b20a5b183e8ce3!2zNDXCsDA5JzQ1LjkiTiAxMDbCsDQ0JzU1LjEiVw!5e0!3m2!1sen!2sin!4v1671448573622!5m2!1sen!2sin"
                    width="275" height="275" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-sm-12 mt-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2470.032673293436!2d-0.296220684105391!3d51.75072610070356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfab93ccff31bb610!2zNTHCsDQ1JzAyLjYiTiAwwrAxNyczOC41Ilc!5e0!3m2!1sen!2sin!4v1671448703194!5m2!1sen!2sin"
                    width="275" height="275" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>

    <!-- Include Footer -->
    <?php
        include "includes/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>

</html>