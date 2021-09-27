<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>PBsoft</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>

    <header id="header">
        <nav id="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li>
                    <a href="#">Layouts</a>
                    <ul>
                        <li><a href="/cadastrar">Cadastrar</a></li>
                        <li><a href="/listar">Listar</a></li>
                        <li>
                            <a href="#">Outros</a>
                            <ul>
                                <li><a href="#">Atualizar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="/cadastrar" class="button primary">Cadastrar</a></li>
            </ul>
        </nav>
    </header>

    <body class="is-preload landing">
    @yield('content')
    <footer id="footer">
        <ul class="icons">
            <li><a href="https://www.facebook.com/profile.php?id=100004596213783" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="https://www.linkedin.com/in/jos%C3%A9-carlos-j%C3%BAnior-711564148/" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
            <li><a href="https://www.instagram.com/carlos_megazord/" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="https://github.com/jose-carlos-jr" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
        </ul>
        <ul class="copyright">
            <li>&copy;Design: <a href=>José Carlos</a></li>
        </ul>
    </footer>
    <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
	</body>
</html>
