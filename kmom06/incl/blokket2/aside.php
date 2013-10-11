<nav class="vmenu">

  <ul <?php if(isset($p)) echo "id='".strip_tags($p)."'"; ?>>
    <li><h4>Blokket2 administration</h4>
      <ul>
        <li id="blokket2-init"><a href="?p=init">Initiera</a>
        <li id="blokket2-update"><a href="?p=update">Uppdatera annons</a>
        <li id="blokket2-add"><a href="?p=create">Lägg till annons</a>
        <li id="blokket2-delete"><a href="?p=delete">Ta bort annons</a>
        <li id="blokket2-read"><a href="?p=read">Visa annons</a>
        <li id="blokket2-readall"><a href="?p=read-all">Visa alla annonser</a>
      </ul>
  </ul>

</nav>
