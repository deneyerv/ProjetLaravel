<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('product.index')}}">Accueil</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Catégorie  <i class="fa fa-sitemap" aria-hidden="true"></i>
                        </i> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{action('ProductController@searchNes')}}">NES</a></li>
                        <li><a href="{{action('ProductController@searchSnes')}}">SNES</a></li>
                        <li><a href="{{route('user.signup')}}">GAMECUBE</a></li>
                        <li><a href="{{route('user.signup')}}">Gameboy color</a></li>
                        <li><a href="{{route('user.signup')}}">Gameboy Advance</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">


                <form class="navbar-form navbar-left" action="searchCode" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" name="searchCode">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    </div>
                    <button type="submit" class="btn btn-default" name="Search" value="Search">Rechercher</button>
                </form>

            </ul>




            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('product.shoppingCart')}}"> Panier  <i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compte  <i class="fa fa-user-circle-o" aria-hidden="true"></i> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('user.profile')}}">Profil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('user.logout')}}">Deconnection</a></li>
                        </ul>
                    </li>

                @else




                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Compte  <i class="fa fa-user-circle-o" aria-hidden="true"></i> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('user.signin')}}">Connection</a></li>
                            <li><a href="{{route('user.signup')}}">Inscription</a></li>
                        </ul>
                    </li>
                @endif

            </ul>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>