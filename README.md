# Detecção de Objetos com IA em PHP

Este projeto demonstra como realizar detecção de objetos em imagens usando PHP e a biblioteca Transformers.

## Descrição

Este script utiliza a biblioteca Transformers para detectar objetos em uma imagem. Ele desenha caixas delimitadoras ao redor dos objetos detectados e os rotula. A imagem resultante é salva como um novo arquivo.

## Requisitos

- PHP 7.4 ou superior
- Biblioteca GD para PHP
- Composer para gerenciamento de dependências

## Instalação

1. Clone este repositório:
   ```
   git clone https://github.com/kage3f/ai-object-detection-php.git
   ```

2. Navegue até o diretório do projeto:
   ```
   cd ai-object-detection-php
   ```

3. Instale as dependências usando o Composer:
   ```
   composer install
   ```

## Uso

1. Certifique-se de ter uma imagem de entrada. O exemplo usa uma imagem do Pexels:
   ```
   https://images.pexels.com/photos/1181438/pexels-photo-1181438.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1
   ```

2. Execute o script:
   ```
   php seu_script.php
   ```

3. O script irá gerar uma imagem de saída (`output_img.jpg`) com os objetos detectados destacados e rotulados.

## Como funciona

1. O script configura a biblioteca Transformers e a configura para usar o driver de imagem GD.
2. Ele cria um pipeline de detecção de objetos.
3. A imagem de entrada é processada através do modelo de detecção de objetos.
4. Para cada objeto detectado, uma caixa delimitadora e um rótulo são desenhados na imagem.
5. A imagem resultante é salva como `output_img.jpg`.

## Resultado

O resultado da detecção de objetos pode ser visto nesta imagem:
![Resultado da Detecção de Objetos](https://i.imgur.com/ENmVtcA.jpeg)

## Personalização

Você pode modificar as seguintes variáveis no script:
- `$inputImagePath`: Caminho para sua imagem de entrada
- `$outputImagePath`: Caminho desejado para a imagem de saída

## Dependências

Este projeto utiliza a seguinte dependência principal:
- [Transformers para PHP](https://codewithkyrian.github.io/transformers-php/getting-started)

## Licença

[Adicione sua licença escolhida aqui]

## Contribuindo

Contribuições são bem-vindas! Sinta-se à vontade para enviar um Pull Request.

## Agradecimentos

- Agradecemos aos criadores da biblioteca Transformers para PHP.
- A imagem usada no exemplo é do [Pexels](https://www.pexels.com/).
