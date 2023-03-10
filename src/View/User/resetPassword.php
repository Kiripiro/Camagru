<!-- <div class="wrapper">
    <div class="resetPassword">
        <h1>Camagru</h1>
        <h2>Changer de mot de passe</h2>
        <form class="resetPassword-form" action="reset-password" method="post">
            <input type="password" name="password" placeholder="Nouveau mot de passe" />
            <input type="password" name="confirmPassword" placeholder="Confirmer le mot de passe" />
            <input type="submit" value="Changer" />
        </form>
    </div>
</div> -->

<section class="resetPassword">
    <div class="hero is-fullheight is-light">
        <div class="hero-body" style="height: 80vh; overflow: hidden;">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div class="box">
                        <div class="box">
                            <img src="/Media/logo/logo.png" alt="Camagru">
                        </div>
                        <hr class="resetPassword-hr">
                        <h3 class="title is-4 has-text-black">Changer de mot de passe</h3>
                        <hr class="forgotPassword-hr">
                        <div class="box">
                            <div class="title has-text-grey is-5">Veuillez entrer votre ancien mot de passe ainsi que
                                votre nouveau mot de passe.
                            </div>
                            <form class="form" action="reset-password" method="post">
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-normal" type="password" name="oldPassword"
                                            placeholder="Ancien mot de passe" autofocus="">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-normal" type="password" name="password"
                                            placeholder="Nouveau mot de passe" autofocus="">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="control">
                                        <input class="input is-normal" type="password" name="confirmPassword"
                                            placeholder="Confirmez le mot de passe" autofocus="">
                                    </div>
                                </div>
                                <button class="button is-block is-info is-normal is-fullwidth">Envoyer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>