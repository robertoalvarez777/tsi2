@extends('layouts.master')
@section('contenido')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="estiloco.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <!--SearchBox Section-->
        <div class="container">
            <div class="search-box">
                <select name="" id="">
                    <option value="Everything">Todo</option>
                    <option value="Titles">Titulo</option>
                    <option value="Descriptions">Descripciones</option>
                </select>
                <input type="text" name="q" placeholder="search ...">
                <button><i class="fa fa-search"></i></button>
                <button><a href="{{ route('posts') }}">Postear</a></button>
            </div>
        </div>
    </header>

        <hr class="subforum-devider">        
        <div class="subforum">
            <div class="container">
                <div class="card-group mt-3">
                    <div class="card text-center border-info" style="width: 18rem;">
                        <div class="subforum-title">
                            <h1>Informacion General</h1>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="subforum-devider">
            <div class="container">
                <div class="card-group mt-3">
                    <div class="card text-center border-info" style="width: 18rem;">
                        <div class="subforum-row">
                            <div class="subforum-icon subforum-column center">
                                <i class="fa fa-car center"></i>
                            </div>
                            <div class="subforum-description subforum-column">
                                <h4><a href="#">Bienvenidos</a></h4>
                                <p>Le gusta a lo kinky, nasty y aunque sea fancy, Se pone cranky si lo hago romantic</p>
                            </div>
                            <div class="subforum-info subforum-column">
                                <b><a href="">Post</a></b> hecho por <a href="">Roberto</a> 
                                <br><small>10 Diciembre 2021</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <hr class="subforum-devider">
            <div class="container">
                <div class="card-group mt-3">
                    <div class="card text-center border-info" style="width: 18rem;">
                        <div class="subforum-row">
                            <div class="subforum-icon subforum-column center">
                                <i class="fa fa-car center"></i>
                            </div>
                            <div class="subforum-description subforum-column">
                                <h4><a href="#">Description Title</a></h4>
                                <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                            </div>
                            <div class="subforum-stats subforum-column center">
                                <span>24 Posts | 12 Topics</span>
                            </div>
                            <div class="subforum-info subforum-column">
                                <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                                <br>on <small>12 Dec 2020</small>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center border-info" style="width: 18rem;">
                        <div class="subforum-row">
                            <div class="subforum-icon subforum-column center">
                                <i class="fa fa-car center"></i>
                            </div>
                            <div class="subforum-description subforum-column">
                                <h4><a href="#">Description Title</a></h4>
                                <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                            </div>
                            <div class="subforum-stats subforum-column center">
                                <span>24 Posts | 12 Topics</span>
                            </div>
                            <div class="subforum-info subforum-column">
                                <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                                <br>on <small>12 Dec 2020</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--<hr class="subforum-devider">-->
            
            <div class="container">
                <div class="card-group mt-3">
                    <div class="card text-center border-info" style="width: 18rem;">
                        <div class="subforum-row">
                            <div class="subforum-icon subforum-column center">
                                <i class="fa fa-car center"></i>
                            </div>
                            <div class="subforum-description subforum-column">
                                <h4><a href="#">Description Title</a></h4>
                                <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                            </div>
                            <div class="subforum-stats subforum-column center">
                                <span>24 Posts | 12 Topics</span>
                            </div>
                            <div class="subforum-info subforum-column">
                                <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                                <br>on <small>12 Dec 2020</small>
                            </div>
                        </div>
                    </div>
                    <div class="card text-center border-info" style="width: 18rem;">
                        <div class="subforum-row">
                            <div class="subforum-icon subforum-column center">
                                <i class="fa fa-car center"></i>
                            </div>
                            <div class="subforum-description subforum-column">
                                <h4><a href="#">Description Title</a></h4>
                                <p>Description Content: let's try to be cool, otherwise,w at 'sthe point in libing together with people youdont' live.</p>
                            </div>
                            <div class="subforum-stats subforum-column center">
                                <span>24 Posts | 12 Topics</span>
                            </div>
                            <div class="subforum-info subforum-column">
                                <b><a href="">Last post</a></b> by <a href="">JustAUser</a> 
                                <br>on <small>12 Dec 2020</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Forum Info -->

    <footer>
        <span>Hola </span>
    </footer>
    <script src="main.js"></script>
</body>
@endsection


