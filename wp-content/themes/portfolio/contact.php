<?php
/*
Template Name: Contact
 */
?>
<?= get_header(); ?>
    <main class="contact">
        <section>
            <div>
                <h2 aria-level="2" role="heading">
                    Contact
                </h2>
                <p class="required">
                    Les champs marqu&eacute;s d'un * sont obligatoires&nbsp;!
                </p>
                <form action="" method="post">
                    <fieldset>
                        <div>
                            <label for="name">
                                Nom&nbsp;*
                            </label>
                            <input type="text" id="name" name="name" placeholder="Lequeux" required="">
                        </div>
                        <div>
                            <label for="surname">
                                Pr&eacute;nom&nbsp;*
                            </label>
                            <input type="text" id="surname" name="surname" placeholder="Quentin" required="">
                        </div>
                        <div class="email">
                            <label for="email">
                                Adresse mail&nbsp;*
                            </label>
                            <input type="email" id="email" name="email" placeholder="quentin.lequeux@student.hepl.be"
                                   required="">
                        </div>
                        <div>
                            <label for="message">
                                Message&nbsp;*
                            </label>
                            <textarea id="message" name="message" placeholder="Bonjour, ..." required="" cols="30"
                                      rows="10"></textarea>
                        </div>
                        <div>
                            <button class="submit" type="submit">
                                Envoyer
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
            <aside>
                <h3 aria-level="3" role="heading">
                    Coordonn&eacute;es
                </h3>
                <?php
                $infos = new WP_Query([
                    'category_name' => 'Contact',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'ASC'
                ]);
                if ($infos->have_posts()): while ($infos->have_posts()): $infos->the_post(); ?>
                    <p class="infos1">
                        <?= get_the_title(); ?>
                    </p>
                    <a class="infos2" href="<?= get_field('href') ?>">
                        <?= get_the_content(); ?>
                    </a>
                <?php endwhile;
                else: echo '<p>Aucune informations disponible</p>';
                endif; ?>
                <div class="socials__infos">
                    <a href="#" title="Vers ma page Facebook">
                        <img src="/wp-content/themes/portfolio/resources/img/facebook.svg" alt="" width="25" height="25">
                    </a>
                    <a href="#" title="Vers ma page Linkedin">
                        <img src="/wp-content/themes/portfolio/resources/img/linkedin.svg" alt="" width="25" height="25">
                    </a>
                    <a href="#" title="Vers ma page Github">
                        <img src="/wp-content/themes/portfolio/resources/img/github.svg" alt="" width="25" height="25">
                    </a>
                </div>
            </aside>
        </section>
    </main>
<?= get_footer(); ?>