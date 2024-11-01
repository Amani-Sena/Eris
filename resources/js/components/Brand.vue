<template>
  <section id="section-brand">
    <h1>o futuro na energia.</h1>
    <div class="brand-container">
      

      <swiper
        :direction="'horizontal'"
        :slidesPerView="1"
        :spaceBetween="30"
        :mousewheel="true"
        :breakpoints="{
            900: {
            slidesPerView: 1,
            spaceBetween: 20,
            },
            920: {
            slidesPerView: 2,
            spaceBetween: 20,
            },
            1280: {
            slidesPerView: 3,
            spaceBetween: 20,
            },
            1920: {
            slidesPerView: 4,
            spaceBetween: 30,
            },
            2560: {
            slidesPerView: 4,
            spaceBetween: 30,
            }
        }"

        :modules="modules"
        
        class="mySwiper swiper-2">
        <swiper-slide>
            <div class="container-card-brand">
                <div class="card-img-brand">
                    <i class="fi fi-ts-research-arrows-circle"></i>
                </div>
                <div class="card-info-brand">
                    <h4>Energia limpa</h4>
                    <p>Contribua para um futuro sustentável com a instalação de um sistema de energia solar.</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="container-card-brand">
                <div class="card-img-brand">
                    <i class="fi fi-ts-send-money"></i>
                </div>
                <div class="card-info-brand">
                    <h4>Economia</h4>
                    <p>Reduza significativamente seus custos de energia elétrica com a geração solar.</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="container-card-brand">
                <div class="card-img-brand">
                    <i class="fi fi-ts-solar-panel-sun"></i>   
                </div>
                <div class="card-info-brand">
                    <h4>Tecnologia de ponta</h4>
                    <p>Instalamos sistemas de energia solar de última geração, garantindo eficiência e confiabilidade.</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="container-card-brand">
                <div class="card-img-brand">
                    <i class="fi fi-ts-lightbulb-setting"></i>
                </div>
                <div class="card-info-brand">
                    <h4>Soluções personalizadas</h4>
                    <p>Adaptamos o sistema solar de acordo com as necessidades e características da sua residência.</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="container-card-brand">
                <div class="card-img-brand">
                    <i class="fi fi-ts-customer-service"></i>
                </div>
                <div class="card-info-brand">
                    <h4>Assistência 24 horas</h4>
                    <p>Estamos disponíveis 24 horas por dia, 7 dias por semana, para atender a todas as suas necessidades elétricas emergenciais.</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="container-card-brand">
                <div class="card-img-brand">
                    <i class="fi fi-ts-calendar-clock"></i>
                </div>
                <div class="card-info-brand">
                    <h4>Prazos Curtos</h4>
                    <p>Nossos técnicos trabalham com agilidade e eficiência, garantindo a conclusão rápida de todos os serviços.</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="container-card-brand">
                <div class="card-img-brand">
                    <i class="fi fi-ts-shield-trust"></i>
                </div>
                <div class="card-info-brand">
                    <h4>Satisfação Garantida</h4>
                    <p>Nosso compromisso com a excelência em serviços elétricos é comprovado pela satisfação de nossos clientes</p>
                </div>
            </div>
        </swiper-slide>
      </swiper>
    </div>
  </section>
</template>

<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';

import "swiper/swiper-bundle.css";

// import required modules
import { Mousewheel, Pagination } from 'swiper/modules';

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [Mousewheel, Pagination],
    };
  },
};
</script>