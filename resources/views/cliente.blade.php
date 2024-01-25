<h1>Nuevo Cliente</h1>
<form action="{{route('cliente.store')}}" method="POST">
    @csrf 
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name">
    <label for="name">Email</label>
    <input type="email" name="email" id="email">
    <label for="name">Telefono</label>
    <input type="text" name="phone" id="phone">
    <label for="name">Direccion</label>
    <input type="text" name="address" id="address">
    <button type="submit">Guardar</button>
</form>