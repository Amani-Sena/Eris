<template>
    <section id="section-verify">
      <div class="container-verify">
        <h3>Verifique seu endereço de e-mail</h3>
        <p v-if="resent">Um novo link de verificação foi enviado para seu e-mail.</p>
        <p>Antes de continuar, verifique seu e-mail em busca do link de verificação.</p>
        <p>Se você não recebeu o e-mail,</p>
        <form @submit.prevent="resendVerification">
          <input type="hidden" name="_token" :value="csrf_token">
          <button type="submit" class="btn-default">Solicitar email</button>.
        </form>
      </div>
    </section>
  </template>
  
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