<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				Project name
			</a>
		</div>
		<div class="navbar-collapse collapse" id="navbar">
			<ul class="nav navbar-nav">
				<router-link to="/" tag="li">
					<a>Home</a>
				</router-link>

				<router-link to="/about" tag="li">
					<a>About</a>
				</router-link>

				<router-link to="/vision" tag="li">
					<a>Vision</a>
				</router-link>

				<router-link to="/login" tag="li">
					<a>Login</a>
				</router-link>

				<router-link to="/register" tag="li">
					<a>Register</a>
				</router-link>
			</ul>
		</div>
	</div>
</nav>