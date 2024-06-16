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
                    <?= get_the_title(8); ?>
                </h2>
                <p class="required">
                    Les champs marqu&eacute;s d'un <span class="star">*</span> sont obligatoires&nbsp;!
                </p>
                <form action="" method="post">
                    <fieldset>
                        <div>
                            <label for="name">
                                Nom&nbsp;<span class="star">*</span>
                            </label>
                            <input type="text" id="name" name="name" placeholder="Lequeux" required=""
                                   aria-required="true">
                        </div>
                        <div>
                            <label for="surname">
                                Pr&eacute;nom&nbsp;<span class="star">*</span>
                            </label>
                            <input type="text" id="surname" name="surname" placeholder="Quentin" required=""
                                   aria-required="true">
                        </div>
                        <div class="email">
                            <label for="email">
                                Adresse mail&nbsp;<span class="star">*</span>
                            </label>
                            <input type="email" id="email" name="email" placeholder="quent789@gmail.com"
                                   required="" aria-required="true">
                        </div>
                        <div>
                            <label for="message">
                                Message&nbsp;<span class="star">*</span>
                            </label>
                            <textarea id="message" name="message" placeholder="Bonjour, ..." required="" cols="30"
                                      rows="10" aria-required="true"></textarea>
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
                <p>
                    Adresse email
                </p>
                <a href="mailto:quent789@gmail.com" title="Envoyer un email à quent789@gmail.com" itemprop="email">
                    quent789@gmail.com
                </a>
                <p>
                    Num&eacute;ro de t&eacute;l&eacute;phone
                </p>
                <a href="tel:+32473644221" title="Appeler ce numéro" itemprop="telephone">
                    +32&nbsp;(0)473&nbsp;64&nbsp;42&nbsp;21
                </a>
                <p>
                    Adresse postale
                </p>
                <a href="https://www.google.com/maps/place/Rue+de+la+Brasserie+12,+5080+La+Bruy%C3%A8re/@50.5332166,4.8656269,18.74z/data=!4m6!3m5!1s0x47c19e86f763f0fb:0x51f7596d79e5cfe7!8m2!3d50.533135!4d4.8661018!16s%2Fg%2F11n01bpxh0?entry=ttu"
                   title="Vers google maps" itemscope="" itemtype="https://schema.org/PostalAddress" itemprop="address">
                    <span itemprop="streetAddress">Rue de la brasserie</span> <span
                            itemprop="postOfficeBoxNumber">12B</span><br>
                    <span itemprop="postalCode">5080</span> <span itemprop="addressLocality">Warisoulx</span><br>
                    <span itemprop="addressCountry">Belgique</span>
                </a>
                <div class="socials__infos">
                    <a href="https://www.facebook.com/quentin.lequeux.5/" title="Vers ma page Facebook" itemprop="sameAs">
                        <img src="/wp-content/themes/portfolio/resources/img/facebook.svg" alt="Logo facebook"
                             width="25"
                             height="25">
                    </a>
                    <a href="https://lu.linkedin.com/in/quentin-lequeux-8a11a3192" title="Vers ma page Linkedin" itemprop="sameAs">
                        <img src="/wp-content/themes/portfolio/resources/img/linkedin.svg" alt="Logo linkedin"
                             width="25"
                             height="25">
                    </a>
                    <a href="https://github.com/QuentinLequeux" title="Vers ma page Github" itemprop="sameAs">
                        <img src="/wp-content/themes/portfolio/resources/img/github.svg" alt="Logo github" width="25"
                             height="25">
                    </a>
                </div>
            </aside>
        </section>
    </main>
<?= get_footer(); ?>