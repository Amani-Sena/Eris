<template>
    <section id="section-verify">
      <div class="verify-container" data-aos="fade-down" data-aos-duration="1000">
        <h3>Verifique seu e-mail</h3>
        <p v-if="resent" id="verify-message">Um novo link de verificação foi enviado para seu e-mail.</p>
        <p>Verifique seu e-mail em busca do link de confirmação</p>
        <form @submit.prevent="resendVerification">
          <input type="hidden" name="_token" :value="csrf_token">
          <button type="submit" class="btn-default">Solicitar email</button>.
        </form>
      </div>
    </section>
  </template>

<style lang="scss">
@import "/resources/sass/pages/verify.scss";
</style>
  
  <script>
  import axios from 'axios';
  
  export default {
    props: ['csrf_token'], //data (semelhante)
    data() {
      return {
        resent: false, // Controla a exibição do alerta de sucesso
      };
    },
    methods: {
      async resendVerification() {
        try {
          await axios.post('/email/resend'); // Ajuste a rota conforme necessário
          this.resent = true;
        } catch (error) {
          console.error('Erro ao reenviar a verificação:', error);
        }
      },
    },
  };
  </script>