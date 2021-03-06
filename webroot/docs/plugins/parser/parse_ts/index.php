<?php
    $section = 'parser-plugins';
    $subpage = 'ref-plugin-parse_ts';
    $title = 'Qt Linguist TS Parser Plugin';
    include($_SERVER['DOCUMENT_ROOT'] . '/../inc/documentation-header.php');

    include($_SERVER['DOCUMENT_ROOT'] . '/../inc/version-selector.php');
?>

<h1><?php echo htmlspecialchars($title) ?></h1>

<p>Plugin source location: <code>&lt;serge_root&gt;/lib/Serge/Engine/Plugin/parse_ts.pm</code></p>

<p>This parser extracts strings from <a href="http://doc.qt.io/qt-4.8/linguist-ts-file-format.html">Qt Linguist .TS files</a>. Upon saving the destination file, it also adjusts the language in the top <code>&lt;TS&gt;</code> tag <code>language</code> attribute, and removes <code>type="unfinished"</code> attribute from individual <code>&lt;translation&gt;</code> attributes.</p>

<h2>Code Examples</h2>

<figure>
    <figcaption>example.ts</figcaption>
    <code class="block">&lt;TS version="4.0" language="<em>en_US</em>"&gt;
    &lt;context&gt;
        &lt;name&gt;<span class="context">main</span>&lt;/name&gt;
        &lt;message&gt;
            &lt;source&gt;<span class="string">string</span>&lt;/source&gt;
            &lt;comment&gt;<span class="context">context</span>&lt;/comment&gt;
            &lt;extracomment&gt;<span class="hint">comment</span>&lt;/extracomment&gt;
            &lt;translation <em>type="unfinished"</em>&gt;&lt;/translation&gt;
        &lt;/message&gt;
        &lt;message&gt;
            &lt;source&gt;<span class="string">string</span>&lt;/source&gt;
            &lt;translation <em>type="unfinished"</em>&gt;&lt;/translation&gt;
        &lt;/message&gt;
        ...
    &lt;/context&gt;
&lt;/TS&gt;
</code>
</figure>

<p class="notice">Keep in mind that <code>&lt;comment&gt;</code> tags in this file format actually hold the <em>context</em>, whereas developer <em>comments</em> must be provided in <code>&lt;extracomment&gt;</code> tags.</p>

<h2>Usage</h2>

<figure>
    <figcaption>example-project.serge</figcaption>
    <script language="text/x-config-neat">
jobs
{
    :sample-job
    {
        parser
        {
            plugin               parse_ts
        }

        # other job parameters
        # ...
    }
}
</script>
</figure>

<?php include($_SERVER['DOCUMENT_ROOT'] . '/../inc/documentation-footer.php') ?>