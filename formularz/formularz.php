<html>
    <head>
        <title>formularz</title>
        <meta charset="utf-8">
    </head>
    <body>
	
    <form action="./formularz.php" method="POST">
        <input type="text" name="imie" />
        <input type="submit" />
    </form>
	
	
	
	
	
        <?php
           if(isset($_POST['imie'])){
            echo "Hejo! " . htmlspecialchars($_POST['imie']) . " ";
        }else{
            echo "Hejo!";
        }
		
        ?>
		

		
		<br>
		<br>
		<br>
		
		<br>
		<form action="./formularz.php" method="POST">

		<center>
        <p>Login</p><input type="text" name="login" /><br>
		<p>hasło:</p><input type="text" name="hasło" />
        <input type="submit" />
    </form>
		 
		<br>
		<br>
		<input type="submit"/>
		
		
		<?php
           if(isset($_POST['login'])){
            echo "Zalogowałeś się! " . htmlspecialchars($_POST['login']) . " ";
        }else{
            echo "Klinknij aby sie zalogowac";
        }
		
	
        ?>
		
		
		
		
		<br>
		<br>
		<br>
		<p>Ulubiona seria gier:<p>
		<form name="form" action="./formularz.php" method="post">
	<select name="Ulubiona seria gier">
    <option value="gry1">Call Of Duty</option>
    <option value="gry2">Battlefield</option>
    <option value="gry3">Need for Speed</option>
	<?php
	if(isset($_POST['gry1']) && $_POST['gry1'] == 1) echo "Wybrano Call of Duty";
	if(isset($_POST['gry2']) && $_POST['gry2'] == 1) echo "Wybrano Battlefield";
	if(isset($_POST['gry2']) && $_POST['gry2'] == 1) echo "Wybrano Need for Speed";		
	?>	
    </body>
</html>