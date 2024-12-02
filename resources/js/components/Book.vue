<template>
    <section id="section-budget">
        <div class="budget-container">
            <div class="budget-container-text"></div>
            <div class="budget-container-form">
                <h1 data-aos="fade-down" data-aos-duration="1000">Agende <br> sua visita.</h1>
                <form action="/budget/store" method="post" data-aos="fade-up" data-aos-duration="1000">
                  <input type="hidden" name="_token" :value="csrf_token">
                    
                  <div class="budget-form-row">
                    <input type="text" placeholder="CEP - apenas números" name="cep" class="input-default" required maxlength="8" @blur="pesquisarCep" v-model="cep">
                    <input type="text" placeholder="Cidade" v-model="dados.city" name="city" class="input-default" required>     
                    <input type="text" placeholder="Rua" v-model="dados.address" name="address" class="input-default" required>
                  </div>
                <div class="budget-form-row">
                    <input type="text" placeholder="Número" name="number" class="input-default" required>
                    <input type="text" placeholder="Bairro" v-model="dados.district" name="district" class="input-default" required>
                    <input type="text" placeholder="Complemento" name="complement" class="input-default" required>
                </div>
                <div class="budget-form-row">
                    <input type="text" placeholder="Estado" v-model="dados.state" name="state" class="input-default" maxlength="2" required>
                    <input type="date" name="date" class="input-default" required>
                    <input type="time" min="08:00" max="18:00" required name="time" class="input-default">
                    <input type="number" placeholder="Telefone" name="phone" required class="input-default">
                </div> 
                    <button type="submit" class="btn-default">Agendar!</button>
                </form>
            </div>
        </div>
    </section>
</template>

<style lang="scss">
@import "/resources/sass/pages/book.scss";
</style>

<script>
export default {
  props: ['csrf_token', 'auth'],

  data() {
    return {
      cep: "",
      dados: { city: "", district: "", address: "", state: ""},
    };
  },

    methods: {
        limparFormulario() {
        this.dados = { city: "", district: "", address: "", state: "" };
        },

    async pesquisarCep() {
      const cepNumerico = this.cep.replace(/\D/g, "");

      if (!/^[0-9]{8}$/.test(cepNumerico)) {
        this.limparFormulario();
        alert("CEP inválido.");
        return;
      }

      this.dados = { city: "...", district: "...", address: "...", state: "..."};

      try {
        const response = await fetch(`https://viacep.com.br/ws/${cepNumerico}/json/`);
        const conteudo = await response.json();
        if (conteudo.erro) throw new Error("CEP não encontrado");
        this.dados = {
            address: conteudo.logradouro || "",
            district: conteudo.bairro || "",
            city: conteudo.localidade || "",
            state: conteudo.uf || "",
        };
      } catch (error) {
        this.limparFormulario();
        alert(error.message);
      }

    }
}
};


</script>