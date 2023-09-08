@extends('template')

@section('content')
    {{--Card--}}
    <div class="flex justify-center items-center p-4 mt-16">
        <div class="w-5/6">
            <h1 class="text-4xl text-blue-500 font-bold">
                Editorial estrellas literarias
            </h1>

            <p class="text-xl text-gray-300 pt-5">
                En Editorial Estrellas Literarias, estamos comprometidos con la promoción y difusión de talentosos
                escritores emergentes de Colombia y más allá. Nuestra pasión por las letras nos impulsa a descubrir y
                nutrir voces literarias únicas que merecen ser escuchadas en todo el mundo.
                <br>
                <br>
                Explora nuestra colección de obras literarias que abarcan géneros que van desde la poesía hasta la
                narrativa, y sumérgete en un mundo de historias cautivadoras y expresiones artísticas que enriquecerán
                tu vida. Nuestro compromiso es brindarte acceso a obras frescas y emocionantes que despierten tu
                imaginación y te hagan sentir una profunda conexión con la literatura.
                <br>
                <br>
                En Editorial Estrellas Literarias, creemos que cada autor es una estrella en ascenso, y estamos aquí
                para iluminar sus caminos hacia el reconocimiento literario. Únete a nosotros en este viaje literario
                mientras descubrimos juntos las estrellas literarias del mañana.
            </p>
        </div>
    </div>
    <hr class="border-t border-gray-300 my-4 opacity-10">

    {{--Pricing--}}
    <section class="py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-semibold text-blue-500">Nuestros Planes de Precios</h2>
            <p class="mt-2 text-gray-300">Elije el plan que mejor se adapte a tus necesidades.</p>

            <div class="flex justify-center mt-12 space-x-4">
                <!-- Elemento de Precio 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Plan Básico</h3>
                    <p class="text-2xl font-bold text-blue-500 mt-2">$10/mes</p>
                    <ul class="mt-4 text-gray-600">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Función 1
                        </li> <!-- Icono de check verde para indicar que está incluido -->
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Función 2
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Función 3
                        </li> <!-- Icono de "x" roja para indicar que no está incluido -->
                    </ul>
                    <button class="mt-6 bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600">Elegir Plan</button>
                </div>

                <!-- Elemento de Precio 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Plan Estándar</h3>
                    <p class="text-2xl font-bold text-blue-500 mt-2">$20/mes</p>
                    <ul class="mt-4 text-gray-600">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Función 1
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Función 2
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Función 3
                        </li>
                    </ul>
                    <button class="mt-6 bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600">Elegir Plan</button>
                </div>

                <!-- Elemento de Precio 3 (Plan Premium) -->
                <div class="relative bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Plan Premium</h3>
                    <p class="text-2xl font-bold text-blue-500 mt-2">$30/mes</p>
                    <ul class="mt-4 text-gray-600">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Función 1
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Función 2
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500 inline-block mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Función 3
                        </li>
                    </ul>
                    <div class="absolute -top-3 -right-5 bg-yellow-500 text-white text-xl py-1 px-4 rounded-full shadow-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                        </svg>
                        Best Seller
                    </div>
                    <div class="flex justify-center mt-6">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded-full hover:bg-blue-600">Elegir Plan</button>
                    </div>
                </div>


            </div>
        </div>
    </section>



@endsection
