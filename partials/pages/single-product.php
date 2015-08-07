<!-- Breadcrumbs -->
<nav class="breadcrumbs">
    <a href="index.php">Početna</a>
    <a href="products.php">Proizvodi</a>
    <a href="#">Kategorija proizvoda</a>
    <a href="#">Potkategorija proizvoda</a>
    <a class="current" href="#">Proizvod</a>
</nav>
<!-- Single Product Main Content -->
<article class="single-product">
    <div class="row single-product__details">
        <div class="columns">
            <header>
                <h1>Naziv proizvoda</h1>
                <h2>Kratak opis proizvoda</h2>
            </header>
            <div class="description">
                <p>Duži opis proizvoda. Tekst koji je dugacak par recenica. U nastavku genericki tekst</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed elit blandit, gravida tortor vitae, mattis orci. Proin suscipit nisl sit amet nisl porta tristique.</p>
                <p>Sed ac tellus a elit aliquam mollis. Morbi laoreet scelerisque leo, eu cursus orci dapibus at.</p>
                <h3>Tehničke specifikacije</h3>
                <ul>
                    <li>Tehnička karakeristika</li>
                    <li>Sledeća</li>
                    <li>Još neka</li>
                </ul>
            </div>
            <table>
                <tr>
                    <td>Tehnička karakeristika</td>
                    <td>Svojstvo</td>
                </tr>
                <tr>
                    <td>Druga kar</td>
                    <td>Drugo svojstvo</td>
                </tr>
                <tr>
                    <td>Još neka</td>
                    <td>Treće</td>
                </tr>
            </table>
        </div>
        <div class="columns">
            <div class="producer"><a class="button button--producer">Proizvođač</a></div>
            <div class="single-product__images">
                <ul class="clearing-thumbs clearing-thumbs_enlarged" id="clearing-thumbs_enlarged" data-clearing>
                    <li class="active">
                        <a href="images/products/product-image-600.png" data-clearing-interchange="[images/products/product-image-400.png, (small)], [images/products/product-image-600.png, (large)], [images/products/product-image-1200.png, (largeretina)], [images/products/product-image-600.png, (mediumretina)]">
                            <picture>
                                <source media="(min-width: 1025px)" srcset="images/products/product-image-1200.png 2x, images/products/product-image-400.png" />
                                <img class="th" src="images/products/product-image-600.png" alt="Product picture">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="images/products/product-image-600.png" data-clearing-interchange="[images/products/product-image-400.png, (small)], [images/products/product-image-600.png, (large)], [images/products/product-image-1200.png, (largeretina)]">
                            <picture>
                                <source media="(min-width: 1025px)" srcset="images/products/product-image-1200.png 2x, images/products/product-image-400.png" />
                                <img class="th" src="images/products/product-image-600.png" alt="Product picture">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="images/products/product-image-600.png" data-clearing-interchange="[images/products/product-image-400.png, (small)], [images/products/product-image-600.png, (large)], [images/products/product-image-1200.png, (largeretina)]">
                            <picture>
                                <source media="(min-width: 1025px)" srcset="images/products/product-image-1200.png 2x, images/products/product-image-400.png" />
                                <img class="th" src="images/products/product-image-600.png" alt="Product picture">
                            </picture>
                        </a>
                    </li>
                    <li>
                        <a href="images/products/product-image-600.png" data-clearing-interchange="[images/products/product-image-400.png, (small)], [images/products/product-image-600.png, (large)], [images/products/product-image-1200.png, (largeretina)]">
                            <picture>
                                <source media="(min-width: 1025px)" srcset="images/products/product-image-1200.png 2x, images/products/product-image-400.png, " />
                                <img class="th" src="images/products/product-image-600.png" alt="Product picture">
                            </picture>
                        </a>
                    </li>
                </ul>
                <ul class="clearing-thumbs clearing-thumbs_links">
                    <li>
                    <picture>
                        <source media="(min-width: 1025px)" srcset="images/products/product-image-200.png 2x, images/products/product-image-100.png" />
                        <img class="th" src="images/products/product-image-150.png" alt="Product picture">
                    </picture>
                    </li>
                    <li>
                    <picture>
                        <source media="(min-width: 1025px)" srcset="images/products/product-image-200.png 2x, images/products/product-image-100.png" />
                        <img class="th" src="images/products/product-image-150.png" alt="Product picture">
                    </picture>
                    </li>
                    <li>
                    <picture>
                        <source media="(min-width: 1025px)" srcset="images/products/product-image-200.png 2x, images/products/product-image-100.png" />
                        <img class="th" src="images/products/product-image-150.png" alt="Product picture">
                    </picture>
                    </li>
                    <li>
                    <picture>
                        <source media="(min-width: 1025px)" srcset="images/products/product-image-200.png 2x, images/products/product-image-100.png" />
                        <img class="th" src="images/products/product-image-150.png" alt="Product picture">
                    </picture>
                    </li>
                </ul>
            </div>
            <!-- Graph -->
            <canvas id="single-product-graph" class="ct-square"></canvas>
            <script>
                var randomScalingFactor = function () {
                    return Math.round(Math.random() * 100)
                };
                var lineChartData = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(250,0,0,0.2)",
                            strokeColor: "rgba(250,0,0,1)",
                            pointColor: "rgba(250,0,0,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(250,0,0,1)",
                            data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(9,113,178,0.2)",
                            strokeColor: "rgba(9,113,178,1)",
                            pointColor: "rgba(9,113,178,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(9,113,178,1)",
                            data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
                        }
                    ]

                }
                window.onload = function () {
                    var ctx = document.getElementById("single-product-graph").getContext("2d");
                    window.myLine = new Chart(ctx).Line(lineChartData, {
                        responsive: true
                    });
                }
            </script>
        </div>

    </div><!-- End row -->
    <div class="clearfix"></div>
    <!-- Similar Products -->
    <section class="similar-products">
        <h4>Slični proizvodi</h4>
        <div class="row">
            <div class="similar-product">
                <a href="#">
                    <picture>
                        <source media="(min-width: 1025px)" srcset="images/products/product-image-400.png 2x, images/products/product-image-200.png" />
                        <img src="images/products/product-image-150.png" alt="Product picture">
                    </picture>
                    <h5>Naziv proizvoda</h5>
                    <h6>Kratak opis</h6>
                </a>
            </div>
            <div class="similar-product">
                <a href="#">
                    <picture>
                        <source media="(min-width: 1025px)" srcset="images/products/product-image-400.png 2x, images/products/product-image-200.png" />
                        <img src="images/products/product-image-150.png" alt="Product picture">
                    </picture>
                    <h5>Naziv proizvoda</h5>
                    <h6>Kratak opis</h6>
                </a>
            </div>
            <div class="similar-product">
                <a href="#">
                    <picture>
                        <source media="(min-width: 1025px)" srcset="images/products/product-image-400.png 2x, images/products/product-image-200.png" />
                        <img src="images/products/product-image-150.png" alt="Product picture">
                    </picture>
                    <h5>Naziv proizvoda</h5>
                    <h6>Kratak opis</h6>
                </a>
            </div>
            <div class="similar-product">
                <a href="#">
                    <picture>
                        <source media="(min-width: 1025px)" srcset="images/products/product-image-400.png 2x, images/products/product-image-200.png" />
                        <img src="images/products/product-image-150.png" alt="Product picture">
                    </picture>
                    <h5>Naziv proizvoda</h5>
                    <h6>Kratak opis</h6>
                </a>
            </div>
        </div>
    </section><!-- End Similar Products -->
</article><!-- End Single Product Main Content -->