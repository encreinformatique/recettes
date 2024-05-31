<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Recettes de cuisine</title>
  <meta name="description" content="Recettes testées à la maison, pour ne pas oublier">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
  <link rel="manifest" href="./site.webmanifest">
  <link href="./output.css" rel="stylesheet">
  <style>
    h1 {font-size:1.875rem;font-weight:700;line-height:2.25rem;margin:0.75rem 2rem;}
    h2 {font-size:1.275rem;font-weight:700;line-height:1.75rem;margin:0.5rem 2rem;}
    p {margin:0.25rem 2rem;}
    a {color: rgb(22 101 199);text-decoration: underline;transition: 300ms;}
    a.sitename{text-decoration:none;}
    a.sitename::before {content: "";height: 90px;width: 90px;display: inline-block;background: url('./apple-touch-icon.png');background-size: contain;margin-right: 16px;}
    a:hover {color: rgb(220 38 38);}
    img{width: 964px;border-radius: 0 16px 16px 0;box-shadow: 1px 2px 5px rgba(30, 30, 30, 0.3);max-width: 100%;}
    ul{margin: 0.25rem 2.75rem;}
    ul li{display: flex;align-items: center;}
    ul li::before {content: "✔️";margin-right: 12px;}
    ul li > a {display: flex;align-items: center;height:48px;}
    footer {margin:1.75rem 0;color:rgb(109 113 120);}
  </style>
</head>
<body>

<nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
  <a href="./" class="sitename -m-1.5 p-1.5 text-3xl font-bold hover:text-red-600">
    Mes Recettes
  </a>
</nav>
