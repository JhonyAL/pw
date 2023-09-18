<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section class="hidden bg-gray-400 dark:bg-gray-900 w-2/6 absolute" id="modal" style="height: 400px">
      <div class="flex flex-col items-center justify-center px-5">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
              Adicionar Contato
            </h1>
            <form class="space-y-4 md:space-y-6" action="#">
              <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome: </label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="João..." required="">
              </div>
              <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone: </label>
                <input type="password" name="password" id="password" placeholder="(99) 999999999" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>
              <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" onclick="openModal()">
                <span>Add</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>


  <div class="flex justify-center items-center flex-col" style="width: 100%; height: 100%"  >
    <button type="button" onclick="openModal()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    <i class="fa fa-plus-square text-6xl"></i>  
    </button>
    <ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700">
      <li class="pb-3 sm:pb-4">
        <div class="flex items-center space-x-4">
          <div class="flex-shrink-0">
            <img class="w-8 h-8 rounded-full" src="https://static.mundoeducacao.uol.com.br/mundoeducacao/2023/01/jair-bolsonaro-discursando-em-um-microfone.jpg" alt="Neil image">
          </div>
          <div class="flex-1 min-w-0">
            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
              Neil Sims
            </p>
            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
              email@flowbite.com
            </p>
          </div>
          <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
            $320
          </div>
        </div>
      </li>
    </ul>
  </div>


  <script>
    let modal = document.querySelector("#modal")
    const openModal = () => {
      modal.classList.remove("hidden")
    }
  </script>
</body>

</html>