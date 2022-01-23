<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Dreams</title>
</head>
<body>

<div class="bg-white1 0 h-screen">

   
     <x-nav-bar></x-nav-bar>

    <div class="h-screen grid grid-cols-2">


        <div class="bg-white border-red-800 flex-col-2 px-2 sm:px-4 py-2.5 dark:bg-gray-800 mr-11 w-2/5 border-t-4 grid-cols-2">


            <div class=" text-gray-300 text-2xl font-fugaz-one px-5 py-5">ADMINISTRADOR</div>

            <ul>
                @can('profile.dates')
                <li class="text-gray-300 hover:text-sky-800"><a href="{{ 'dates' }}">- Mis Datos</a></li>
                @endcan
            
                <li class="text-gray-300 hover:text-sky-800"><a href="{{ 'profile.users' }}">- Usuarios</a></li>
               
            </ul>


        </div>


        <div class="bg-white flex-col-2 py-5 px-5 rounded-lg font-alatsi shadow-lg shadow-cyan-500/50 my-5 mx-5" id="app">
            <div>
                  <span class="self-center font-semibold whitespace-nowrap text-sky-800 text-ms font-fugaz-one">Mi cuenta</span>
        
            </div>
        
            <div class=" text-black text-6xl font-fugaz-one px-5 py-5 text-center">Bienvenido
            
            </div>
            <div class="grid grid-cols-2">
        
                    <div class="px-40">
                <x-user-card></x-user-card>
            </div>
        
                <div class="bg-gray-100 flex-col-2 py-5 px-5 rounded-lg font-alatsi shadow-lg shadow-cyan-500/50 my-5 mx-5"">
        
                    <div class=" text-sky-800 text-4xl font-fugaz-one px-5 py-5 text-center">
                        Mis datos
                    </div>
        
                    <div class="px-2 py-2 text-sky-800 text-4xl font-fugaz-one">
                        <div>
                            Name:
                        </div>
                        <div>
                            Email:
                        </div>
                        <div>
                            contraseña:
                        </div>
                        <div>
                            Rol:
                        </div>
                    </div>
                    
                </div>
        
            </div>


    

            

        








    </div>  
</div>

<div>
    @yield('content')
</div>

  

</div>
</body>
</html>










        
       

