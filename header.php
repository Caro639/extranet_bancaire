            <header>
                <div id="logo">
                    <img src="images/logo_gbaf.png" alt="Logo de GBAF" />
                </div>

                    <div id="profil">
                        <img src="images/profil.png" alt="Photo de profil" class="profil" />
                        <form method="post" action="index.php">
                        <p>
                           <?php foreach ($accounts as $account) { ?>
                                <label for="username"></label>
                                <input type="text" name="username" id="username" placeholder= <?php echo $account['username']; ?> size="30" maxlength="10" />
                        </p>   
                        <?php } ?>    
                    </div>
                        </form>
            </header>