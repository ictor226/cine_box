<?php
$titulo = 'CineBox - Inicio';
include './includes/Header.php' ?>

<section id="baner">
    <main class="carrossel-container">
        <div class="carrossel">
            <img src="./assets/img/banner/banner_00.jpg" alt="banner_01">
            <img src="./assets/img/banner/banner_01.jpg" alt="banner_01">
            <img src="./assets/img/banner/banner_02.jpg" alt="banner_02">
            <img src="./assets/img/banner/banner_03.jpg" alt="banner_03">
            <img src="./assets/img/banner/banner_04.jpg" alt="banner_04">
            <img src="./assets/img/banner/banner_05.jpg" alt="banner_05">
            <img src="./assets/img/banner/banner_06.jpg" alt="banner_06">
        </div>
        <BUtton class="anterior" onclick="javascript:anteriorSlide()"> <i class="bi bi-arrow-left-short"></i> </BUtton>
        <BUtton class="proximo" onclick="javascript:proximoSlide()"><i class="bi bi-arrow-right-short"></i></BUtton>
    </main>
</section>
<section id="filmes-recomendados">
    <h2 class="titulo">filmes</h2>
    <main class="container ">
        <div class="row">

        <?php
        for ($i=0; $i <8; $i++) { 
            
        ?>

            <div class=" col col-3">
                <figure>
                    <img src="./assets/img/poster/avatar-o-caminho-da-agua.png"
                        alt="poster do filme o poder da avatar o caminho da agua" class="foto-produto">
                    <figcaption>
                        <h4>Avatar o Caminho da Água</h4>
                        <span class="preco"> R$ 15,90</span>
                        <P class="descricao">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas et
                            veritatis numquam, voluptatem esse similique ea, eaque maxime impedit alias fugit
                            repudiandae aliquid quod a optio voluptas explicabo laborum fuga?</P>
                    </figcaption>
                    <span class="genero">
                        <label style="background-color: #070373;">Fantasia</label>
                        <label style="background-color: #580259;">Drama</label>
                        <label style="background-color: #d966ba;">Ficção</label>
                    </span>
                </figure>
            </div>
            <?php } ?>
        </div>
    </main>
</section>