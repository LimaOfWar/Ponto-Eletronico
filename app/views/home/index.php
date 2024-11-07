<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PONTOIN - Home</title>
</head>

<body class="bg-black text-white rounded p-8">
  <div class="flex flex-1 justify-center items-center">
    <h1 class="text-3xl font-bold">
      PONTOIN
    </h1>
  </div>
    <div class="w-full max-w-4xl mx-auto p-8 grid grid-cols-1 md:grid-cols-2 gap-8">
      <div class="flex flex-col justify-center items-center md:items-start text-center md:text-left">
        <h1 class="text-4xl font-bold text-white-800 mb-4">Bem-Vindos(as)!</h1>
        <p class="text-lg text-white-600">Faça Login ou Cadastre-se e faça seu check diário!</p>
      </div>
      <div class="flex flex-col justify-center items-center">
        <a href="/login"
        class="bg-white text-black font-semibold text-lg py-2 px-4 rounded-full hover:bg-slate-600 w-48 text-center mb-4">
        Login
      </a>
      <span class="mb-4">ou</span>
      <a href="/register"
      class="bg-blue-600 text-white font-semibold text-lg py-2 px-4 rounded-full hover:bg-indigo-600 w-48 text-center">
       Cadastro
    </a>
    </div>
  </div>
</div>
</body>

</html>