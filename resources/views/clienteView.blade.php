<h1>Update Cliente</h1>
<form action="{{ route('cliente.update') }}" method="POST">
    @csrf 
    <input type="hidden" name="id" value="{{$cliente['id']}}">                       
    <label for="name">Nombre</label>
    <input type="text" name="name" id="name" value="{{$cliente['name']}}">
    <label for="name">Email</label>
    <input type="email" name="email" id="email" value="{{$cliente['email']}}">
    <label for="name">Telefono</label>
    <input type="text" name="phone" id="phone" value="{{$cliente['phone']}}">
    <label for="name">Direccion</label>
    <input type="text" name="address" id="address" value="{{$cliente['address']}}">
    <button type="submit">Guardar</button>
</form>