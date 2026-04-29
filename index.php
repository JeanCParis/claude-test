<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenue</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
      font-family: 'Segoe UI', sans-serif;
      color: white;
    }

    .container {
      text-align: center;
      padding: 2rem;
      max-width: 600px;
    }

    .badge {
      display: inline-block;
      background: rgba(255, 255, 255, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 50px;
      padding: 0.4rem 1.2rem;
      font-size: 0.85rem;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 2rem;
    }

    h1 {
      font-size: 3.5rem;
      font-weight: 700;
      line-height: 1.2;
      margin-bottom: 1.5rem;
      background: linear-gradient(90deg, #e0c3fc, #8ec5fc);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    p {
      font-size: 1.2rem;
      color: rgba(255, 255, 255, 0.7);
      line-height: 1.7;
      margin-bottom: 2.5rem;
    }

    .btn {
      display: inline-block;
      background: linear-gradient(90deg, #e0c3fc, #8ec5fc);
      color: #1a1a2e;
      font-weight: 700;
      font-size: 1rem;
      padding: 0.9rem 2.5rem;
      border-radius: 50px;
      text-decoration: none;
      transition: transform 0.2s, box-shadow 0.2s;
      box-shadow: 0 4px 20px rgba(142, 197, 252, 0.3);
    }

    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 30px rgba(142, 197, 252, 0.5);
    }

    .dots {
      margin-top: 3rem;
      display: flex;
      justify-content: center;
      gap: 0.5rem;
    }

    .dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.3);
    }

    .dot.active {
      background: #8ec5fc;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="badge">✨ Bientôt disponible</div>
    <h1>Bienvenue !</h1>
    <p>Heureux de vous voir ici.<br>Quelque chose d'incroyable est en cours de préparation.</p>
    <a href="#" class="btn">En savoir plus</a>
    <div class="dots">
      <div class="dot active"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
  </div>
</body>
</html>
