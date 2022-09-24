<html>
  <script defer="defer" src="javaScriot.js"></script>
<head>
<meta charset="utf-8">
<link href="../../css/style.css" rel="stylesheet" media="all">
</head>
<body>	
		

		<form action="/formulaire" method="post">

		<div class="title">Formulaire</div>

		<div class="input-container ic1">

		{{csrf_field() }}
	<div>
		<label for="name">Nom</label>
		<input type="text" name="name"/>
	</div>

		<label for="surname">Prenom</label>
		<input type="text" name="surname"/>
	<div>
		<label for="age">Age</label>
		<input type="number" name="age"/>
	</div>
	
	<div>
	 	<label for="city">Ville</label>
		<input type="text" name="city"/>
	</div>
		
	<div>
	 	<label for="brand">Marque favorite</label>
		<input type="text" name="brand"/>
	</div>
	
	<div>
	 	<label for="brand_car">Marque favorite de voiture</label>
		<input type="text" name="brand_car"/>
	</div>

	<div>
	 	<label for="nationality">Nationaliter</label>
		<input type="text" name="nationality"/>
	</div>

	<div>
	 	<label for="language">Langue parler</label>
		<input type="text" name="language"/>
	</div>

	<div>
	 	<label for="married">Etes-vous maries</label>
		<input type="text" name="married"/>
	</div>

	<div>
	 	<label for="student">Etes-vous étudient </label>
		<input type="text" name="student"/>
	</div>

	<input type="submit" id="envoyer" name="envoyer" class="submit">
	</div>	
	</form>

</body>	
        </html>