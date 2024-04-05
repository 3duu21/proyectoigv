<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Krub&display=swap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>Venta y Transporte de Combustible</title>
    <meta name="description" content="Venta y transporte de combustible">
    <meta name="keywords" content="Venta y transporte de combustible, venta, combustible">
</head>
<body>
    
    <!-- header -->

    <nav class="navegacion">
      <picture>
          <source srcset="img/logoigv.webp" type="image/webp">
          <img class="logo" src="img/logoigv.jpg" alt="inversiones gran via logo">
      </picture>
        
        <div id="back_menu"></div>
        <ul class="ul_nav">
            <li class="li_menu"><a class="enlaces active" href="#inicio">Inicio</a></li>
            <li class="li_menu"><a class="enlaces" href="#nosotros">¿Quienes Somos?</a></li> 
            <li class="li_menu"><a class="enlaces" href="#servicios">Misión</a></li>
            <li class="li_menu"><a class="enlaces" href="#formulario">Contacto</a></li>
        </ul>
        <label for="" id="icono">
        <i class="fas fa-bars"></i>
        </label>
    </nav>
  
  <!-- fin header -->
    
    <!-- inicio -->
<aside
class="overflow-hidden bg-[url('img/portada2.webp')] bg-center bg-no-repeat bg-cover opacity-90" 
>
<div class="p-40 md:p-12 lg:px-16 lg:py-40" id="inicio">
  <div class="max-w-lg text-center sm:text-left">
    <h2 class="text-4xl font-bold text-black sm:text-2xl md:text-5xl md:mt-44"">
      Inversiones Gran Vía
    </h2>

    <p
      class="hidden max-w-md font-bold text-black md:mt-6 md:text-3xl md:leading-relaxed md:block"
    >
      Venta Y Transporte de Combustible
    </p>

    <div class="mt-4 sm:mt-8">
      <a
        class="mt-20 inline-flex items-center px-8 py-3 text-white rounded-full shadow-lg transition ease-in-out delay-150 bg-black hover:-translate-y-1 hover:scale-110 hover:bg-gray-900 duration-300"
        href="#formulario"
      >
      <button
            >
            <span class="font-medium text-3xl"> Contacto </span>
      </button>
      </a>
    </div>
  </div>
</div>
</aside>

<!-- fin inicio -->

<!-- nosotros -->
<aside class="overflow-hidden bg-gray-200 sm:grid sm:grid-cols-2" id="nosotros">
    <div class="p-8 md:p-12 lg:px-16 lg:py-24">
      <div class="max-w-xl mx-auto text-center sm:text-center">
        <h2 class="pt-10 text-4xl font-bold text-gray-900 md:text-6xl">
          ¿Quienes Somos?
        </h2>
  
        <p class="text-xl pb-20 mt-10 text-black-900 md:mt-20 md:text-3xl md:block">
          Somos una empresa familiar dedicada al transporte y venta de combustible
          tanto industrial como domiciliario con mas de 10 años de antiguedad en el rubro,
          y con todos los permisios y certificaciones vigentes (SEC).
        </p>
        <span class="nombre_nosotros">Mauricio López González</span>
      </div>
    </div>
  <picture>
    <source srcset="img/nosotros2.webp" type="image/webp">
    <img alt="inversiones gran via nosotros" src="img/nosotros2.jpg" class="object-cover w-full h-56 sm:h-full h-full"/>
  </picture>
    
  </aside>
  
<!-- fin nosotros -->

<!-- servicios -->
<h2 class="text-6xl mt-10 font-semibold mb-10" id="servicios">Misión</h2>
<div class="container mx-auto grid grid-cols-5 md:flex md:justify-between mb-14 md:gap-14">

    
    <div class="md:max-w-2xl max-w-xl rounded overflow-hidden shadow-2xl col-start-2 col-span-3 mb-10">
      <picture>
        <source srcset="img/transporte.webp" type="image/webp">
        <img class="w-full h-96" src="img/transporte.jpg" alt="inversiones gran via transporte">
      </picture>
        <div class="px-6 py-4">
          <div class="font-bold text-3xl mb-2">Venta y Transporte de Combustible</div>
          <p class="text-gray-700 text-2xl">
            Nos dedicamos a la venta y transporte de combustible, mas espcificamente de petroleo, dentro y fuera de Santiago.
          </p>
        </div>
        
      </div>

      <div class="md:max-w-2xl max-w-xl rounded overflow-hidden shadow-2xl col-start-2 col-span-3 mb-10">
        <picture>
          <source srcset="img/SEC-Logo.webp" type="image/webp">
          <img class="w-full h-96" src="img/SEC-Logo.jpg" alt="inversiones gran via logo sec">
        </picture>
        <div class="px-6 py-4">
          <div class="font-bold text-3xl mb-2">Certificación SEC</div>
          <p class="text-gray-700 text-2xl">
            Nuestros camiones estanque cuentas con la normativa de la Superintendencia de Electricidad y Combustible
          </p>
        </div>
        
      </div>

      <div class="md:max-w-2xl max-w-xl rounded overflow-hidden shadow-2xl col-start-2 col-span-3 mb-10">
        <picture>
          <source srcset="img/nosotros.webp" type="image/webp">
          <img class="w-full h-96" src="img/nosotros.jpg" alt="inversiones gran via nosotros">
        </picture>
        <div class="px-6 py-4">
          <div class="font-bold text-3xl mb-2">Clientes</div>
          <p class="text-gray-700 text-2xl">
            Nos dedicamos a transportar a las Areas de agricultura, industrial y domiciliaria
          </p>
        </div>
        
      </div>
        
      </div>
</div>


<!-- fin servicios -->

<!-- formulario -->

<section class="fondo_form" >
  <form id="formulario">
    <h1 class="titulo_form">Contacto</h1>
      <div class="formulario">
          <div class="informacion">
            <span class="numero">+569 76493508</span>
            <p>mlgcombustible@gmail.com</p>
            <span class="direccion">Santiago, Padre Hurtado</span>
            <a href="https://wa.me/56976493508/?text=Quisiera%20consultar%20sobre%20los%20servicios">
                    <svg
                    class="w-16 h-16 text-green-400 fill-current"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 448 512">
                    <path
                        d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"
                    ></path>
                    </svg>
                  </a>
          </div>
          <div class="contenedor-campos">
              <div class="campo">
                  <input type="text" id="nombre" class="input-text" name="nombre" placeholder="Nombre" required></input>
              </div>  
              <div class="campo">
                  <input type="tel" id="telefono" class="input-text" name="telefono" placeholder="Celular" required></input>
              </div> 
              <div class="campo">
                  <input type="email" id="email" class="input-text" name="email" placeholder="Email" required></input>
              </div> 
              <div class="campo">
                  <textarea id="mensaje" class="input-text" name="mensaje" cols="30" rows="6" placeholder="Mensaje" required></textarea>
              </div>

              <input 
                  type="submit" value="Contactar"
                  class="flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto transition ease-in-out delay-150 bg-black-700 hover:-translate-y-1 hover:scale-110 hover:bg-gray-700 duration-300 cursor-pointer" >
          </div>
      </div>
    </form>
</section>
    
  <!-- fin formulario -->

  <!-- footer -->

<div class="linea"></div>

<footer class="text-center bg-white">
    <div class="px-4 py-12 mx-auto max-w-screen-xl sm:px-6 lg:px-8">
      <div class="max-w-3xl mx-auto space-y-6">
        <div class="flex justify-center gap-6">
          <a
            class="text-blue-500 hover:text-blue-500/75"
            href="/"
            target="_blank"
            rel="noopener noreferrer"
            aria-label=""
          >
              <path
                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
              ></path>
            </svg>
          </a>
  
          <a
            class="text-gray-900 hover:text-gray-900/75"
            href="/"
            target="_blank"
            rel="noopener noreferrer"
            aria-label=""
          >
              <path
                fill-rule="evenodd"
                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </a>
          <a
            class="text-pink-600 hover:text-pink-600/75"
            href="/dribbble"
            target="_blank"
            rel="noopener noreferrer"
            aria-label="Dribbble"
          >
              <path
                fill-rule="evenodd"
                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </a>
        </div>
        <span class="block text-black font-bold mt-4"> +569 76493508 </span>
        <nav class="p-6 border-4 border-gray-900 rounded-3xl">
          <ul class="flex flex-wrap justify-center text-xl font-bold gap-6">
            <li>
              <a
                class="text-gray-900 transition hover:text-gray-900/75"
                href="/"
                target="_blank"
                rel="noopener noreferrer"
              >
                Inicio
              </a>
            </li>
  
            <li>
              <a
                class="text-gray-900 transition hover:text-gray-900/75"
                href="/"
                target="_blank"
                rel="noopener noreferrer"
              >
                Nosotros
              </a>
            </li>
  
            <li>
              <a
                class="text-gray-900 transition hover:text-gray-900/75"
                href="/"
                target="_blank"
                rel="noopener noreferrer"
              >
                Servicios
              </a>
            </li>
  
            <li>
              <a
                class="text-gray-900 transition hover:text-gray-900/75"
                href="/"
                target="_blank"
                rel="noopener noreferrer"
              >
                Contacto
              </a>
            </li>
            <li>
              <a
                class="text-gray-900 transition hover:text-gray-900/75"
                href="mailto:e5470843@gmail.com"
                target="_blank"
                rel="noopener noreferrer"
              >
                Correo
              </a>
            </li>
          </ul>
        </nav>
  
        <p class="max-w-lg mx-auto text-2xl text-gray-500">
          <span class="block mt-4"> &copy; 2022 Eduardo Zapata, Diego López FreeLancer </span>
        </p>
      </div>
    </div>
  </footer>

  <div class="go-top">
    <div class="go-top-button">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </div>
  </div>
  
  <script src="js/app.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</body>
</html>