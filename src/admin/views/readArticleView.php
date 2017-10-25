{%for article in articles%}
{{article.article_title}}
{%endfor%}



<form action="/admin/Article/readArticle" method="GET">
{%for countPage in countPages%}
	<button name="pageNumber" value="{{countPage}}" class="btn btn-default">{{countPage}}</button>
{%endfor%}
</form>

{{test}}
