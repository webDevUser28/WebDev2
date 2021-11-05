<html lang="en">
<!--Version 9.0 
	Name: Lisa Latzelsberger
	Date Completed: 11/05/2021
    -->

<head>

    <title>Web Development User #28</title>

    <link rel="icon" type="image/x-icon" href="images/Welding.jpeg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style type="text/css">
        .blue {
            background-color: rgba(19, 138, 189, 0.838);
            color: rgb(255, 255, 255);
        }
    </style>

</head>

<body>

    <center>
        <h1>Learn about tools made with metals</h1>
    </center>



    <div class="container-fluid">
        <div class="row blue">
            <p class="col-md-6">These are different type of metals:</p>
            <p class="col-md-6">Look at the weather so that it dosen't rain when you want to work outside with any kind
                of metal
            </p>
        </div>
        <div class="row">
            <menu class="col-md-8">
                <nav class="menu">
                    <ul>
                        <li><a target="_blank" href="https://www.merriam-webster.com/dictionary/gray%20iron">Gray
                                Iron</a></li>
                        <li><a target="_blank"
                                href="https://www.merriam-webster.com/dictionary/stainless%20steel">Stainless Steel</a>
                        </li>
                        <li><a target="_blank" href="https://www.merriam-webster.com/dictionary/carbon%20steel">Carbon
                                Steel</a></li>
                        <li><a target="_blank" href="https://www.merriam-webster.com/dictionary/brass">Brass</a></li>
                        <li><a target="_blank" href="https://www.merriam-webster.com/dictionary/aluminum">Aluminum</a>
                        </li>
                        <li><a target="_blank" href="https://www.merriam-webster.com/dictionary/magnesium">Magnesium</a>
                        </li>
                        <li><a target="_blank" href="https://www.merriam-webster.com/dictionary/iron">Iron</a></li>
                        <li><a target="_blank" href="https://www.merriam-webster.com/dictionary/copper">Copper</a></li>
                        <li><a target="_blank" href="https://www.merriam-webster.com/dictionary/bronze">Bronze</a></li>
                        <li><a target="_blank" href="https://www.merriam-webster.com/dictionary/zinc">Zinc</a></li>
                    </ul>
                </nav>
            </menu>
            <div class="col-md-4">
                <div class="weather-outer-container">
                    <div class="app-title">
                        <p>Weather</p>
                    </div>
                    <div class="notification"> </div>
                    <div class="weather-container">
                        <div class="weather-icon">
                            <img src="icons/unknown.png" alt="">
                        </div>
                        <div class="temperature-value">
                            <p>- °<span>C</span></p>
                        </div>
                        <div class="temperature-description">
                            <p> - </p>
                        </div>
                        <div class="location">
                            <p>-</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <main>

        <section class="jumbotron">
            <h1 class="display-4">The Basic technics of Metalworking</h1>
            <p class="lead">Forming is the process of re-shaping and fabricating metal objects without adding or
                removing any material. This process is possible through a combination of heat and pressure. Both forging
                and bending are essential methods for forming metal. When forging metal, you will heat it in the forge,
                then hammer and bend it into your desired shape. To make a bend or curve in the metal, heat it in the
                forge, then hold it over the anvil horn and strike it with a hammer to make your desired curve. The
                English wheel is a tool that allows metalworkers to easily form and shape cold materials, such as
                aluminum or steel.
            </p>
            <hr class="my-4">
            <p class="lead">Cutting removes material from metal using milling, routing, turning, and technologies like
                CNC (computer numerical control) machines. Plasma cutters are gas-powered torches powered by argon and
                hydrogen gas that will remove material and make holes in metal. Cutting is often used in metalworking
                fabrication shops, automotive repair, and construction.</p>
            <p class="lead">
                <a target="_blank" href="https://www.thecrucible.org/guides/metalworking/"
                    class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Learn more</a>
            </p>
        </section>

        <h1>Welding</h1>

        <h3 class="topheading">Tools for Welding:</h3>
        <div id="Tools">
            <li>Auto-Darkening Welding Helmet
                <ul>
                    <li>Welding Gloves</li>
                    <li>MIG Welding Pliers</li>
                </ul>
            </li>
            <li>Chipping Hammer
                <ul>
                    <li>Speed Square</li>
                    <li>Metal Brush</li>
                </ul>
            </li>
        </div>

        <div class="row">
            <div class="col demo-content">
                <img src="images/Welding.jpeg" alt="Drawing of a person welding" height="300px" width="300px">
            </div>
            <div class="col demo-content bg-alt">
                <img src="images/Welding 3.jpeg" alt="A person welding" height="300px" width="300px">
            </div>
            <div class="col demo-content">
                <img src="images/Welding tools 1.jpeg" alt="Drawing of welding tools" height="300px" width="300px">
            </div>
            <div class="col demo-content bg-alt">
                <img src="images/Welding tools 2.jpeg" alt="Welding toolst" height="300px" width="300px">
            </div>
        </div>

        <h1>Soldering</h1>

        <h3 class="topheading">Tools for Soldering:</h3>
        <div id="Tools">
            <li>Soldering Gun
                <ul>
                    <li>Soldering Pencil</li>
                    <li>Solder Flux</li>
                </ul>
            </li>
            <li>Desoldering Station
                <ul>
                    <li>Soldering Iron</li>
                    <li>Soldering Station</li>
                </ul>
            </li>
        </div>

        <div class="row">
            <div class="col demo-content">
                <img src="images/Soldering tools 2.jpeg" alt="" height="300px" width="300px">
            </div>
            <div class="col demo-content bg-alt">
                <img src="images/Soldering 1.jpeg" alt="n" height="300px" width="300px">
            </div>
            <div class="col demo-content">
                <img src="images/Soldering tools 1.jpeg" alt="" height="300px" width="300px">
            </div>
            <div class="col demo-content bg-alt">
                <img src="images/Soldering tools 3.jpeg.crdownload" alt="" height="300px" width="300px">
            </div>
        </div>

        <center>
            <table class="mt-3">
                <thead>
                    <tr style="font-size: x-large;">
                        <th>Drawing & Painting</th>
                    </tr>
                </thead>
                <tbody>
                    <div id="gallery"></div>
                    <tr>
                        <td>
                            <div class="card-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img src="images/Painting 1.jpeg" alt="lush tree painting" height="200px"
                                            width="200px">
                                        <p class="caption">Nature paintings</p>
                                    </div>
                                    <div class="back">
                                        <a href="https://artstore.house/paintings/categories/animals-nature/"
                                            target="_blank">
                                            <h1>Art Storehouse</h1>
                                        </a>
                                        <p class="description">A painting called "AlberoColorate Uno" availible to buy
                                            in
                                            different sizes and beautiful colors, just like the lush tree in the
                                            painting</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img src="images/people painting.jpeg"
                                            alt="painting of man soraunded by all kinds of colors" height="200px"
                                            width="200px">
                                        <p class="caption">People painting</p>
                                    </div>
                                    <div class="back">
                                        <a href="https://www.independent.co.uk/arts-entertainment/art/features/era-selfies-and-instagram-what-point-portrait-a6751836.html"
                                            target="_blank">
                                            <h1>INDEPENDENT</h1>
                                        </a>
                                        <p class="description">The portrait of Matt Cain, painted by Canadian Andrew
                                            Salgado, in the website the painter goes into detail about "In the era of
                                            selfies and Instagram, what is the point of the portrait".</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img src="images/Building painting.jpeg" alt="Painted Abstract City Building"
                                            height="200px" width="200px">
                                        <p class="caption">Building paining</p>
                                    </div>
                                    <div class="back">
                                        <a href="https://sallyhomey.com/products/100-hand-painted-abstract-city-building-oil-painting-on-canvas-wall-art-frameless-picture-decoration-for-live-room-home-decor"
                                            target="_blank">
                                            <h1>Sally Homey</h1>
                                        </a>
                                        <p class="description">100% Hand Painted Abstract City Building Oil Painting On
                                            Canvas Wall Art Frameless Picture Decoration For Live Room Home Decor for
                                            sale, a lot of other painting with the same style are also for sale.</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="card-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img src="images/Nature drawing.jpeg.crdownload" alt="Rose Flowers Drawing"
                                            height="200px" width="200px">
                                        <p class="caption">Nature drawings</p>
                                    </div>
                                    <div class="back">
                                        <a href="http://beautiful-flowers-wallpapers.blogspot.com/2012/11/rose-flowers-drawing-wallpapers.html"
                                            target="_blank">
                                            <h1>Beutiful Flowers Wallpapers</h1>
                                        </a>
                                        <p class="description">Rose Flowers Drawing Wallpapers to look at and pick out.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img src="images/people drawing.jpeg"
                                            alt="Woman with hair on left side drawn in black and wite (pencil)"
                                            height="200px" width="200px">
                                        <p class="caption">People drawings</p>
                                    </div>
                                    <div class="back">
                                        <a href="https://www.noupe.com/design/drawings-of-people.html" target="_blank">
                                            <h1>Noupe</h1>
                                        </a>
                                        <p class="description">Cues to Master Drawings of People, this successful
                                            examples of drawing people would be drawn by Dreamer Addict.</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="card-container">
                                <div class="flipper">
                                    <div class="front">
                                        <img src="images/Building drawing.jpeg" alt="Building called Flat"
                                            height="200px" width="200px">
                                        <p class="caption">Building drawing</p>
                                    </div>
                                    <div class="back">
                                        <a href="https://divisare.com/architectural-drawings" target="_blank">
                                            <h1>DIVISARE</h1>
                                        </a>
                                        <p class="description">Architectural Drawings which represent different
                                            buildings and strucktures.</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </div>
                </tbody>
            </table>
        </center>

    </main>

</body>

<script src="JS/app.js"></script>

<footer class="page-footer font-small special-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <!-- Form -->
                <form class="form-inline">
                    <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                        aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </form>
                <!-- Form -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6 mb-4">

                <form class="input-group">
                    <input type="text" class="form-control form-control-sm" placeholder="Your email"
                        aria-label="Your email" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <a href="form.php"><button class="btn btn-sm btn-outline-white my-0 btn-lg active"
                                type="button">Sign up</button></a>
                    </div>
                </form>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2021 Learning Drawing & Painting:
        <a href="http://www.how-to-draw-and-paint.com/">how-to-draw-and-paint.com</a>
    </div>
    <!-- Copyright -->

</footer>

</html>