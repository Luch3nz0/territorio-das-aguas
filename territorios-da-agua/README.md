# Territórios da Água - Tema WordPress Gutenberg

Este repositório entrega um tema WordPress de blocos para o site institucional de página única do projeto Territórios da Água. O tema foi criado para ser editado no Gutenberg e no Site Editor, sem Elementor, Divi, ACF Flexible Content ou outro construtor de páginas.

## Visão geral

O site é uma página longa organizada nesta ordem:

1. Início / Hero
2. Introdução
3. Sobre o Projeto
4. Contextualização do Projeto
5. Programa de Conservação e Recuperação das APPs
6. Avaliação das Intervenções em APPs
7. Tipologias de APPs
8. Mapas Interativos
9. Projetos Piloto
10. Eventos
11. Biblioteca
12. Quem Somos

As fontes de conteúdo são `Lista Atualizada.pdf`, `tda (1).pdf` e `landing-tda-paleta-oficial.html`, nessa ordem de prioridade. O HTML foi usado apenas como referência visual de ritmo, composição e espaçamento.

Ainda existem estes pontos com conteúdo pendente: Hero, Introdução, Sobre o Projeto, Contextualização do Projeto, Projeto Piloto Baracela, Eventos e Quem Somos. Eles aparecem no site como `[texto]`. A Biblioteca de Publicações Científicas aparece sem link porque a fonte não fornece URL.

## Como acessar a edição

No painel do WordPress, acesse:

`Painel do WordPress -> Aparência -> Editor`

Dentro do Editor, use a barra lateral para abrir:

- `Templates`: modelos de página, incluindo `Página inicial` ou `Front Page`.
- `Pages`: conteúdo editável da página `Territórios da Água`.
- `Cabeçalho`: área com o logo e menu.
- `Rodapé`: navegação complementar.
- `Patterns`: seções prontas do tema.
- `Estilos`: cores, tipografia e ajustes globais.

O tema cria automaticamente a página `Territórios da Água` na ativação e define essa página como inicial. Os textos, imagens e seções da página única ficam como blocos reais dentro dessa página.

## Como alterar um texto

1. Acesse `Aparência -> Editor`.
2. Abra `Pages`.
3. Abra `Territórios da Água`.
4. Abra a `Visualização em lista`.
5. Localize a seção pelo nome, por exemplo `Seção - Programa de Conservação e Recuperação das APPs`.
6. Selecione o bloco `Paragraph` ou `Heading`.
7. Edite o texto.
8. Revise no desktop e no celular.
9. Clique em `Salvar`.

## Como excluir um texto

Selecione o bloco de parágrafo ou título na página. Abra o menu de três pontos e escolha `Remover`.

Apagar o texto dentro de um parágrafo deixa o bloco vazio. Remover o bloco apaga apenas aquele parágrafo. Remover o `Group block` principal apaga a seção inteira. Para desfazer, use `Ctrl+Z`, `Cmd+Z` ou o botão de desfazer do editor.

## Como inserir um texto

1. Selecione o local onde o novo conteúdo deve entrar.
2. Clique no botão `+`.
3. Escolha `Parágrafo` para texto comum.
4. Escolha `Título` para novos subtítulos.
5. Use níveis de título em ordem: `H2` para seções principais, `H3` para subseções e `H4` para detalhes internos.
6. Salve.

## Como substituir uma imagem

1. Selecione o bloco `Image`.
2. Clique em `Substituir`.
3. Escolha `Biblioteca de mídia` ou `Upload`.
4. Preencha o texto alternativo da imagem.
5. Revise a legenda.
6. Salve.

As imagens de infográficos e Parelheiros estão como blocos editáveis, então podem ser substituídas sem alterar código.

## Como inserir nova imagem

1. Clique no botão `+`.
2. Escolha `Imagem` para uma imagem única ou `Galeria` para várias imagens.
3. Faça upload ou escolha na Biblioteca de mídia.
4. Defina alinhamento e tamanho.
5. Preencha o texto alternativo.
6. Use imagens comprimidas e evite arquivos muito pesados.
7. Salve.

## Como excluir uma imagem

Selecione o bloco da imagem, abra o menu de três pontos e escolha `Remover`.

Remover da página não exclui o arquivo da Biblioteca de mídia. Para apagar permanentemente o arquivo, vá até `Mídia -> Biblioteca`, selecione o arquivo e escolha a opção de exclusão permanente.

## Como alterar o menu

1. Acesse `Aparência -> Editor`.
2. Abra `Cabeçalho`.
3. Selecione o bloco `Navigation`.
4. Edite o rótulo do item, por exemplo `Avaliação`.
5. Edite a âncora, por exemplo `#avaliacao-apps`.
6. Adicione ou remova itens quando necessário.
7. Salve.
8. Teste o menu no celular, usando o botão mobile.

Âncoras usadas na página:

- `#sobre-o-projeto`
- `#programa-apps`
- `#avaliacao-apps`
- `#tipologias-apps`
- `#mapas-interativos`
- `#projetos-piloto`
- `#eventos`
- `#biblioteca`
- `#quem-somos`

## Como criar uma nova seção

1. Abra a `Visualização em lista`.
2. Selecione uma seção existente parecida com a nova.
3. Use `Duplicar`.
4. Altere o título.
5. Altere o ID da âncora no bloco principal.
6. Atualize o menu no Cabeçalho.
7. Mantenha a hierarquia de títulos.
8. Revise desktop e celular.
9. Salve.

## Como excluir uma seção

1. Abra a `Visualização em lista`.
2. Selecione o `Group block` principal da seção.
3. Escolha `Remover`.
4. Abra o Cabeçalho.
5. Remova o item correspondente do menu.
6. Salve.

## Como reorganizar seções

Use a `Visualização em lista`. Arraste a seção para a nova posição ou use os comandos `Mover para cima` e `Mover para baixo`. Depois confira se os links do menu continuam apontando para as seções certas.

## Como inserir os mapas futuramente

O tema não carrega Leaflet e não exibe mapa falso. A seção `Mapas Interativos` contém um `Group block` com a classe `tda-map-slot`. No front-end ele fica vazio até que um plugin real seja instalado.

Plugin recomendado: [Leaflet Map](https://wordpress.org/plugins/leaflet-map/)

Fluxo esperado para camadas geográficas:

1. A equipe responsável publica as camadas do GeoPackage `.gpkg` em um servidor geográfico, como GeoServer ou QGIS Server.
2. O servidor disponibiliza WMS, WMTS ou GeoJSON.
3. O cliente obtém a URL do serviço, o nome das camadas, o CRS e eventuais credenciais.
4. O bloco ou shortcode do plugin é inserido dentro de `tda-map-slot`.
5. As camadas e controles são testados no front-end.

Exemplo de shortcode, apenas como modelo:

```text
[leaflet-map fitbounds]

[leaflet-wms
    src="URL_DO_SERVICO_WMS"
    layer="NOME_DA_CAMADA"
    crs="EPSG:3857"
]
```

Substitua `URL_DO_SERVICO_WMS`, `NOME_DA_CAMADA` e `EPSG:3857` pelos dados reais fornecidos pela universidade. Não envie um arquivo `.gpkg` diretamente para o bloco do WordPress.

Para inserir o mapa:

1. Instale e ative o plugin escolhido.
2. Acesse `Aparência -> Editor`.
3. Abra `Templates -> Página inicial`.
4. Localize a seção `Mapas Interativos`.
5. Selecione o grupo `tda-map-slot`.
6. Insira o bloco do plugin ou um bloco `Shortcode`.
7. Preencha URL WMS, layer e CRS reais.
8. Ajuste a altura se o plugin permitir.
9. Teste camadas e controles.
10. Teste em desktop e celular.
11. Limpe cache se necessário.

Para trocar de plugin:

1. Abra o Site Editor.
2. Abra o template da página inicial.
3. Localize `Mapas Interativos`.
4. Selecione `tda-map-slot`.
5. Remova o bloco antigo.
6. Insira o novo bloco ou shortcode.
7. Salve.
8. Limpe cache.
9. Teste desktop e celular.

## Como editar cores e tipografia

Acesse:

`Aparência -> Editor -> Estilos`

Ali é possível editar cores globais e tipografia global. Mudanças globais afetam várias partes do site ao mesmo tempo. A recomendação é não alterar a identidade visual sem aprovação do projeto.

As cores principais configuradas no tema são:

- Azul principal: `#244896`
- Amarelo: `#F6E566`
- Fundo principal: `#FFFDF0`
- Verde: `#6AA84F`
- Azul claro: `#88A5DE`
- Azul médio: `#426EC6`
- Verde claro: `#C1EFAC`

As fontes locais incluídas são Anton e Roboto.

## Como restaurar alterações

Use o botão de desfazer do editor para mudanças recentes. Para mudanças já salvas, verifique as revisões da página ou restaure uma versão anterior. Antes de mudanças grandes, faça backup do site e da base de dados.

## Como instalar o tema

1. Gere ou receba o arquivo `territorios-da-agua.zip`.
2. No WordPress, acesse `Aparência -> Temas`.
3. Clique em `Adicionar novo`.
4. Clique em `Enviar tema`.
5. Selecione o ZIP.
6. Clique em `Instalar agora`.
7. Clique em `Ativar`.
8. Verifique a página inicial.

Na ativação, o tema cria a página inicial automaticamente. Se a página inicial não aparecer, configure em:

`Configurações -> Leitura -> Sua página inicial exibe`

Escolha a opção de página inicial apropriada para a instalação.

## Como executar localmente

Os comandos abaixo devem ser executados na raiz deste repositório.

### Alternativa A - sem Docker, usando wp-env com WordPress Playground

```bash
npm install
npm run wp:start:playground
npm run wp:activate
```

O script usa:

```bash
wp-env start --runtime=playground
```

URL local:

```text
http://localhost:8888
```

Painel:

```text
http://localhost:8888/wp-admin
```

Login padrão do wp-env:

```text
Usuário: admin
Senha: password
```

Para parar:

```bash
npm run wp:stop
```

O runtime Playground é útil para testar sem Docker, mas pode ter limitações em recursos de servidor, persistência e compatibilidade com alguns plugins.

### Alternativa B - com Docker

```bash
npm install
npm run wp:start
npm run wp:activate
```

O script usa:

```bash
wp-env start
```

URL local:

```text
http://localhost:8888
```

Painel:

```text
http://localhost:8888/wp-admin
```

Login padrão:

```text
Usuário: admin
Senha: password
```

Para parar:

```bash
npm run wp:stop
```

Para destruir o ambiente local:

```bash
npm run wp:destroy
```

## Solução de problemas

Tema não aparece: confirme que a pasta `territorios-da-agua` está em `wp-content/themes` ou mapeada no `.wp-env.json`.

Página inicial vazia: ative o tema e verifique `Aparência -> Editor -> Templates -> Página inicial`.

Menu não navega: confira se o item do menu aponta para a âncora correta, como `#avaliacao-apps`.

Imagem não carrega: confirme se o arquivo existe na Biblioteca de mídia ou na pasta `assets/images` do tema.

Docker não inicia: abra o Docker Desktop, aguarde concluir a inicialização e rode `npm run wp:start` novamente.

Porta ocupada: pare outro serviço usando `8888` ou ajuste a configuração do `wp-env`.

wp-env não encontrado: rode `npm install` antes dos scripts.

Mapa não aparece: confirme se o plugin está ativo e se o bloco ou shortcode foi inserido dentro de `tda-map-slot`.

URL WMS bloqueada por CORS: solicite liberação no servidor geográfico ou use uma configuração de proxy adequada.

Camada com CRS incorreto: confirme o CRS informado pelo servidor geográfico e ajuste o shortcode ou bloco do plugin.

Alterações não aparecem: limpe cache do navegador, do WordPress e de plugins de cache.

## Arquivos principais

- Tema: `territorios-da-agua/`
- Documentação de fontes: `docs/mapa-de-fontes.md`
- Configuração local: `.wp-env.json`
- Scripts locais: `package.json`
- ZIP instalável: `output/territorios-da-agua.zip`
