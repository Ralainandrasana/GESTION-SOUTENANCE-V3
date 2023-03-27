
        <div class="formCont">
            <div class="quitter">
                <div class="icone-x">
                    <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="titreAction">
                <h3>Ajout etudiant</h3>
            </div>
            <div class="formulaire">
                <form action="../fonction_add/fct_add_etudiant.php" method="post">
                    <label for="matricule">matricule</label><input name="matricule" type="text" id="matricule" ><br>
                    <label for="nom">nom</label><input type="text" id="nom" name="nom" ><br>
                    <label for="prenom">prenom</label><input type="text" id="prenom" name="prenom"><br>
                    <div class="select">
                         <!--label for="niveau">niveau</label-->
                         <select name="niveau" id="niveau">
                            <option>niveau</option>
                            <option value="L1">L1</option>
                            <option value="L2">L2</option>
                            <option value="L3">L3</option>
                            <option value="M1">M1</option>
                            <option value="M2">M2</option>
                        </select>
                        <!--label for="parcours">parcours</label-->
                        <select name="parcours" id="parcours">
                            <i class="fas fa-angle-down"></i>
                            <option>parcours</option>
                            <option value="GB">GB</option>
                            <option value="IG">IG</option>
                            <option value="SR">SR</option>
                        </select>
                    </div>
                    
                   
                    <label for="adr_mail">adr_mail</label><input type="text" id="adr_mail" name="adr_mail">
                    <div class="btn">
                        <input type="submit" value="valider">
                        <input type="reset" value="reset">
                    </div>
                </form>
            </div>
        </div>
