<nav class="vmenu">

  <ul <?php if(isset($p)) echo "id='".strip_tags($p)."'"; ?>>
    <li><h4>Kmom02</h4>
      <ul>
        <li id="pagestyle"><a href="?p=kmom02-pagestyle">Ändra CSS</a>
      </ul>
    <li><h4>Kmom03</h4>
      <ul>
        <li id="get"><a href="?p=kmom03-get">Visa <code>$_GET</code></a>
        <li id="getform"><a href="?p=kmom03-getform">getform</a>
        <li id="postform"><a href="?p=kmom03-postform">postform</a>
        <li id="validate"><a href="?p=kmom03-validate">validate</a>
        <li id="server"><a href="?p=kmom03-server">Visa <code>$_SERVER</code></a>
        <li id="session"><a href="?p=kmom03-session">Visa <code>$_SESSION</code></a>
        <li id="sessionchange"><a href="?p=kmom03-sessionchange">sessionchange</a>
        <li id="sessiondestroy"><a href="?p=kmom03-sessiondestroy">sessiondestroy</a>
      </ul>
  </ul>

</nav>
