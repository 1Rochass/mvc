{% extends 'index.php' %}

{% block body %}
	{{ parent() }}
	<div id="show-articles">
		{% block article %}
			{% for article in articles %}
				<div class="article">
					<div class="article_title">
						{{ article.article_title }}
					</div>
					<div class="article_text">
						{{ article.article_text }}
					</div>
					<div class="article_autor">
						{{ article.article_autor }}
					</div>
					<form action="/admin/Article/updateArticle" method="POST">
						<input type="hidden" name="id" value="{{ article.id }}">
						<button name="showArticleForUpdate" class="btn btn-default">Update</button>
					</form>
					<form action="/admin/Article/deleteArticle" method="POST">
						<input type="hidden" name="id" value="{{ article.id }}">
						<button name="deleteArticle" class="btn btn-default">Delate</button>
					</form>			
				</div>
			{% endfor %}

			<form action="/admin/Article/readArticle" method="GET">
			{% for countPage in countPages %}
				<button name="pageNumber" value="{{countPage}}" class="btn btn-default">{{countPage}}</button>
			{% endfor %}
			</form>
		{% endblock article %}
	</div>
{% endblock body %}
