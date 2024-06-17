<footer class="footer">
    <nav>
        <h2 class="sro" aria-level="2" role="heading">
            Navigation de bas de page
        </h2>
        <div class="footer__container">
            <p class="copyright">
                © 2024 Quentin Lequeux. Tous droits r&eacute;serv&eacute;s.
            </p>
            <ul>
                <li>
                    <a href="https://www.facebook.com/quentin.lequeux.5/" title="Vers ma page Facebook">
                        <img src="/wp-content/themes/portfolio/resources/img/facebook.svg" alt="icône de Facebook"
                             width="25" height="25">
                    </a>
                </li>
                <li>
                    <a href="https://lu.linkedin.com/in/quentin-lequeux-8a11a3192" title="Vers ma page Linkedin">
                        <img src="/wp-content/themes/portfolio/resources/img/linkedin.svg" alt="icône de Linkedin"
                             width="25" height="25">
                    </a>
                </li>
                <li>
                    <a href="https://github.com/QuentinLequeux" title="Vers ma page Github">
                        <img src="/wp-content/themes/portfolio/resources/img/github.svg" alt="icône de Github"
                             width="25" height="25">
                    </a>
                </li>
                <li>
                    <a href="mailto:quent789@gmail.com" title="Envoyer un email">
                        <img src="/wp-content/themes/portfolio/resources/img/email.svg" alt="icône" width="25"
                             height="25">
                    </a>
                </li>
            </ul>
            <a class="legals" href="<?= get_permalink(69); ?>" title="Vers la page <?= get_the_title(69); ?>">
                Mentions l&eacute;gales
            </a>
        </div>
    </nav>
</footer>
<script src="<?= dw_asset('js/site.js'); ?>"></script>
</body>
</html>