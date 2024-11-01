<template>
    
    <section id="section-login">
        <div class="container-login">
            <h3>Entrar</h3>
            <form method="POST" action="" class="form">
                <input type="hidden" name="_token" :value="csrf_token">

                <input id="email" type="email" class="" name="email" value="" placeholder="Email" required autocomplete="email" autofocus>
                <input id="password" type="password" class="" name="password" placeholder="Senha" required autocomplete="current-password">
                <div class="container-checkbox-login">
                    <label class="" for="remember">
                        <input class="" type="checkbox" name="remember" id="remember">
                        <span class="custom-checkbox"></span>
                        Lembrar
                    </label>
                </div>
                <button type="submit" class="btn-default">Entrar</button>
                <a href="/password/reset">Esqueceu a senha?</a>
                
            </form>
        </div>
    </section>

</template>

<script>
 export default {
    props: ['csrf_token'] //data (semelhante)
 }
</script>
