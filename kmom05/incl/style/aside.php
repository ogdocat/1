<nav class="vmenu">

  <ul <?php if(isset($p)) echo "id='".strip_tags($p)."'"; ?>>
    <li><h4>Välj sidans CSS</h4>
      <ul>
        <li id="choose-stylesheet-"><a href="?p=choose-stylesheet">Välj stylesheet</a>
        <li id="edit-stylesheet-"><a href="?p=edit-stylesheet">Skapa stylesheet</a>
      </ul>
  </ul>
</nav>