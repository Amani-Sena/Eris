<template>
    <section id="section-budget">
        <div class="budget-container">
            <div class="budget-container-text"></div>
            <div class="budget-container-form">
                <h1>Agende <br> sua visita.</h1>
                <form action="/budget/store" method="post">
                  <input type="hidden" name="_token" :value="csrf_token">
                    
                    <div class="budget-container-form-row">
                        <input type="number" placeholder="Telefone" name="phone">
                        <input type="text" placeholder="Endereço" name="address">
                    </div>
                    
                    <div class="budget-container-form-row">
                        <div>
                            <label for="">Data da visita</label>
                            <input type="date" name="date">
                        </div>
                        <div>
                            <label for="">Horário</label>
                            <input type="time" min="08:00" max="18:00" required name="time">
                        </div>
                    </div>

                    <input type="number" placeholder="CEP" name="cep">
                    
                    <button type="submit" class="btn-default">Agendar!</button>
                </form>
            </div>
        </div>
    </section>
</template>

<script>
export default {
  props: ['csrf_token', 'auth']
};
</script>