<template>
    <section id="section-login">
        <div class="container-login">
            <h3>Cadastrar</h3>
            <form method="POST" action="" class="form">
                <input type="hidden" name="_token" :value="csrf_token">

                <input id="name" type="text" name="name" value="" placeholder="Nome" required autocomplete="name" autofocus>
                <input id="email" type="email" name="email" value="" placeholder="Email" required autocomplete="email">
                <input id="password" type="password" name="password" placeholder="Senha" required autocomplete="new-password">
                <input id="password-confirm" type="password" name="password_confirmation" placeholder="Confirmar senha" required autocomplete="new-password">
                <div class="container-checkbox-login">
                </div>
                <button type="submit" class="btn-default">Cadastrar</button>
                
            </form>
        </div>
    </section>

</template>

<script>
    export default {
        props: ['csrf_token'] //data (semelhante)
    }
</script>