<div class="input-field">
  <input type="text" name="titulo" value="{{isset($registro->titulo)?$registro->titulo:''}}">
  <label>Titulo</label>
</div>
<div class="input-field">
  <input type="text" name="descricao" value="{{isset($registro->descricao)?$registro->descricao:''}}">
  <label>Descricao</label>
</div>
<div class="input-field">
  <input type="number" name="valor" value="{{isset($registro->valor)?$registro->valor:''}}">
  <label>Valor</label>
</div>
<div class="file-field input-field">
  <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>
@if(isset($registro->imagem))
<div class="input-field">
  <img width="200" src="{{ asset($registro->imagem)}}">
</div>
@endif
<div class="input-field">
  <p>
     <label>
       <input type="checkbox" id="publicado" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : ''}} value="true"/>
       <span for="publicado">Publicado</span>
     </label>
   </p>
   <br>
</div>
