<template>

    <header id="header-transparent" data-aos="fade-down" data-aos-duration="1000">
            <a href="/"><img src="/public/img/eris-orange-logo.webp" alt="Logo Eris" class="header-logo"></a>
        <nav id="nav">
            <div class="header-nav-links">
                <a href="/" class="nav-link-transparent">Início</a>
                <a href="/about" class="nav-link-transparent">Sobre nós</a>
                <a href="https://wa.me/+5521995753657" target="_blank" class="nav-link-transparent">Suporte</a>
                <a href="/budget/create" class="nav-link-transparent">Agendar</a>
            </div>
            
                    <a v-if="guest" href="/login" class="btn-default">Iniciar sessão</a>

                    <div v-else class="header-container-user">
                        <span @click="open_dropdown('container-dropdown-items')">{{ user_name }} <i class="fa-solid fa-angle-down"></i></span>
                        <div class="header-dropdown-items" id="container-dropdown-items">
                            <a href="/budget/admin" v-if="admin == 1">Agendamentos Gerais</a>
                            <a href="/budget">Meus agendamentos</a>
                            <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                            <form id="logout-form" action="/logout" method="POST" style="display: none">
                                <input type="hidden" name="_token" :value="csrf_token">
                            </form>
                        </div>
                    </div>

            <div class="header-container-btn-mobile" id="btn-mobile" @click="mobile_menu('mobile_menu_dropdown')">
                <div class="btn-line"></div>
                <div class="btn-line"></div>
                <div class="btn-line"></div>
            </div>

        </nav>
    
    <div class="header_menu_dropdown" id="mobile_menu_dropdown">
        <div class="header_menu_container">
            <div class="header_menu_close">
                <div class="header_mobile_menu_close" @click="mobile_menu('mobile_menu_dropdown')">
                    <div class="btn-line" id="btn-close-1"></div>
                    <div class="btn-line" id="btn-close-2"></div>
                </div>
            </div>
            <h1><a href="/">Início</a></h1>
            <h1><a href="/about">Sobre nós</a></h1>
            <h1><a href="https://wa.me/+5521995753657" target="_blank">Suporte</a></h1>
            <h1><a href="/budget/create">Agendar</a></h1>
            <div class="div-line"></div>
            <h1 v-if="!guest" @click="open_dropdown('mobile_menu_user_dropdown')">{{ user_name }} <i class="fa-solid fa-chevron-down"></i></h1>
            <h1 v-else><a href="/login">Iniciar sessão</a></h1>
            <div class="header_menu_user_dropdown" id="mobile_menu_user_dropdown">
                <a href="/budget/admin" v-if="admin == 1">Agendamentos Gerais</a>
                <h4><a href="/budget">Meus agendamentos</a></h4>
                <h4><a href="/logout"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></h4>
                <form id="logout-form" action="/logout" method="POST" style="display: none">
                    <input type="hidden" name="_token" :value="csrf_token">
                </form>
            </div>
        </div>
    </div>


    </header>

</template>

<style lang="scss">
@import "/resources/sass/partials/header.scss";
</style>

<script>
export default {
    props: ['csrf_token', 'user_name', 'guest', 'admin'],
    methods: {
        mobile_menu(id) {
            const mobile_menu = document.getElementById(id)

            mobile_menu.classList.toggle('show-flex')

        },
        open_dropdown(id) {
            const dropdown = document.getElementById(id)

            dropdown.classList.toggle('show-flex')

        }
    },
}
</script>