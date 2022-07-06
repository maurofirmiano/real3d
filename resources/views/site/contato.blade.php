<h1> Contato </h1>

    <form method="post" action="{{route('site.contato.form')}}">
    @csrf
    <input type="text" name="name" placeholder="Nome">
    <input type="email" name="email" placeholder="Email">
    <input type="submit" value="Enviar >">
</form>
<label>Nome: {{$nome}}</label><br>
<label>Email: {{$email}}</label>
