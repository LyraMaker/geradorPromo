<div class="pb-6 has-text-centered">
    <h1 class="is-uppercase title">Formulario para gerar o banner</h1>
    <h2 class="subtitle has-text-danger">Complete o formulário com o que pede!</h2>
</div>
<form action="" method="post" class="block">
    <div class="field">
        <div class="control has-icons-left">
            <input type="text" class="input" name="nome" id="nome" placeholder="Nome do produto" required>
            <span class="icon is-small is-left">
                <i class="fi-xwluxl-shopping-bag-wide"></i></span>
        </div>
    </div>
    <div class="field">
        <div class="control has-icons-left">
            <input type="text" class="input" name="preco-antigo" id="preco-antigo" placeholder="Preço antigo" required>
            <span class="icon is-small is-left">
                <i class="fi-xnsuxl-dollar-solid"></i>
        </div>
    </div>
    <div class="field">
        <div class="control has-icons-left">
            <input type="text" class="input" name="desconto" id="desconto" placeholder="Desconto de ..." required>
            <span class="icon is-small is-left">
                <i class="fi-xwluxl-percent-wide"></i>
        </div>
    </div>
    <div class="field">
        <div class="control has-icons-left">
            <textarea class="textarea is-danger" name="obs" id="obs" placeholder="Observação"></textarea>
            
        </div>
    </div>
    <div class="field is-grouped is-grouped-centered">
        <p class="control">
            <input type="submit" class="button is-primary" value="Gerar oferta">
                    </p>
        <p class="control">
            <a class="button is-warning">
                Limpar
            </a>
        </p>
    </div>
</form>