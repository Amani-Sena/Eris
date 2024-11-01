<template>
    <section id="section-edit-budget">
        <h2>Editar agendamento</h2>
        <form :action="'/budget/update/' + budget_id" method="post">
            <input type="hidden" name="_token" :value="csrf_token">
            <input type="hidden" name="_method" value="PUT">

            <input class="input-default" type="number" :value="budget.phone" name="phone">
            <input class="input-default" type="text" :value="budget.address" name="address">
            <input class="input-default" type="date" :value="budget.date" name="date">
            <input class="input-default" type="time" :value="budget.time" name="time">
            <input class="input-default" type="number" :value="budget.cep" name="cep">
            <button type="submit" class="btn-default">Editar</button>
    </form>
    </section>
</template>

<script>
export default {
    props: {
        csrf_token: String,
        budget_id: Number, // Defina como String ou Number, dependendo do tipo de ID
        budget: {
            type: Array,
            required: true
        }
    }
}
</script>