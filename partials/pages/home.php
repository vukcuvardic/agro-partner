<!-- Product Filter For Small Devices -->
<section class="filter show-for-small-only">
    <h2>Filter proizvoda</h2>
    <div class="row">
        <div>
            <select>
                <option value="" disabled selected>Kategorija</option>
                <option>Kategorija 1</option>
                <option>Kategorija 2</option>
            </select>
        </div>
        <div>
            <select>
                <option value="" disabled selected>Kategorija</option>
                <option>Kategorija 1</option>
                <option>Kategorija 2</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div>
            <select>
                <option value="" disabled selected>Podkategorija</option>
                <option>Podkategorija 1</option>
                <option>Podkategorija 2</option>
            </select>
        </div>
        <div>
            <button class="button_submit">Sortiraj</button>
        </div>
    </div>
</section>
<!-- Top Products -->
<section class="top-products">
    <h2 class="visible-for-small-only">Najpopularniji proizvodi</h2>
    <div class="row">
        <div class="top-products__image">
            <a href="single-product.php">
                <picture>
                    <source media="(min-width: 1025px)" srcset="images/products/product-image-500.png 2x, images/products/product-image-250.png" />
                    <source media="(min-width: 641px)" srcset="images/products/product-image-300.png" />
                    <img src="images/products/product-image-250.png" alt="Product picture">
                </picture>
            </a>
        </div>
        <div class="top-products__details">
            <h3>Naziv proizvoda</h3>
            <h4>Kratak opis proizvoda</h4>
            <div class="description">
                <p>Duži opis proizvoda. Tekst koji je dugačak par rečenica. U nastavku generički tekst</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed elit blandit, gravida tortor vitae, mattis orci. Proin suscipit nisl sit amet nisl porta tristique.</p>
                <p>Sed ac tellus a elit aliquam mollis. Morbi laoreet scelerisque leo, eu cursus orci dapibus at.</p>
            </div>
        </div>
        <a class="button button_read-more" href="single-product.php">Opširnije</a>
    </div>
</section>
<!-- Latest Blog Posts -->
<div class="blog-latest">
    <section>
        <h2>Naslov poslednjeg bloga</h2>
        <div class="row">
            <div class="blog-latest__image">
                <a href="single-product.php">
                    <picture>
                        <source media="(min-width: 1025px)" srcset="images/products/product-image-600.png 2x, images/products/product-image-150.png" />
                        <source media="(min-width: 641px)" srcset="images/products/product-image-300.png" />
                        <img src="images/products/product-image-250.png" alt="Product picture">
                    </picture>
                </a>
            </div>
            <div class="description">
                <p>Izvod poslednjeg blog posta. Tekst koji je dugačak par rečenica.</p>
            </div>
        </div>
        <a class="button button_read-more" href="single-blog-post.php">Opširnije</a>
    </section>
    <section>
        <h2>Drugi najsvežiji blog</h2>
        <div class="row">
            <div class="blog-latest__image">
                <a href="single-product.php">
                    <picture>
                        <source media="(min-width: 1025px)" srcset="images/products/product-image-600.png 2x, images/products/product-image-150.png" />
                        <source media="(min-width: 641px)" srcset="images/products/product-image-300.png" />
                        <img src="images/products/product-image-250.png" alt="Product picture">
                    </picture>
                </a>
            </div>
            <div class="description">
                <p>Pretposlednji blog post - izvod. Tekst koji je dugačak par rečenica. Nalupan tekst za svrhe ilustracije.</p>
            </div>
        </div>
        <a class="button button_read-more" href="single-blog-post.php">Opširnije</a>
    </section>
</div>