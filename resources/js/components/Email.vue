<template>
<section id="section-email">
    <div class="email-container" data-aos="fade-down" data-aos-duration="1000">
        <h3>Redefinir Senha</h3>
            <form method="POST" action="/password/email" class="form">
                <p>Um link de redefinição será <br> enviado ao email informado.</p>
                <input type="hidden" name="_token" :value="csrf_token">

                <input id="email" type="email" name="email" required autocomplete="email" autofocus placeholder="Email" class="input-default">
                
                <button type="submit" class="btn-default">Enviar</button>
                
            </form>
    </div>
            
    </section>

</template>

<style lang="scss">
@import "/resources/sass/pages/email.scss";
</style>

<script>
export default {
    props: ['csrf_token'] //data (semelhante)
 }
</script>