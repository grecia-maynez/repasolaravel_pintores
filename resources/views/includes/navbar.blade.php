<nav>
@section('navbar')
    <div id="header">
        <ul class="nav">
            <li><a href="">Inicio</a></li>
            <li><a href="">Pintores</a>
                <ul>
                    <li><a href="{{action('EstructurasDeControl@nh')}}">Naoto Hattori</a></li>
                    <li><a href="{{action('EstructurasDeControl@car')}}">Caravaggio</a></li>
                    <li><a href="{{action('EstructurasDeControl@rm')}}">Rene Magritte</a></li>
                    <li><a href="{{action('EstructurasDeControl@v')}}">Vergvoktre</a></li>
                    <li><a href="{{action('EstructurasDeControl@fk')}}">Frida Kahlo</a></li>
                </ul>
            </li>
            <li> <a href="https://mymodernmet.com/es/mejores-pintores-historia/">Recomendaciones</a></li>
            <li><a href="">Otros</a>
            <ul> 
                <li><a href="mailto:gpmayneze@gmail.com">Contacto</a>
                <li><a href="https://culturainquieta.com/es/arte/pintura/item/14107-el-arte-siniestro-oscuro-e-infernal-del-misterioso-artista-ruso-vergvoktre.html">Más Información</a>
            </ul>
            </li>
        </ul>
    </div>
@show  
</nav>