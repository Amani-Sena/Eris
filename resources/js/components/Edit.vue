<template>
    <section id="section-edit-budget">
        <div class="edit-budget-container" data-aos="fade-down" data-aos-duration="1000">
            <h3>Editar agendamento</h3>
            <form :action="'/budget/update/' + budget_id" method="post">
                <input type="hidden" name="_token" :value="csrf_token">
                <input type="hidden" name="_method" value="PUT">

                <input class="input-default" type="text" name="cep" maxlength="8" required @blur="pesquisarCep" v-model="localBudget.cep">
                <input class="input-default" type="number" name="phone" required v-model="localBudget.phone">
                <input class="input-default" type="text" name="address" required v-model="localBudget.address">
                <input class="input-default" type="date" name="date" required v-model="localBudget.date">
                <input class="input-default" type="time" name="time" required v-model="localBudget.time">
                <input class="input-default" type="text" name="city" required v-model="localBudget.city">
                <input class="input-default" type="number" name="number" required v-model="localBudget.number">
                <input class="input-default" type="text" name="district" required v-model="localBudget.district">
                <input class="input-default" type="text" name="complement" required v-model="localBudget.complement">
                <input class="input-default" type="text" name="state" maxlength="2" required v-model="localBudget.state">
                <button type="submit" class="btn-default">Editar</button>
            </form>
        </div>
        
    </section>
</template>

<style lang="scss">
@import "/resources/sass/pages/edit.scss";
</style>

<script>
export default {
    props: {
        csrf_token: String,
        budget_id: Number, // Defina como String ou Number, dependendo do tipo de ID
        budget: {
            type: Object, // Corrigido de Array para Object, já que é um objeto
            required: true
        }
    },

    data() {
    return {
      cep: "",
      localBudget: { ...this.budget },
      dados: { city: "", district: "", address: "", state: ""},
    };
  },

    methods: {
        limparFormulario() {
        this.dados = { city: "", district: "", address: "", state: "" };
        },

        async pesquisarCep() {
    const cepNumerico = this.localBudget.cep ? this.localBudget.cep.replace(/\D/g, "") : "";

    // Verifica se o CEP tem 8 dígitos numéricos
    if (!/^[0-9]{8}$/.test(cepNumerico)) {
        alert("CEP inválido. Por favor, insira um CEP válido com 8 dígitos.");
        return;
    }

    // Exibe valores temporários enquanto busca o CEP
    this.dados = { city: "...", district: "...", address: "...", state: "..." };

    try {
        const response = await fetch(`https://viacep.com.br/ws/${cepNumerico}/json/`);
        const conteudo = await response.json();

        if (conteudo.erro) throw new Error("CEP não encontrado.");

        // Atualiza os campos com os dados retornados
        this.dados = {
            address: conteudo.logradouro || "",
            district: conteudo.bairro || "",
            city: conteudo.localidade || "",
            state: conteudo.uf || "",
        };

        // Atualiza o objeto local com os novos valores
        this.localBudget.address = this.dados.address;
        this.localBudget.district = this.dados.district;
        this.localBudget.city = this.dados.city;
        this.localBudget.state = this.dados.state;
    } catch (error) {
        this.limparFormulario();
        alert(error.message);
    }
}

}
}
</script>