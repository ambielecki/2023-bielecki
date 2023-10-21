@extends('layout.layout')

@section('title')
Andrew Bielecki - Full Stack PHP Developer
@endsection

@section('description')
Contact page for PHP Lead Fullstack or Backend Developer with Laravel, Vue, React, and Ember experience
@endsection

@section('layout')
    <section id="app_section">
        <div class="container">
            <div class="columns is-multiline is-clearfix">
                <div class="column is-two-thirds is-pulled-right">
                    <div class="card">
                        <div class="card-image">
                            <figure class="image">
                                <img src="/images/benny_desk_ps.jpg" alt="Lego Benny Sitting at Desk in front of A-Wing">
                            </figure>
                        </div>
                        <div class="card-content">
                            <p>
                                Hello, thanks for stopping by.  I am Andrew Bielecki, a software
                                engineer living just north of Boston, MA.  I have been developing web software for about
                                {{ $years }} years.  Software engineering is my second career, after univeristy I spent
                                over a decade working as a bench scientist in the biopharmaceutical industry.
                                In 2020 I graduated with my Master's degree in Information Management
                                Systems from Harvard Extension School and have been applying it to my work ever since.
                            </p>
                            <br>
                            <p>
                                My primary focus has been working with PHP on the backend side of things,
                                but I have experience in frontend systems as well.  I've worked with
                                Laravel, Yii, Symfony, and a number of homegrown systems in PHP for both web
                                backends and general ETL scripting. I have experience with VueJs, Ember, and a little
                                React on the frontend, and of course experience with simpler sites with Bootstrap or
                                other CSS frameworks. And of course I've had the need / opportunity to work in other
                                languages such as Python and Java when it fit our projects or was needed for the
                                task at hand.
                            </p>
                            <br>
                            <p>
                                I began working in the software industry at <a href="https://www.business.com/" target="_blank">Business.com</a>, starting with
                                a homegrown PHP framework and later with Symfony and Yii.  From there I moved to
                                <a href="https://mobilefuse.com/" target="_blank">Mobilefuse</a>, an adtech company,
                                primarily working with an in house dashboard written in Laravel,
                                and a second project, also in Laravel, that focused more on ETL / cron scripts.  After
                                Mobilefuse I joined the team at <a href="https://www.healthcaresource.com/" target="_blank">Healthcaresource</a>,
                                where I work on their assessments products which are written in both a homegrown PHP framework and Yii.

                                My current role is as a Lead Engineer at <a href="https://www.quartzy.com">Quartzy</a>
                                leading the Ecommerce Shop pod.  Quartzy provides SaaS software that allows labs to
                                manage their requests and inventory in addition to allowing researches to order through
                                our online shop.  This has been the best of both worlds, combining my knowledge of
                                biotech research labs and software engineering.
                            </p>
                            <br>
                            <p>
                                In my spare time I enjoy biking, scuba diving, and coaching baseball for
                                my son's Little League team.  Like everyone I have more half finished
                                hobby projects than I know what to do with, along with a github account filled
                                with sites which are no longer deployed and a bunch of embarrassing code from
                                when I first got started.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="column is-one-third is-pulled-left">
                    <div class="columns is-multiline">
                        <div class="column is-full">
                            <div class="card">
                                <div class="card-content">
                                    <div class="media">
                                        <div class="media-left">
                                            <figure class="image is-48x48">
                                                <img class="is-rounded" src="/images/avatar.jpg" alt="Lego Benny Avatar">
                                            </figure>
                                        </div>

                                        <div class="media-content">
                                            <p><a href="https://github.com/ambielecki"><i class="fab fa-github"></i> Find me on Github</a></p>
                                            <p><a href="https://www.linkedin.com/in/andrew-bielecki-5835b5123/"><i class="fab fa-linkedin"></i> Connect on LinkedIn</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="column is-full">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image">
                                        <img src="/images/divelogrepeat_header.jpg" alt="Dive boat in Jamaica">
                                    </figure>
                                </div>

                                <div class="card-content">
                                    <p>
                                        You can find one of those mostly finished hobby projects here,
                                        <a href="https://divelogrepeat.com" target="_blank">DiveLogRepeat</a>.
                                        It is an online dive log (which is still pretty minimal at the moment) along with
                                        some blogging capability.
                                    </p>
                                    <br>
                                    <p>
                                        The site is in what I would consider a beta state, it's usable, but certainly not
                                        complete. The dive log needs input validation on the frontend and some other
                                        niceties. The admin section is getting there, I can upload images, edit the
                                        home page content, and a new blog entries. Both the home page and blog entries
                                        are version, which is convenient.
                                    </p>
                                    <br>
                                    <p>
                                        The frontend is written with Vue3 composition API and the backend is a Laravel 10
                                        application. Site is hosted on Digital Ocean with PHP 8.2, Nginx, and MySQL 8 along
                                        with Node for build steps. It's all on github and I am using <a href="https://deployer.org/">Deployer</a>
                                        to push changes.
                                    </p>
                                    <br>
                                    <ul class="list">
                                        <li class="list-item">You can find the frontend repo here: <a href="https://github.com/ambielecki/2023-divelogrepeat" target="_blank">Frontend Repo</a>.</li>
                                        <li class="list-item">You can find the backend repo here: <a href="https://github.com/ambielecki/2023-divelog-api-v2" target="_blank">Backend Repo</a>.</li>
                                        <li class="list-item">The original site (Laravel Blade + Vue): <a href="https://github.com/ambielecki/divelog_2019" target="_blank">Monorepo</a>.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="column is-full">
                            <div class="card">
                                <div class="card-image">
                                    <figure class="image">
                                        <img src="/images/beer_banner.jpg" alt="Homebrew Helper Beer Taps">
                                    </figure>
                                </div>

                                <div class="card-content">
                                    <p>
                                        Continuing with the half finished sites we have
                                        <a href="https://beer.andrewbielecki.com" target="_blank">Homebrew Helper</a>,
                                        my final project from a Harvard Extension class, DGMD E-28.
                                        It is a simple journal for saving information about your home brewed beers.
                                    </p>
                                    <br>
                                    <p>
                                        This is a Vue2 Single Page Application backed by a Laravel API, again hosted on Digital Ocean.
                                        Both the frontend and backend are a little rough as I just ripped them out of the original school repo
                                        and brought them up to date enough to run on a newer PHP 8.2 / Node 20 server.
                                    </p>
                                    <br>
                                    <ul class="list">
                                        <li class="list-item">You can find the frontend repo here: <a href="https://github.com/ambielecki/2023-beer" target="_blank">Frontend Repo</a>.</li>
                                        <li class="list-item">You can find the backend repo here: <a href="https://github.com/ambielecki/2023-beer-api" target="_blank">Backend Repo</a>.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
