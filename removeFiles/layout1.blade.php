<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
</head>
<body>
    <!-- Para poner barra de navegación-->
     <nav>
        <x-nav1 href="/">Home</x-nav1>
        <x-nav1 href="/about">About</x-nav1>
        <x-nav1 href="/contact">Contact</x-nav1>

     </nav> 
     <!--Para indicarle que quiero que escriba ahí(marca).-->
     <!-- Forma larga-->
     {{-- <?php echo $slot ?> --}}
    
    <!-- Haciendo uso de blade-->
    {{-- {{}} igual a <?php echo ?>--}}
    {{$slot}} 
</body>
</html>

<!-- 
Archivo de diseño(bloque de codigo reutilizable)
-->