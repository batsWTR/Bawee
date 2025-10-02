@extends('layout')



@section('main')
    <div class="flex">
        <section>
            <h4>Etu<span>des</span></h4>
        </section>
        <div class="photo">
            MOIiiiiiiiiiiiiiiiiiiiii
        </div>
        <section>
            <h4>Cont<span>act</span></h4>
        </section>
    </div>
    <section class="about">
        <h4>A pro<span>pos</span></h4>
    </section>
    <div class="flex">
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
    <section class="competences">
        <h4>Compé<span>tences</span></h4>
    </section>
    <section class="experience">
        <h4>Expér<span>ience</span></h4>
        <div class="d-flex flex-row justify-between">
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
