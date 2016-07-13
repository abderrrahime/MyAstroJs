<?php session_start(); ?>
                                        <p class="FormContainer-Slogan">Recevez votre étude personnelle par téléphone</p>
                                        <p class="FormContainer-name"><?= $prenom ?></p>
                                        <p>les cartes de l’Amour et de l’Exaltation sont très positives et présagent d’une évolution dans votre vie sentimentale, favorable à l’amour et à l’épanouissement. Mais attention <?= $prenom ?> ! Votre comportement actuel empêche cette évolution positive : les autres cartes révèlent votre blocage affectif !  Une remise en question est nécessaire. Car, en continuant ainsi, vous risquez de rater toutes les opportunités s’offrant à vous. Mais tout n’est pas figé <?= $prenom ?>, il est encore temps d’agir…</p>
                                        
                                        <p class="FormContainer-Slogan-bloc">Pour en savoir plus  notre équipe de voyants est à votre écoute et vous rappelle gratutement !</p>
                                        <!-- ########## identification formulaire ########## -->
                                        <input type="hidden" name="method" value="telnum-save" />
                                        
                                        <!-- ############################################### -->
                                        
                                        <span class="ten-min-free"></span>
                                        
                                        <div class="FormField">
                                            <label for="tel" class="FormField-Label">Téléphone</label>
                                            <input type="tel" name="tel" id="tel" placeholder="Mon N° de téléphone" class="FormField-Input" required />
                                            <span class="FormField-Info">Vous serez rappelé par le voyant à ce numéro</span>
                                        </div>
                                        <div class="FormField">
                                            <label for="pays" class="FormField-Label">Votre pays </label>
                                            <select name="pays" id="pays" class="FormField-Input" required>
                                                <option value="" selected>Votre Pays</option>
                                                <option value="BE">Belgique</option>
                                                <option value="CA">Canada</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="CH">Suisse</option>
                                                <option value="FR" selected>France Métropolitaine</option>
                                                <optgroup label="DOM-TOM">
                                                    <option value="MQ">Martinique</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GF">Guyane</option>
                                                    <option value="RE">La Réunion</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="PM">St Pierre et Miquelon</option>
                                                    <option value="BL">St Barthélémy</option>
                                                    <option value="SM">St Martin</option>
                                                    <option value="WF">Wallis et Futunua</option>
                                                    <option value="PF">Polynésie Française</option>
                                                    <option value="NC">Nouvelle Calédonie</option>
                                                </optgroup>
                                                <option value="ZZ">Autre</option>
                                            </select>
                                        </div>
                                        <p class="FormContainer-Slogan">
                                            Un voyant vous appelera dès demain,<br />pour vous donner votre réponse en direct.
                                        </p>
                                        <button class="FormContainer-Submit" type="submit" name="valider">Me faire rappeler gratuitement</button>
