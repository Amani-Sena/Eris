<template>
  <section id="section-brand" data-aos="fade-up" data-aos-duration="1000">
    <h1 data-aos="fade-up" data-aos-duration="1000">Inovação Sustentável.</h1>
    <div class="brand-container">
      
      <swiper
        :direction="'horizontal'"
        :slidesPerView="1"
        :spaceBetween="30"
        :autoplay="{ delay: 1800, disableOnInteraction: false }"
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
            slidesPerView: 3,
            spaceBetween: 30,
            },
            2560: {
            slidesPerView: 3,
            spaceBetween: 30,
            }
        }"

        :modules="modules"
        
        class="mySwiper swiper-2">
        <swiper-slide>
            <div class="container-card-brand" data-aos="fade-up" data-aos-duration="1000">
                <div class="card-img-brand">
                    <i class="fi fi-ts-research-arrows-circle"></i>
                </div>
                <div class="card-info-brand">
                    <h5>Energia limpa</h5>
                    <p>Contribua para um futuro sustentável e faça a diferença no meio ambiente com a instalação de um sistema de energia solar. Além de reduzir sua pegada de carbono, você economiza na conta de energia!</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="container-card-brand" data-aos="fade-up" data-aos-duration="1400">
                <div class="card-img-brand">
                    <i class="fi fi-ts-send-money"></i>
                </div>
                <div class="card-info-brand">
                    <h5>Economia</h5>
                    <p>Reduza significativamente seus custos de energia elétrica e torne-se mais independente com a geração de energia solar, economize de forma sustentável e invista no futuro!</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="container-card-brand" data-aos="fade-up" data-aos-duration="1800">
                <div class="card-img-brand">
                    <i class="fi fi-ts-solar-panel-sun"></i>   
                </div>
                <div class="card-info-brand">
                    <h5>Tecnologia de ponta</h5>
                    <p>Instalamos sistemas de energia solar de última geração, proporcionando máxima eficiência e confiabilidade para você economizar com segurança e sustentabilidade.</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="container-card-brand">
                <div class="card-img-brand">
                    <i class="fi fi-ts-lightbulb-setting"></i>
                </div>
                <div class="card-info-brand">
                    <h5>Soluções personalizadas</h5>
                    <p>Adaptamos o sistema de energia solar para atender às necessidades específicas e às características únicas da sua residência, garantindo o melhor desempenho e economia.</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="container-card-brand">
                <div class="card-img-brand">
                    <i class="fi fi-ts-customer-service"></i>
                </div>
                <div class="card-info-brand">
                    <h5>Assistência 24 horas</h5>
                    <p>Estamos à sua disposição 24 horas por dia, 7 dias por semana, para atender prontamente a todas as suas necessidades elétricas emergenciais com segurança e eficiência.</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="container-card-brand">
                <div class="card-img-brand">
                    <i class="fi fi-ts-calendar-clock"></i>
                </div>
                <div class="card-info-brand">
                    <h5>Prazos Curtos</h5>
                    <p>Nossos técnicos atuam com agilidade e precisão, assegurando a conclusão rápida e eficiente de todos os serviços, sempre com alta qualidade.</p>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="container-card-brand">
                <div class="card-img-brand">
                    <i class="fi fi-ts-shield-trust"></i>
                </div>
                <div class="card-info-brand">
                    <h5>Satisfação Garantida</h5>
                    <p>Nosso compromisso com a excelência em serviços elétricos é refletido na satisfação e confiança dos nossos clientes, que contam conosco para soluções seguras e de alta qualidade.</p>
                </div>
            </div>
        </swiper-slide>
      </swiper>
    </div>
  </section>
</template>

<style lang="scss">
@import "/resources/sass/pages/brand.scss";
</style>

<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';

import "swiper/swiper-bundle.css";

// import required modules
import { Mousewheel, Pagination, Autoplay } from 'swiper/modules';

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    return {
      modules: [Mousewheel, Pagination, Autoplay],
    };
  },
};
</script>