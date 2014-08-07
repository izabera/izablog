<!DOCTYPE html>
<html>
  <title>izablog<?php
      if (isset($_GET['p'])) {
        $title = $_GET['p'];
        $title = str_replace("_"," ",$title);
        echo " : ".$title;
      }
    ?></title>
  <xmp theme="spacelab" style="display:none;">
<?php
  if (isset($_GET['p'])) {
    $file = $_GET['p'].".md";
    if (file_exists($file)) include $file;
    else echo "# Not found\n\nThis blog entry is missing.\n\n";
    echo "[Back to home](/) | [Raw code]($file)";
?>
  </xmp>
  <div class="container" id="disqus_thread"></div>
  <script type="text/javascript">
    var disqus_shortname = 'izablog';
    (function() {
      var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
      dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
  </script>
  <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
  <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
<?php
  }
  else {
    echo "Post | Date\n-- | --\n";
    echo `ls -lt | grep md | perl -pe 's/.* (.*?)  (.*) .* (.*)\.md/[\\3](\/?p=\\3) | \\1 \\2/g' | perl -pe 's/_(?=.*\])/ /g'`;
    echo "</xmp>";
  }
?>
  <script src="http://strapdownjs.com/v/0.2/strapdown.js"></script>
</html>

