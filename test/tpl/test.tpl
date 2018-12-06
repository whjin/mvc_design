{section name=article loop=$articleList}
    {$articleList[article].title}
    {$articleList[article].author}
    {$articleList[article].content}
    <br>
{/section}
<hr>
{foreach item=article from=$articleList}
    {$article.title}
    {$article.author}
    {$article.content}
    <br>
    {foreachelse}
    当前没有文章
{/foreach}