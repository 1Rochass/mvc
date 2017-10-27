{% extends "index.php" %}
{% block body %}
	{{ parent() }}
	{% block create_article %}
		<div id="create-article-form">
			<form action="/admin/Article/createArticle" method="POST">

				<div class="form-group">
					<label for="article_title">Title</label>
					<input type="" name="article_title" class="form-control">
				</div>
				<div class="form-group">
					<label for="article_text">Text</label>
					<textarea  name="article_text" id="article_text"></textarea>
				</div>
				<button name=createArticleSubmit class="btn btn-default">Submit</button>
			</form>
			{{ message }}
		</div>
	{% endblock create_article %}
{% endblock body%}
