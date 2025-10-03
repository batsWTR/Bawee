@extends('layout')



@section('main')
    <div class="flex margin-b">
        <section class="left">
            <h4>Etu<span>des</span></h4>
        </section>
        <div class="photo">

        </div>
        <section class="right">
            <h4>Cont<span>act</span></h4>
            <ul>
                <li><a href="https://github.com/batsWTR" target="_blank">GitHub BatsWTR</a></li>
                <li><a href="mailto:baptiste.wentzler@wanadoo.fr">baptiste.wentzler@wanadoo.fr</a></li>
                <li><a href="tel:+33608712542">06.08.71.25.42</a></li>
                <li><a href="https://www.google.com/maps/@46.2335583,6.4536361,16z?entry=ttu&g_ep=EgoyMDI1MDkyNC4wIKXMDSoASAFQAw%3D%3D" target="_blank">74420 Habère-lullin France</a></li>

            </ul>
        </section>
    </div>
    <section class="about margin-b">
        <h4>A pro<span>pos</span></h4>
    </section>
    <div class="flex margin-b">
        <section>
            <h4>Hob<span>bies</span></h4>
        </section>
        <div>
            <img src="{{ asset('images/laptop.png') }}">
        </div>
        <section>
            <h4>Lan<span>gues</span></h4>
        </section>
    </div>
    <section class="margin-b">
        <h4>Compé<span>tences</span></h4>
        <div class="competences">
            <div>
                <img src="{{ asset('images/icon/php.png') }}">
                <p>Php</p>
            </div>
            <div>
                <img src="{{ asset('images/icon/mysql.png') }}">
                <p>MySql</p>
            </div>
            <div>
                <img src="{{ asset('images/icon/laravel.png') }}">
                <p>Laravel</p>
            </div>
            <div>
                <img src="{{ asset('images/icon/html5.png') }}">
                <p>Html 5</p>
            </div>
            <div>
                <img src="{{ asset('images/icon/css3.png') }}">
                <p>Css 3</p>
            </div>
            <div>
                <img src="{{ asset('images/icon/js.png') }}">
                <p>Javascript</p>
            </div>
            <div>
                <img src="{{ asset('images/icon/sass.png') }}">
                <p>Sass</p>
            </div>
            <div>
                <img src="{{ asset('images/icon/bootstrap.png') }}">
                <p>Bootstrap</p>
            </div>
            <div>
                <img src="{{ asset('images/icon/github.png') }}">
                <p>Github</p>
            </div>
        </div>
    </section>
    <section class="experience margin-b">
        <h4>Expér<span>ience</span></h4>
        <div class="d-flex flex-row justify-content-between">
            <article>
                <div class="mt-2">
                    <h4>2023 - <span>2025</span></h4>
                    <div>
                        <ul>
                            <li><img class="rounded" src="{{ asset('images/logo/peggysage.png') }}"></li>
                            <li>Développeur php ERP MyPeggy au sein de la société <strong>PeggySage</strong></li>
                            <li>Maintenance et développement sur l'ERP maison crée par la société Ab6s</li>
                            <li>Interfaçage avec API Rest,SOAP,EDI entre l'ERP et WMS,PLM et logiciel de caisse Cégid</li>
                            <li>Développement de petits utilitaires en Python (formatage de photos, renommage de BL, utilitaire de connexion azure blob)</li>
                            <li>Développement d'une connexion SSO sur l'ERP</li>
                            <li>Ajout de la géo-lacalisation des clients France</li>
                            <li>Création de script AJAX pour l'affichage de graphiques de statistiques</li>
                            <li>Maintenance de la base de donnée Mysql</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-2">
                    <h4>2010 - <span>2014</span></h4>
                    <div>
                        <ul>
                            <li><img class="rounded" src="{{ asset('images/logo/cern.png') }}"></li>
                            <li>Technicien radio/télécom au <strong>CERN</strong> au département IT/CS, déploiement du système radio Tétra</li>
                            <li>Déploiement d'un système bluetooth de géolocalisation indoor</li>
                            <li>Réalisation de documentation, configuration de switchs, bornes wi-fi</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-2">
                    <h4>2003 - <span>2007</span></h4>
                    <div>
                        <ul>
                            <li><img src="#" alt="Gobé"></li>
                            <li>Technicien téléphonie mobile chez <strong>Gobé</strong></li>
                            <li>installation et mise en service de relais de téléphonie mobile Nokia</li>
                            <li>Installation, configuration et tests de relais GSM 2G, 3G pour SFR</li>
                        </ul>
                    </div>
                </div>
            </article>
            <article>
                <div class="mt-2">
                    <h4>2015 - <span>2020</span></h4>
                    <div>
                        <ul>
                            <li><img class="rounded" src="{{ asset('images/logo/alpcom.png') }}"></li>
                            <li>Technicien SAV pour la société <strong>Alpcom</strong></li>
                            <li>Dépannage d'autocommutateur Mitel, Alcatel OxO et Avaya, téléphonie analogique, numérique et IP</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-2">
                    <h4>2008 - <span>2009</span></h4>
                    <div>
                        <ul>
                            <li><img class="rounded" src="{{ asset('images/logo/sdis.png') }}"></li>
                            <li>Installation ADSL pour le <strong>SDIS</strong> de haute savoie</li>
                            <li>Installation du système radio ANTARES avec la société SYSTEL</li>
                        </ul>
                    </div>
                </div>
                <div class="mt-2">
                    <h4>1998 - <span>2003</span></h4>
                    <div>
                        <ul>
                            <li><img class="rounded" src="{{ asset('images/logo/armee.png') }}"></li>
                            <li><strong>Armée de terre</strong>, Technicien télécom au 45ème Régiment de Transmission</li>
                            <li>Installation téléphonie courant faible et fibre optique</li>
                            <li>Mission au Kosovo, Allemagne et Nouvelle-Calédonie</li>
                        </ul>
                    </div>
                </div>
            </article>
        </div>
    </section>
@endsection
