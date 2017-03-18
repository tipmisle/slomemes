@extends('layouts.app')

@section('content')
<div class="container">
    <main>
        <ul class="posts">
            <li class="post">
                <div class="naslov">
                    <h3><a href="#">Najbl bedn naslovvvv jeah</a></h3>
                </div>
                <div class="slika">
                    <img src="https://scontent.flju1-1.fna.fbcdn.net/v/t31.0-8/17389143_250993678694870_7682034997615766662_o.jpg?oh=6dfec0d191975d8c21f2614c49aeef5e&oe=5928CCA4">
                </div>
                <div class="bottom-bar">
                    <ul>
                        <li class="like">
                            <a href="#glasuj">
                                <i class="ion ion-thumbsup"></i> Všeč mi je
                            </a>
                        </li>
                        <li class="dislike">
                            <a href="#glasuj">
                                <i class="ion ion-thumbsdown"></i>
                                Ni mi všeć
                            </a>
                        </li>
                        <li class="share">
                            <i class="ion ion-social-facebook"></i> Deli s prijatelji
                        </li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="naslov">
                    <h3><a href="#">Najbl bedn naslovvvv jeah</a></h3>
                </div>
                <div class="slika">
                    <img src="https://scontent.flju1-1.fna.fbcdn.net/v/t31.0-8/17358587_250892022038369_260004629367303621_o.jpg?oh=861d2befa639cd0a4918e8fbed080c84&oe=592C28FF">
                </div>
                <div class="bottom-bar">
                    <ul>
                        <li class="like">
                            <a href="#glasuj">
                                <i class="ion ion-thumbsup"></i> Všeč mi je
                            </a>
                        </li>
                        <li class="dislike">
                            <a href="#glasuj">
                                <i class="ion ion-thumbsdown"></i>
                                Ni mi všeć
                            </a>
                        </li>
                        <li class="share">
                            <i class="ion ion-social-facebook"></i> Deli s prijatelji
                        </li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="naslov">
                    <h3><a href="#">Najbl bedn naslovvvv jeah</a></h3>
                </div>
                <div class="slika">
                    <img src="https://scontent.flju1-1.fna.fbcdn.net/v/t31.0-8/p960x960/17239646_249688155492089_7891295172938947830_o.jpg?oh=2093cb7e7b35466984e452a848fbf6bf&oe=595ED621">
                </div>
                <div class="bottom-bar">
                    <ul>
                        <li class="like">
                            <a href="#glasuj">
                                <i class="ion ion-thumbsup"></i> Všeč mi je
                            </a>
                        </li>
                        <li class="dislike">
                            <a href="#glasuj">
                                <i class="ion ion-thumbsdown"></i>
                                Ni mi všeć
                            </a>
                        </li>
                        <li class="share">
                            <i class="ion ion-social-facebook"></i> Deli s prijatelji
                        </li>
                    </ul>
                </div>
            </li>
            <li class="post">
                <div class="naslov">
                    <h3><a href="#">Najbl bedn naslovvvv jeah</a></h3>
                </div>
                <div class="slika">
                    <img src="https://scontent.flju1-1.fna.fbcdn.net/v/t31.0-8/17389143_250993678694870_7682034997615766662_o.jpg?oh=6dfec0d191975d8c21f2614c49aeef5e&oe=5928CCA4">
                </div>
                <div class="bottom-bar">
                    <ul>
                        <li class="like">
                            <a href="#glasuj">
                                <i class="ion ion-thumbsup"></i> Všeč mi je
                            </a>
                        </li>
                        <li class="dislike">
                            <a href="#glasuj">
                                <i class="ion ion-thumbsdown"></i>
                                Ni mi všeć
                            </a>
                        </li>
                        <li class="share">
                            <i class="ion ion-social-facebook"></i> Deli s prijatelji
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </main>
    <aside>
        <div class="sidebar box">
            <div class="fixed">
                <section>
                    <header>Sledi nam</header>
                    <div class="content">
                        <ul class="social">
                            <li class="facebook"><div class="fb-like" data-href="https://www.facebook.com/SloDankMemes" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div></li>
                            <li class="instagram">
                                <div class="btn">
                                    <p><i class="ion ion-social-instagram-outline"></i> Sledi nam na Instagram-u!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <section>
                    @if(Auth::check())
                        <header>Moj račun</header>
                        <div class="content">
                            <div class="moj-racun">
                                <div class="top">
                                    <img src="http://lorempixel.com/50/50">
                                    <b>{{Auth::user()->name}}</b>
                                </div>
                                <ul>
                                    <li><a href="#">Moj profil</a></li>
                                    <li><a href="#">Nastavitve</a></li>
                                    <li><a href="#">Odjava</a></li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <header>Prijava</header>
                        <div class="content">
                            <form>
                                <input type="text" name="username" placeholder="Uporabniško ime">
                                <input type="password" name="password" placeholder="Geslo">
                                <button class="btn btn-red">Prijava</button>
                            </form>
                        </div>
                    @endif
                </section>
            </div>
        </div>
    </aside>
</div>
@endsection
