<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css" />
	<link rel="stylesheet" href="coutureforyou.css" />
	<link rel="icon" href="logo_couture.jpg" type="image/x-icon" />
    <title>Devis - COUTUREFORYOU</title>
</head>
<body>
    <?php include ("nav_couture.php")?>
			<div class="container">
				<div class="row">
					<form action="#" method="post">
						<h3>Devis</h3>
						<p>Description</p>
						<textarea
							name="description"
							id="description"
						></textarea>
						<p>Type de vêtements</p>
						<label for="vetements"></label>
						<select name="vetements" id="vetements">
							<option value="selection">
								Selectionnez le type de
								vêtements
							</option>
							<option value="t-shirt">
								T-shirt
							</option>
							<option value="pantalon">
								Pantalon
							</option>
							<option value="robe">Robe</option>
							<option value="jupe">Jupe</option>
							<option value="chemise">
								Chemise
							</option>
						</select>
						<p>Type de tissu :</p>
						<label for="tissu"></label>
						<select name="tissu" id="tissu">
							<option value="selection">
								Selectionnez le type de tissu
							</option>
							<option value="coton">Coton</option>
							<option value="polyester">
								Polyester
							</option>
							<option value="soie">Soie</option>
							<option value="laine">Laine</option>
							<option value="lin">Lin</option>
						</select>
						<p>Taille :</p>
						<label for="taille"></label>
						<select name="taille" id="taille">
							<option value="xs">XS</option>
							<option value="s">S</option>
							<option value="m">M</option>
							<option value="l">L</option>
							<option value="xl">XL</option>
							<option value="xxl">XXL</option>
						</select>
						<br />
						<p>Couleur :</p>
						<label for="couleur"></label>
						<input
							type="color"
							name="couleur"
							id="couleur"
						/>
						<p>Services</p>

						<input
							type="radio"
							name="ourlet"
							id="ourlet"
						/>
						<label for="ourlet">Ourlet</label><br />
						<input
							type="radio"
							name="retouches"
							id="retouches"
						/>
						<label for="retouches">Retouches</label
						><br />
						<input type="radio" name="OetR" id="OetR" />
						<label for="OetR"
							>Retouches plus ourlet</label
						>
					</form>
				</div>
			</div>
            <?php include("footer_couture.php")?>
</body>
</html>