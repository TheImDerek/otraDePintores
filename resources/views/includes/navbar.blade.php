@section('navbar')
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
     <b class="w3-bar-item ">Pintores</b> 
    
    <div class="w3-right w3-hide-small">
       <a href="{{action('Minecraft@plantilla')}}" class="w3-bar-item w3-button">Inicio</a>
      <a href="{{action('Minecraft@picasso')}}" class="w3-bar-item w3-button">Pablo Picasso</a>
      <a href="{{action('Minecraft@van')}}" class="w3-bar-item w3-button">Van Gogh</a>
      <a href="{{action('Minecraft@monet')}}" class="w3-bar-item w3-button">Monet</a>
      <a href="{{action('Minecraft@dali')}}" class="w3-bar-item w3-button">Dalí</a>
      <a href="{{action('Minecraft@vinci')}}" class="w3-bar-item w3-button">Da Vinci</a>
    </div>
  </div>
</div>
@show
