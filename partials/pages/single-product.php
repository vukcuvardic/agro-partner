<!-- Breadcrumbs -->
<nav class="breadcrumbs">
    <a href="index.php">Početna</a>
    <a href="#">Proizvodi</a>
    <a href="#">Kategorija proizvoda</a>
    <a href="#">Potkategorija proizvoda</a>
    <a class="current" href="#">Proizvod</a>
</nav>
<!-- Single Product Main Content -->
<section class="single-product">
    <div class="row single-product__details">
        <div class="columns">
            <h1>Naziv proizvoda</h1>
            <h2>Kratak opis proizvoda</h2>
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
                    <li class="active"><a href="http://placehold.it/400x400" data-clearing-interchange="[http://placehold.it/400x400, (small)], [http://placehold.it/600x600, (large)]"><img data-interchange="[http://placehold.it/200x200, (small)], [http://placehold.it/400x400, (medium)]" alt="Product picture"></a></li>
                    <li><a href="http://placehold.it/400x400" data-clearing-interchange="[http://placehold.it/400x400, (small)], [http://placehold.it/600x600, (large)]"><img data-interchange="[http://placehold.it/200x200, (small)], [http://placehold.it/500x500, (medium)]" alt="Product picture"></a></li>
                    <li><a href="http://placehold.it/400x400" data-clearing-interchange="[http://placehold.it/400x400, (small)], [http://placehold.it/600x600, (large)]"><img data-interchange="[http://placehold.it/200x200, (small)], [http://placehold.it/600x600, (medium)]" alt="Product picture"></a></li>
                    <li><a href="http://placehold.it/400x400" data-clearing-interchange="[http://placehold.it/400x400, (small)], [http://placehold.it/700x700, (large)]"><img data-interchange="[http://placehold.it/200x200, (small)], [http://placehold.it/400x400, (medium)]" alt="Product picture"></a></li>
                </ul>
                <ul class="clearing-thumbs clearing-thumbs_links">
                    <li><img class="th" src="http://placehold.it/140x140"></li>
                    <li><img class="th" src="http://placehold.it/140x140"></li>
                    <li><img class="th" src="http://placehold.it/140x140"></li>
                    <li><img class="th" src="http://placehold.it/140x140"></li>
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
                    <img data-interchange="[http://placehold.it/130x130, (small)], [http://placehold.it/142x142, (medium)], [http://placehold.it/185x185, (large)] " alt="Product picture">
                    <h5>Naziv proizvoda</h5>
                    <h6>Kratak opis</h6>
                </a>
            </div>
            <div class="similar-product">
                <a href="#">
                    <img data-interchange="[http://placehold.it/130x130, (small)], [http://placehold.it/142x142, (medium)], [http://placehold.it/185x185, (large)] " alt="Product picture">
                    <h5>Naziv proizvoda</h5>
                    <h6>Kratak opis</h6>
                </a>
            </div>
            <div class="similar-product">
                <a href="#">
                    <img data-interchange="[http://placehold.it/130x130, (small)], [http://placehold.it/142x142, (medium)], [http://placehold.it/185x185, (large)] " alt="Product picture">
                    <h5>Naziv proizvoda</h5>
                    <h6>Kratak opis</h6>
                </a>
            </div>
            <div class="similar-product">
                <a href="#">
                    <img data-interchange="[http://placehold.it/130x130, (small)], [http://placehold.it/142x142, (medium)], [http://placehold.it/185x185, (large)] " alt="Product picture">
                    <h5>Naziv proizvoda</h5>
                    <h6>Kratak opis</h6>
                </a>
            </div>
        </div>
    </section><!-- End Similar Products -->
</section><!-- End Single Product Main Content -->