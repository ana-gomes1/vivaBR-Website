<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
    <link rel="stylesheet" href="estilos/darkmode.css">

    <style>
    :root{
        --color-primary: #245687;
        --color-secondary: #5485B8;
        --color-terciary: #3179BE;
        --color-logout: #286EB8;
        --color-menu: #4B6884;
        --color-terciary: #3179BE;
        --color-icon-del: #BB271A;
        --color-icon-view: #D9A404;

        --font-primary: "Inter", sans-serif;
        --font-secondary: "Poppins", sans-serif;

        --border-menu: 1px #AFC2D3 solid;

        --transition: 0.2s all;
      }

        .dark-mode:root{
            --bg-1: #333f4b;
            --body-bg: #232c35;
            --fnt-color: #ffffff;
            --fnt-color2: #4094e8;
            --icon: brightness(150%);
        }

        @layer base {
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Inter", sans-serif; 
            }

        }
        body{
            background: #E0E6EB;
        }

        table{
            text-align: left;
        }

        td, th{
            padding: 8px;
            border-top: 2px #EFEFEF solid;
            border-left: 2px #EFEFEF solid;
        }

        button{
            cursor: pointer;
        }

        ul li:hover{
                background: var(--color-terciary);
                cursor: pointer;
                
                span{
                    color: white;
                }

                svg{
                    fill: white;
                }
        }

        ul li{
            transition: var(--transition);
        }

        .selecionado{
            background: var(--color-terciary) !important;

            span{
               color: white !important; 
            }

            svg{
                fill: white !important;
            }
        }

        .secao-ativa{
            display: flex;
        }
        
    </style>


    <title>vivaBR - Sistemas</title>
</head>

<body>
    
    <div>
        <header>
            <nav class="w-full h-18 bg-(--color-primary) flex justify-between">
                <div class="h-[100%] flex items-center ml-5">
                    <div class="h-[80%]">
                        <img src="imagens/logo/logo.png" alt="" class="h-[100%]">
                    </div>
                    <div class="text-white font-semibold ml-3 text-xl">
                        SISTEMAS
                    </div>
               </div>

               <div class="flex items-center mr-5">
                    <div class="flex items-center mr-15">
                        <div class="rounded-full h-10 w-10 overflow-hidden mr-2">
                            <img src="https://media.istockphoto.com/id/1399395748/pt/foto/cheerful-business-woman-with-glasses-posing-with-her-hands-under-her-face-showing-her-smile-in.jpg?s=612x612&w=0&k=20&c=V2hdZm-cPTPXYT4U7VEsXr9M4CR3QqxOCMY_2qqJQAI=" class="h-[100%] object-cover" alt="">
                        </div>
                            <el-dropdown class="inline-block">
                                <button class="inline-flex w-full justify-center gap-x-1.5 px-3 py-2 text-sm font-semibold text-white hover:opacity-60">
                                    Ana Vitória
                                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="-mr-1 size-5 text-white">
                                    <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                </button>

                                <el-menu anchor="bottom end" popover class="w-56 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg outline-1 outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                                    <div class="py-1">
                                        <span class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">Ana Vitória</span>
                                        <a href="edit_profile.php" class="items-center flex block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden">
                                            <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="var(--color-primary)"><path d="M180-180h44l472-471-44-44-472 471v44Zm-60 60v-128l575-574q8-8 19-12.5t23-4.5q11 0 22 4.5t20 12.5l44 44q9 9 13 20t4 22q0 11-4.5 22.5T823-694L248-120H120Zm659-617-41-41 41 41Zm-105 64-22-22 44 44-22-22Z"/></svg>
                                            <span class="text-(--color-primary)">Editar dados pessoais</span></a>
                                    </div>
                                    <div class="py-1">
                                        <a href="#" class="items-center block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:text-gray-900 focus:outline-hidden flex">
                                        <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="var(--color-icon-del)"><path d="M180-120q-24 0-42-18t-18-42v-600q0-24 18-42t42-18h299v60H180v600h299v60H180Zm486-185-43-43 102-102H360v-60h363L621-612l43-43 176 176-174 174Z"/></svg>
                                        <span class="text-(--color-icon-del)">Sair</span></a>
                                    </div>
            
                                </el-menu>
                            </el-dropdown>


                    </div>

                        <!--------Botão do Dark mode--------->
                    <div class="darkmode">
                        <input type="checkbox" class="checkbox" id="chk">
                        <label class="label" for="chk">
                            <i class="fa-solid fa-moon"></i>
                            <i class="fa-solid fa-sun"></i>
                            <div class="ball"></div>
                        </label>
                    </div>
               </div>



            </nav>

        </header>

        <main class="flex" id="secao">

            <nav class="w-80 h-[100vh] bg-white">
                <div>
                    <ul class>
                        <li class="pt-2.5 pb-2.5 flex items-center border-b-[1px] border-b-[#DDE4EA] menu-item selecionado" id="menu-clientes" title="#secao-clientes">
                        
                                <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#4B6884"><path d="M480-481q-66 0-108-42t-42-108q0-66 42-108t108-42q66 0 108 42t42 108q0 66-42 108t-108 42ZM160-160v-94q0-38 19-65t49-41q67-30 128.5-45T480-420q62 0 123 15.5t127.92 44.69q31.3 14.13 50.19 40.97Q800-292 800-254v94H160Zm60-60h520v-34q0-16-9.5-30.5T707-306q-64-31-117-42.5T480-360q-57 0-111 11.5T252-306q-14 7-23 21.5t-9 30.5v34Zm260-321q39 0 64.5-25.5T570-631q0-39-25.5-64.5T480-721q-39 0-64.5 25.5T390-631q0 39 25.5 64.5T480-541Zm0-90Zm0 411Z"/></svg>
                                <span class="ml-2 text-(--color-menu) font-medium text-xl">Clientes</span>

                        </li>

                        <li class="pt-2.5 pb-2.5 flex items-center border-b-[1px] border-b-[#DDE4EA] menu-item" id="menu-reserva" title="#secao-reservas">  
                                <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#4B6884"><path d="m348-325 368-101q17-5 25-16t3-28q-5-17-18-23.5t-28.8-2.37L594-469 428-631l-52 12 103 181-111 31-52-43-29 10 61 115Zm472 165H140q-24.75 0-42.37-17.63Q80-195.25 80-220v-153q37-8 61.5-37.5T166-480q0-40-24.5-70T80-587v-153q0-24.75 17.63-42.38Q115.25-800 140-800h680q24.75 0 42.38 17.62Q880-764.75 880-740v520q0 24.75-17.62 42.37Q844.75-160 820-160Zm0-60v-520H140v109q39 26 62.5 65t23.5 86q0 47-23.5 86T140-329v109h680ZM480-480Z"/></svg>                            
                                <span class="ml-2 text-(--color-menu) font-medium text-xl">Reservas</span>
                        </li>

                        <li class="pt-2.5 pb-2.5 flex items-center border-b-[1px] border-b-[#DDE4EA] menu-item" id="menu-destinos" title="#secao-destinos">
    
                                <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#4B6884"><path d="m393-119-95-179-180-96 59-59 148 27 122-121-327-139 72-72 396 69 133-133q21-21 50.5-21t50.5 21q21 21 21 50.5T822-721L689-588l69 396-72 72-139-327-121 122 26 147-59 59Z"/></svg>                            
                                <span class="ml-2 text-(--color-menu) font-medium text-xl">Destinos</span>
      
                        </li>

                        <li class="pt-2.5 pb-2.5 flex items-center border-b-[1px] border-b-[#DDE4EA] menu-item" id="menu-cupons" title="#secao-cupons">
                              
                                <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 -960 960 960" width="32px" fill="#4B6884"><path d="M480-283q12 0 21-9t9-21q0-12-9-21t-21-9q-12 0-21 9t-9 21q0 12 9 21t21 9Zm0-167q12 0 21-9t9-21q0-12-9-21t-21-9q-12 0-21 9t-9 21q0 12 9 21t21 9Zm0-167q12 0 21-9t9-21q0-12-9-21t-21-9q-12 0-21 9t-9 21q0 12 9 21t21 9Zm340 457H140q-24.75 0-42.37-17.63Q80-195.25 80-220v-153q37-8 61.5-37.5T166-480q0-40-24.5-70T80-587v-153q0-24.75 17.63-42.38Q115.25-800 140-800h680q24.75 0 42.38 17.62Q880-764.75 880-740v153q-37 7-61.5 37T794-480q0 40 24.5 69.5T880-373v153q0 24.75-17.62 42.37Q844.75-160 820-160Zm0-60v-109q-38-26-62-65t-24-86q0-47 24-86t62-65v-109H140v109q39 26 62.5 65t23.5 86q0 47-23.5 86T140-329v109h680ZM480-480Z"/></svg>                            
                                <span class="ml-2 text-(--color-menu) font-medium text-xl">Cupons</span>

                        </li>

                        <li class="pt-2.5 pb-2.5 flex items-center">
                            <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#286EB8"><path d="M180-120q-24 0-42-18t-18-42v-600q0-24 18-42t42-18h299v60H180v600h299v60H180Zm486-185-43-43 102-102H360v-60h363L621-612l43-43 176 176-174 174Z"/></svg>                            
                            <span class="ml-2 text-(--color-logout) font-bold text-xl">Sair</span>
                        </li>
    
                    </ul>
    
                </div>
            </nav>

            <div class="w-full">

                <section class="w-full items-center mt-12 flex-col flex-wrap hidden secao-ativa" id="secao-clientes">
                        <div class="bg-white w-[80%] h-55 shadow-lg p-8">
                            <div class="">
                                <h1 class="text-3xl text-(--color-terciary) font-semibold">CLIENTES</h1>
                            </div>
        
                            <div class="mt-10 flex justify-between flex-wrap">
                                <div class="font-light flex">
                                    <input class="shadow-md w-80 h-9 bg-[#FBFBFB] p-4" type="text" name="pesquisa" placeholder="Pesquisar por...">
                                    <button class="bg-(--color-terciary) w-35 h-9 shadow-md flex items-center justify-center cursor-pointer hover:opacity-60 transition-(--transition)">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF"><path d="M796-121 533-384q-30 26-69.96 40.5Q423.08-329 378-329q-108.16 0-183.08-75Q120-479 120-585t75-181q75-75 181.5-75t181 75Q632-691 632-584.85 632-542 618-502q-14 40-42 75l264 262-44 44ZM377-389q81.25 0 138.13-57.5Q572-504 572-585t-56.87-138.5Q458.25-781 377-781q-82.08 0-139.54 57.5Q180-666 180-585t57.46 138.5Q294.92-389 377-389Z"/></svg>
                                        <span class="text-white font-medium text-sm ml-1">PROCURAR</span>
                                    </button>
                                </div>
        
                                <div>
                                    <button class="bg-[#5390D2] w-55 h-9 shadow-md flex items-center justify-center cursor-pointer hover:opacity-60 transition-(--transition)">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF"><path d="M320-460h320v-60H320v60Zm0 120h320v-60H320v60Zm0 120h200v-60H320v60ZM220-80q-24 0-42-18t-18-42v-680q0-24 18-42t42-18h361l219 219v521q0 24-18 42t-42 18H220Zm331-554v-186H220v680h520v-494H551ZM220-820v186-186 680-680Z"/></svg>                                    
                                        <span class="text-white font-medium text-sm ml-1">EMITIR RELATÓRIO PDF</span>
                                    </button>
                                </div>
        
                                <div class="flex">
                                    <button class="bg-[#245687] w-20 h-9 shadow-md flex items-center justify-center">
                                        <span class="text-white font-medium text-sm ml-1">TOTAL</span>
        
                                    </button>
                                    <div class="bg-[#C8D9EB] w-40 h-9 shadow-md flex items-center p-2">
                                        1 Cliente(s)
                                    </div>
                                </div>
                            </div>
        
                        </div>
        
                        <div class="m-20 bg-white w-[80%] h-auto shadow-lg p-8">
                            <div class="">
                                <h1 class="text-3xl text-(--color-terciary) font-semibold">LISTAGEM DE CLIENTES</h1>
                            </div>
        
                            <div class="mt-5 border-[1px] border-[#EFEFEF] rounded-xl p-3">
                                <table class="w-full">
                                    <thead>
                                        <tr>
                                            <th>Nº</th>
                                            <th>Nome</th>
                                            <th>CPF</th>
                                            <th>CEP</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Ana Vitória</td>
                                            <td>999.999.999-99</td>
                                            <td>99999-999</td>
                                            <td>anavitoria@gmail.com</td>
                                            <td>(99) 99999-9999</td>
                                            <td class="flex justify-around">
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="var(--color-icon-view)"><path d="M223-40H100q-24 0-42-18t-18-42v-123h60v123h123v60Zm514 0v-60h123v-123h60v123q0 24-18 42t-42 18H737ZM479.17-225Q360-225 264-293.5 168-362 119-480q49-119 145-187.5T479.5-736q119.5 0 216 68.5T840-480q-48 118-144.83 186.5-96.83 68.5-216 68.5Zm-.17-60q93 0 173-52.5T774-480q-42-90-122-143t-173-53q-93 0-172.5 53T185-480q42 90 121.5 142.5T479-285Zm1.22-63Q535-348 574-386.72t39-93.5Q613-535 574.07-574t-94-39q-55.07 0-93.57 38.93-38.5 38.93-38.5 94t38.72 93.57q38.72 38.5 93.5 38.5Zm-.22-60q-30 0-51-21t-21-51q0-30 21-51.5t51-21.5q30 0 51.5 21.29T553-480q0 30-21.29 51T480-408ZM40-737v-123q0-24 18-42t42-18h123v60H100v123H40Zm820 0v-123H737v-60h123q24 0 42 18t18 42v123h-60ZM480-481Z"/></svg>
                                                </button>
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="VAR(--color-terciary)"><path d="M180-180h44l472-471-44-44-472 471v44Zm-60 60v-128l575-574q8-8 19-12.5t23-4.5q11 0 22 4.5t20 12.5l44 44q9 9 13 20t4 22q0 11-4.5 22.5T823-694L248-120H120Zm659-617-41-41 41 41Zm-105 64-22-22 44 44-22-22Z"/></svg>
                                                </button>
                                                <button>
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="var(--color-icon-del)"><path d="M261-120q-24.75 0-42.37-17.63Q201-155.25 201-180v-570h-41v-60h188v-30h264v30h188v60h-41v570q0 24-18 42t-42 18H261Zm438-630H261v570h438v-570ZM367-266h60v-399h-60v399Zm166 0h60v-399h-60v399ZM261-750v570-570Z"/></svg>
                                                </button>
                                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                    </table>
                            </div>
        
                        </div>
                  
                        
                </section>
                
                <section class="w-full items-center mt-12 flex-col flex-wrap hidden" id="secao-reservas">
                    
                    <div class="bg-white w-[80%] h-55 shadow-lg p-8">
                        <div class="">
                            <h1 class="text-3xl text-(--color-terciary) font-semibold">RESERVAS</h1>
                        </div>
                        
                        <div class="mt-10 flex justify-between flex-wrap">
                            <div class="font-light flex">
                                <input class="shadow-md w-80 h-9 bg-[#FBFBFB] p-4" type="text" name="pesquisa" placeholder="Pesquisar por...">
                                <button class="bg-(--color-terciary) w-35 h-9 shadow-md flex items-center justify-center cursor-pointer hover:opacity-60 transition-(--transition)">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#FFFFFF"><path d="M796-121 533-384q-30 26-69.96 40.5Q423.08-329 378-329q-108.16 0-183.08-75Q120-479 120-585t75-181q75-75 181.5-75t181 75Q632-691 632-584.85 632-542 618-502q-14 40-42 75l264 262-44 44ZM377-389q81.25 0 138.13-57.5Q572-504 572-585t-56.87-138.5Q458.25-781 377-781q-82.08 0-139.54 57.5Q180-666 180-585t57.46 138.5Q294.92-389 377-389Z"/></svg>
                                    <span class="text-white font-medium text-sm ml-1">PROCURAR</span>
                                </button>
                            </div>
                            
                            <div>
                                <button class="bg-[#5390D2] w-55 h-9 shadow-md flex items-center justify-center cursor-pointer hover:opacity-60 transition-(--transition)">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="#FFFFFF"><path d="M320-460h320v-60H320v60Zm0 120h320v-60H320v60Zm0 120h200v-60H320v60ZM220-80q-24 0-42-18t-18-42v-680q0-24 18-42t42-18h361l219 219v521q0 24-18 42t-42 18H220Zm331-554v-186H220v680h520v-494H551ZM220-820v186-186 680-680Z"/></svg>                                    
                                    <span class="text-white font-medium text-sm ml-1">EMITIR RELATÓRIO PDF</span>
                                </button>
                            </div>
                            
                            <div class="flex">
                                <button class="bg-[#245687] w-20 h-9 shadow-md flex items-center justify-center">
                                    <span class="text-white font-medium text-sm ml-1">TOTAL</span>
                                    
                                </button>
                                <div class="bg-[#C8D9EB] w-40 h-9 shadow-md flex items-center p-2">
                                    1 Reserva(s)
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>
                
                <section class="hidden w-full" id="secao-destinos">
                    
                </section>
                
                <section class="hidden w-full" id="secao-cupons">
                    
                </section>
            </div>
            
            
        </main>
    </div>



</body>

<script src="js/home_adm.js"></script>

</html>