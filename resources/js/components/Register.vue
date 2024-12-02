<template>
    
    <section id="section-register">
        <div class="register-container" data-aos="fade-down" data-aos-duration="1000">
            <div class="register-header">
                <h3>Bem vindo</h3>
                <p>Por favor, preencha os dados abaixo.</p>
                <p class="error-message" v-html="message"></p>
            </div>
            
            <form action="" method="POST" class="form">
                <input type="hidden" name="_token" :value="csrf_token">

                <input id="name" type="text" class="input-default" name="name" placeholder="Nome" required>
                <input id="email" type="email" class="input-default" name="email" placeholder="Email" required>
                <input id="password" type="password" class="input-default" name="password" placeholder="Senha" required>
                <input id="password-confirm" type="password" class="input-default" name="password_confirmation" placeholder="Confirmar senha" required>

                <button type="submit" class="btn-default">Registrar</button>
                <p>Já tem uma conta? <a href="/login">Entrar</a></p>
            </form>
        </div>
    </section>

</template>

<style lang="scss">
@import "/resources/sass/pages/register.scss";
</style>

<script>
 export default {
    props: ['csrf_token', 'message']
 }
</script>
