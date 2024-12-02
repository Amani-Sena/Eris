<template>
    <section id="section-budget-list">
        <div class="budget-list-container-none" v-if="budgets.length === 0">
            <h2 data-aos="fade-up" data-aos-duration="1000">Esta vazio!</h2>
            <p data-aos="fade-up" data-aos-duration="1000">Nenhum agendamento encontrado. :(</p>
        </div>

        <h2 v-if="budgets.length > 0" data-aos="fade-up" data-aos-duration="1000">Agendamentos</h2>
        
        

        <div class="budget-list-container" v-if="budgets.length > 0">
            <div class="budget-list-container-item" v-for="budget in budgets" :key="budget.id" data-aos="fade-up" data-aos-duration="1400">
                
                <div class="budget-list-row">
                    <p>N. {{ budget.id }} - {{ budget.user.name }}</p>
                    <p>{{ formatDate(budget.date) }} | {{ budget.time }}</p>
                </div>

                <div class="budget-list-group">
                    <p>Tel.: {{ budget.phone }}</p>
                    <p>{{ budget.address }} - {{ budget.number }}</p>
                    <p>{{ budget.city}} - {{ budget.state }}</p>

                    <div class="budget-list-row">
                        <p>{{ budget.district }}</p>
                        <p>CEP: {{ budget.cep }}</p>
                    </div>
                </div>

                <div class="budget-list-row">
                    <div class="budget-list-buttons">
                        <a :href="'/budget/edit/admin/' + budget.id" class="btn-default">Editar Status</a>
                    </div>
                    <p id="budget-list-status">{{ budget.status}}</p>
                </div>
                

            </div>
        </div>

        <div class="budget-message" v-if="message && showMessage">
            <h5>{{ message }}</h5>
        </div>
        
    </section>  
    
</template>

<style lang="scss">
@import "/resources/sass/admin/budget-list-admin.scss";
</style>

<script>
 export default {
    props: {
        csrf_token: String,
        budgets: {
            type: Array,
            required: true
        },
        message: String,
    },
    data() {
        return {
            showMessage: true,
        };
    },
    methods: {
        submitForm(budgetId) {
            document.getElementById('form_' + budgetId).submit();
        },

        formatDate(date) {
            const [year, month, day] = date.split('-'); 
            return `${day}/${month}/${year}`;
        },

        open_model(id) {
            const model = document.getElementById(id)
        
            model.classList.toggle('show-flex')
        }
    },
    mounted() {
        if (this.message) {
            setTimeout(() => {
                this.showMessage = false;
            }, 3000);
        }
    }
 };
</script>