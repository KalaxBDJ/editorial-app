@extends('template')

@section('content')
    {{--Card--}}
    <div class="flex justify-center items-center p-4 mt-16 relative overflow-hidden">
        <!-- Imagen al lado derecho con opacidad al 50% -->
        <img src="{{ asset('build/assets/images/man-star.png')  }}" alt="man-star" class="absolute -right-20 -bottom-20 opacity-20 md:h-auto md:w-auto" />
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


    <hr class="border-t border-gray-300 opacity-10">

    {{--Seccion 2--}}
    <div class="flex flex-col md:flex-row items-center">
        <img src="{{ asset("build/assets/images/3d-guy-question.png") }}" class="flex-shrink-0 h-auto w-1/4 md:w-1/3 mt-4 md:mt-0"
             alt="Image">
        <div class="flex-grow">
            <h1 class="text-4xl text-blue-500 font-bold text-center">
                ¿Cómo te podemos ayudar?
            </h1>

            <p class="text-xl text-gray-300 pt-5 mx-5">
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





    <hr class="border-t border-gray-300 mt-4 opacity-10">

    {{--Pricing--}}
    @include("pricing")

@endsection
