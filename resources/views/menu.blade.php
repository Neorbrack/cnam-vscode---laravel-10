<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O cnamo - menu </title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <header>
        <!--TODO-->
    </header>
    @extends('base')

    @section('title', 'Menu')

    @section('content')
    <section>
        <h2>Menu</h2>
        @foreach ($categories as $categorie)
        <div>
            <h3>{{ $categorie }} </h3>
            <ul class="plats">
            @for ($i = 0; $i < 3; $i++)
                <li>
                    <img src="/Images/george-zheng-0Kbjfwunink-unsplash (1).jpg" alt="Photo de George zheng">
                    <h4>Loremm ipsum dolor</h4>
                    <span class="prix">9,99€</span>
                </li>
                
                <li>
                    <img src="/Images/george-zheng-0Kbjfwunink-unsplash (1).jpg" alt="Photo de George zheng">
                    <h4>Loremm ipsum dolor</h4>
                    <span class="prix">9,99€</span>
                 </li>
                 @endfor
            </ul>
        </div>
        @endforeach
    </section>
    @endsection
    <h2>Entrée</h2>

    <div>
        <h3>Entrée</h3>
        <ul class="plats">
        @for ($i = 0; $i< 3; $i++)
            <li>
                <img src="/Images/george-zheng-0Kbjfwunink-unsplash (1).jpg" alt="Photo de George zheng">
                <h4>Loremm ipsum dolor</h4>
                <span class="prix">9,99€</span>
            </li>
            <li>
                <img src="/Images/george-zheng-0Kbjfwunink-unsplash (1).jpg" alt="Photo de George zheng">
                <h4>Loremm ipsum dolor</h4>
                <span class="prix">9,99€</span>
             </li>
        @endfor     
        </ul>

    </div>
    <h3>Plat Principal</h3>
    <ul class="plats">
    @for ($i = 0; $i< 3; $i++)
        <li>
            <img src="/Images/george-zheng-0Kbjfwunink-unsplash (1).jpg" alt="Photo de George zheng">
            <h4>Loremm ipsum dolor</h4>
            <span class="prix">9,99€</span>
        </li>
        <li>
            <img src="/Images/george-zheng-0Kbjfwunink-unsplash (1).jpg" alt="Photo de George zheng">
            <h4>Loremm ipsum dolor</h4>
            <span class="prix">9,99€</span>
         </li>
    @endfor     
    </ul>
<div>
    <h3>Dessert</h3>
    <ul class="plats">
    @for ($i = 0; $i< 3; $i++)
        <li>
            <img src="/Images/george-zheng-0Kbjfwunink-unsplash (1).jpg" alt="Photo de George zheng">
            <h4>Loremm ipsum dolor</h4>
            <span class="prix">9,99€</span>
        </li>
        <li>
            <img src="/Images/george-zheng-0Kbjfwunink-unsplash (1).jpg" alt="Photo de George zheng">
            <h4>Loremm ipsum dolor</h4>
            <span class="prix">9,99€</span>
         </li>
    @endfor     
    </ul>
    <div>
        <h3>Boisson</h3>
        <ul class="plats">
        @for ($i = 0; $i< 3; $i++)
            <li>
                <img src="/Images/george-zheng-0Kbjfwunink-unsplash (1).jpg" alt="Photo de George zheng">
                <h4>Loremm ipsum dolor</h4>
                <span class="prix">9,99€</span>
            </li>
            <li>
                <img src="/Images/george-zheng-0Kbjfwunink-unsplash (1).jpg" alt="Photo de George zheng">
                <h4>Loremm ipsum dolor</h4>
                <span class="prix">9,99€</span>
             </li>
        @endfor     
        </ul>
        







    <footer>
        <!-- TODO -->
    </footer>


</body>

</html>