<!doctype html>
<html>


<?php 

?>
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
            <form class="space-y-4 md:space-y-6" method="post">
              <div>
                <label for="textNome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome: </label>
                <input type="text" name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="João..." required="">
              </div>
              <div>
                <label for="tel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone: </label>
                <input type="text" name="tel" id="tel" placeholder="(99) 999999999" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>
              <div>
                <label for="img" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL da Imagem: </label>
                <input type="text" name="img" id="img" placeholder="(99) 999999999" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>
              <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" type="submit">
                <span>Add</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="hidden bg-gray-400 dark:bg-gray-900 w-2/6 absolute" id="alterar" style="height: 400px">
      <div class="flex flex-col items-center justify-center px-5">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
              Alterar Contato
            </h1>
            <form class="space-y-4 md:space-y-6" method="post">
              <div>
                <label for="alterarNome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome: </label>
                <input type="text" name="alterarNome" id="alterarNome" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="João..." required="">
              </div>
              <div>
                <label for="alterarTel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Telefone: </label>
                <input type="text" name="alterarTel" id="alterarTel" placeholder="(99) 999999999" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>
              <div>
                <label for="alterarImg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">URL da Imagem: </label>
                <input type="text" name="alterarImg" id="alterarImg" placeholder="(99) 999999999" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>
              <input type="text" name="idAlterar" id="idAlterar" hidden>
              <button class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center" type="submit">
                <span>Alterar</span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <?php
        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
            $tel = $_POST['tel'];
            $img = $_POST['img'];
            $cx = new PDO("mysql:host=localhost;dbname=pw", 'root', '');
            $cmd = 'INSERT INTO `contato`(`nome`, `tel`, `img`) VALUES (:nome, :tel, :img)';
            $declarar = $cx->prepare($cmd);
            $declarar->bindValue(':nome',$nome);
            $declarar->bindValue(':tel',$tel);
            $declarar->bindValue(':img',$img);
            $declarar->execute();
            $_POST['nome'] = '';
            $_POST['tel'] = null;
            $_POST['img'] = null;
        }
    ?>
    
    <?php
        if(isset($_POST['alterarNome'])){
            $nome = $_POST['alterarNome'];
            $tel = $_POST['alterarTel'];
            $img = $_POST['alterarImg'];
            $id = $_POST['idAlterar'];
            $cx = new PDO("mysql:host=localhost;dbname=pw", 'root', '');
            $cmd = 'UPDATE `contato` SET `nome`=:nome, `tel`=:tel, `img` = :img WHERE `id` = :id';
            $declarar = $cx->prepare($cmd);
            $declarar->bindValue(':nome',$nome);
            $declarar->bindValue(':tel',$tel);
            $declarar->bindValue(':img',$img);
            $declarar->bindValue(':id',$id);
            $declarar->execute();
        }
    ?>

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
            <button type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
              <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
              </svg>
            </button>
          </div>
        </div>
      </li>
      <?php
        // require_once './DB.php';
        require_once './class/Contato.php';
        // $cx = (new BaseDeDados())->getConexao();
        $cx = new PDO("mysql:host=localhost;dbname=pw", 'root', '');
        $cmd = "SELECT * FROM contato";
        $declaracao = $cx->prepare($cmd);
        $declaracao->execute();
        if($declaracao->rowCount() > 0){
            $declaracao->setFetchMode(PDO::FETCH_CLASS, 'Contato');
            $imagens = $declaracao->fetchAll();
            
            foreach ($imagens as $imagem) {
                echo '
                <li class="pb-3 sm:pb-4">
                  <div class="flex items-center space-x-4">
                    <div class="flex-shrink-0">
                      <img class="w-8 h-8 rounded-full" src="'.$imagem->img.'" id="img'.$imagem->id.'">
                    </div>
                    <div class="flex-1 min-w-0">
                      <p class="text-sm font-medium text-gray-900 truncate dark:text-white" id="nome'.$imagem->id.'">
                        '.$imagem->nome.'
                      </p>
                      <p class="text-sm text-gray-500 truncate dark:text-gray-400" id="tel'.$imagem->id.'">
                        '.$imagem->tel.'
                      </p>
                    </div>
                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                      <button onclick="openAlterar('.$imagem->id.')" type="button" class="text-blue-700 border border-blue-700 hover:bg-blue-700 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:focus:ring-blue-800 dark:hover:bg-blue-500">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                          <path d="M3 7H1a1 1 0 0 0-1 1v8a2 2 0 0 0 4 0V8a1 1 0 0 0-1-1Zm12.954 0H12l1.558-4.5a1.778 1.778 0 0 0-3.331-1.06A24.859 24.859 0 0 1 6 6.8v9.586h.114C8.223 16.969 11.015 18 13.6 18c1.4 0 1.592-.526 1.88-1.317l2.354-7A2 2 0 0 0 15.954 7Z"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                </li>
                ';
            }
        }
      ?>
    </ul>
  </div>


  <script>
    var contatos;

    let modal = document.querySelector("#modal")
    const openModal = () => {
      modal.classList.remove("hidden")
    }

    let alterar = document.querySelector("#alterar")
    const openAlterar = (id) => {
      let alterarNome = document.querySelector("#alterarNome")
      let alterarTel = document.querySelector("#alterarTel")
      let alterarImg = document.querySelector("#alterarImg")
      let idAlterar = document.querySelector("#idAlterar")
      // alterarImg.InnerHTML = 
      alterarNome.value = document.querySelector(`#nome${id}`).innerText
      alterarTel.value = document.querySelector(`#tel${id}`).innerText
      alterarImg.value = document.querySelector(`#img${id}`).src
      idAlterar.value = id
      console.log(document.querySelector(`#nome${id}`).innerText)
      alterar.classList.remove("hidden")
    }
  </script>
</body>

</html>