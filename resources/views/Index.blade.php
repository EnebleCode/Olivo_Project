@extends("componentes.Plantilla")
@section("menu")
<ul>
    <li><a href="/autenticacion">Autenticate</a></li>
    <li><a href="/productos">Productos</a></li>
    <li><a href="/proveedores">Proveedores</a></li>
    <li><a href="/galeria">Galeria</a></li>
</ul>
@endsection

@section("Contenido")
<div class="notification">
    <div class="notiglow"></div>
    <div class="notiborderglow"></div>
    <div class="notititle">Bienvenido a Olivos</div>
    <div class="notibody">El mejor restaurante familiar de todos</div>
  </div>
@endsection