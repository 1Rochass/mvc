{% extends "index.php" %}
{% block body %}
	{{ parent() }}
	{% block update_article %}
		<div id="create-article-form">
			<form action="/admin/Article/updateArticle" method="POST">

				<div class="form-group">
					<label for="article_title">Title</label>
					<input type="text" name="article_title" value="{{ article.article_title }}" class="form-control">
				</div>
				<div class="form-group">
					<label for="article_text">Text</label>
					<textarea  name="article_text" id="article_text">{{ article.article_text }}</textarea>
				</div>
				<input type="hidden" name="id" value="{{ article.id }}">
				<button name="updateArticle" class="btn btn-default">Update</button>
			</form>
			{{ message }}
		</div>
	{% endblock update_article %}
{% endblock body%}
