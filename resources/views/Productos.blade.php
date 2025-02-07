@extends("componentes.Plantilla")

@section("menu")
<ul>
    <li><a href="/">Index</a></li>
    <li><a href="/autenticacion">Autenticacion</a></li>
    <li><a href="/proveedores">Proveedores</a></li>
    <li><a href="/galeria">Galeria</a></li>
</ul>
@endsection

@section("Contenido")
<div class="notification">
    <div class="notiglow"></div>
    <div class="notiborderglow"></div>
    <div class="notititle">Productos de Olivos</div>
    <div class="notibody">Aqui estan los productos que ofrece olivo</div>
  </div>
@endsection
