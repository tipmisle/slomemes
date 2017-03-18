<div class="sidebar">
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