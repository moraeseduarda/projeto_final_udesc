<?php
session_start();
if(!$_SESSION['login']) {
  session_destroy();
  header('Location: formLogin.php'); 
}
?>
<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portal | Rocket news</title>
        <link href="css/index.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="./img/favicon.png">
        <script src="https://kit.fontawesome.com/90784f6646.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
      <!-- Modal Carousel -->
      <!-- 01 -->
      <div class="modal fade" id="scrollableBackdrop" data-bs-backdrop="scrollable" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scrollableBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="scrollableBackdropLabel">Destaques</h1>
              <i class="fa-solid fa-rocket px-2"></i>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <a class="bt-modal text-decoration-none"><img src="img/carousel-1.jpg" class="d-block w-100" alt="..."></a>
              <h5 class="text-center p-2">Nasa anuncia que humanos caminharão em 2025 no polo inexplorado da Lua</h5>
              <p class="text-center">Mais de 50 anos após a Apollo 17, astronautas voltarão ao satélite a bordo da cápsula Orion, podendo explorar finalmente a região do sul lunar na missão Artemis 3</p>
              <p class="text-center"><strong>Por Redação Galileu - 22/01/2023</strong></p>
              <p>Após o sucesso da missão Artemis 1, lançada em novembro de 2022 em direção à órbita lunar, a Nasa anunciou em 13 de janeiro detalhes da Artemis 3, que levará humanos à Lua mais de 50 anos depois da última vez que a humanidade esteve no satélite, na Apollo 17, em 1972.</p>
              <p>A agência espacial norte-americana confirmou que a Artemis 3 está planejada para 2025, quando uma tripulação será enviada até o polo sul lunar — nunca antes explorado por uma missão humana. Esta aventura ocorrerá depois da Artemis 2, que provará que os sistemas críticos da cápsula Orion estão prontos para sustentar astronautas em missões de longa duração.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- 02 -->
      <div class="modal fade" id="scrollableBackdrop2" data-bs-backdrop="scrollable" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scrollableBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="scrollableBackdropLabel">Destaques</h1>
              <i class="fa-solid fa-rocket px-2"></i>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <a class="bt-modal text-decoration-none"><img src="img/carousel-2.jpg" class="d-block w-100" alt="..."></a>
              <h5 class="text-center p-2">Astrônomos medem massa da Via Láctea — e descobrem matéria "faltando"</h5>
              <p class="text-center">Mais de 50 anos após a Apollo 17, astronautas voltarão ao satélite a bordo da cápsula Orion, podendo explorar finalmente a região do sul lunar na missão Artemis 3</p>
              <p class="text-center"><strong>Por Redação Galileu - 21/01/2023</strong></p>
              <p>Ao medirem a massa da nossa galáxia, astrônomos notaram que a Via Láctea pode ser mais leve do que o esperado. E mais: eles descobriram matéria bariônica “faltando” — ou seja, havia menos do que se imaginava da matéria que forma os átomos, nós, outros seres vivos, estrelas e planetas.</p>
              <p>A descoberta publicada em pré-print no site arxiv.org foi apresentada no último dia 9 de janeiro por Vikram Ravi, professor assistente de astronomia do Instituto de Tecnologia da Califórnia (Caltech), na 241ª reunião da Sociedade Astrômica Americana, em Seattle, nos Estados Unidos.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>
      <!-- 03 -->
      <div class="modal fade" id="scrollableBackdrop3" data-bs-backdrop="scrollable" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scrollableBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="scrollableBackdropLabel">Destaques</h1>
              <i class="fa-solid fa-rocket px-2"></i>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <a class="bt-modal text-decoration-none"><img src="img/carousel-3.jpg" class="d-block w-100" alt="..."></a>
              <h5 class="text-center p-2">Paradoxo sobre bolhas descrito por Leonardo da Vinci é finalmente resolvido</h5>
              <p class="text-center">Estudiosos utilizaram tecnologia e matemática para explicar por que bolhas de ar emergem da água em zigue-zague</p>
              <p class="text-center"><strong>Por Redação Galileu - 19/01/2023</strong></p>
              <p>Os pesquisadores Jens G. Eggers, da Universidade de Bristol, na Inglaterra, e Miguel Ángel Herrada, da Universidade de Sevilha, na Espanha, conseguiram dar uma explicação para uma simples (mas paradoxal) observação documentada pelo pintor e inventor Leonardo da Vinci. Durante o Renascimento, o polímata descreveu o movimento instável de bolhas de ar se elevando na água. Essas bolhas emergem por movimentos em zigue-zague ou em espiral ao invés de subirem em linha reta até a superfície da água. Acontece que, até agora, não havia uma explicação física para esse comportamento.</p>
              <p>Publicado no periódico PNAS, o estudo estabelece, de forma inédita, uma descrição quantitativa do fenômeno para explicar o movimento periódico da bolha emergindo do fundo da água. Para isso, eles desenvolveram uma técnica de discretização numérica para qualificar a precisão da interface entre ar e água e entender melhor o domínio físico da bolha.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>
        <!-- Modal com detalhes das notícias listadas -->

      <div class="modal fade" id="noticia-detalhe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header"> 
                  <h1 class="modal-title fs-5" id="scrollableBackdropLabel">Notícias</h1>
                  <i class="fa-solid fa-rocket px-2"></i>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <a class="bt-modal text-decoration-none" id="noticia-imagem"><img src="" class="d-block w-100" alt="..."></a>
                  <h5 class="text-center p-2"></h5>
                  <p class="text-center"></p>
                  <p class="text-center"><strong></strong></p>
                  <p></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
      <!-- Principal -->
      <div class="container-fluid">
        <!-- Header, media links, navbar -->
        <div class="row mt-4 mb-4">
          <div class="d-flex  align-items-center">
            <div class="col-lg-8">
              <a href="#" class="btn btn-floating btn-lg text-dark">
                <h1>
                  <i class="fa-solid fa-rocket"></i>
                  <span class="logo">Rocket news</span>
                </h1>
              </a>
            </div>
            <section class="col-lg-4 d-flex justify-content-end"> 
              <div class="medialink-1">
                <a href="https://www.instagram.com/moraess.dudaa/" target="_blank" class="btn btn-primary">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="https://github.com/moraeseduarda" target="_blank" class="btn btn-danger">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/moraess-dudaa/" target="_blank" class="btn btn-success">
                  <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="mailto:eduardamorads@gmail.com" target="_blank" class="btn btn-warning">
                  <i class="fa-regular fa-envelope"></i>
                </a>
                <a href="logout.php" class="btn btn-floating btn-lg text-dark px-2">
                  <i class="fa-solid fa-arrow-right-from-bracket"></i>
                </a>
              </div>
            </section>
          </div>
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-md bg-light">
              <section class="container-fluid">
                  <div class="medialink-2">
                    <a href="https://www.instagram.com/moraess.dudaa/" target="_blank" class="btn btn-primary">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://github.com/moraeseduarda" target="_blank" class="btn btn-danger">
                        <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/moraess-dudaa/" target="_blank" class="btn btn-success">
                      <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="mailto:eduardamorads@gmail.com" target="_blank" class="btn btn-warning">
                      <i class="fa-regular fa-envelope"></i>
                    </a>
                    <a href="logout.php" class="btn btn-floating btn-lg text-dark px-2">
                      <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </a>
                  </div>
                  <a class="navbar-brand" href="#"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Notícias
                            </a>
                            <!-- Disabled -->
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item disabled" href="#">Ciência</a></li>
                              <li><a class="dropdown-item disabled" href="#">Arqueologia</a></li>
                              <li><a class="dropdown-item disabled" href="#">História</a></li>
                            </ul>
                          </li>
                          <li class="nav-item"> 
                            <a class="nav-link" href="./formCadastroNoticias.php">
                              Cadastrar novas notícias
                            </a>
                          </li>
                        </ul>
                    <div>
                      <!-- Habilitar search é um projeto futuro -->
                      <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                          <button class="btn" type="submit">
                            <i class="fa fa-search"></i>
                          </button> 
                      </form>
                    </div>
                  </div>
              </section>
            </nav>
          </div>
        </div>
        <!-- Carousel, accordion -->
        <div class="row mt-4 mb-4">
          <div class="col-lg-8">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#scrollableBackdrop"><img src="img/carousel-1.jpg" class="d-block w-100" alt="..."></a>
                  <div class="carousel-caption">
                    <a href="#" style="text-decoration: none;" class="text-light" data-bs-toggle="modal" data-bs-target="#scrollableBackdrop"><h5>Nasa anuncia que humanos caminharão em 2025 no polo inexplorado da Lua</h5></a>
                    <a href="#" style="text-decoration: none;" class="text-light" data-bs-toggle="modal" data-bs-target="#scrollableBackdrop"><p>Mais de 50 anos após a Apollo 17, astronautas voltarão ao satélite a bordo da cápsula Orion, podendo explorar finalmente a região do sul lunar na missão Artemis 3</p></a>
                  </div>
                </div>
                <div class="carousel-item">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#scrollableBackdrop2"><img src="img/carousel-2.jpg" class="d-block w-100" alt="..."></a>
                  <div class="carousel-caption">
                    <a href="#" style="text-decoration: none;" class="text-light" data-bs-toggle="modal" data-bs-target="#scrollableBackdrop2"><h5>Astrônomos medem massa da Via Láctea — e descobrem matéria "faltando"</h5></a>
                    <a href="#" style="text-decoration: none;" class="text-light" data-bs-toggle="modal" data-bs-target="#scrollableBackdrop2"><p>Leveza inesperada foi detectada com explosão de ondas de rádio vinda de uma galáxia próxima, que serviu para inspecionar halo de gás da nossa própria galáxia</p></a>
                  </div>
                </div>
                <div class="carousel-item">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#scrollableBackdrop3"><img src="img/carousel-3.jpg" class="d-block w-100" alt="..."></a>
                  <div class="carousel-caption">
                    <a href="#" style="text-decoration: none;" class="text-light" data-bs-toggle="modal" data-bs-target="#scrollableBackdrop3"><h5>Paradoxo sobre bolhas descrito por Leonardo da Vinci é finalmente resolvido</h5></a>
                    <a href="#" style="text-decoration: none;" class="text-light" data-bs-toggle="modal" data-bs-target="#scrollableBackdrop3"><p>Estudiosos utilizaram tecnologia e matemática para explicar por que bolhas de ar emergem da água em zigue-zague</p></a>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>        
          </div>
          <div class="col-lg-4">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Objetivo
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Rocket news</strong> 
                      <br>
                      Site de notícias.
                      <br>
                      Fonte das notícias: 
                      <a class="link-success" href="https://revistagalileu.globo.com/" target="_blank">Revista Galileu
                      </a>
                      <br><br>
                      <strong>Projeto final - Curso Web Full-Stack Udesc</strong>
                      <br>
                      Aplicação Web de um site de notícias com login, cadastro, cadastro de notícias utilizando JS, PHP, MySQL, HTML, CSS, Bootstramp e XAMPP.  
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Autor
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong>Eduarda Moraes dos Santos</strong> <br> Estudante, 17 anos. Natural de Florianópolis, SC.
                    <br>
                    <a href="https://www.instagram.com/moraess.dudaa/" target="_blank" class="btn">
                      <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://github.com/moraeseduarda" target="_blank" class="btn">
                      <i class="fa-brands fa-github"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/moraess-dudaa/" target="_blank" class="btn" >
                      <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="mailto:eduardamorads@gmail.com" target="_blank" class="btn">
                      <i class="fa-regular fa-envelope"></i>
                    </a>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Código-fonte
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>Confira o código-fonte</strong> do projeto no link abaixo:
                      <a href="https://github.com/moraeseduarda?tab=repositories" class="text-danger" target="_blank" class="btn">https://github.com/moraeseduarda?tab=repositories
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Notícias -->
        <main>
          <div class="album py-5">
            <div class="container-xl">
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="noticia-list">
                <!-- Os notícias serão listados aqui -->
              </div>
            </div>
          </div>
        </main>
        <!-- Habilitar paginação é um projeto futuro -->
        <nav>
          <ul class="pagination justify-content-center">
            <!-- Habilitar paginação é um projeto futuro -->
            <li class="page-item disabled">
              <a class="page-link" href="#">1</a></li>
            <li class="page-item disabled" aria-current="page">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">3</a></li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Próximo</a>
            </li>
          </ul>
        </nav>
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #f1f1f1;">
          <div class="container pt-4">
            <section class="mb-4">
              <!-- Instagram -->
              <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://www.instagram.com/moraess.dudaa/" target="_blank"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-instagram"></i
              ></a>
              <!-- Github -->
              <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://github.com/moraeseduarda" target="_blank"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-github"></i
              ></a>
              <!-- Linkedin -->
              <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://www.linkedin.com/in/moraess-dudaa/" target="_blank"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fab fa-linkedin"></i
              ></a>
              <!-- E-mail -->
              <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="mailto:eduardamorads@gmail.com" target="_blank"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fa-regular fa-envelope"></i
              ></a>
            </section>
          </div>
          <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2022 Eduarda Moraes dos Santos -
            Aplicação WEB sem fins lucrativos.
            <br>
            Fonte das notícias:
            <a class="text-dark" href="https://revistagalileu.globo.com/">Revista Galileu</a>
          </div>
        </footer>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      <script>
        $(document).on('click', '.noticia-lista-item', function() {
          $('#noticia-detalhe').modal('show');
        });

         // Carregar notícias
         $.get('getNoticiaAll.php')
            .done(function(html) {
                $('#noticia-list').append(html);
            });

        // Modal notícias
        $(document).on('click', '.noticia-list-item', function() {
            let noticia_id;
            noticia_id = $(this).data('id');

            $.get('getNoticiaById.php', {
                    noticia_id: noticia_id
                })
                .done(function(html) {
                    $('#noticia-detalhe .modal-dialog').html(html);
                    $('#noticia-detalhe').modal('show');
                });

            return false;
        })
      </script>
    </body>
</html>