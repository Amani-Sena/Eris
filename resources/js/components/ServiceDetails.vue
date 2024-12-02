<template>
    <section id="section-service-details">
        <div class="service-details-header-img">
            <img :src="img_url" alt="" data-aos="zoom-out" data-aos-duration="1000">
        </div>
        <div class="service-details-info">
            <h1 v-html="type" data-aos="fade-up" data-aos-duration="1000"></h1>
            <div data-aos="zoom-in" data-aos-duration="1000"></div>
            <p data-aos="fade-down" data-aos-duration="1000">{{ desc }}</p>
        </div>
    </section>
</template>

<style lang="scss">
@import "/resources/sass/pages/service-details.scss";
</style>

<script>
 export default {
    props: ['img_url', 'type', 'desc']
 }
</script>
