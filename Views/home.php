<!-- Banner -->
<section id="banner">
    <div class="content">
        <header>
            <h1>
                LitCloud
            </h1>
            <br>
            <p>An Exquisite E-library platform stocked with upto date, and easy to digest materials and books</p>

        </header>
        <p>"Reading is essential for those who seek to rise above the ordinary."<br>
            — Jim Rohn</p>
        <ul class="actions">
            <li><a href="about" class="button big">Learn More</a></li>
        </ul>
    </div>
    <span class="image object">
        <img src="images/home.webp" alt="" class="slide-in-image" />
    </span>
</section>

<!-- Section -->
<section>
    <header class="major">
        <h2>Recent Books</h2>
    </header>

    
<style>
.wood_dark{
  background:url("images/wooddark.jpg");
  min-height: 200px;
  margin-top:0.2em;
}
.book{
  background:url("images/book-icon.png");
  background-size:contain;
  background-repeat: no-repeat;
  min-height: 100px;
}
.booktitle{
  margin-top: 110%;
  font-size: 2em;
  text-align: center;
}
.wood_light{
  background:url("images/woodlight.jpg");
  margin-top: 1.4em !important;
}

</style>
    <div class='row wood_dark' >
        <div class='col-md-12 wood_light'>
            <div class='row'>
                <?php

                    $book_model = new \App\Models\BooksModel();
                    $book_model->orderBy("created_at", "desc");
                    $my_books = $book_model->findAll(5);

                    foreach($my_books as $book){
                    ?>

                            <div class='col-md-2  book'>
                                <div class="booktitle"><?= $book->title ?></div>
                            </div>
                    <?php
                    }


                ?>

            </div>
        </div>
    </div>

</section>

<!-- Section -->
<section>
    <header class="major">
        <h2>Ipsum sed dolor</h2>
    </header>
    <div class="posts">
        <article>
            <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
            <h3>Interdum aenean</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
        <article>
            <a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
            <h3>Nulla amet dolore</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
        <article>
            <a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
            <h3>Tempus ullamcorper</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
        <article>
            <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
            <h3>Sed etiam facilis</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
        <article>
            <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
            <h3>Feugiat lorem aenean</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
        <article>
            <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
            <h3>Amet varius aliquam</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam
                facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
    </div>
</section>