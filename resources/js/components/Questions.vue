<template>
    <section id="section-questions">
        <h1>Perguntas <br> frequentes</h1>

        <div class="container-questions">
            <div class="container-questions-item">
                <span @click="open_dropdown('container-questions-dropdown-1')">Como funciona o processo de contratação? <i class="fa-solid fa-chevron-down"></i></span>
                <div class="container-questions-dropdown" id="container-questions-dropdown-1">
                    <p>O processo de contratação é feito por telefone, e-mail ou site da empresa. O cliente diz o que está precisando e um técnico vai no local e faz toda a avaliação necessária pra atender o que  cliente precisa.</p>
                </div>
            </div>

            <div class="container-questions-item">
                <span @click="open_dropdown('container-questions-dropdown-2')">É necessário realizar alguma obra? <i class="fa-solid fa-chevron-down"></i></span>
                <div class="container-questions-dropdown" id="container-questions-dropdown-2">
                    <p>Em muitos casos sim. Ex: você comprou um terreno e construiu sua casa, porém na rua não tem poste e rede de energia elétrica 💡 então será necessário uma obra pra que chegue a energia elétrica até sua casa.</p>
                </div>
            </div>

            <div class="container-questions-item">
                <span @click="open_dropdown('container-questions-dropdown-3')">Quanto vou economizar com a energia solar? <i class="fa-solid fa-chevron-down"></i></span>
                <div class="container-questions-dropdown" id="container-questions-dropdown-3">
                    <p>Primeiramente, o cálculo é feito de acordo com o seu consumo de energia elétrica. Ex: Se você gasta 500 khr de energia elétrica, vamos fazer um projeto de energia solar ☀️ pra gerar 1000 khr porque a tendência é o cliente ficar mais a vontade, usar mais o ar condicionado, incluir panelas elétricas pra economizar no gás e etc...</p>
                </div>
            </div>

            <div class="container-questions-item">
                <span @click="open_dropdown('container-questions-dropdown-4')">Como é feita a instalação do medidor? <i class="fa-solid fa-chevron-down"></i></span>
                <div class="container-questions-dropdown" id="container-questions-dropdown-4">
                    <p>Primeiramente o técnico vai até sua casa e faz uma série de perguntas sobre os equipamentos elétricos que você vai colocar na sua casa. Com essas informações ele faz o cálculo e define o tipo de padrão, monofásico, bifásico ou trifásico e bitola do cabo e o disjuntor que vai ser instalado no padrão. Depois que a montagem do padrão é feita a empresa tem 5 dias úteis pra instalar o medidor de energia elétrica.</p>
                </div>
            </div>

            <div class="container-questions-item">
                <span @click="open_dropdown('container-questions-dropdown-5')">Fornecem garantia? <i class="fa-solid fa-chevron-down"></i></span>
                <div class="container-questions-dropdown" id="container-questions-dropdown-5">
                    <p>Sim, a partir do serviço finalizado, fornecemos 3 meses de garantia contra defeitos.</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    methods: {
        open_dropdown(id) {
            const dropdown = document.getElementById(id)

            dropdown.classList.toggle('show-flex')

        }
    },
 }
</script>