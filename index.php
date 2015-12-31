<?php get_header(); ?>

    <!-- Hier beginnt der Content-Bereich (index.php) -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <?php get_sidebar(); ?>
            </div>
            <div class="col-sm-9">
                <p><strong>Willkommen auf der Homepage der Karate-Abteilung der Fachhochschule Frankfurt/Main.</strong></p>
                <p>Auf dieser Homepage erfahrt Ihr viel Wissenswertes über und um das Thema Karate-Do, unseren Trainingszeiten und derzeit laufenden Lehrgängen oder auch Wettkämpfe.</p>
                <p>Gerne könnt Ihr jederzeit bei uns im Training vorbeischauen und mitmachen. Natürlich sind auch 'Nicht-Studenten' immer willkommen.</p>
                <p><img src="<?php bloginfo('template_url'); ?>/images/startseite2.jpg" class="img-fluid text-sm-center" alt="Karateka der FH Frankfurt"></p>
                <p>Wir wünschen Euch viel Spaß beim "Surfen" und stöbern auf unseren Seiten!</p>
                <p>Eure Karateka der FH Frankfurt</p>
                <hr>
                <div id="trainer">
                    <h3>Trainer</h3></div>
                <div class="container">
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Dirk Klasen</h4>
                                <h6 class="card-subtitle text-muted">4. Dan</h6>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/images/Dirk02_131x98.jpg" alt="Dirk Klasen">
                            <div class="card-block">
                                <p class="card-text">
                                    <p>dipl. Karatelehrer
                                        <br>liz. Gewaltschutztrainer
                                        <br>Fach- und B-Übungsleiter</p>
                                    <p>B-Prüfer / Shotokan</p>
                                    <p>Karate seit 1982</p>
                                </p>
                                <a href="#" class="btn btn-primary">E-Mail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Ralph Nuss</h4>
                                <h6 class="card-subtitle text-muted">3. Dan</h6>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/images/Ralph1_130x98.jpg" alt="Ralph Nuss">
                            <div class="card-block">
                                <p class="card-text">
                                    <p>B-Trainer
                                        <br>DKV-Selbstverteidungslehrer II</p>
                                    <p>Karate seit 1995</p>
                                </p>
                                <a href="#" class="btn btn-primary">E-Mail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Sarah Holze</h4>
                                <h6 class="card-subtitle text-muted">1. Dan</h6>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/images/Sarah00_131x98.jpg" alt="Sarah Holze">
                            <div class="card-block">
                                <p class="card-text">
                                    <p>C-Trainerin
                                        <br>Fach-Übungsleiterin</p>
                                    <p>Karate seit 1998</p>
                                </p>
                                <a href="#" class="btn btn-primary">E-Mail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Jan Krieger</h4>
                                <h6 class="card-subtitle text-muted">1. Kyu</h6>
                            </div>
                            <img src="<?php bloginfo('template_url'); ?>/images/Jan01_130x98.jpg" alt="Jan Krieger">
                            <div class="card-block">
                                <p class="card-text">
                                    <p>Fach-Übungsleiter
                                        <br>DKV-Selbstverteidungslehrer / Bronze</p>
                                    <p>Karate seit 1997</p>
                                </p>
                                <a href="#" class="btn btn-primary">E-Mail</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div id="zeiten">
                    <h3>Trainingszeiten</h3></div>
                <div class="container">
                    <table class="table table-inverse">
                        <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Dienstag</th>
                                <th>Donnerstag</th>
                                <th>Samstag</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">Anfänger/Anfängerinnen</th>
                                <td>17:00h - 18:00h</td>
                                <td>19:45h - 21:15h</td>
                                <td>13:00h - 15:00h</td>
                            </tr>
                            <tr>
                                <th scope="row">Fortgeschrittene</th>
                                <td>18:00h - 19:00h</td>
                                <td>gemeinsames Training</td>
                                <td>Freies Training
                                    <br>nach vorheriger Absprache
                                    <br>
                                    <p class="phone">0157 75460243</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div id="anfahrt">
                    <h3>Anfahrt</h3></div>
                <div class="container">
                    <div class="col-sm-4">
                        <p>Sporthalle der FRA-UAS
                            <br>Kleiststr. 10 / Ecke Gleimstr.
                            <br>60318 Frankfurt a.M.</p>
                        <p>Geb. 2</p>
                        </p><img src="<?php bloginfo('template_url'); ?>/images/lageplan_643x809.jpg" class="img-fluid" alt="Anfahrt"></div>
                    <div class="col-sm-4">
                        <h5>Öffentliche Verkehrsmittel</h5>
                        <h6>Bus</h6>

                        <p>ab/bis Lokalbahnhof Frankfurt/Unfallklinik Bad Vilbel
                            <br> Linie 30, Haltestelle "Nibelungenplatz/FH"</p>

                        <p>ab/bis Westbahnhof/Ostbahnhof:
                            <br> Linie 32; Haltestelle "Nibelungenplatz/FH"</p>
                        <h6>Straßenbahn</h6>

                        <p>ab/bis Rheinlandstraße / Hugo-Junkers-Straße
                            <br> Linie 12, Haltestelle "Friedberger Landstraße / Rohrbachstraße" (3 Minuten Fußweg)</p>

                        <p>ab/bis Lokalbahnhof / Gravensteiner-Platz
                            <br> Linie 18, Haltestelle "Nibelungenplatz/FH"</p>
                        <h6>U-Bahn</h6>

                        <p>U4 bis Haltestelle "Höhenstraße":
                            <br> Umsteigen in Buslinie 32 (Richtung Hauptbahnhof / Pforzheimer Straße), Haltestelle: "Nibelungenplatz/FH</p>

                        <p>U5 bis Haltestelle "Deutsche Nationalbibliothek":
                            <br> Umsteigen in Buslinie 32 (Richtung Ostbahnhof / Sonnemannstraße), Haltestelle: "Nibelungenplatz/FH"</p>

                        <p>ab U-Bahn-Station Miquel-/Adickesallee (U1, U2, U3)
                            <br> Umsteigen in Buslinie 32 (Richtung Hauptbahnhof / Pforzheimer Straße), Haltestelle: "Nibelungenplatz/FH"</p>
                    </div>
                    <div class="col-sm-4">
                        <h5>Anfahrt mit dem Auto</h5>

                        <h6>Von Norden / Osten:</h6>

                        <p>A661, Ausfahrt „Friedberger Landstraße“ Richtung Stadtmitte; nach ca. 3 km rechts</p>
                        <h6>Von Süden / Westen:</h6>

                        <p>A5, A66, Abfahrt Nordwestkreuz, Richtung Adickes-/ Miquelallee.</p>
                    </div>
                </div>
                <hr>
                <div id="kontakt">
                    <h3>Kontakt</h3></div>
                <div class="container">
                    <div class="col-sm-7">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputName2">Name</label>
                                <input type="text" class="form-control" id="exampleInputName2" placeholder="Max Mustermann">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="max.mustermann@beispiel.de">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Schreib' eine Nachricht">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Informationsmaterial anfordern
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Anmeldeformular anfordern
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Senden</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-0">sidebar.right
                <br>Widgets</div>
        </div>
    </div>
    <!-- Hier endet der Content-Bereich (index.php, front-page.php, home-page.php) -->
    <hr>

    <?php get_footer(); ?>