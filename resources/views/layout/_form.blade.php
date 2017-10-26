<div class="input-field">
  <input type="text" name="nome" value="{{isset($imagens->nome) ? $imagens->nome : ''}}">
  <label>Nome</label>
</div>
<div class="input-field">
  <input type="text" name="tags" value="{{isset($imagens->tags) ? $imagens->tags : ''}}">
  <label>Tags</label>
</div>
<div class="file-field input-field">
  <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input type="text" class="file-path validate">
  </div>
  @if(isset($imagens->imagem))
<div class="input-field">
  <img width="150" src="{{asset($imagens->imagem)}}" />
</div>
@endif
</div>
