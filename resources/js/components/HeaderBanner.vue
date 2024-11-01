<template>
    <section id="section-header-banner">
        <div class="header-banner-container-title">
            <h1>{{header_title}}</h1>
            <i class="fa-solid fa-chevron-down"></i>
        </div>
        <div class="header-banner-container-img">
            <img src="../../../public/img/bg-hero-3.jpg" alt="Banner Header">
        </div>
    </section>
</template>

<script>
    export default {
        props: ['header_title']
    }
</script>