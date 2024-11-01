<template>
  <swiper :pagination="{ clickable: true }" :modules="modules" class="mySwiper">
    <swiper-slide>
        <div class="hero">
        <div class="hero-img"><img src="../../../public/img/bg-hero.jpg" alt=""></div>
        <div class="hero-info">
            <h1>Serviços elétricos de excelência</h1>
            <p>Sua fonte confiável para serviços elétricos residenciais de alta qualidade. Confiança, segurança e soluções personalizadas.</p>
            <a href="#section-budget" class="btn-default btn-know">Agendar visita!</a>
        </div>
    </div>
    </swiper-slide>

    <swiper-slide>
        <div class="hero">
        <div class="hero-img"><img src="../../../public/img/bg-hero-2.jpg" alt=""></div>
        <div class="hero-info">
            <h1>Manutenção preventiva e corretiva</h1>
            <p>A manutenção preventiva e corretiva são essenciais para garantir o bom funcionamento de equipamentos e sistemas. Já fez a sua?</p>
            <a href="#section-budget" class="btn-default btn-know">Agendar visita!</a>
        </div>
    </div>
    </swiper-slide>

    <swiper-slide>
        <div class="hero">
        <div class="hero-img"><img src="../../../public/img/bg-hero-3.jpg" alt=""></div>
        <div class="hero-info">
            <h1>Iluminação inovadora</h1>
            <p>Projetos de iluminação inovadores transformam ambientes ao unir funcionalidade e estética de forma criativa.</p>
            <a href="#section-budget" class="btn-default btn-know">Agendar visita!</a>
        </div>
    </div>
    </swiper-slide>

    <swiper-slide>
        <div class="hero">
        <div class="hero-img"><img src="../../../public/img/bg-hero-4.jpg" alt=""></div>
        <div class="hero-info">
            <h1>Sistemas de energia solar</h1>
            <p>A instalação de sistemas de energia solar é uma solução sustentável e econômica que permite transformar a luz do sol em eletricidade para residências e empresas.</p>
            <a href="#section-budget" class="btn-default btn-know">Agendar visita!</a>
        </div>
    </div>
    </swiper-slide>
  </swiper>

    
</template>

<script>
import { Pagination } from 'swiper/modules';
import { Swiper, SwiperSlide } from "swiper/vue";

import "swiper/swiper-bundle.css";
import 'swiper/css/pagination';


export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const onSwiper = (swiper) => {
      console.log(swiper);
    };
    const onSlideChange = () => {
      console.log("slide change");
    };
    return {
      onSwiper,
      onSlideChange,
      modules: [Pagination],
    };
  },
};
</script>
