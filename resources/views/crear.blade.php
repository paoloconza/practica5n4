<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="flex justify-center h-screen items-center flex-wrap">
    <div class="flex flex-col items-center">
        <a class="bg-[034b6a]" href="/usuario">Volver al listado</a>
        <h1 class="text-4xl mb-8 font-bold">Nuevo usuario</h1>
        <form class="w-full" action="api/usuarios" method="post">
            <div class="flex flex-col">
                <label class="text-slate-400" for="nombre">Nombres</label>
                <input class="border-2 rounded-lg p-2" type="text" name="nombre">
            </div>
            <div class="flex flex-col">
                <label class="text-slate-400" for="apellido">Apellidos</label>
                <input class="border-2 rounded-lg p-2" type="text" name="apellido">
            </div>
            <div class="flex flex-col">
                <label class="text-slate-400" for="correo">Correo</label>
                <input class="border-2 rounded-lg p-2" type="text" name="correo_electronico">
            </div>
            <div class="flex flex-col">
                <label class="text-slate-400" for="contrasena">contraseña</label>
                <input class="border-2 rounded-lg p-2" type="text" name="contrasena">
            </div>
            <button class="w-full rounded-lg p-2 mt-3.5 bg-orange-300" type="submit">Guardar</button>
        </form>
    </div>
</body>

</html>
