@extends('templates.template')
@section('content')
@endsection

<body>
<div class="table-wrapper">
    <br>
    <br>
    <center><h2 class="text-center">Lista de Produtos</h2> </center>  
    <table class="alt">
        <thead>
            <tr>
                <th scope="col"><center>Id</center></th>
                <th scope="col"><center>Produto</center></th>
                <th scope="col"><center>Categoria</center></th>
                <th scope="col"><center>Quantidade</center></th>
                <th scope="col"><center>Preço</center></th>
                <th scope="col"><center>Descrição</center></th>
                <th scope="col"> <center>Ação</center></th>
            </tr>
        </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
            <td><center>{{ $user->id }}</center></td>
            <td>{{ $user->nome }}</td>
            <td>{{ $user->categoria }}</td>
            <td><center>{{ $user->quantidade }}</center></td>
            <td>{{ $user->preco }}</td>
            <td>{{ $user->descricao }}</td>
            
            <td>
                <form action= "#" >
                <!--  @csrf
                  @method('DELETE') -->
                  <center><button class="button primary small" type="submit">Deletar Produto</button></center>
                </form>
            </td>

        </tr>
    @endforeach
    </tbody>
    </table>
</div>
</body>