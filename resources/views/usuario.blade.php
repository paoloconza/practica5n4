<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="flex justify-center">
    <div class="w-3/6 mt-4">
        <div class="flex justify-between mb-8">
            <p class="font-semibold">Gestion de usuarios</p>
            <a class="border bg-[034b6a] text-white rounded-md font-normal px-4 py-0.5 flex" href="/crear"> Agregar </a>
        </div>
        <div class="flex justify-between">
            <p class="text-gray-600 font-semibold">Usuario</p>
            <p class="text-gray-600 font-semibold">E-mail</p>
        </div>
        <hr>
        @foreach ($usuarios as $usuario)
            <div class="flex justify-between mt-4 mb-0.5">
                <p class="font-normal text-gray-500	">{{ $usuario->nombre . ' ' . $usuario->apellido }}</p>
                <p class="font-normal text-gray-500	">{{ $usuario->correo_electronico }}</p>
            </div>
        @endforeach
    </div>
</body>

</html>
