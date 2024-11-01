<template>
<section id="section-login">
        <div class="container-login">
            <h3>Redefinir Senha</h3>
            <form method="POST" action="/password/email" class="form">
                <input type="hidden" name="_token" :value="csrf_token">

                <input id="email" type="email" name="email" value="" required autocomplete="email" autofocus placeholder="Email">
                
                <button type="submit" class="btn-default">Enviar link de redefinição</button>
                
            </form>
        </div>
    </section>

</template>

<script>
export default {
    props: ['csrf_token'] //data (semelhante)
 }
</script>