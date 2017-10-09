<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  
  <title>formulaire</title>
  
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="me.php" method="post" >

<fieldset>
 
   <p>dou you like? : </p>
     <input type="radio" name="CSS" value="yes" id="non"
     checked="checked" />
     <label for="oui" class="inline">oui</label>
     <input type="radio" name="CSS" value="non" id="non" />
     <label for="non" class="inline">non</label>
	 
  <label for="utilise">if yes, contact me please </label>
   <select name="utilise" id="utilise">
   <option value="toujours"> toujours</option>
   <option value="parfois"> parfois</option>
   <option value="jamais"> jamais</option>
   </select>
</fieldset>

<fieldset>
 <legend>Vos coordonnées :</legend>
  <label for="email">Votre email :</label>
   <input type="email" name="email" size="20" 
   maxlength="40" value="email" id="email" />

  <label for="comments">Vos commentaires :</label>
   <textarea name="comments" id="comments" cols="20" rows="4">
   </textarea>
</fieldset>

 <p>
 <input type="submit" value="Envoyer" />
 <input type="reset" value="Annuler" />
 </p>

</form>
</body>