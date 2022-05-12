<?php

//----------afficher-le-footer--------------------

    echo "      <div class=\"footer-content\">
                    <div class=\"left box\">
                        <h2 class=\"titre-contact\">A propos de nous</h2>
                        <script src=\"https://kit.fontawesome.com/a076d05399.js\"></script>
                        <div class=\"contact-content\">
                            <p>norvege.website est ici pour vous faire découvrir la Norvège et ses merveilleux lieux qui la composent</p>
                            <div class=\"social\">
                                <a href=\"https://facebook.com\"><span class=\"fab fa-facebook-f\"></span></a>
                                <a href=\"https://twitter.fr\"><span class=\"fab fa-twitter\"></span></a>
                                <a href=\"https://instagram.com\"><span class=\"fab fa-instagram\"></span></a>
                                <a href=\"mailto:norvege.website@gmail.com\"><span class=\"far fa-envelope\"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class=\"center box\">
                        <h2 class=\"titre-contact\">Adresse</h2>
                        <div class=\"content\">
                            <div class=\"place\">
                                <span class=\"fas fa-map-marker-alt\">
                                    <span class=\"text\">Birendrangar, Surkhet</span>
                                </span>
                            </div>
                            <br>
                            <div class=\"phone\">
                                <span class=\"fas fa-phone-alt\">
                                    <span class=\"text\">06 55 48 52 26</span>
                                </span>
                            </div>
                            <br>
                            <div class=\"email\">
                                <span class=\"fas fa-envelope\">
                                    <span class=\"text\">norvege.website@gmail.com</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class=\"right box\">
                        <h2 class=\"titre-contact\">Contactez nous</h2>
                        <div class=\"content\">
                            <form action=\"#\" id=\"contact-form\">
                                <label for=\"email\" id=\"label-email\">Email *</label>
                                <input type=\"email\" name=\"mail\" id=\"contact-email\" required>
                                <label for=\"msg\" name=\"msg\">Votre message *</label>
                                <textarea rows=\"3\" cols=\"25\" required></textarea> <br>
                                <input type=\"submit\" value=\"Envoyer\" id=\"contact-valide\">   
                            </form>
                        </div>
                    </div>
                </div>
                <p id=\"signature\">&copy;norvege.website</p>";


?>