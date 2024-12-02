<template>
    <section id="section-benefits">
        <div class="benefits-container">
            <h1 data-aos="fade-up" data-aos-duration="1000">Vantagens</h1>
            <div class="benefits-container-items">
                <div class="benefits-item">
                    <h3 data-aos="fade-up" data-aos-duration="1000">{{ title_1 }}</h3>
                    <p v-html="text_1" data-aos="fade-up" data-aos-duration="1400"></p>
                </div>

                <div class="benefits-item">
                    <h3 data-aos="fade-up" data-aos-duration="1000">{{ title_2 }}</h3>
                    <p v-html="text_2" data-aos="fade-up" data-aos-duration="1400"></p>
                </div>

                <div class="benefits-item">
                    <h3 data-aos="fade-up" data-aos-duration="1000">{{ title_3 }}</h3>
                    <p v-html="text_3" data-aos="fade-up" data-aos-duration="1400"></p>
                </div>

                <div class="benefits-item">
                    <h3 data-aos="fade-up" data-aos-duration="1000">{{ title_4 }}</h3>
                    <p v-html="text_4" data-aos="fade-up" data-aos-duration="1400"></p>
                </div>

                <div class="benefits-item">
                    <h3 data-aos="fade-up" data-aos-duration="1000">{{ title_5 }}</h3>
                    <p v-html="text_5" data-aos="fade-up" data-aos-duration="1400"></p>
                </div>

                <div class="benefits-item">
                    <h3 data-aos="fade-up" data-aos-duration="1000">{{ title_6 }}</h3>
                    <p v-html="text_6" data-aos="fade-up" data-aos-duration="1400"></p>
                </div>
            </div>
        </div>
    </section>
</template>

<style lang="scss">
@import "/resources/sass/pages/benefits.scss";
</style>

<script>
 export default {
    props: ['title_1', 'text_1', 'title_2', 'text_2', 'title_3', 'text_3', 'title_4', 'text_4', 'title_5', 'text_5', 'title_6', 'text_6']
 }
</script>
