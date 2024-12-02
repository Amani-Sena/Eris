<template>
    
    <section id="section-login">
        <div class="login-container" data-aos="fade-down" data-aos-duration="1000">
            <div class="login-header">
                <h3>Bem vindo(a) <br> de volta</h3>
                <p>Por favor, preencha os dados abaixo.</p>
                <p class="error-message" v-html="message"></p>
            </div>
            
            <form action="" method="POST" class="form">
                <input type="hidden" name="_token" :value="csrf_token">

                <input type="email" class="input-default" placeholder="Email" required id="email" name="email">
                <input type="password" class="input-default" placeholder="Senha" required name="password">

                <div class="login-remember-forgot">
                    <div class="login-remember">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">
                            <div class="login-checkbox"></div>
                            Lembrar
                        </label>
                    </div>
                    <div class="login-forgot">
                        <a href="/password/reset">Esqueceu a senha?</a>
                    </div>
                </div>

                <button type="submit" class="btn-default">Entrar</button>
                <p>Não tem uma conta? <a href="/register">Registre-se</a></p>
            </form>
        </div>
    </section>

</template>

<style lang="scss">
@import "/resources/sass/pages/login.scss";
</style>

<script>
 export default {
    props: ['csrf_token', 'message'] //data (semelhante)
 }
</script>
