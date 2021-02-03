<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- CSS only -->
    <link href="//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="slyle.css">
    <title>Практика Бутса</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ps-5 Glavmeny">

        <a class="navbar-brand" href="#">
            <img class="" src="/img/logo.png" alt="">
            <span class="">Pegasus-Nest</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ps-4" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#aboutUs">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#produkt">Предложения</a>
                </li><li class="nav-item">
                    <a class="nav-link" href="#foto">Галерея</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        А так же...
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#offers">Актуальные предложения</a></li>
                        <li><a class="dropdown-item" href="#">Кафе</a></li>
                    </ul>
                </li>
            </ul>
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Связаться с нами
            </button>
        </div>
    </div>
</nav>
<main class="allBlock">
    <div id="carouselExampleIndicators" class="carousel slide dimension-sliD" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item slideOne active">
                <img src="img/horse1(2.jpg" alt="">
                <div class="carousel-caption">
                    <div class="appealSlide">
                        <h3>Мы на нашей стороне</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo, ullam. Adipisci
                            aliquam
                            architecto culpa debitis dignissimos, dolor eligendi excepturi in laborum molestiae natus
                            nobis
                            nulla obcaecati optio quos suscipit temporibus ut vitae voluptate!</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item slideOne">
                <img src="img/horse2(2.jpg" alt="">
                <div class="carousel-caption">
                    <div class="appealSlide">
                        <h3>Мы на нашей стороне</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo, ullam. Adipisci
                            aliquam
                            architecto culpa debitis dignissimos, dolor eligendi excepturi in laborum molestiae natus
                            nobis
                            nulla obcaecati optio quos suscipit temporibus ut vitae voluptate!</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item slideOne">
                <img src="img/horse3(2.jpg" alt="">
                <div class="carousel-caption">
                    <div class="appealSlide">
                        <h3>Мы на нашей стороне</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo, ullam. Adipisci
                            aliquam
                            architecto culpa debitis dignissimos, dolor eligendi excepturi in laborum molestiae natus
                            nobis
                            nulla obcaecati optio quos suscipit temporibus ut vitae voluptate!</p>
                    </div>
                </div>
            </div>
        </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
    </div>
    <div class="otherFonTop">
        <div class="otherFonTop__img text-center">
            <img class="img-fluid" src="/img/horse2Fn12.jpg" alt="">
        </div>
    </div>
    <section id="aboutUs" class="sectionTyp">
        <div class="sectiom-top ">
            <h2 class="">Мы стремимся к пониманию</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 aboutUs__text">
                    <p class="lh-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis earum facere iusto reprehenderit
                        temporibus voluptas. Alias asperiores consequatur debitis doloribus eaque
                        facere ipsum laboriosam nihil, quae quibusdam quod rem reprehenderit temporibus vero vitae voluptas?
                    <br>
                    <br>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At autem delectus deserunt, dolorum, eligendi esse
                        et ipsam iusto, nemo odio pariatur quidem rerum saepe similique tempore unde voluptate voluptates? Aliquid
                        amet assumenda commodi corporis distinctio dolor earum eius fuga fugiat laudantium, molestiae
                        molestias officiis porro praesentium quae quia quis quos rem similique suscipit totam ut voluptatibus.
                    </p>
                </div>
                <div class="col-lg-6 aboutUs__img">
                    <img src="/img/horse2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="produkt" class="sectionTyp">
        <div class="decor-lien"></div>
        <div class="sectiom-top">
            <h2 class="">Наши предложения - ваши возможности</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-4 col-md-6 produkt__item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-camera2 mt-3 iconItem" viewBox="0 0 16 16">
                        <path d="M5 8c0-1.657 2.343-3 4-3V4a4 4 0 0 0-4 4z"/>
                        <path d="M12.318 3h2.015C15.253 3 16 3.746 16 4.667v6.666c0 .92-.746 1.667-1.667 1.667h-2.015A5.97 5.97 0 0 1 9 14a5.972 5.972 0 0 1-3.318-1H1.667C.747 13 0 12.254 0 11.333V4.667C0 3.747.746 3 1.667 3H2a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1h.682A5.97 5.97 0 0 1 9 2c1.227 0 2.367.368 3.318 1zM2 4.5a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0zM14 8A5 5 0 1 0 4 8a5 5 0 0 0 10 0z"/>
                    </svg>
                    <h5 class="text-center mt-4 text-uppercase">фотосессия</h5>
                    <p class="produkt__item-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque iusto minima!
                    </p>
                </div>
                <div class="col-xl-4 col-md-6  produkt__item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-collection-play-fill mt-3 iconItem" viewBox="0 0 16 16">
                        <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
                    </svg>
                    <h5 class="text-center mt-4 text-uppercase">видеоклипы</h5>
                    <p class="produkt__item-text">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Beatae consectetur error itaque libero neque qui ratione repellendus tenetur, totam? Nobis!
                    </p>
                </div>
                <div class="col-xl-4 col-md-6 produkt__item">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-emoji-laughing mt-3 iconItem" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5zM7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5z"/>
                    </svg>
                    <h5 class="text-center mt-4 text-uppercase">позитивное настроение</h5>
                    <p class="produkt__item-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque iusto minima!
                    </p>
                </div>
                <div class="col-xl-4 col-md-6  produkt__item ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-image-fill mt-3 iconItem" viewBox="0 0 16 16">
                        <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0z"/>
                    </svg>
                    <h5 class="text-center mt-4 text-uppercase">подготовка альбомов</h5>
                    <p class="produkt__item-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Beatae consectetur error itaque libero neque qui ratione repellendus tenetur, totam?
                    </p>
                </div>
                <div class="col-xl-4 col-md-6 produkt__item ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-signpost-2 mt-3 iconItem" viewBox="0 0 16 16">
                        <path d="M7 1.414V2H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h5v1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H7v5h2v-5h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H9V6h4.5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.3 2.4a1 1 0 0 0-.8-.4H9v-.586a1 1 0 0 0-2 0zM13.5 3l.75 1-.75 1H2V3h11.5zm.5 5v2H2.5l-.75-1 .75-1H14z"/>
                    </svg>
                    <h5 class="text-center mt-4 text-uppercase">различные маршруты</h5>
                    <p class="produkt__item-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque iusto minima!
                    </p>
                </div>
                <div class="col-xl-4 col-md-6 produkt__item ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-tree mt-3 iconItem" viewBox="0 0 16 16">
                        <path d="M8.416.223a.5.5 0 0 0-.832 0l-3 4.5A.5.5 0 0 0 5 5.5h.098L3.076 8.735A.5.5 0 0 0 3.5 9.5h.191l-1.638 3.276a.5.5 0 0 0 .447.724H7V16h2v-2.5h4.5a.5.5 0 0 0 .447-.724L12.31 9.5h.191a.5.5 0 0 0 .424-.765L10.902 5.5H11a.5.5 0 0 0 .416-.777l-3-4.5zM6.437 4.758A.5.5 0 0 0 6 4.5h-.066L8 1.401 10.066 4.5H10a.5.5 0 0 0-.424.765L11.598 8.5H11.5a.5.5 0 0 0-.447.724L12.69 12.5H3.309l1.638-3.276A.5.5 0 0 0 4.5 8.5h-.098l2.022-3.235a.5.5 0 0 0 .013-.507z"/>
                    </svg>
                    <h5 class="text-center mt-4 text-uppercase">прекрасная природа</h5>
                    <p class="produkt__item-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloremque iusto minima!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="foto" class="sectionTyp">
        <div class="sectiom-top">
            <h2 class="">Галерея</h2>
        </div>
        <div class="container-fluid">
            <div class="text-center mb-3 pt-1">
                <a class="btn btn-light mx-sm-2" data-bs-toggle="collapse" href="#multiCollapseExample1"
                   role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Лошади</a>
                <button class="btn btn-light mx-sm-2" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2"
                        aria-expanded="false" aria-controls="multiCollapseExample2">Ранчо</button>
                <button class="btn btn-light mx-sm-2 foto__butt-it" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse"
                        aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Все фотографии</button>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 my-4">
                    <div class="collapse multi-collapse foto__img show" id="multiCollapseExample2">
                        <img class="img-thumbnail" src="/img/hors_galer1.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 my-4">
                    <div class="collapse multi-collapse foto__img show" id="multiCollapseExample2">
                        <img class="img-thumbnail" src="/img/hors_galer2.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 my-4">
                    <div class="collapse multi-collapse foto__img show" id="multiCollapseExample2">
                        <img class="img-thumbnail" src="/img/hors_galer3.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 my-4">
                    <div class="collapse multi-collapse foto__img show" id="multiCollapseExample1">
                        <img class="img-thumbnail" src="/img/hors_galer4.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 my-4">
                    <div class="collapse multi-collapse foto__img show" id="multiCollapseExample1">
                        <img class="img-thumbnail" src="/img/hors_galer5.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 my-4">
                    <div class="collapse multi-collapse foto__img show" id="multiCollapseExample2">
                        <img class="img-thumbnail" src="/img/hors_galer6.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 my-4">
                    <div class="collapse multi-collapse foto__img show" id="multiCollapseExample1">
                        <img class="img-thumbnail" src="/img/hors_galer7.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 ">
                    <div class="collapse multi-collapse foto__img show" id="multiCollapseExample1">
                        <img class="img-thumbnail" src="/img/hors_galer8.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="offers" class="sectionTyp">
        <div class="decor-lien"></div>
        <div class="sectiom-top">
            <h2 class="">Актуально</h2>
        </div>
        <div class="d-flex flex-column flex-md-row bd-highlight mb-5 justify-content-between align-items-center">
            <div class="p-2 offers__item">
                <div class="">
                    <div  class="offers__img">
                        <img src="/img/hors_galer1.jpg" alt="">
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Катания в экипажах
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="offers__list">
                                        <li class="">Lorem ipsum dolor sit amet.</li>
                                        <li class="">Lorem ipsum dolor ipsumipsum sit amet.</li>
                                        <li class="">Lorem ipsum dolor sit amet.</li>
                                        <li class="">Lorem ipsum ipsum dolor sit amet.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 offers__item">
                <div class="">
                    <div  class="offers__img">
                        <img src="/img/hors_galer5.jpg" alt="">
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Ранчо на территории
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="offers__list">
                                        <li class="">Lorem ipsum dolor sit amet.</li>
                                        <li class="">Lorem ipsum dolor ipsumipsum sit amet.</li>
                                        <li class="">Lorem ipsum dolor sit amet.</li>
                                        <li class="">Lorem ipsum ipsum dolor sit amet.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 offers__item">
                <div class="">
                    <div  class="offers__img">
                        <img src="/img/hors_galer3.jpg" alt="">
                    </div>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item mt-2">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    постой
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul class="offers__list">
                                        <li class="">Lorem ipsum dolor sit amet.</li>
                                        <li class="">Lorem ipsum dolor ipsumipsum sit amet.</li>
                                        <li class="">Lorem ipsum dolor sit amet.</li>
                                        <li class="">Lorem ipsum ipsum dolor sit amet.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<footer class="py-4 mt-4 border-top">
    <div class="row mx-0">
        <div class="d-flex align-items-center justify-content-center col-12 col-md-4  my-2">
            <div class="d-flex flex-column ">
                <p class=""><a href="" class="">+7(000)000-00-00</a></p>
                <p class=""><a href="" class="">thisIsNot@mail.ru</a></p>
            </div>
        </div>
        <div class="d-flex flex-column col-12 col-md-4 text-center my-2">
            <a href="#" class="">
                <div class="footer__logo mb-2">
                    <img src="/img/logo.png" alt="">
                </div>
            </a>
            <a href="#" class="">Pegasus-Nest</a>
        </div>
        <div class="footer-item d-flex align-items-center justify-content-center col-12 col-md-4 text-md-end text-center my-2">
            <p class="">
                Россия, Владимирская обл.,<br>
                г.Ковров, Комсомольская ул. д.124
            </p>
        </div>
    </div>
</footer>
<!-- Modal -->
<div class="modal fade popupSlyle" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Мы обязательно свяжемся с вами</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email адрес</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label">Телефон</label>
                        <input type="tel" class="form-control" id="exampleFormControlInput2"
                               placeholder="введите телефон">
                        <div class="form-check mt-1">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Заказать обратный звонок
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btnGo">Отправить</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>