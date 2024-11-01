<template>

<header id="header">
<div class="container-nav-logo">
    <a href="/"><img src="../../../public/img/Eris Logo.webp" alt=""></a>
</div>
<nav id="nav">
    <div class="container-nav-links">
        <a href="/" class="nav-link">Início</a>
        <a href="/about" class="nav-link">Sobre nós</a>
        <a href="/questions" class="nav-link">Perguntas</a>
        <a href="/budget/create" class="nav-link">Agendar</a>
    </div>
    <div class="container-nav-buttons">
        <div class="container-btn-links">
            <div v-if="guest">
                <a href="/login" class="btn-default" id="btn-entrar">Entrar</a>
                <a href="/register" class="btn-default" id="btn-cadastrar">Cadastrar</a>
            </div>
                    

                    <div v-else class="container-user">
                        <span @click="open_dropdown('container-dropdown-items')">{{ user_name }} <i class="fa-solid fa-angle-down"></i></span>
                        <div class="container-dropdown-items" id="container-dropdown-items">
                            <a href="/budget">Meus agendamentos</a>
                            <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                            <form id="logout-form" action="/logout" method="POST" style="display: none">
                                <input type="hidden" name="_token" :value="csrf_token">
                            </form>
                        </div>
                    </div>
        </div> 
    </div>

    
    
    <div class="container-btn-mobile" id="btn-mobile" @click="mobile_menu('mobile_menu_dropdown')" v-if="! guest">
        <div class="btn-line"></div>
        <div class="btn-line"></div>
        <div class="btn-line"></div>
    </div>
</nav>
</header>
<div class="mobile_menu_dropdown" id="mobile_menu_dropdown">
    
    <div class="mobile_menu_container">
        <div class="mobile_menu_close">
            <div class="container_mobile_menu_close" @click="mobile_menu('mobile_menu_dropdown')">
                <div class="btn-line" id="btn-close-1"></div>
                <div class="btn-line" id="btn-close-2"></div>
            </div>
        </div>
        <h1><a href="/">Início</a></h1>
        <h1><a href="">Sobre nós</a></h1>
        <h1><a href="">Perguntas</a></h1>
        <h1><a href="/budget/create">Agendar</a></h1>
        <div class="div-line"></div>
        <h1 @click="open_dropdown('mobile_menu_user_dropdown')">{{ user_name }} <i class="fa-solid fa-chevron-down"></i></h1>
        <div class="mobile_menu_user_dropdown" id="mobile_menu_user_dropdown">
            <h4><a href="/budget">Meus agendamentos</a></h4>
            <h4><a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></h4>
            <form id="logout-form" action="/logout" method="POST" style="display: none">
                <input type="hidden" name="_token" :value="csrf_token">
            </form>
        </div>
    </div>
</div>

</template>

<script>
    export default {
    props: ['csrf_token', 'user_name', 'guest'],
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