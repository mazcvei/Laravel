@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h2>Crea tu blog - Ejercicio 1</h2>
        <h3>Como crear un blog sin WordPress</h3>
        <br/>
        <h5>Descripción</h5>
        <p>
            En este primer ejercicio trabajaremos los conceptos básicos de Laravel
            para crear un blog. Para ello vamos a crear una serie de vistas y 
            páginas de forma que podamos practicar: <b>enrutado</b>, <b>controladores</b>
            y <b>vistas</b>.
        </p>
        <br/>
        <h5>Partes del ejercicio</h5>
        <ol>
            <li>
                <p>
                    <b>Controladores</b>. Dado que los controladores son el eje neurálgico de rutas y vistas
                    empecemos por ahí.
                    <ol>
                        <li>Utiliza artisan para crear el <i>BlogController</i></li>
                        <li>Crea los métodos <i>index</i> y <i>show</i></li>
                        <li>Asigna al método show una variable para el título del post</li>
                        <li>Nuevamente usa artisan para crear el <i>ContactController</i></li>
                        <li>Crea los métodos para mostrar la vista con el formulario y el método para la recepción de los datos del mismo</li>
                    </ol>
                </p>
            </li>
            <li>
                <p>
                    <b>Rutas.</b> En el menú superior (otro componente reusable de Blade) verás una serie de enlaces
                    sin vincular.
                    <ol>
                        <li>Crea las rutas necesarias para que esos enlaces funcionen.</li>
                        <li>Asigna nombres a las rutas.</li>
                        <li>Enlaza el <i>href</i> de los enlaces con el nombre elegido para cada ruta</li>
                        <li>No olvides crear una ruta para ver una entrada completa</li>
                    </ol>
                </p>
            </li>
            <li>
                <p>
                    <b>Vistas.</b> Teniendo una ruta y un controlador vamos a necesitar una serie de vistas que nos permitan mostrar al usuario los datos
                    <ol>
                        <li>Cambia el nombre del blog en la barra lateral</li>
                        <li>Genera todas las vistas necesarias para cada ruta y método creados en los pasos anteriores.</li>
                        <li>Crea un componente para la vista previa de cada post y otro para ver el post completo</li>
                        <li>Utiliza el plugin <a href="https://github.com/fzaninotto/Faker" target="_blank">fzazinoto/Faker</a> para generar datos aleatorios para los posts.</li>
                    </ol>
                </p>
            </li>
        </ol>
    </div>
</div>
@endsection
