@extends("componentes.Plantilla")

@section("menu")
<ul>
    <li><a href="/">Index</a></li>
    <li><a href="/autenticacion">Autenticacion</a></li>
    <li><a href="/productos">Productos</a></li>
    <li><a href="/proveedores">Proveedores</a></li>
</ul>
@endsection

@section("Contenido")
<div class="notification">
    <div class="notiglow"></div>
    <div class="notiborderglow"></div>
    <div class="notititle">Galeria Olivos</div>
    <div class="notibody">Aqui encontraras las images de olivo</div>
  </div>
@endsection
