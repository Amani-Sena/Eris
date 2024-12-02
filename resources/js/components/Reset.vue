<template>
<section id="section-reset">
    <div class="reset-container" data-aos="fade-down" data-aos-duration="1000">
        <h3>Redefinir Senha</h3>
        <form method="POST" action="/password/reset" class="form">
            <input type="hidden" name="_token" :value="csrf_token">
            <input type="hidden" name="token" :value="token">

            <input id="email" type="email" class="input-default" name="email" :value="email" placeholder="Email" required autocomplete="email" readonly>

            <input id="password" type="password" class="input-default" name="password" placeholder="Nova Senha" required>

            <input id="password-confirm" type="password" name="password_confirmation" class="input-default" placeholder="Confirmar Senha" required>
            
            <button type="submit" class="btn-default">Redefinir</button>
        </form>
    </div>
</section>

</template>

<style lang="scss">
@import "/resources/sass/pages/reset.scss";
</style>


<script>
export default {
  props: ['csrf_token', 'token', 'email']
};
</script>