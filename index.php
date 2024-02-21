<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    <form method="POST" action="traitement.php">
        <h2>Veuillez vous inscrire</h2>
        <div class="input-box">
        <label for="nom">Votre nom</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom..."required>
        </div>
        <div class="input-box">
        <label for="prenom">Votre prenom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom..."required>
        </div>
        <div class="input-box">
        <label for="pseudo">Votre mot de passe</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo..."required>
        </div>
        <div class="input-box">
        <label for="e-mail">Votre e-mail</label>
        <input type="text" id="email" name="email" placeholder="Entrez votre email..."required>
        </div>
        <div class="input-box">
        <label for="mot de passe">Votre mot de passe</label>
        <input type="password" id="pass" name="pass" placeholder="Entrez votre mot de pass..."required>
        </div>
        <input type="submit" class="btn"value="M'inscrire" name "ok">
    </form>
    </div>
    <style>
        input{
        margin-bottom:10px;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top:200px;
            border-radius:10px;
            background:#2c3e50;

        }
        .wrapper{
                width: 420px;
                background: #0082e6;
                color: #fff;
                border-radius: 10px;
                padding: 30px 40px;
       }
        .wrapper .input-box{
                position: relative;
                width: 100%;
                height: 50px;
                margin: 30px 0; 
       }
       .input-box input{
                 width: 100%;
                height: 100%;
                background: transparent;
                border: none;
                outline: none;
                border: 2px solid rgba(255, 255, 255, .2);
              border-radius: 40px;
        }
        .input-box input::placeholder{
                color: #fff;
  
  }
        .input-box i{
                position: absolute;
                right: 20px;
                top: 50%;
                transform: translate(-50%);
                font-size: 20px;
  }
  .wrapper .btn{
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
  }
    </style>
</body>
</html>