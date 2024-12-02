<template>
    <section id="section-support">
        <div class="support-title" data-aos="fade-up" data-aos-duration="1000">
            <h2>Suporte 24/7</h2>
            <p>Sempre que precisar tirar dúvidas!</p>
            <a href="" class="btn-default">Entre em contato</a>
        </div>

        <div class="support-list">

            <div class="support-list-item-container" @click="open_dropdown('support-list-dropdown-1')" data-aos="fade-up" data-aos-duration="1000">
                <div class="support-list-item">
                    <p>Como funciona o processo de contratação?</p>
                    <i class="fi fi-ts-angle-small-down"></i>
                </div>
                <div class="support-list-dropdown" id="support-list-dropdown-1">
                    <p>O processo de contratação é feito por telefone, e-mail ou site da empresa. O cliente diz o que está precisando e um técnico vai no local e faz toda a avaliação necessária pra atender o que cliente precisa.</p>
                </div>
            </div>

            <div class="support-list-item-container" @click="open_dropdown('support-list-dropdown-2')" data-aos="fade-up" data-aos-duration="1000">
                <div class="support-list-item">
                    <p>É necessário realizar alguma obra?</p>
                    <i class="fi fi-ts-angle-small-down"></i>
                </div>
                <div class="support-list-dropdown" id="support-list-dropdown-2">
                    <p>Em muitos casos sim. Ex: você comprou um terreno e construiu sua casa, porém na rua não tem poste e rede de energia elétrica 💡 então será necessário uma obra pra que chegue a energia elétrica até sua casa.</p>
                </div>
            </div>

            <div class="support-list-item-container" @click="open_dropdown('support-list-dropdown-3')" data-aos="fade-up" data-aos-duration="1000">
                <div class="support-list-item">
                    <p>Quanto vou economizar com a energia solar?</p>
                    <i class="fi fi-ts-angle-small-down"></i>
                </div>
                <div class="support-list-dropdown" id="support-list-dropdown-3">
                    <p>Primeiramente, o cálculo é feito de acordo com o seu consumo de energia elétrica. Ex: Se você gasta 500 khr de energia elétrica, vamos fazer um projeto de energia solar ☀️ pra gerar 1000 khr porque a tendência é o cliente ficar mais a vontade, usar mais o ar condicionado, incluir panelas elétricas pra economizar no gás e etc...</p>
                </div>
            </div>

            <div class="support-list-item-container" @click="open_dropdown('support-list-dropdown-4')" data-aos="fade-up" data-aos-duration="1000">
                <div class="support-list-item">
                    <p>Como é feita a instalação do medidor?</p>
                    <i class="fi fi-ts-angle-small-down"></i>
                </div>
                <div class="support-list-dropdown" id="support-list-dropdown-4">
                    <p>Primeiramente o técnico vai até sua casa e faz uma série de perguntas sobre os equipamentos elétricos que você vai colocar na sua casa. Com essas informações ele faz o cálculo e define o tipo de padrão, monofásico, bifásico ou trifásico e bitola do cabo e o disjuntor que vai ser instalado no padrão. Depois que a montagem do padrão é feita a empresa tem 5 dias úteis pra instalar o medidor de energia elétrica.</p>
                </div>
            </div>

            <div class="support-list-item-container" @click="open_dropdown('support-list-dropdown-5')" data-aos="fade-up" data-aos-duration="1000">
                <div class="support-list-item">
                    <p>Fornecem garantia?</p>
                    <i class="fi fi-ts-angle-small-down"></i>
                </div>
                <div class="support-list-dropdown" id="support-list-dropdown-5">
                    <p>Sim, a partir do serviço finalizado, fornecemos 3 meses de garantia contra defeitos.</p>
                </div>
            </div>
            
        </div>
    </section>
</template>

<style lang="scss">
@import "/resources/sass/pages/support.scss";
</style>

<script>
    export default {
    methods: {
        open_dropdown(id) {
            const dropdowns = document.querySelectorAll('.support-list-dropdown');
            
            dropdowns.forEach(dropdown => {
                dropdown.classList.remove('show-flex');
            });

            const dropdown = document.getElementById(id)
            
            dropdown.classList.toggle('show-flex');
            

        }
    },
 }
</script>