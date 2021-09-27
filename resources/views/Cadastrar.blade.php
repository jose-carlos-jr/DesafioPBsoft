@extends('templates.template')
@section('content')
@endsection
<br>
<br>
<head>
    <meta charset="utf-8" />
</head>
<body>
    <form name="meuForm" method="post" action="/create">
    	@csrf
	    <div class="box">
			<center><h2>Formulário de Cadastro:</h2></center>
			<label>
				<span><b>Produto</b></span>
				<center><input type="text" class="input_text" name="nome" placeholder="Nome do produto:" /></center>

			</label>

			<label>
				<span><b>Categoria</b></span>
				<center><input type="text" class="input_text" name="categoria" placeholder="Categoria do produto:" /></center>
			</label>

			<label>
				<span><b>Quantidade</b></span>
				<center><input type="text" class="input_text" name="quantidade" placeholder="Quantidade:" /></center>
			</label>

			<label>
				<span><b>Preco</b></span>
				<center><input type="text" class="input_text" name="preco" placeholder="Preço R$:" /></center>
			</label>

			<label>
				 <span><b>Descricao</b></span>
				<center><input type="text" class="message" name="descricao" placeholder="Descrição do produto:" /></center>
				<br>
				<span><b></b></span>
				<center><input type="submit"  value="Salvar"></center>
			</label>
		</div>
	</form>
</body>