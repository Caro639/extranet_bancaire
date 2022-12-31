    
         <?php include('variables.php'); ?>

                 <?php
                include_once('connexion.php');
                $sqlQuery = 'SELECT * FROM account';
                $accountStatement = $mysqlClient->prepare($sqlQuery);
                $accountStatement->execute();
                $accounts = $accountStatement->fetchAll();
            ?>
          
           <header>
                <div id="logo">
                   <img src="images/logo_gbaf.png" alt="Logo de GBAF" />
                </div>

                    <div id="profil">
                        <img src="images/profil.png" alt="Photo de profil" class="profil" />
   
                         <p> <label for="username"></label>
                                <input type="text" name="username" id="username" placeholder= "username" <?php echo $account="username"; ?> size="70" maxlength="40" />
                                </p>   
                        
                    </div>
                        </form>
            </header>