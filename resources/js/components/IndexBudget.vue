<template>
    <section id="section-budget-list">
        <table class="table-budget-list">
            <thead>
                <tr>
                    <th>Número</th>
                    <td>Telefone</td>
                    <td>Endereço</td>
                    <td>Data</td>
                    <td>Horário</td>
                    <td>CEP</td>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody v-for="budget in budgets" :key="budget.id">
                <tr>
                    <th>{{ budget.id }}</th>
                    <td>{{ budget.phone }}</td>
                    <td>{{ budget.address }}</td>
                    <td>{{ budget.date }}</td>
                    <td>{{ budget.time }}</td>
                    <td>{{ budget.cep }}</td>
                    <td><a :href="'budget/edit/' + budget.id"><i class="fa-solid fa-pen"></i></a></td>

                    <form :action="'budget/destroy/' + budget.id" :id="'form_' + budget.id" method="post">
                        <input type="hidden" name="_token" :value="csrf_token">
                        <input type="hidden" name="_method" value="DELETE">
                    </form>
                    <td><a href="#" @click.prevent="submitForm(budget.id)"><i class="fa-solid fa-trash"></i></a></td>
                </tr>
            </tbody>
        </table>
    </section>

    
</template>

<script>
 export default {
    props: {
        csrf_token: String,
        budgets: {
            type: Array,
            required: true
        }
    },
    methods: {
        submitForm(budgetId) {
            document.getElementById('form_' + budgetId).submit();
        }
    }
 }
</script>