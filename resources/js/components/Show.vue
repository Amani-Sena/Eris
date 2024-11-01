<template>
    <section id="section-show">
        <div class="show-container-image">
            <img src="../../../public/img/bg-hero.jpg" alt="">
        </div>
        <div class="show-container-info">
            <h2>Agendamento Concluido!</h2>
            <h4>Número: {{ id }}</h4>
            <h4>Telefone: {{ phone }}</h4>
            <h4>Endereço: {{ address }}</h4>
            <h4>Data: {{ date }}</h4>
            <h4>Horário: {{ time }}</h4>
            <h4>CEP: {{ cep }}</h4>
            <div class="show-container-buttons-info">
                <a href="/" class="btn-default">Início</a>
                <a href="/budget" class="btn-default">Ver agendamentos</a>
            </div>
        </div>
    </section>    
</template>

<script>
    export default {
    props: ['id' ,'phone', 'address', 'date', 'time', 'cep'] //data (semelhante)
 }
</script>