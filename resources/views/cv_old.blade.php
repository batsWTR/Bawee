@extends('layout')



@section('main')
    <section class="cv_header">
        <div>
            <h1>Baptiste Wentzler</h1>
        </div>
        <div><h2>Développeur ERP PHP</h2></div>
    </section>
    <div class="cv_content d-flex flex-row">
        <section class="w-25 border-3 rounded left">
            <article>
                <h4>Contact</h4>
                <ul>
                    <li><a href="tel:+33608712542" target="_blank"><img src="{{ asset('images/logo/phone.png') }}">06.08.71.25.42</a></li>
                    <li><a href="mailto:bawee@free.fr" target="_blank"><img src="{{ asset('images/logo/mail.png') }}">bawee@free.fr</a></li>
                    <li><a href="https://www.google.com/maps/@46.2335583,6.4536361,16z?entry=ttu&g_ep=EgoyMDI1MDkyNC4wIKXMDSoASAFQAw%3D%3D" target="_blank"><img src="{{ asset('images/logo/address.png') }}">74420 Habère-lullin France</a></li>
                </ul>
            </article>
            <article>
                <h4>Réseau</h4>
                <ul>
                    <li><a href="https://github.com/batsWTR" target="_blank"><img src="{{ asset('images/logo/github.png') }}">batsWTR</a></li>
                    <li><a href="https://fr.linkedin.com/in/baptiste-wentzler-7108aaaa" target="_blank"><img src="{{ asset('images/logo/linkedin.png') }}">baptiste-wentzler</a></li>
                </ul>
            </article>
            <article>
                <h4>Compétences</h4>
                <div class="d-flex flex-row flex-wrap ">
                    <div><img src="{{ asset('images/logo/html.png') }}" title="Html 5"></div>
                    <div><img src="{{ asset('images/logo/css.png') }}" title="Css 3"></div>
                    <div><img src="{{ asset('images/logo/js.png') }}" title="Javascript"></div>
                    <div><img src="{{ asset('images/logo/php.png') }}" title="Php"></div>
                    <div><img src="{{ asset('images/logo/mysql.png') }}" title="Mysql"></div>
                    <div><img src="{{ asset('images/logo/bootstrap.png') }}" title="Bootstrap"></div>
                    <div><img src="{{ asset('images/logo/laravel.png') }}" title="Laravel"></div>
                </div>
            </article>
            <article>
                <h4>Langue</h4>
                <div>
                    <span>Anglais</span>
                    <span>B2</span>
                </div>
            </article>
        </section>
        <section class="w-75 right">
            <article class="cv_experience">
                <h3>Expériences</h3>
                <div class="d-flex flex-row">
                    <div class="cv_date p-2">2025 - 2023</div>
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
                <div class="d-flex flex-row">
                    <div class="cv_date p-2">2020 - 2015</div>
                    <div>
                        <ul>
                            <li><img class="rounded" src="{{ asset('images/logo/alpcom.png') }}"></li>
                            <li>Technicien SAV pour la société <strong>Alpcom</strong></li>
                            <li>Dépannage d'autocommutateur Mitel, Alcatel OxO et Avaya, téléphonie analogique, numérique et IP</li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="cv_date p-2">2014 - 2010</div>
                    <div>
                        <ul>
                            <li><img class="rounded" src="{{ asset('images/logo/cern.png') }}"></li>
                            <li>Technicien radio/télécom au <strong>CERN</strong> au département IT/CS, déploiement du système radio Tétra</li>
                            <li>Déploiement d'un système bluetooth de géolocalisation indoor</li>
                            <li>Réalisation de documentation, configuration de switchs, bornes wi-fi</li>
                        </ul>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div class="cv_date p-2">2008 - 2009</div>
                    <div>
                        <ul>
                            <li><img class="rounded" src="{{ asset('images/logo/sdis.png') }}"></li>
                            <li>Installation ADSL pour le <strong>SDIS</strong> de haute savoie</li>
                            <li>Installation du système radio ANTARES avec la société SYSTEL</li>
                        </ul></div>
                </div>
                <div class="d-flex flex-row">
                    <div class="cv_date p-2">2007 - 2003</div>
                    <div>
                        <ul>
                            <li><img src="#" alt="Gobé"></li>
                            <li>Technicien téléphonie mobile chez <strong>Gobé</strong></li>
                            <li>installation et mise en service de relais de téléphonie mobile Nokia</li>
                                <li>Installation, configuration et tests de relais GSM 2G, 3G pour SFR</li>
                        </ul></div>
                </div>
                <div class="d-flex flex-row">
                    <div class="cv_date p-2">2003 - 1998</div>
                    <div>
                        <ul>
                            <li><img class="rounded" src="{{ asset('images/logo/armee.png') }}"></li>
                            <li><strong>Armée de terre</strong>, Technicien télécom au 45ème Régiment de Transmission</li>
                            <li>Installation téléphonie courant faible et fibre optique</li>
                            <li>Mission au Kosovo, Allemagne et Nouvelle-Calédonie</li>
                        </ul></div>
                </div>
            </article>
            <article class="cv_formation"></article>
        </section>
    </div>
@endsection
