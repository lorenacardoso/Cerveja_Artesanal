<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="css/estilo.css">
			<link rel="stylesheet" type="text/css" href="css/sobre.css">
			<meta name="viewport" content="width=device-width, initial-scale-1.0">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
			<style>
				.mySlides {display:none}
				.w3-left, .w3-right, .w3-badge {cursor:pointer}
				.w3-badge {height:13px;width:13px;padding:0}
			</style>
		</head>
		<body>
			<header>
				<nav class="menu-container">
					<ul class="menu clearfix">
						<li><img src="img/icone.png" height="60" width="80"></li>
						<li><a href="">Sobre</a></li>
						<li><a href="">Atendimentos</a></li>
						<li><a href="">Cursos</a></li>
						<li><a href="">Contato</a></li>
						<div id="divBusca">
							<input type="text" id="txtBusca" placeholder="Buscar..."/>
						</div>
					</ul>
						<div class="w3-content w3-display-container" style="max-width:800px">
						  <img class="mySlides" src="img/1.png" style="width:100%">
						  <img class="mySlides" src="img/2.png" style="width:100%">
						  <img class="mySlides" src="img/3.png" style="width:100%">
						  <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
						    <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
						    <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
						    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
						    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
						    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
						  </div>
						</div>

						<script>
							var slideIndex = 1;
							showDivs(slideIndex);

							function plusDivs(n) {
							  showDivs(slideIndex += n);
							}

							function currentDiv(n) {
							  showDivs(slideIndex = n);
							}

							function showDivs(n) {
							  var i;
							  var x = document.getElementsByClassName("mySlides");
							  var dots = document.getElementsByClassName("demo");
							  if (n > x.length) {slideIndex = 1}
							  if (n < 1) {slideIndex = x.length}
							  for (i = 0; i < x.length; i++) {
							    x[i].style.display = "none";  
							  }
							  for (i = 0; i < dots.length; i++) {
							    dots[i].className = dots[i].className.replace(" w3-white", "");
							  }
							  x[slideIndex-1].style.display = "block";  
							  dots[slideIndex-1].className += " w3-white";
							}
						</script>
						<header class = container>
						<h1>CERVEJARIA NORTE</h1>

						<h2>Seja bem-vindo a nossa página.</h2>
						<ul>
							<li>Confira nossas cervejas</li>
							<li>Receba informações de novos tipos de cerveja</li>
							<li>Deguste todos os tipos</li>
						</ul>
						<h3>
							Aprenda um pouco sobre Cervejas Artesanais:
						</h3>
						  
						<h4>
							É uma bebida com teor alcoólico carbonatada, ou seja, são bebidas que são gaseificadas com gás carbônico, tais como os refrigerantes e alguns espumantes. São produzidas através de fermentação e as principais matérias-primas são: água, malte, lúpulo e fermento.

							Agora que já temos noção do que é uma cerveja, vamos desmistificar um maravilhoso mundo onde esse precioso líquido se encontra

							E afinal, qual a diferença entre tipos e estilos de cervejas?

							Os tipos de cerveja querem dizer a família que pertencem e também um pouco sobre o seu processo de fabricação. Quanto o assunto é tipo as cervejas são classificadas em Ales e Lagers e o que as difere é a fermentação, sua coloração (clara ou escura) e o teor de álcool.

							Já os estilos e subestilos querem dizer o padrão de combinar estes elementos. Como por exemplo uma batata, a frita seria um estilo, a assada outro e por aí vai mas no final das contas todas são batata, mas cada uma tem alguns elementos do preparo que são diferenciados entre si.
							
							<p>Família Lager: </p>
						
							A mais consumida no Brasil. Estas cervejas se diferem pela fermentação no seu processo de fabricação. São cervejas mais carbonatas e por isso sua aceitação junto ao público é maior. O fermento utilizado inicia sua fermentação em temperatura mais baixa, por volta de 6 a 12 graus, ficando acumulado no fundo dos tanques.

							É conhecida como a família das cervejas de baixa fermentação, que são douradas e filtradas, mas possuem algumas versões mais escuras.

							Existem algumas subdivisões no mundo cervejeiro:
						
							<p>		1.Pilsner: </p> 
							Também conhecidas como Pilsen por aqui. Seu aroma e sabor são acentuados pelo lúpulo, por isso um leve amargor. São claras, com baixo corpo e fácil de beber. Seu processo de produção apresenta uma baixa fermentação e ela também tem um baixo teor alcoólico e com um final seco.

							É também de longe o tipo de cerveja mais consumido no Brasil.
						
							<p>		2.American Lager: </p>
							Apesar de serem denominadas como Pilsen no Brasil, elas são Lager. Fácil de beber, pouco amargor, final relativamente seco, aroma suave de cereais, cor dourada e cristalina. As marcas mais comuns no Brasil são dessa classificação, como Skol, Brahma e Kaiser — e são vendidas como pilsner pela aceitação do público.

							<p>3. Premium Lager: </p>
							Um outro estilo americano que se assemelha ao American Lager, mas possuem mais lúpulo e mais malte se tomarmos a American Lager como objeto de comparação, mas já com os outros estilos possui menos malte e pouco aroma  de lúpulo. E sua cor beira o dourado, uma cerveja com um corpo médio.

							Temos como exemplos famosos vendidos no Brasil a Heineken e Stella Artois.

							<p>4. Helles:</p>
							Cerveja produzida e consumida em larga escala na região da Bavaria, Alemanha. É considerada uma cerveja com destaque em seu malte e com menos lúpulo no preparo — por isso um baixo amargor. Seu malte evidencia um sabor de pão e biscoitos, e curiosamente consumida em alguns cafés da manhã na Alemanha.

							<p>5. Dortmunder Export:</p>
							Também produzida e muito consumida na Alemanha, mas na região de Dortmund. Seu malte e lúpulo são equilibrados, trazendo uma sensação adocicada do malte e também um forte amargor, diferente das Lagers consumidas normalmente.

							Sua cor é dourado claro que pode atingir uma escala mais escura, além de ter uma espuma bem consistente.

							<p>6. Japanese Rice Lager:</p>
							Também conhecida como Dry-Beer, esse estilo de cerveja não tem tanto apelo e também não é tão famosa ou  consumida por aqui.

							Se trata de uma cerveja originárias do Japão e feitas com arroz, o longo período de fermentação transforma quase todo o açúcar em álcool. Tem sabor suave.

							<p>Estilo Dark Lager:</p>
							São cervejas escuras, com um baixo corpo, boa carbonatação e também apresentam teor de refrescância.

							<p>1. Munich Dunkel:</p>
							Considerada a original Dark Lager da Europa e curiosamente Dunkel quer dizer escuro em alemão. É uma cerveja de baixa fermentação e coloração marrom escura – como dito anteriormente. Seu malte Munich dá a ela um doce amargor e notas de chocolate, caramelo e nozes.

							<p>2. American Dark Lager:</p> 
							São cervejas escuras escuras, tem baixo corpo, boa carbonatação, espuma (tende para a cor dourada) e também são muito refrescantes. Seu aroma quase não aparece na cerveja, sendo difícil notar o malte ou lúpulo nela. Já a cor varia entre âmbar e marrom escuro. 

							<p>3. Malzbier:</p>
							Talvez a mais famosa Dark Lager encontrada no Brasil, já foi mais consumida do que é hoje, mas ainda assim é produzida por grandes cervejarias como Brahma, Antarctica e Itaipava. Escura e doce, teor alcoólico baixo, após a fermentação é acrescentado xarope de açúcar e caramelo.

							Sua coloração escura não vem do malte tostado mas sim da adição do xarope e açúcar na sua produção.

							<p>4. Schwarzbier:</p>
							É uma cerveja realmente preta, com diz seu nome, mais escura até que a Munich Dunkel.

							O aroma que prevalece é o do malte mas moderadamente. Pode ser notado em baixo teor o malte tostado e a cerveja apresenta notas de caramelo, café ou chocolate em um leve doce – mas é importante saber que o doce sentido na cerveja é baixo, por isso não deve ser confundida com o estilo Malzbier.

							<p>Estilo Bock:</p>

							São conhecidas por serem cervejas lagers com a coloração escura, saindo um pouco da tradição e com fortes características do malte, dando a elas notas de caramelo e de pão tostado.

							<p>1. Tradicional Bock:</p>
							Devido a mudanças feitas em últimos guias de estilos da BJCP, a tradicional bock passou a ser conhecida como Dunkless Bock e apresenta as mesmas características.

							Em seu aroma o malte é moderadamente percebido como pão, já o lúpulo é quase não perceptível e também está em menor evidência no sabor da cerveja, o suficiente para equilibrar com o malte. Sua cor se varia entre o cobre claro ou um marrom consistente — consistência que também é percebida em sua espuma.

							<p>2. Doppelbock:</p>
							A cerveja nasceu de uma história curiosa, porque monges da ordem franciscana precisavam fazer jejum de 40 dias e era estritamente restrito o consumo de alimentos sólidos, por isso fabricaram a Doppelbock e a chamavam de “Salvator” (Salvador) por salvar os monges da fome.

							É mais forte que a Dunkless Bock e seu teor alcoólico pode variar entre 7% – 10%. Sua coloração ganha destaque, pois podemos ver versões que variam da âmbar até um vermelho rubi, dando uma grande beleza somada ao colarinho cremoso da cerveja.

							Em seu gosto e aroma quase não se dá para notar o lúpulo, dando um destaque maior ao malte tostado.

							<p>3. Helles Bock:</p>
							O estilo de cerveja Bock que apresenta a coloração clara. São produzidas no inverno para serem consumidas na primavera européia.

							Sua cor vai do dourado até o âmbar e o seu aroma de moderado até intenso se tratando do malte da cerveja, com muito pouco ou nada de lúpulo perceptível. Já o sabor podemos perceber que as características do malte europeu predominam — principalmente as notas de malte tostado.

							<p>Estilo European Lager:</p>
							Conhecido como um agrupamento de estilos europeus caracterizados por terem um maior teor alcoólico e também o mesmo tipo de fermentação.

							<p>1. Vienna:</p>
							Uma cerveja criada na cidade de Viena, na Austria, em 1840 por Anthon Dreher, daí o seu nome. Utiliza os maltes da região, o malte Vienna para darem uma característica leve para a cerveja.

							Por conta da industrialização é teoricamente difícil encontrar uma cerveja que mantenha uma boa receita e também original, por isso é comum notarmos diferenças entre a versão americana — mais amarga e fortes — enquanto as produzidas na Europa tendem a ser adocicadas.

							Sua aparência varia entre âmbar e cobre claro, já seu aroma é leve e com poucas características do lúpulo e sutileza do malte

							<p>2. Marzen Lager:</p>
							Cervejas originalmente produzidas na Bavária e em específico no mês de Março (März em alemão) durante a primavera para ser consumida no outono, estação em que se celebra a Oktoberfest.

							Apresenta um teor alcoólico um pouco mais alto e a coloração varia entre âmbar e marrom. Seu aroma é bem leve e conseguimos sentir notas de pão tostado e também um pouco de lúpulo, já seu sabor é levemente adocicado e é possível perceber um pouco de caramelo.

							<p>Família Ale:</p>
							O que diferencia uma Ale e uma Lager é o seu processo de fermentação, mais alto no caso da Ale. A fermentação ocorre dentro de um ambiente com temperaturas altas, entre 15º e 24º graus, em alguns casos até mais que isso no curto tempo de três a cinco dias.

							Foram as queridinhas até os meados do século XIX e só perderam o seu posto quando inventaram cervejas de baixa fermentação, as Lagers.

							A fermentação baixa, conhecida também por fermentação quente, desperta os variados sabores dos conteúdos da cerveja, lúpulo, e frutas se tornam mais acentuados.

							São cervejas mais encorpadas e o seu sabor varia entre o doce ao amargo e sua cor também acompanha o ritmo variando das mais claras até as mais escuras. Por estas razões é que existem diferentes sub estilos dentro da Ale, tamanho é o seu poder de variação.

							Vamos conhecer um pouco alguns de seus sub estilos:

							<p>Estilo Pale Ale:</p> 
							Foram criadas para competir com as cervejas Pilsens na época da guerra. São suaves com toques amendoados também possui seus sub estilos:

							<p>1. American Pale Ale:</p>
							Variação mais popular da Pale Ale, sua coloração  vai de dourado pálido a âmbar profundo, aroma lembra crosta de pão tostada, amargor médio mas com final suave. Nos Estados Unidos são divididas entre East Coast e West Coast e sua diferenciação se dá na receita das cervejas.

							<p>2. English IPA:</p>
							É a primeira variação do estilo a ser feita e histórias dizem que foi produzida pelos ingleses enquanto viajavam para a Índia. Tem cor de dourada a cobre profundo, aroma terroso de lúpulos ingleses e de malte, baixo nível de álcool e extremamente fácil de beber.

							Cervejas de cor clara, possuem menos lúpulo do que a versão americana e é bem balanceada se tratando de um estilo que utiliza muito o lúpulo em suas receitas.

							<p>3. American Amber Ale:</p>
							Também conhecida simplesmente como Red Ale, esta cerveja se parece muito com a America Ale e o que diferencia é sua cor que pode variar entre cobre-claro e cobre. Sua composição final contém menos lúpulo, menos álcool e também menos intensidade que a American Ale, dando a ela um caracter mais leve e equilibrado.

							<p>4. American Strong Ale:</p>
							São fortes e com alto teor alcoólico. Na parte sensorial, são consideradas cervejas com muito sabor por conta do seu maior teor de lúpulo e malte na composição. Aromas cítricos são presentes na cerveja e sua cor pode variar de âmbar até o cobre-claro. E é claro, também é uma cerveja de origem americana.

							<p>Estilo Altibier:</p>
							Cerveja Ale produzida na Alemanha e que é considerada uma cerveja velha, pois seu tempo para maturar é mais demorado.

							A Altibier se caracteriza por ter a coloração cobre e que realça a cerveja, é bem balanceada por sua complexidade, com pouco gás e combinação perfeita de lúpulo e malte — que confere o aroma tostado, de pães a cerveja.

							<p>Estilo Trigo:</p> 
							Cervejas de trigo.

							São totalmente refrescantes e possuem baixo amargor com alta carbonatação. Podem apresentar aromas de banana, chocolate, malte torrado ou de especiarias.

							<p>1. Weissbier:</p>
							A Weissbier (ou Weizenbier) é uma tradicional cerveja alemã em que sua composição contém pelo menos 50% de malte de trigo e restante é composto por malte de cevada. Existe uma grande dúvida em relação ao seu nome, é comum encontrar rótulos de cerveja que digam “Weizenbier” e outros com o nome de “Weissbier”.

							A diferença é que Weizen significa trigo e faz uma alusão a sua composição, já Weiss quer dizer branco, dando destaque a clareza que a cerveja possui, ambos faltam de características diferentes e surgiram por serem termos regionais (Norte e Sul) mas se tratam da mesma cerveja  de trigo, clara e com um colarinho branco e de espuma consistente.

							<p>2. Hefeweizen:</p>
							Uma subdivisão das cervejas de trigo porque se trata de um estilo não filtrado. Hefe significa levadura e seu nome que diz respeito a característica turva da cerveja. Por isso o costume de virar uma cerveja de trigo de cabeça para baixo, pois como não é filtrada, as leveduras se misturam ao resto da cerveja, incrementando sua composição.

							Sua cor não será tão clara quanto as outras, um tom mais vermelho dando intensidade e carregando a cor amarela do estilo Weiss.

							<p>3. Dunkelweizen:</p>
							São cervejas de trigo escuras, porque Dunkel dignifica justamente escuro em alemão – assim como a Munich dunkel. Assim como as outras cervejas de trigo, possui pelo menos %50 de malte de trigo, a diferença é que grande parte dessa porcentagem se trata de maltes torrados ou caramelizados, por isso a cor escura.

							Uma cerveja com corpo médio para encorpado e em seu sabor podem ser notados tons de cravo, banana, baunilha e até levemente tuti-fruti. Sua cor característica é um marrom escuro.

							<p>4. Weizenbock:</p>
							Essa cerveja é derivada do estilo alemão Bock e mantém várias de suas características. Se trata de uma cerveja de trigo com maltes tostados e sua coloração varia de cobre a um vermelho escuro, rubi.

							Em seu aroma é perceptível a presença de banana, cravos e também frutas escuras. Já no paladar não se nota muito o lúpulo, predominando o sabor do malte de trigo e também a forte presença do álcool.

							<p>5. Witbier:</p>
							A Witbier é uma famosa cerveja de trigo produzida na Bélgica, um reduto cervejeiro nesse mundo. Apesar de ser uma Weiss, suas características são totalmente diferente das demais por ser uma cerveja bem leve e apresentar coentro e frutas — na maioria das vezes laranja mas também encontrada com cascas de limão.

							Cerveja com baixa graduação alcoólica e um corpo bem leve, dando muita drinkability para ela.

							Sua coloração é um amarelo bem claro e uma grande turbidez. Por ser leve é altamente refrescante e um estilo recomendado para quem quer tomar cerveja belga com um baixo teor alcoólico.

							<p>6. Berliner Weisse:</p>
							O Berliner no nome significa que são cervejas que são produzidas em Berlim e existe uma lei que garante esse nome somente à elas.

							É uma cerveja clara, bem leve e refrescante, sua principal característica que a torna diferente de outras do tipo Wiess é a sua sua acidez, que pode ser adicionada de algumas maneiras no processo de produção – principalmente pela utilização de lactobacilos no mosto.

							Originalmente sua cor é clara, mas por conta da adição de frutas, pode tomar outras cores, como por exemplo cobre e até verde. Em seu aroma e sabor podemos percebemos a acidez, principal característica da cerveja.

							<p>Estilo Porter:</p>
							Muito comum que se confunda com a Stout, ela é mais suave e seu teor alcoólico é um pouco mais baixo se comparado com a Stout. Esse tipo de cerveja tem um tom mais escuro e apresentam sabor e aromas de café, chocolate e caramelo.

							<p>Stout</p>
							Antigamente esse estilo de cerveja era denominado um sub-estilo da Porter, eram denominas Stout Porter, sendo assim muito comum a confusão entre esses dois estilos.

							As Stouts são escuras, quase negras com sabor adocicado que lembra chocolate, café ou malte torrado. Tem alto teor alcoólico e pouca carbonatação.

							Sempre que falamos da Stout uma cerveja vem na cabeça: a Guiness é a principal cerveja desse estilo e é vendida no mundo inteiro.

							Assim como outros estilos, temos também algumas variações do estilo Stout:

							<p>Dry Stout;</p>
							<p>American Stout;</p>
							<p>Sweet Stout;</p>
							<p>Oatmeal Stout;</p>
							<p>Russian Imperial Stout;</p>
							<p>Família Lambic;</p>
							<p>familia cerveja lambic.</p>

							Classificada como uma terceira categoria nos tipos de cerveja por sua fermentação, que é espontânea e causa pelas leveduras selvagens do ambiente. Suas características estão mais interligadas às regiões em que são fabricadas e também seus tanques de produção são abertos. Sim, algo bem natural e até rústico.

							São cervejas claras, ácidas e também maturadas em madeira. Seu gosto é mais azedo e seu aroma vai desde os frutados aos cítricos e são consideradas o tipo de cerveja mais antigo existente no mundo.

							Também possui algumas subdivisões:

							<p>1. Gueuze:</p> 
							É uma mistura de Lambic jovem e velha e que vai para uma segunda fermentação em barris de carvalho. Seu gosto é menos ácido, amarga e forte, mas leve e adocicada ao mesmo tempo, totalmente balanceada, semelhante ao champagne.

							<p>2. Faro:</p> 
							Mais leve, saborosa e sem a acidez, que é característica das Lambics.

							É uma cerveja com um baixo teor alcoólico e marcada pela sua cor, âmbar. Antigamente na Bélgica eram consideradas de sabor complexo por se tratar de um blend de estilos, mas hoje em dia essa característica se perdeu e ela acaba sendo considerada uma Lambic clássica com adição de açúcar.

							<p>3. Fruit Lambic:</p> 
							Após o processo de fermentação iniciar é acrescentado frutas. São muito ácidas e apresentam um sabor que pode ser seco ou até adocicada — característica de algumas outras Lambics citadas acima.

							As cervejas mais famosas desse estilo de produção têm a adição de frutas como cereja (Lambic  Kriek), framboesa (Lambic Framboise), pêssego (Lambic Pêche) e maçã (Lambic Pomme).

							Seu teor alcoólico baixo e uma curiosidade é que levam cerca de três anos descansando em barris de carvalho, dando um gosto a mais e um caráter especial a esse tipo de cerveja.

							<p>4. Straight Lambics:</p>
							É uma pura Lambic com 1 ano de maturação. É seca e muito ácida.

							São Lambics puras que ao completarem um ano de maturação são vendidas na pressão em cafés e restaurantes belgas (essas não são engarrafadas ou exportadas). Sua característica é ausente de carbonatação, seca e muito ácida.

							A cerveja sempre foi a melhor opção numa mesa de um bar, mas de uns tempos pra cá ela ganhou status e uma variedade de sabores, aromas e tons, sendo uma bebida para todos os gostos.
							</h4>
						</header>
				</header>
		</body>
	</html>
