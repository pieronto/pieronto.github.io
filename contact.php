<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

  <title>Ilone Hayek : Contact</title>
  <link rel="stylesheet" href="style.css">

      <style>
         /* Style inputs with type="text", select elements and textareas */
          input[type=text], select, textarea {
            width: 100%; /* Full width */
            padding: 12px; /* Some padding */ 
            border: 1px solid #ccc; /* Gray border */
            border-radius: 10px; /* Rounded borders */
            box-sizing: border-box; /* Make sure that padding and width stays in place */
            margin-top: 6px; /* Add a top margin */
            margin-bottom: 16px; /* Bottom margin */
            resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
          }

            /* Style the submit button with a specific background color etc */
            input[type=submit] {
              background-color: rgb(190,190,190);
              color: black;
              padding: 12px 20px;
              border: none;
              border-radius: 10px;
              cursor: pointer;
              font-size: 1em;
          }

          /* When moving the mouse over the submit button, add a darker green color */
          input[type=submit]:hover {
            background-color: lightgreen;
          }

          /* Add a background color and some padding around the form */
         /* .container {
            border-radius: 10px;
            background-color: rgb(0,20,30);
            padding: 20px;
            font-size: 1em;
          } */

      </style>
</head>
<body>

    <?php include("menu.php"); ?>

    <div class="titre"><h1>Formulaire de contact</h1></div>

    <form method="post" action="allo.php" onsubmit="return verifForm(this);">
            <label name="identite" for="identite">Nom - Prénom</label>
            <input type="text" name="identite" size="40"  onblur="verifIdentite(this)" ;>

            <label  name="email" for="email">E-Mail</label>
            <input  type="text" name="email" size="40" onblur="verifMail(this)";>

            <label name="sujet" for="sujet">Sujet</label>
            <input type="text" name="sujet" size="40"  onblur="verifSujet(this)" onchange="javascript:this.value=this.value.toUpperCase()";>

            <label  name="message" for="message">Votre message</label>
            <textarea class="input-recherche-textaera" name="message" rows=10 cols=40 onblur="verifMessage(this)"></textarea>

            <input type="submit" value="Envoyer">
    </form>
</body>
</html>

  