@extends('layouts.app')

@section('content')
        @if($type == 'solar-energy')
                <servicedetails-component
                        img_url="/img/bg-hero-4.jpg"
                        type="Energia<br> Solar"
                        desc="A Eris revoluciona o uso da energia solar ao integrá-la como uma das principais soluções de eletricidade renovável. Nossa plataforma oferece uma visão detalhada e precisa de como aproveitar o poder do sol para gerar energia limpa e eficiente, reduzindo custos e contribuindo para a preservação do meio ambiente."
                ></servicedetails-component>
                <benefits-component
                        title_1="Sustentabilidade"
                        text_1="<b>Energia limpa:</b> A energia solar é renovável e não emite gases poluentes, como dióxido de carbono (CO₂), durante sua geração.<br><br><b>Redução da pegada de carbono:</b> Ao substituir fontes de energia tradicionais, como carvão e gás, a energia solar contribui para a diminuição da pegada de carbono e o combate às mudanças climáticas."
                        title_2="Redução a Longo Prazo"
                        text_2="<b>Baixo custo de manutenção:</b> Após a instalação, o custo de manutenção de um sistema solar é relativamente baixo. Os painéis solares geralmente têm uma vida útil de 25 a 30 anos.<br><br><b>Economia na conta de energia:</b> A produção de energia solar pode reduzir significativamente os custos de eletricidade, principalmente se o sistema for dimensionado corretamente para as necessidades do local."
                        title_3="Independência Energética"
                        text_3="<b>Redução da dependência da rede elétrica:</b>   Com um sistema solar fotovoltaico, você pode gerar sua própria eletricidade, diminuindo a dependência de fornecedores externos.<br><br><b>Possibilidade de armazenamento de energia:</b> Ao integrar sistemas de baterias, é possível armazenar energia solar para ser usada à noite ou em dias nublados."
                        title_4="Tecnologia em Expansão"
                        text_4="<b>Desenvolvimento contínuo:</b> A tecnologia de painéis solares está em constante aprimoramento, com aumentos na eficiência e redução de custos de produção. Isso torna a energia solar cada vez mais acessível."
                        title_5="Benefícios Econômicos"
                        text_5="<b>Incentivos e subsídios:</b> Em muitos países, há incentivos fiscais, subsídios ou financiamentos acessíveis para a instalação de sistemas solares, o que pode reduzir significativamente o custo inicial.<br><br><b>Valorização do imóvel:</b> Propriedades com sistemas de energia solar tendem a se valorizar no mercado, uma vez que as pessoas preferem imóveis que possuem fontes de energia renováveis e de baixo custo."
                        title_6="Simplicidade e Escalabilidade"
                        text_6="<b>Fácil instalação e escalabilidade:</b> A instalação de sistemas solares é relativamente simples e pode ser feita tanto em residências quanto em empresas. Além disso, o sistema pode ser expandido conforme a necessidade, aumentando o número de painéis solares ou a capacidade de armazenamento."
                ></benefits-component>
                <support-component></support-component>
        @endif

        @if($type == 'home-electrical')
                <servicedetails-component
                        img_url="/img/residencial.webp"
                        type="Elétrica<br> Residencial"
                        desc="A Eris oferece um serviço completo de elétrica residencial, focado em atender às necessidades dos lares modernos com soluções eficientes, seguras e personalizadas. Nossa equipe de profissionais qualificados está preparada para lidar com instalações, manutenções e atualizações elétricas, garantindo o funcionamento ideal dos seus sistemas."
                ></servicedetails-component>
                <benefits-component
                        title_1="Segurança Garantida"
                        text_1="A segurança do seu lar é nossa prioridade. Todos os serviços realizados pela Eris seguem rigorosamente as normas técnicas e regulamentos de segurança, minimizando qualquer risco de curtos-circuitos, sobrecargas, choques elétricos ou incêndios. Nossa equipe está altamente treinada para lidar com situações complexas, assegurando que sua rede elétrica funcione de maneira confiável e segura em todos os momentos."
                        title_2="Eficiência Energética"
                        text_2="Projetamos e implementamos sistemas que otimizam o consumo de energia, reduzindo desperdícios e promovendo economia nas contas de luz. Utilizamos tecnologias modernas e materiais de alta qualidade, garantindo um desempenho eficiente e sustentável. Seja na instalação de novos sistemas ou na modernização dos existentes, nossa abordagem é focada em soluções que beneficiem tanto o seu bolso quanto o meio ambiente."
                        title_3="Atendimento Personalizado"
                        text_3="Cada residência tem suas particularidades, e na Eris, entendemos isso. Oferecemos soluções personalizadas que atendem às necessidades específicas de cada cliente, seja para uma pequena reparação ou para um projeto elétrico completo. Trabalhamos lado a lado com você, ouvindo suas demandas e oferecendo as melhores alternativas para garantir sua satisfação e conforto."
                        title_4="Profissionais Qualificados"
                        text_4="Nossa equipe é composta por profissionais altamente capacitados, com experiência em diferentes tipos de sistemas elétricos. Além disso, estamos sempre atualizados com as tendências e avanços tecnológicos, garantindo que você receba um serviço de alta qualidade, utilizando as melhores práticas e ferramentas disponíveis no mercado."
                        title_5="Agilidade e Pontualidade"
                        text_5="Valorizamos o seu tempo e entendemos a importância de cumprir prazos. Nossa equipe é treinada para executar os serviços de forma ágil e eficiente, sem comprometer a qualidade. Seja qual for o tamanho ou complexidade do projeto, garantimos o mínimo de interrupção na sua rotina, com total respeito aos horários combinados."
                        title_6="Valorização do Imóvel"
                        text_6="Um sistema elétrico bem projetado e funcional não só proporciona conforto e segurança, mas também aumenta o valor do imóvel. Com nossas soluções, você terá uma instalação elétrica moderna, eficiente e visualmente organizada, tornando seu lar mais atrativo e valorizado no mercado."
                ></benefits-component>
                <support-component></support-component>
        @endif

        @if($type == 'preventive-maintenance')
                <servicedetails-component
                        img_url="/img/manu.jpg"
                        type="Manutenção<br> Preventiva"
                        desc="A Manutenção Preventiva da Eris é uma solução proativa e essencial para garantir o bom funcionamento e a segurança do seu sistema elétrico. Em vez de esperar que falhas aconteçam e causem danos ou interrupções, nosso serviço de manutenção preventiva é planejado para identificar e corrigir problemas antes que eles afetem sua residência ou empresa."
                ></servicedetails-component>
                <benefits-component
                        title_1="Prevenção de Falhas"
                        text_1="A manutenção preventiva é a chave para detectar problemas ocultos ou que estão prestes a surgir. Inspeções regulares ajudam a identificar fios desgastados, conexões frouxas, sobrecarga de circuitos ou outros problemas antes que causem uma falha ou interrupção. Isso assegura que seu sistema elétrico funcione de maneira contínua e confiável."
                        title_2="Redução de Custos"
                        text_2="Ao realizar manutenções periódicas, você evita o custo elevado de reparos emergenciais. As falhas inesperadas podem ser caras, tanto pelo reparo quanto pela possível perda de equipamentos ou energia. Investir em manutenção preventiva é uma forma inteligente de reduzir esses custos e evitar imprevistos."
                        title_3="Planejamento Personalizado"
                        text_3="A manutenção preventiva é feita de acordo com a necessidade específica de cada instalação elétrica. Nossa equipe realiza um diagnóstico detalhado e cria um plano de manutenção que se ajusta ao seu sistema, garantindo que ele receba o cuidado necessário."
                        title_4="Aumento da Vida Útil"
                        text_4="Com a manutenção preventiva, você protege e aumenta a durabilidade dos seus dispositivos e sistemas elétricos. Identificar falhas precoces e realizar reparos rápidos evita o desgaste excessivo e o uso de equipamentos de forma incorreta, o que prolonga a vida útil de seus aparelhos e instalações."
                        title_5="Agilidade e Pontualidade"
                        text_5="Valorizamos o seu tempo e entendemos a importância de cumprir prazos. Nossa equipe é treinada para executar os serviços de forma ágil e eficiente, sem comprometer a qualidade. Seja qual for o tamanho ou complexidade do projeto, garantimos o mínimo de interrupção na sua rotina, com total respeito aos horários combinados."
                        title_6="Valorização do Imóvel"
                        text_6="Um sistema elétrico bem projetado e funcional não só proporciona conforto e segurança, mas também aumenta o valor do imóvel. Com nossas soluções, você terá uma instalação elétrica moderna, eficiente e visualmente organizada, tornando seu lar mais atrativo e valorizado no mercado."
                ></benefits-component>
                <support-component></support-component>
        @endif

        @if($type == 'innovative-lighting')
        <servicedetails-component
                img_url="/img/bg-hero-3.jpg"
                type="Iluminação<br> Inovadora"
                desc="A Iluminação Inovadora da Eris vai além do simples ato de iluminar; nós criamos experiências visuais únicas que combinam funcionalidade, estética e tecnologia avançada. Nosso serviço de iluminação oferece soluções personalizadas para transformar ambientes residenciais e comerciais, proporcionando uma atmosfera acolhedora, moderna e eficiente."
        ></servicedetails-component>
        <benefits-component
                title_1="Soluções para Cada Ambiente"
                text_1="Entendemos que cada espaço tem suas características e necessidades próprias. Por isso, nossa equipe de especialistas desenvolve projetos de iluminação sob medida para valorizar os pontos fortes de cada ambiente. Seja uma sala de estar, um escritório, uma área externa ou um espaço comercial, criamos soluções que se alinham perfeitamente com o estilo e a funcionalidade do local."
                title_2="Tecnologia LED"
                text_2="Apostamos em tecnologias de ponta, como as lâmpadas LED, que além de duráveis, consomem menos energia e têm um impacto ambiental reduzido. Nossos projetos de iluminação são pensados para maximizar a eficiência energética, reduzindo suas contas de energia e tornando o seu espaço mais sustentável."
                title_3="Controle Inteligente"
                text_3="Oferecemos soluções de automação que permitem o controle remoto da iluminação, seja por meio de aplicativos, sensores de movimento ou controle por voz. Com a iluminação inteligente, você pode ajustar a intensidade, a cor e a temperatura da luz para criar diferentes ambientes, tudo de forma prática e conveniente."
                title_4="Design Moderno"
                text_4="Nossa iluminação é projetada para combinar com os mais variados estilos de decoração, desde o mais clássico até o mais contemporâneo. Utilizamos luminárias inovadoras, soluções de luz indireta e técnicas de iluminação arquitetural para criar atmosferas sofisticadas e agradáveis, com um toque de modernidade."
                title_5="Valorização Estética"
                text_5="A iluminação certa pode transformar radicalmente a aparência de um ambiente. Nossos projetos utilizam técnicas que destacam a arquitetura, os móveis e os elementos decorativos do espaço, criando um ambiente mais convidativo e visualmente interessante."
                title_6="Bem-estar e Conforto"
                text_6="A iluminação tem um impacto direto no nosso humor e bem-estar. Através de diferentes tipos de luz, conseguimos criar ambientes mais relaxantes ou energizantes, promovendo um ambiente mais saudável e agradável para os moradores, colaboradores ou clientes."
        ></benefits-component>
        <support-component></support-component>
        @endif

        @if($type == 'meter-installation')
        <servicedetails-component
                img_url="/img/medidor.jpg"
                type="Instalação<br> Medidor"
                desc="A Instalação de Medidor da Eris é uma solução essencial para garantir o controle preciso e eficiente do consumo de energia elétrica em sua residência ou empresa. Com um serviço especializado, oferecemos a instalação de medidores de energia de alta qualidade, que permitem o monitoramento detalhado e transparente do uso da eletricidade."
        ></servicedetails-component>
        <benefits-component
                title_1="Precisão no Monitoramento"
                text_1="Nossos medidores de última geração proporcionam leituras precisas e confiáveis do seu consumo de energia elétrica. Isso permite que você acompanhe de perto o uso de energia, identifique possíveis desperdícios e tome medidas para otimizar o consumo e reduzir os custos com a conta de luz."
                title_2="Atendimento Profissional"
                text_2="Nossa equipe é composta por eletricistas altamente qualificados e certificados, que seguem todas as normas e regulamentos técnicos para garantir que a instalação seja realizada com segurança e eficiência. Com a Eris, você tem a certeza de que o serviço será realizado de acordo com os padrões exigidos."
                title_3="Controle e Planejamento"
                text_3="Com o medidor instalado corretamente, você terá acesso a dados detalhados sobre o seu consumo de energia, o que facilita o planejamento do uso de eletricidade. Isso é particularmente útil para empresas que precisam de um controle rigoroso sobre os gastos com energia e para residências que buscam reduzir seus custos mensais."
                title_4="Acompanhamento e Suporte"
                text_4="Após a instalação, a Eris oferece suporte contínuo para garantir que o medidor continue funcionando corretamente. Caso haja qualquer problema ou necessidade de ajustes, nossa equipe está sempre disponível para resolver rapidamente qualquer questão, garantindo a continuidade do monitoramento do consumo de energia."
                title_5="Segurança e Confiabilidade"
                text_5="Ao confiar na Eris para a instalação de seu medidor, você tem a garantia de que todos os procedimentos serão realizados com a máxima segurança. Utilizamos equipamentos de qualidade e seguimos protocolos rigorosos para assegurar que a instalação e o funcionamento do medidor atendam aos mais altos padrões de segurança."
                title_6="Normas Técnicas"
                text_6="Trabalhamos de acordo com as normas da ANEEL (Agência Nacional de Energia Elétrica) e outras regulamentações locais para garantir que a instalação do medidor esteja em total conformidade com os requisitos técnicos e legais. Isso assegura a validade das leituras de consumo e a integridade do sistema."
        ></benefits-component>
        <support-component></support-component>
        @endif
        
        
@endsection